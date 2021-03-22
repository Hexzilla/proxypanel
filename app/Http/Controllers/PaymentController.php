<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;

/** All Paypal Details class **/
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payee;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;
use Redirect;
use Session;
use URL;

use App\Payments;

class PaymentController extends Controller
{
    private $_api_context;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {        
        /** PayPal api context **/
        $paypal_conf = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential(
            $paypal_conf['client_id'],
            $paypal_conf['secret'])
        );
        $this->_api_context->setConfig($paypal_conf['settings']);
    }

    public function index()
    {
        // return view('paywithpaypal');
    }

    public function payWithpaypal(Request $request)
    {


        $type = $request->rdio;
        $types['monthly'] = 175;
        $types['weekly'] = 75;
        $types['daily'] = 20;
        $types['hour'] = 10;
        $types['test'] = 0.01;

        $price = $types[$type];
        // $price = 0;

        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $item_1 = new Item();

        $item_1->setName('proxy') /** item name **/
            ->setCurrency('USD')
            ->setQuantity(1)
            ->setPrice($price); /** unit price **/

        $item_list = new ItemList();
        $item_list->setItems(array($item_1));

        $amount = new Amount();
        $amount->setCurrency('USD')
            ->setTotal($price);

        //set payee
        $payee = new Payee();
        $payee->setEmail("vpnrgr@gmail.com");

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($item_list)
            ->setDescription($type.' | $'.$types['hour'])
            ->setPayee($payee)
            ->setInvoiceNumber(uniqid());

        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(URL::to('status')) /** Specify return URL **/
            ->setCancelUrl(URL::to('cancel'));

        $payment = new Payment();
        $payment->setIntent('SALE')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));
        // dd($payment);exit;
        // dd($payment->create($this->_api_context));exit;

        try {

            $payment->create($this->_api_context);

        } catch (\PayPal\Exception\PPConnectionException $ex) {

            if (\Config::get('app.debug')) {

                // \Session::put('error', 'Connection timeout');
                // return Redirect::to('/');
                return redirect('/dashboard')->with('paymentFailed', 'Connection timeout');

            } else {

                // \Session::put('error', 'Some error occur, sorry for inconvenient');
                // return Redirect::to('/');
                return redirect('/dashboard')->with('paymentFailed', 'Some error occur, sorry for inconvenient');
            }

        }

        foreach ($payment->getLinks() as $link) {

            if ($link->getRel() == 'approval_url') {

                $redirect_url = $link->getHref();
                break;

            }

        }

        /** add payment ID to session **/
        Session::put('paypal_payment_id', $payment->getId());

        if (isset($redirect_url)) {

            /** redirect to paypal **/
            return Redirect::away($redirect_url);

        }

        // \Session::put('error', 'Unknown error occurred');
        // return Redirect::to('/');
        return redirect('/dashboard')->with('paymentFailed', 'Unknown error occurred');
    }

    public function getPaymentStatus(Request $request)
    {
        /** Get the payment ID before session clear **/
        $payment_id = Session::get('paypal_payment_id');

        /** clear the session payment ID **/
        Session::forget('paypal_payment_id');
        
        // if (empty(Input::get('PayerID')) || empty(Input::get('token'))) {
        if (empty($request->PayerID || $request->token)) {

            // \Session::put('error', 'Payment failed');
            // return Redirect::to('/');
            return redirect('/dashboard')->with('paymentFailed', 'Payment failed');
        }

        $payment = Payment::get($payment_id, $this->_api_context);
        $execution = new PaymentExecution();
        // $execution->setPayerId(Input::get('PayerID'));
        $execution->setPayerId($request->PayerID);

        /**Execute the payment **/
        $result = $payment->execute($execution, $this->_api_context);

        if ($result->getState() == 'approved') {

            // \Session::put('success', 'Payment success');
            // return Redirect::to('/');
            return redirect('/dashboard')->with('paymentSuccess', 'Payment success');

        }

        // \Session::put('error', 'Payment failed');
        // return Redirect::to('/');
        return redirect('/dashboard')->with('paymentFailed', 'Payment failed');
    }

    public function cancel() {
        return redirect('/dashboard')->with('paymentCancel', 'Payment canceled');
    }

    public function notify(Request $request) {
        $pay = new Payments;
        $pay->txn_id = $request->txn_id;
        $pay->item_name = $request->item_name;
        $pay->date = date('Y-m-d H:i:s');
        $pay->currency = $request->mc_currency;
        $pay->payer_email = $request->payer_email;
        $pay->payer_id = $request->payer_id;
        $pay->save();
    }
}
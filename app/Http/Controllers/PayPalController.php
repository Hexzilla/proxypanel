<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;
   
class PayPalController extends Controller
{
    /**
     * Responds with a welcome message with instructions
     *
     * @return \Illuminate\Http\Response
     */
    public function payment(Request $request)
    {
        $type = $request->rdio;
        $id = $request->payId;

        $types['monthly'] = 175;
        $types['weekly'] = 75;
        $types['daily'] = 20;
        $types['hour'] = 10;

        $data = [];
        $data['items'] = [
            [
                'name' => 'proxy',
                'price' => $types[$type],
                'desc'  => $type.' | $'.$types[$type],
                'qty' => 1
            ]
        ];
  
        $data['invoice_id'] = $id;
        $data['invoice_description'] = "Order #{$data['invoice_id']} Invoice";
        $data['return_url'] = route('payment.success');
        $data['cancel_url'] = route('payment.cancel');
        $data['total'] = $types[$type];
  
        $provider = new ExpressCheckout;
  
        $response = $provider->setExpressCheckout($data);
  
        $response = $provider->setExpressCheckout($data, true);
  
        return redirect($response['paypal_link']);
    }
   
    /**
     * Responds with a welcome message with instructions
     *
     * @return \Illuminate\Http\Response
     */
    public function cancel()
    {
        // dd('Your payment is canceled. You can create cancel page here.');
        return redirect('/dashboard')->with('paymentCancel', 'Your payment is canceled');
    }
  
    /**
     * Responds with a welcome message with instructions
     *
     * @return \Illuminate\Http\Response
     */
    public function success(Request $request)
    {
        $provider = new ExpressCheckout;
        $response = $provider->getExpressCheckoutDetails($request->token);
  
        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
            // dd('Your payment was successfully. You can create success page here.');
            return redirect('/dashboard')->with('paymentSuccess', 'Your payment was successfully');
        }
  
        return redirect('/dashboard')->with('paymentFailed', 'Your payment was failed');
    }
}
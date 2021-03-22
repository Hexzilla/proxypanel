<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'payment_history';

    /**
     * The primary key for the model.
     *
     * @var string
     */

    protected $primaryKey = 'id';

     /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    public $timestamps = false;
}

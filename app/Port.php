<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Port extends Model
{
    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection ='mysqlSecondConnection';

     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ports';

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

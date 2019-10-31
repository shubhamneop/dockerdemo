<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Address extends Eloquent
{
    protected  $connection = 'mongodb';
    protected $collection = 'addresses';

    protected $fillable = ['user_id','address','city','zipcode','mobile','state'];
    
    public function useraddress(){
        return $this->belongsTo('App\User','user_id');
    }
}

<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Address extends Eloquent
{
    protected  $connection = 'mongodb';
    protected $collection = 'addresses';
}

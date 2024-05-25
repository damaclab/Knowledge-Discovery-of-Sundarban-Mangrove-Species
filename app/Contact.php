<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $keyType = 'string';
    public $incrementing = false;
    protected $dateFormat = 'd-m-Y H:i:s';

    protected $fillable = [
        'contact_id', 'name', 'email', 'country_code', 'phone', 'subject', 'message'
    ];
}

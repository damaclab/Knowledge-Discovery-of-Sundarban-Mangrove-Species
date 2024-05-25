<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    protected $keyType = 'string';
    public $incrementing = false;
    protected $dateFormat = 'd-m-Y H:i:s';

    protected $fillable = [
        'newsletter_id', 'email'
    ];
}

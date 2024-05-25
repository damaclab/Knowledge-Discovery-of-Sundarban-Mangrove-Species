<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GuestUser extends Model
{
	protected $primaryKey = 'guest_id';
	protected $dateFormat = 'd-m-Y H:i:s';
	protected $keyType = 'string';
    public $incrementing = false;
}

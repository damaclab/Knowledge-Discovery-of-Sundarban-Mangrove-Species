<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
	protected $keyType = 'string';
	public $incrementing = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $fillable = [
		'quotation_id', 'name', 'email', 'country_code', 'phone', 'subject', 'message'
	];
}

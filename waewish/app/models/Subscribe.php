<?php
class Subscribe extends Eloquent{

	protected $table = 'email_master';

	public static $rules = array(
			'email_address' => 'required|email|unique:email_master',
	);

}
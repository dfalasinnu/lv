<?php

class Profile extends Eloquent {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'profile';

	protected $fillable = array('provider', 'user_id');

	public function user() {
		return $this->belongsTo('User');
	}

}

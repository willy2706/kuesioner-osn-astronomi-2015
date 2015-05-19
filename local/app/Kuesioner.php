<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Kuesioner extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'kuesioner';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['username', 'jawaban1', 'jawaban2', 'jawaban3', 'jawaban4', 'jawaban5'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	// protected $hidden = ['password', 'remember_token'];

}

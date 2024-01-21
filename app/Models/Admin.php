<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\Reminders\RemindableTrait;

class Admin extends Model {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'admins';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

        public function scopeGetUrlsData($query, $id)
        {
            return $query->select('url', 'status')
                         ->where('id', '=', $id);
        }

}

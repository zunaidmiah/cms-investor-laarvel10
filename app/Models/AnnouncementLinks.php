<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class AnnouncementLinks extends Model
{

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
//	protected $table = 'annc';
	protected $table = 'announcementlinks';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	protected $fillable = [
		'announcementname',
		'announcementurl',
		'announcementtype',
		'status',
	];
}

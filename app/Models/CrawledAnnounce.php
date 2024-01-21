<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class CrawledAnnounce extends Model{

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'crawledannounces';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	protected $fillable = [
			'title',
			'company_name',
			'category',
			'html',
			'date_of_publishing',
			'status',
			'reference_no'
	];


}

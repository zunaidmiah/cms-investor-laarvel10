<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Codesleeve\Stapler\ORM\StaplerableInterface;
use Codesleeve\Stapler\ORM\EloquentTrait;

class Profile extends Model implements StaplerableInterface {

	use  EloquentTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'profiles';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

        protected $fillable = [
                              'active',
							  'name',
                              'date',
                              'position',
                              'image',
							  'type',
                              'content'
                            ];





}

<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Codesleeve\Stapler\ORM\StaplerableInterface;
use Codesleeve\Stapler\ORM\EloquentTrait;

class Application extends Model implements StaplerableInterface {

	use  EloquentTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'applications';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

        protected $fillable = ['vaccancyid','name','dob','gender','education','contactno','email','resume'];
        public function __construct(array $attributes = array()) {
        $this->hasAttachedFile('resume');
        parent::__construct($attributes);
    }



}

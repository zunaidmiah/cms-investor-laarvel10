<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Codesleeve\Stapler\ORM\StaplerableInterface;
use Codesleeve\Stapler\ORM\EloquentTrait;

class Pressrelease extends Model implements StaplerableInterface {

	use  EloquentTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'pressreleases';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

        protected $fillable = ['active','title','date','citation','content','read_more','image','pdf'];
        public function __construct(array $attributes = array()) {
        $this->hasAttachedFile('pdf');
        $this->hasAttachedFile('image', [
            'styles' => [
            'large' => '600x624',
            'thumb' => '200x208'
            ]
        ]);
        parent::__construct($attributes);
    }



}

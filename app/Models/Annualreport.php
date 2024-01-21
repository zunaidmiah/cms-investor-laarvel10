<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Codesleeve\Stapler\ORM\StaplerableInterface;
use Codesleeve\Stapler\ORM\EloquentTrait;

class Annualreport extends Model implements StaplerableInterface {

	use  EloquentTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'annualreports';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

        protected $fillable = ['active','title','date','short_description','image','pdf'];
        public function __construct(array $attributes = array()) {
        $this->hasAttachedFile('pdf');
        $this->hasAttachedFile('image', [
            'styles' => [
            'thumb' => '200x248'
            ]
        ]);
        parent::__construct($attributes);
    }



}

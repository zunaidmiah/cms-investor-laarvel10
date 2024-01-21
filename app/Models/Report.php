<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Codesleeve\Stapler\ORM\StaplerableInterface;
use Codesleeve\Stapler\ORM\EloquentTrait;

class Report extends Model implements StaplerableInterface {

	use  EloquentTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'reports';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

        protected $fillable = ['active','title','content','date','image','type','pdf','pdf2','pdf3','pdf4','pdf5','pdf6','pdf7','pdf8','pdf9','pdf10','pdf11_name','pdf11','pdf12_name','pdf12','pdf13_name','pdf13','pdf14_name','pdf14'];
        public function __construct(array $attributes = array()) {
        $this->hasAttachedFile('pdf');
		$this->hasAttachedFile('pdf2');
		$this->hasAttachedFile('pdf3');
		$this->hasAttachedFile('pdf4');
		$this->hasAttachedFile('pdf5');
		$this->hasAttachedFile('pdf6');
		$this->hasAttachedFile('pdf7');
		$this->hasAttachedFile('pdf8');
		$this->hasAttachedFile('pdf9');
        $this->hasAttachedFile('pdf10');
        $this->hasAttachedFile('pdf11');
        $this->hasAttachedFile('pdf12');
        $this->hasAttachedFile('pdf13');
		$this->hasAttachedFile('pdf14');
		$this->hasAttachedFile('image', [
            'styles' => [
            'large' => '600x400',
            'thumb' => '200x208'
            ]
        ]);
        parent::__construct($attributes);
    }



}

<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Codesleeve\Stapler\ORM\StaplerableInterface;
use Codesleeve\Stapler\ORM\EloquentTrait;

class Processeslisting extends Model implements  StaplerableInterface {

	use EloquentTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'manufacturing_processeslistings';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

        protected $fillable = ['title','short_description','display_order','active','type','bannerimage'];
        public function __construct(array $attributes = array()) {
        $this->hasAttachedFile('bannerimage', [
            'styles' => [
            'medium' => '600x624',
            'thumb' => '100x100'
            ]
        ]);

        parent::__construct($attributes);
    }


}

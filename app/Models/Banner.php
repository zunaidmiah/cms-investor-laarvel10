<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Codesleeve\Stapler\ORM\StaplerableInterface;
use Codesleeve\Stapler\ORM\EloquentTrait;

class Banner extends Model implements StaplerableInterface {

	use  EloquentTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'banners';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

        protected $fillable = ['title','banner_text1','banner_text2','active','bannerimage'];
        public function __construct(array $attributes = array()) {
        $this->hasAttachedFile('bannerimage', [
            'styles' => [
            'large' => '1800x430',
            'thumb' => '100x100'
            ]
        ]);



        parent::__construct($attributes);
    }


}

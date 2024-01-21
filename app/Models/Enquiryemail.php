<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Codesleeve\Stapler\ORM\StaplerableInterface;
use Codesleeve\Stapler\ORM\EloquentTrait;

class Enquiryemail extends Model implements StaplerableInterface {

    use EloquentTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'enquiry_email';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $fillable = ['name','title', 'email', 'cat_id','subcat_id','active'];

    public function category() {
      return $this->belongsTo('Enquirycategory', 'cat_id');
	  //return $this->belongsTo('App\Models\Enquirycategory','cat_id');
    }

    public function subcategory() {
      return $this->belongsTo('Enquirycategory', 'subcat_id');
    }




}

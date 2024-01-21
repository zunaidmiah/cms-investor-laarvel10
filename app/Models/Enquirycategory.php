<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Codesleeve\Stapler\ORM\StaplerableInterface;
use Codesleeve\Stapler\ORM\EloquentTrait;

class Enquirycategory extends Model implements StaplerableInterface {

    use EloquentTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'enquiry_category';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $fillable = ['parent_id', 'title', 'active'];

    public function sub_category() {
        return $this->belongsTo('Enquirycategory', 'parent_id', 'id');
    }

    public function parent_category() {
        return $this->hasOne('Enquirycategory', 'id', 'parent_id');
    }

    public function scat() {
      return $this->hasMany('Enquirycategory', 'parent_id');
    }

}

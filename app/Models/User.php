<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Codesleeve\Stapler\ORM\StaplerableInterface;
use Codesleeve\Stapler\ORM\EloquentTrait;

class User extends Model implements UserInterface, RemindableInterface, StaplerableInterface {

	use UserTrait, RemindableTrait, EloquentTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

        protected $fillable = ['avatar'];
        public function __construct(array $attributes = array()) {
        $this->hasAttachedFile('avatar', [
            'styles' => [
            'medium' => '300x300',
            'thumb' => '100x100'
            ]
        ]);

        parent::__construct($attributes);
    }


}

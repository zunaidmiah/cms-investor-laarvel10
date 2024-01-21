<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\Reminders\RemindableTrait;

class Webscrappingurl extends Model {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'web_scrapping_urls';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

        public function insertUrls($data)
        {

            $this->url = $data['url'];
            $this->link = $data['link'];
            $this->status = $data['status'];
            $this->created_at = time();
            $this->updated_at = time();
            $this->save();
            return $this->id;
        }

        public function getAll($number_of_record)
        {
            return $this::paginate($number_of_record);
//            return $this::all()->paginate(2);
        }

        public function fetchAllUrls()
        {
            return $this::all();
        }

        public function fetchAllActiveUrls()
        {
            return $this::where('status', '1')->get();
            //return $this::all();
        }

        public function getUrl($id)
        {
            return $this::find($id);
        }

        public function updateSingle($data)
        {
            $url = $this::find($data['id']);
            $url->url = $data['url'];
            $url->link = $data['link'];
            $url->status = $data['status'];
            $url->updated_at = time();
            $url->save();
            return $url->id;
        }

        public function deleteUrl($id)
        {
            $url = $this::find($id);
            $url->delete();
            return $url->id;
        }

        public function deleteMultipleUrls($id)
        {
            if(is_string($id) && $id == 'all'){
                $this::truncate();
            }else{
                $this::destroy($id);
            }

            return true;
        }

}

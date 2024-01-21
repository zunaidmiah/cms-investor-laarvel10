<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\Reminders\RemindableTrait;

class Medianews extends Model {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'media_news';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

        public function insertMediaNews($data)
        {
            $this->date = $data['date'];
            $this->title = $data['title'];
            $this->heading = $data['heading'];
            $this->footer = $data['footer'];
            $this->content = $data['content'];
            $this->news_image = $data['news_image'];
            $this->status = $data['status'];
            $this->created_at = date("Y-m-d H:i:s", time());
            $this->updated_at = date("Y-m-d H:i:s", time());
            $this->save();
            return $this->id;
        }

        /*
        public function insertScraper($data)
        {
            $data['created_at'] = date("Y-m-d H:i:s", time());
            $data['updated_at'] = date("Y-m-d H:i:s", time());

            return $this::insertGetId($data);
        }
        */


        public function insertScraper($data)
        {
            /*
            $this->date = $data['date'];
            $this->title = $data['title'];
            $this->link = $data['link'];
            $this->heading = '';
            $this->footer = $data['footer'];
            $this->content = $data['content'];
            $this->news_image = '';
            $this->status = $data['status'];
            $this->created_at = date("Y-m-d H:i:s", time());
            $this->updated_at = date("Y-m-d H:i:s", time());
            $this->save();
            return $this->id;
            */

            $data['date'] = $data['date'];
            $data['title'] = $data['title'];
            $data['link'] = $data['link'];
            $data['heading'] = '';
            $data['footer'] = $data['footer'];
            $data['content'] = $data['content'];
            $data['news_image'] = '';
            $data['status'] = $data['status'];
            $data['created_at'] = date("Y-m-d H:i:s", time());
            $data['updated_at'] = date("Y-m-d H:i:s", time());

            return $this::insertGetId($data);

        }



        public function insertAllScraper($data)
        {
            return $this::insert($data);
        }

        public function getAll($number_of_record = null)
        {
            if(!empty($number_of_record)){
                return $this::paginate($number_of_record);
            }else{
                return $this::all();
            }

            //return $this::all()->paginate(2);
        }

        public function getMediaNews($id)
        {
            return $this::find($id);
        }

        public function getMediaNewsWithConditions($conditions)
        {
            return $this::where(array_keys($conditions)[0], array_values($conditions)[0])->pluck('id');
        }

        public function getMediaNewsBetweenDates($fromTime, $toTime)
        {
            return $this::whereBetween('date', array($fromTime, $toTime))
                    //->orWhere('status', 1)
                    ->where('status', 1)
                    ->orderBy('date', 'desc')
                    ->get();
        }

        public function getNewsFromTitles($titles)
        {
            if(count($titles) == 1){
                return $this::where('title', $titles[0])->get();

            }else{
                $conditionsImplode = implode(',', $titles);
                $query = $this::query();
                foreach ($titles as $value) {
                    //$this->orWhere('title', $value);
                     $query = $query->orWhere('title', $value);
                }
                return $query->get();
                //return $this::whereTitle($titles)->get();

            }

        }

        public function updateSingle($data)
        {
            $mediaNews = $this::find($data['id']);
            $mediaNews->date = $data['date'];
            $mediaNews->title = $data['title'];
            $mediaNews->heading = $data['heading'];
            $mediaNews->footer = $data['footer'];
            $mediaNews->content = $data['content'];
            $mediaNews->news_image = $data['news_image'];
            $mediaNews->status = $data['status'];
            $mediaNews->updated_at = date("Y-m-d H:i:s", time());

            $mediaNews->save();
            return $mediaNews->id;
        }

        public function updateSingleScraper($data)
        {
            $mediaNews = $this::find($data['id']);
            $mediaNews->date = $data['date'];
            $mediaNews->title = $data['title'];
            $mediaNews->link = $data['link'];
            $mediaNews->footer = $data['footer'];
            $mediaNews->content = $data['content'];
            $mediaNews->status = $data['status'];
            $mediaNews->updated_at = date("Y-m-d H:i:s", time());

            $mediaNews->save();
            return $mediaNews->id;
        }

        public function deleteMediaNews($id)
        {
            $mediaNews = $this::find($id);
            $mediaNews->delete();
            return $mediaNews->id;
        }

        public function deleteMultipleMediaNews($id)
        {
            if(is_string($id) && $id == 'all'){
                $this::truncate();
            }else{
                $this::destroy($id);
            }

            return true;
        }

        public function publishSelected($newsIds){

            if($newsIds){
                /*$mediaNews = $this::find($newsIds);
                $mediaNews->status = 1;
                $mediaNews->updated_at = date("Y-m-d H:i:s", time());

                $mediaNews->save();
                */

                $explodedIds = explode(',', $newsIds);

                $conditions['status'] = 1;
                $conditions['updated_at'] = date("Y-m-d H:i:s", time());

                $result = $this::whereIn('id', $explodedIds)->update($conditions);

                if($result){
                    return 1;
                }else{
                    return false;
                }

            }else{
                return false;
            }

        }


        public function getMaxNews(){

            return $this::max('date');

        }

}

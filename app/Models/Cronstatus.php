<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Cronstatus extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'cron_status';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

        public function insertCronRecord($data)
        {
            $this->type = $data['type'];
            $this->mail_sent = 0;
            $this->save();
            return $this->id;
        }

        public function updateCronRecord($data)
        {
            $cronStatus = $this::find($data['id']);
            $cronStatus->mail_sent = $data['mail_sent'];
            $cronStatus->updated_at = date("Y-m-d H:i:s", time());

            $cronStatus->save();
            return $cronStatus->id;
        }


}

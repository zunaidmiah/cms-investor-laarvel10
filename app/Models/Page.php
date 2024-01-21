<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Codesleeve\Stapler\ORM\StaplerableInterface;
use Codesleeve\Stapler\ORM\EloquentTrait;

class Page extends Model implements StaplerableInterface {

	use  EloquentTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'pages';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

        protected $fillable = [
                              'type',
                              'published',
                              'page_title',
                              'left_block1_title',
                              'left_block1_content',
                              'left_block2_title',
                              'left_block2_content',
                              'left_block3_title',
                              'left_block3_content',
                              'right_block1_title',
                              'right_block2_title',
                              'right_block1_content',
                              'right_block2_content',
                              'right_block3_title',
                              'right_block3_content',
                              'left_inner_block',
                              'left_inner_block_title1',
                              'left_inner_block_content1',
                              'left_inner_block_title2',
                              'left_inner_block_content2',
                              'left_inner_block_title3',
                              'left_inner_block_content3',
                              'left_inner_block_title4',
                              'left_inner_block_content4',
                              'left_inner_block_title5',
                              'left_inner_block_content5',
                              'left_inner_block_title6',
                              'left_inner_block_content6',
                              'left_inner_block_title7',
                              'left_inner_block_content7',
                              'left_inner_block_title8',
                              'left_inner_block_content8',
                              'left_inner_block_title9',
                              'left_inner_block_content9',
                              'left_inner_block_title10',
                              'left_inner_block_content10',
                              'left_inner_block_title11',
                              'left_inner_block_content11',
                              'left_inner_block_title12',
                              'left_inner_block_content12',
                              'left_inner_block_title13',
                              'left_inner_block_content13',
                              'left_inner_block_title14',
                              'left_inner_block_content14',
                              'left_inner_block_title15',
                              'left_inner_block_content15',
                              'left_inner_block_title16',
                              'left_inner_block_content16',
                              'left_inner_block_title17',
                              'left_inner_block_content17',
                              'left_inner_block_title18',
                              'left_inner_block_content18',
                              'left_inner_block_title19',
                              'left_inner_block_content19',
                              'left_inner_block_title20',
                              'left_inner_block_title21',
                              'left_inner_block_content20'
                            ];
}

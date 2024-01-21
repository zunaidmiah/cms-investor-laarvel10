<?php
/**
 * Created by PhpStorm.
 * User: Salil Bhattarai
 * Date: 5/8/2015
 * Time: 8:49 PM
 */

$annc = DB::select(DB::raw('
						select * from (
										select * from announcements
										union all
										select * from annc
										) tbl
						group by 	title,
									category,
									date_of_publishing,
									direct_linktoarticle_iframe,
									linktoarticle_on_indexpage,
									short_description,
									html,
									attachment_location_ondisk,
									reference_no,
									company_name,
									status,
									active
						having count(*) = 1
						order by created_at
					'));

/**
 * temporarily enable mass assignments
 * of the model to populate its properties
 */
Announcement::unGuard();

/**
 * create an array to store list of announcements
 * that shall be inserted into the Annc table with
 * a single query
 */
$newAnnouncements = [];

/**
 * create a list of announcements and fill them
 * up in the newAnouncements array
 */
foreach($annc as $row)
{
    $newAnnouncements[] = [
        'title'							=> $row->title,
        'category'						=> $row->category,
        'date_of_publishing'			=> $row->date_of_publishing,
        'direct_linktoarticle_iframe'	=> $row->direct_linktoarticle_iframe,
        'linktoarticle_on_indexpage'	=> $row->linktoarticle_on_indexpage,
        'short_description'				=> $row->short_description,
        'html'							=> $row->html,
        'attachment_location_ondisk'	=> $row->attachment_location_ondisk,
        'reference_no'					=> $row->reference_no,
        'company_name'					=> $row->company_name,
        'status'						=> $row->status,
        'active'						=> $row->active
    ];
}

/**
 * insert the list of unique announcements in the Annc table
 * if there is any data added to the newAnnouncements array
 */
if(count($newAnnouncements) > 0)
    DB::table('annc')->insert($newAnnouncements);

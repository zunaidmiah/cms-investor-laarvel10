<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use App\Models\Career;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class CareersController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $req)
	{

		// get all the nerds
		if(Session::has('vacancy_paginate')){
 			$paginate=Session::get('vacancy_paginate');
		}else{
			$paginate=10;
		}

		$current_page=max(1,$req->input('page'));
		$start=(($current_page-1)*$paginate)+1;
		$end=($start+$paginate)-1;
		$count=Career::count();

		$last_updated = Career::orderBy('updated_at', 'desc')->first();
	        if($last_updated)
                {
                 	$last_updated = date('d M, Y @ g:ia', strtotime($last_updated->updated_at));
                } else {
                 	$last_updated = 'none';
                }



		$careers = Career::paginate($paginate);
                //echo "<pre>";
                //print_r($nerds);
                //echo "</pre>";
		// load the view and pass the nerds
		return View::make('admin.career_vac_edit')
			->with('careers', $careers)
			->with('start',$start)
			->with('end',$end)
			->with('count',$count)
			->with('last_updated',$last_updated);

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create_add_view()
	{
		// load the create form (app/views/nerds/create.blade.php)
                         $careers = Career::all();
		return View::make('admin.add_vacancy')
                        ->with('careers', $careers)
                        ;
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $req)
	{

		// validate
		// read more on validation at http://laravel.com/docs/validation
		$rules = array(
			'status'           => '',
			'jobtitle'         => '',
			'date'             => '',
                        'responsibilities' => '',
                        'requirements'     => '',
                        'footertext'     => ''
		);

		$validator = Validator::make($req->all(), $rules);

		// process the login
		if ($validator->fails()) {
                     Session::flash('error_message', 'The information has been Not saved successfully/ Please try again');
			return redirect()->to('career_vac_edit')
				->withErrors($validator);

		} else {

			if($req->input('status')==1)
			{
				$status=1;
			} else {
				$status=0;
			}

			// store
			$career = new Career;
			$career->jobtitle       = $req->input('job_title');
			$career->status      = $status;
                        $career->date      = $req->input('date');
                        $career->responsibilities  = urldecode($req->input('job_responsibilities'));
                        $career->requirements         = urldecode($req->input('job_requirements'));
                        $career->footertext         = urldecode($req->input('job_footer_content'));

			$career->save();

			// redirect
			Session::flash('message', 'The information has been saved successfully!');
			return redirect()->to('career_vac_edit');
		}
	}



 public function saveCareer(Request $req)
	{

		echo '<pre>';
                print_r($req->all());
                exit;
		// validate
		// read more on validation at http://laravel.com/docs/validation
		$rules = array(
			'status'           => '',
			'jobtitle'         => '',
			'date'             => '',
                        'responsibilities' => '',
                        'requirements'     => '',
                        'footertext'     => ''
		);

		$validator = Validator::make($req->all(), $rules);

		// process the login
		if ($validator->fails()) {
                     Session::flash('error_message', 'The information has been Not saved successfully/ Please try again');
			return redirect()->to('career_vac_edit')
				->withErrors($validator);

		} else {

			if($req->input('status')==1)
			{
				$status=1;
			} else {
				$status=0;
			}

			// store
			$career = new Career;
			$career->jobtitle       = $req->input('job_title');
			$career->status      = $status;
                        $career->date      = $req->input('date');
                        $career->responsibilities  = urldecode($req->input('job_responsibilities'));
                        $career->requirements         = urldecode($req->input('job_requirements'));
                        $career->footertext         = urldecode($req->input('job_footer_content'));

			$career->save();

			// redirect
			Session::flash('message', 'The information has been saved successfully!');
			return redirect()->to('career_vac_edit');
		}
	}
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	 public function edit_career($id)
	{
		// get the nerd
		$career = Career::find($id);

		// show the edit form and pass the nerd
		return View::make('admin.update_vacancy')
			->with('career', $career);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $req, $id)
	{
		// validate
		// read more on validation at http://laravel.com/docs/validation
		$rules = array(
			'jobtitle'       => '',
			'status'      => '',
			'date'      => '',
      'responsibilities'  => '',
      'requirements'         => ''
		);
		$validator = Validator::make($req->all(), $rules);

		// process the login
		if ($validator->fails()) {
			return redirect()->to('career_vac_edit/' . $id . '/edit')
				->withErrors($validator)
				->withInput($req->except('password'));
		} else {
			// store
			$career = Career::find($id);
			$career->jobtitle       = $req->input('job_title');
			$career->status      = $req->input('status');
                        $career->date      = $req->input('date');
                        $career->responsibilities  = urldecode($req->input('job_responsibilities'));
                        $career->requirements         = urldecode($req->input('job_requirements'));
                        $career->footertext         = urldecode($req->input('job_footer_content'));
			$career->save();

			// redirect
			Session::flash('message', 'The information has been updated successfully!');
			return redirect()->to('career_vac_edit');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function dodestroy($id)
	{
		// delete
		$career = Career::find($id);
		$career->delete();

		// redirect
		Session::flash('message', 'The information has been Deleted successfully!');
		return redirect()->to('career_vac_edit');
	}
	public function vacancy_selected_del(Request $req){
		$input=$req->input('checkbox');
		if(empty($input)){
			return redirect()->back()->with('error_message','Please select the items');
		}

		Career::destroy($input);
		return redirect()->back()->with('message','Selected Items deleted Successfully');
	}

	public function vacancy_set_paginate(Request $req){

		$paginate=$req->input('select');
		Session::put('vacancy_paginate',$paginate);
		return redirect()->to('career_vac_edit');

	}




}

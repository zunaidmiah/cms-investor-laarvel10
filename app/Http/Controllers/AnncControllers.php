<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use App\Models\User;
use App\Models\Annc;
use Illuminate\Support\Facades\Auth;

class AnncControllers extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($category)
	{
		// $category = str_replace(' ', '-', $category); // Replaces all spaces with hyphens.

  //  		$category = preg_replace('/[^A-Za-z0-9\-]/', '', $category);
  //
  		$user = User::whereName('Support')->first();
  		Auth::login($user, true);

  		$announcements = Annc::whereCategory($category)->get();

		switch($category)
		{
			case  'Additional Listing Announcement (ALA)' :
				return View::make('annc.announcement', compact('announcements'));
			case  'Change in Audit Committee' :
			break;
			case  'Change in Boardroom' :
			break;
			case  'Change in Principal Officer' :
			break;
			case  'Change of Address' :
			break;
			case  'Change of Registrar' :
			break;
			case  "Changes in Director's Interest Pursuant to Section 135 of the Companies Act. 1965" :
			break;
			case  "Changes in Substantial Shareholder's Interest Pursuant to Form 29B of the Companies Act. 1965" :
				return "this is a test";
			break;
			case  'Document Receipt' :
			break;
			case  'Document Submission' :
			break;
			case  'Entitlements (Notice of Book Closure)' :
				return "testing";
			break;
			case  'Financial Results' :
			break;
			case  'General Announcement' :
			break;
			case  'General Announcement for PLC' :
			break;
			case  'General Meetings' :
			break;
			case  'Initial Public Offering (IPO)' :
			break;
			case  'Listing Circular' :
			break;
			case  'Notice of Interest of Substantial Shareholder Pursuant to Form 29A of the Companies Act. 1965' :
			break;
			case  'PDF Submission' :
			break;
			case  'Timetable for IPO' :
			break;
			case  'Transfer of Listing' :
			break;
		}
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}

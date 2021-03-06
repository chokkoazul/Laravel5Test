<?php namespace Agricola\Http\Controllers\Admin;

use Agricola\Http\Requests;
use Agricola\Http\Controllers\Controller;

use Agricola\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class UsersController extends Controller {

    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::paginate();
        $caca = 'hola';
        //  dd($users);
        return view('admin.users.index',compact('users','caca'));
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.users.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request,Redirector $redirect)
	{
        //dd(Request::all());

        $user = new User($request->all());
        $user->save();

        //redirect()->route('admin.users.index');
        //\Redirect::route('admin.users.index')
        return $redirect->route('admin.users.index');
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

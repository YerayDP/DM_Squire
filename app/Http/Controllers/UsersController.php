<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;



class UsersController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('deleted', '<>', '1')
            ->get();
        
        return view('admin_template');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $user = User::find($id);
        return view('admin.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        user::find($id)->update($request->all());
        return redirect()->action([UsersController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::find($id);
        $users->deleted = '1';
        $users->save();
        return redirect()->action([UsersController::class, 'index']);
    }

    public function activate($id)
    {
        $users = User::find($id);
        $users->actived = '1';
        $users->save();
        return redirect()->action([UsersController::class, 'index']);
    }

    public function deactivate($id)
    {
        $users = User::find($id);
        $users->actived = '0';
        $users->save();
        return redirect()->action([UsersController::class, 'index']);
    }

   
    
    
}
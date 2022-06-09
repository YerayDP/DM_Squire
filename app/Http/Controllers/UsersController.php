<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class UsersController extends Controller
{
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    
   public function index()
   {
    $users = User::where('deleted', '<>', '1')
            ->get();
           
           
    return view('users.index',compact('users'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
    $users = User::all();
    return view('users.create',compact('users'));
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
    
    $this->validate($request,['firstname'=>'required' ,'secondname'=>'required', 
    'email' => 'nullable','password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
    'password_confirmation' => 'min:6']);
    User::create($request->all());
   
    return redirect('users')->with('status', 'User created!');
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
       
    $users = User::find($id);
    return view('users.edit',compact('users'));
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
    
    User::find($id)->update($request->all());

    return redirect('users')->with('status', 'User updated!');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   
    public function destroy($id)
    {
        User::destroy($id);
        return redirect('users')->with('status', 'User deleted!');
    }
    public function activate($id)
    {
        $users = User::find($id);
        $users->actived = '1';
        $users->save();
        return redirect('users')->with('status', 'User activated!');
    }

    public function deactivate($id)
    {
        $users = User::find($id);
        $users->actived = '0';
        $users->save();
        return redirect('users')->with('status', 'User deactivated!');
    }

   
    
    
}

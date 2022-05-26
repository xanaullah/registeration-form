<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Unique;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=User::all();
        return view('registeration' , compact('data'));
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
        // dd($request->all());
        $request->validate([
            'name'=>'required|nullable',
            'email'=>'required|unique:users',
            'mobile'=>'required|unique:users',
            'phone'=>'required|unique:users',
            'address'=>'required',
            'date_of_birth'=>'string',
            'cnic_no'=>'string|nullable',
             'password'=>'required|string|min:8|confirmed',
             'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:1024',
             'cnic_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:1024',
             'utility_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:1024',
      ]);
      if($request->file('image')){
          $image=$request->file('image');
          $extension=$image->getClientOriginalExtension();
          $filname=uniqid() .'.'. $extension;
          $image->move('public/images',$filname);
      }
      if($request->file('cnic_image')){
          $cnic_image=$request->file('cnic_image');
          $extension=$cnic_image->getClientOriginalExtension();
          $filnam=uniqid() .'.'. $extension;
          $cnic_image->move('public/images' , $filnam);
      }
      if($request->file('utility_image')){
          $utility_image=$request->file('utility_image');
          $extension=$utility_image->getClientOriginalExtension();
          $filename=uniqid() .'.'.$extension;
          $utility_image->move('public/images' , $filename);
      }

      $user['name']=$request->name;
      $user['email'] = $request->email;
      $user['mobile'] = $request->mobile;
      $user['phone'] = $request->phone;
      $user['address'] = $request->address;
      $user['date_of_birth'] = $request->date_of_birth;
      $user['cnic_no'] = $request->cnic_no;
      $user['password'] =  Hash::make(($request->password));
      $user['image']=$filname;
      $user['cnci_image']=$filnam;
      $user['utility_image']=$filename;
    //   dd($user);
      User::create($user);
      return back();


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
        $user=User::Find($id);
        return view('update' , ['user'=>$user]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::find($id);
        $user->delete();
        return back();
    }
}

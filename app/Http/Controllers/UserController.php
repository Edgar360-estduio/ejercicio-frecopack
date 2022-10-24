<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $addresses = user::all();

        return view('index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $users= new User;
        // return $request->all();

        $user = User::create([
            'Name' =>  $request->input('Name'),
            'Company' =>  $request->input('Company'),
            'Email' =>  $request->input('Email'),
            'Phone' =>  $request->input('Phone'),
            'Discount' =>  $request->input('Discount'),
            'BusinessName' =>  $request->input('BusinessName'),
            'Cfdi' =>  $request->input('Cfdi'),
            'Rfc' =>  $request->input('Rfc'),
            

        ]);

        // $address = $user->addresses()->create([
        //     'Discount' =>  $request->input('Discount'),
        //     'Discount' =>  $request->input('Discount'),
        //     'Discount' =>  $request->input('Discount'),
        //     'Discount' =>  $request->input('Discount'),
        //     'Discount' =>  $request->input('Discount'),
        //     'Discount' =>  $request->input('Discount'),
        //     'Discount' =>  $request->input('Discount'),
        // ]);
        // $billignsdata = $user->billignsdata()->create([
        //     'Discount' =>  $request->input('Discount'),
        //     'Discount' =>  $request->input('Discount'),
        //     'Discount' =>  $request->input('Discount'),
        //     'Discount' =>  $request->input('Discount'),
        //     'Discount' =>  $request->input('Discount'),
        //     'Discount' =>  $request->input('Discount'),
        //     'Discount' =>  $request->input('Discount'),
        // ]);


        // return $user->IdUser;


        // $users->Name =$request->input('Name');
        // $users->Company =$request->input('Company');
        // $users->Email =$request->input('Email');
        // $users->Phone =$request->input('Phone');
        // $users->Discount =$request->input('Discount');
        // $users->save();
        return to_route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return compact('user');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}

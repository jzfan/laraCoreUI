<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
    	$users = \App\User::paginate(10);
		return view('admin.users_index', compact('users'));
    }

    public function update()
    {
    	return \App\User::where('id', request('id'))->update(['role' => request('role')]);
    }
}

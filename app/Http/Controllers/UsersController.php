<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
   public function index(){
   	$users = [
		'0' => [
			"first_name" => "Kieu",
			"last_name" => "Anh",
			"location" => "Viet Nam"
		],

		'1' => [
			"first_name" => "Hoang",
			"last_name" => "Anh",
			"location" => "Viet Nam"
		]
	];

	return view('admin.users.index', compact('users'));
   }
}

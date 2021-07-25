<?php

namespace App\Controllers;

use App\Models\HomeModel;

use monken\TablesIgniter;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}
}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Templating extends BaseController
{
	public function index()
	{
	$data = [
		'title' => "Blog - Posts"
	];
	//echo view ('layout/header', $data);
	//echo view ('layout/navbar');
    //echo view ('v_post');
    //echo view ('layout/footer');
    return view('view_admin');
	}

}

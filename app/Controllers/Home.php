<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('principal');
	}

	public function solicitud()
	{
		return view('front/solicitud');
	}

	public function admin()
	{
		return view('front/admin');
	}
	public function documentacion()
	{
		return view('front/documentacion');
	}

	public function requisitos()
	{
		return view('front/requisitos');
	}

	public function terminos()
	{
		return view('front/terminos');
	}

	
	//--------------------------------------------------------------------

}

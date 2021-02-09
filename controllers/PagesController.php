<?php

class PagesController
{
	public function home()
	{
		


		return view('index', compact('users'));

	}

	public function contact()
	{
		return view('contact');
	}

	public function about()
	{
		return view('about');
	}
}
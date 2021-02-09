<?php

function dd($val)
{
	echo "<pre>";
		die(var_dump($val));
	echo "</pre>";
}

function view ($view, $data = [])
{
	extract($data);

	return require("views/{$view}.view.php");
}

function redirect($path)
{
	return header("Location: /{$path}");
}

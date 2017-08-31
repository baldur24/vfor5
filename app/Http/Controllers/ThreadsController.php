<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThreadsController extends Controller
{
    public function index()
    {
    	$message = "this is the Threads index.view";
    	return $message;
    }
    public function create()
    {
    	$message = "this is the Threads";
        return $message;
    }
    public function home()
    {
    	return redirect('/home');
    }
    public function show($id)
    {
        $message = "this is the Threads with " . $id;
        return $message;
    }
}
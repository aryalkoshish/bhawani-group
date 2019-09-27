<?php

namespace App\Http\Controllers;
use DB;
use App\Contact;
use App\Client;
use App\Design;
use App\Article;
use Auth;


use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home()
    {
    	$c = DB::table('contacts')->get()->all();
    	$contact = count($c);
    	$cl =DB::table('clients')->get();
    	$client = count($cl);
    	$s = DB::table('designs')->get();
    	$design =count($s);
    	$a=DB::table('articles')->get();
    	$article = count($a);
    	return view('cd-admin.home',compact('contact','client','design','article'));
    }

    public function logout()
    {
    Auth::logout();
    return redirect()->back();
	}


}

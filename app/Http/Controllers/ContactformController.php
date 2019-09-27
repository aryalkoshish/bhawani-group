<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use App\messagereply;
use App\quickreply;

class ContactformController extends Controller
{
    public function contactform(){
    	return view('cd-admin.contact.contactform');
    }

    public function contactstore(){
    	$con = new Contact;

    	$req = $this->valcontact();
        
    	$con['name'] = $req['name'];
    	$con['number'] = $req['phone'];
    	$con['email'] =$req['email'];
    	$con['message'] = $req['message'];
        
    	$con->save();
       
    return redirect()->to('view_contact');
    	

    }

    public function valcontact(){
    	$re = Request()->all();
    	$r = $this->validate(Request(),[
    		'name' =>'required',
    		'phone' => 'required',
    		'email' => 'required',
    		'message' => 'required',
    	]);
    	
    	return ($r);
    }

    public function viewcontact(){
        $contact = DB::table('contacts')->get()->all();
        return view('cd-admin.contact.view_contact',compact('contact'));
    }

    public function composemail($id){
        $deo = DB::table('contacts')->where('id',$id)->get()->first();
        return view('cd-admin.contact.compose_mail',compact('deo'));
    }

 public function viewreplies(){
        $reply = DB::table('messagereplies')->get()->all();
        return view('cd-admin.contact.view_replies',compact('reply'));
    }
    public function storereply(){
        $r= Request()->all();
        
        $d = new messagereply;
        $d['to'] = $r['to'];
        $d['subject'] =$r['subject'];
        $d['message'] =$r['message'];

        Mail::to('test@test.com')->send(new ContactFormMail($r));
        $d->save();
        return redirect()->to('viewmessagereply');
        
    }

    public function storequickreply(){
        $r= Request()->all();
        
        $d = new quickreply;
        $d['to'] = $r['email'];
        $d['subject'] =$r['subject'];
        $d['message'] =$r['message'];

        Mail::to('test@test.com')->send(new quickreply($r));
        $d->save();
        return redirect()->to('home');
        
    }

    // public function viewreplies(){
    //     $reply = DB::table('messagereplies')->get()->all();
    //     return view('cd-admin.contact.view_replies',compact('reply'));
    // }


}

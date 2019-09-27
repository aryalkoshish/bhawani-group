<?php

namespace App\Http\Controllers;
use App\client;
use DB;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function addclient(){
    	return view('cd-admin.clients.add_client');
    }

    public function storeclient(){
   	$ca = new Client;

   	$re = $this->valclient();
   	if(isset($re['image']))
		{
			$file=$re['image'];
			$filename = time().$file->getClientOriginalName();
			$destination = public_path('upload/client');
			$file -> move($destination,$filename);
			$ca->image = $filename;
		}
		$ca->altimage = $re['altimage'];
		$ca->name = $re['name'];
		$ca->info = $re['info'];
		$ca->status = $re['status'];
		$ca->save();
		
		
		return redirect()->to('view_client')->with('success','Design Added');
   }

   	public function valclient(){
		$re= Request()->all();
		$r= Request()->validate([
			'image' => 'required|mimes:png,PNG,jpg,JPEG,JPG,jpeg',
			'altimage' => 'required',
			'name' => 'required',
			'info' => 'required',
			'status' =>'required',
		]);
		return ($r);
	}

	public function viewclient(){
		$client = DB::table('clients')->get()->all();
		return view('cd-admin.clients.view_client',compact('client'));
	}

	public function clientstatus($id){
        $a=[];
        $request = DB::table('clients')->where('id',$id)->get()->first();
        if($request ->status =='active'){
            $a['status'] = 'inactive';
        }
        else
        {
            $a['status'] = 'active';
        }
        
        DB::table('clients')->where('id',$id)->update($a);
        return redirect()->to('view_client')->with('success','Status updated');
    }

    public function delclient($id){
        $test = DB::table('clients')->where('id',$id)->get()->first();
        
    if (file_exists('public/upload/client/'.$test->image)) 
    {
        unlink('public/upload/client/'.$test->image);
    }
    DB::table('clients')->where('id',$id)->delete();
    return redirect()->to('view_client');
    }

    public function showeditclient($id){
       $t = DB::table('clients')->where('id',$id)->get()->first();
        return view('cd-admin.clients.edit_client',compact('t'));
    }

    public function editstore($id)
    {

        $t = Client::where('id',$id)->get()->first();
        $s = $this->edival();

        if(file_exists('public/upload/client'.$t->image))
        {
            unlink('public/upload/client/'.$t->image);
            if (isset($s['image']))
            {
            $file = $s['image'];
            $filename = time().$file->getClientOriginalName();
            $destination = public_path('upload/client');
            $file -> move($destination,$filename);
            $t->image = $filename;
            }
        }        
        $t->info = $s['info'];
        $t->name = $s['name'];
        $t->altimage = $s['altimage'];
       
        $t->save();

        return redirect()->to('view_client');
    }

    public function edival(){
        $re = Request()->all();
        
        $r = Request()->validate([
            'image' => 'mimes:JPG,PNG,JPEG,jpg,jpeg,png',
            'altimage' => 'required',
            'name' => 'required',
            'info' => 'required',
            ]);

        return($r);
    }

    public function showclient($id)
    {
    	$a = DB::table('clients')->where('id',$id)->get()->first();
    	return view('cd-admin.clients.show_client',compact('a'));
    }
}

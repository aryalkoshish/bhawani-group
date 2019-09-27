<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Traits\imagetrait;
use App\Service;
use DB;

class ServiceController extends Controller
{
	// use imagetrait;
	public function addservice(){
		return view('cd-admin.service.show_addservice');
	}
	public function viewservice()
	{
		$service = DB::table('services')->paginate(4);
		return view('cd-admin.service.view_service',compact('service'));
	}

	public function storeservice(){
		$s = new service;
		$req = $this->valservice();
    	// $img=$this->getimage($req['image']);  	
     //    $s['image']=$img;

		if(isset($req['image']))
		{
			$file=$req['image'];
			$filename = time().$file->getClientOriginalName();
			$destination = public_path('upload/service');
			$file -> move($destination,$filename);
			$s['image'] = $filename;
		}

		$s['altimage']=$req['altimage'];
		$s->title =$req['title'];
		$s->description = $req['description'];
		$s->status=$req['status'];
		$s->seotitle=$req['seotitle'];
		$s->seokeyword=$req['seokeyword'];
		$s->seodescription=$req['seodescription'];
		$s->save();
		return redirect()->to('view_service');
	}

	public function valservice(){
		$re= Request()->all();
		$r= Request()->validate([
			'image' => 'required|mimes:png,PNG,jpg,JPEG,JPG,jpeg',
			'altimage' => 'required',
			'title' => 'required',
			'description' => 'required',
			'status' => 'required',
			'seotitle' => 'required',
			'seokeyword' =>'required',
			'seodescription' => 'required',
		]);
		return ($r);
	}



	public function showservice($id){
		$s = DB::table('services')->where('id',$id)->get()->first();
		return view('cd-admin.service.show_service',compact('s'));
	}

	public function delservice($id){
		$e = DB::table('services')->where('id',$id)->get()->first();
		if(file_exists('public/upload/service/'.$e->image)){
			unlink('public/upload/service/'.$e->image);
		}
		DB::table('services')->where('id',$id)->delete();
		return redirect()->to('view_service');
	}

	public function showeditservice($id){
		$s = DB::table('services')->where('id',$id)->get()->first();
		return view('cd-admin.service.edit_service',compact('s'));
	}

	public function editservice($id)
	{
		$s = Service::where('id',$id)->get()->first();
		
		$v = $this->valeditservice();

		if(file_exists('public/upload/service'.$s->image))
		{
			unlink('public/upload/service/'.$s->image);
			if (isset($v['image']))
			{
				$file = $v['image'];
				$filename = time().$file->getClientOriginalName();
				$destination = public_path('upload/service');
				$file -> move($destination,$filename);
				$s->image = $filename;
			}
		}
		$s->altimage=$v['altimage'];
		$s->title = $v['title'];
		$s->description = $v['description'];
		$s->altimage = $v['altimage'];
		$s->seotitle = $v['seotitle'];
		$s->seokeyword = $v['seokeyword'];
		$s->seodescription = $v['seodescription'];

		$s->save();
		return redirect()->to('view_service');
	}


	public function valeditservice()
	{
		$re= Request()->all();

		$r= Request()->validate([
			'image' => 'mimes:png,PNG,jpg,JPEG,JPG,jpeg',
			'altimage' => 'required',
			'title' => 'required',
			'description' => 'required',
			
			'seotitle' => 'required',
			'seokeyword' =>'required',
			'seodescription' => 'required',
		]);
		return ($r);
	}

	public function servicestatus($id){
        $a=[];
        $request = DB::table('services')->where('id',$id)->get()->first();
        if($request ->status =='active'){
            $a['status'] = 'inactive';
        }
        else
        {
            $a['status'] = 'active';
        }
        
        DB::table('services')->where('id',$id)->update($a);
        return redirect()->to('view_service')->with('success','Status updated');
    }
}

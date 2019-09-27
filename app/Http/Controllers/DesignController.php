<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Design;
use DB;
use Carbon\Carbon;
use App\Designtitle;

class DesignController extends Controller
{
    public function getdesign(){
    	return view('cd-admin.design.create_design');
    }

    public function storedesign(){
   	$ca = new Design;

   	$re = $this->valdesign();
   	if(isset($re['image']))
		{
			$file=$re['image'];
			$filename = time().$file->getClientOriginalName();
			$destination = public_path('upload/design');
			$file -> move($destination,$filename);
			$ca->image = $filename;
		}
		$ca->altimage = $re['altimage'];
		$ca->status = $re['status'];
		$ca->save();
		
		return redirect()->to('view_design')->with('success','Design Added');
   }

   	public function valdesign(){
		$re= Request()->all();
		$r= Request()->validate([
			'image' => 'required|mimes:png,PNG,jpg,JPEG,JPG,jpeg',
			'altimage' => 'required',
			'status' =>'required',
		]);
		return ($r);
	}

	public function designstatus($id){
        $a=[];
        $request = DB::table('designs')->where('id',$id)->get()->first();
        if($request ->status =='active'){
            $a['status'] = 'inactive';
        }
        else
        {
            $a['status'] = 'active';
        }
        
        DB::table('designs')->where('id',$id)->update($a);
        return redirect()->to('view_design')->with('success','Status updated');
    }

    public function viewdesign(){
    	$design = DB::table('designs')->paginate(4);
    	return view('cd-admin.design.view_design',compact('design'));
    }

    public function showeditdesign($id){
    	$s = DB::table('designs')->get()->first();
    	// dd($s);
    	return view('cd-admin.design.edit_design',compact('s'));
    }

        public function editdesign($id){
    	$d = Design::where('id',$id)->get()->first();
$v= $this->valeditdesign();
if(file_exists('public/upload/design'.$d->image))
		{
			unlink('public/upload/design/'.$d->image);
			if (isset($v['image']))
			{
				$file = $v['image'];
				$filename = time().$file->getClientOriginalName();
				$destination = public_path('upload/design');
				$file -> move($destination,$filename);
				$d->image = $filename;
			}
		}
		$d->altimage = $v['altimage'];
		$d->save();
		
		return redirect()->to('view_design')->with('success','Design Edited');
    }

    public function showdesign($id){
    	$s = DB::table('designs')->get()->first();
    	// dd($s);
    	return view('cd-admin.design.show_design',compact('s'));
    }

    public function valeditdesign(){
    	$re = Request()->all();
    	$r = Request()->validate([
    		'image' => 'mimes:png,PNG,jpg,JPEG,JPG,jpeg',
			'altimage' => 'required',
    	]);
    	return ($r);
    }

    public function deldesign($id)
    {

    	$e = DB::table('designs')->where('id',$id)->get()->first();
		if(file_exists('public/upload/design/'.$e->image)){
			unlink('public/upload/design/'.$e->image);
		}
		DB::table('designs')->where('id',$id)->delete();
		return redirect()->to('view_design')->with('success','design Deleted');
    }

    public function gettitle(){
    	return view('cd-admin.design.create_title');
    }

    public function storetitle()
    {

    	$data = $this->valtitle();
    	$a = [];
		$a['created_at'] =Carbon::now('Asia/Kathmandu');
		$merge = array_merge($data,$a);

		DB::table('designtitles')->insert($merge);
			
    return redirect()->to('/title_view');	
    }

    
    public function valtitle()
    {
		$re= Request()->all();
		$r= Request()->validate([
			'dtitle' => 'required',
			'description' => 'required',
			'seotitle' => 'required',
			'seokeyword' => 'required',
			'seodescription' =>'required',
			
		]);
		return ($r);
	}

	public function showtitle(){
		$s = DB::table('designtitles')->get()->first();
		return view('cd-admin.design.show_title',compact('s'));
	}

	public function showtitleedit($id){
		$s = DB::table('designtitles')->where('id',$id)->get()->first();
		return view('cd-admin.design.edit_title',compact('s'));
	}

	public function edittitle($id){
		$s= $this->valtitle();
		$a = [];
		$a['updated_at'] =Carbon::now('Asia/Kathmandu');
		$merge = array_merge($s,$a);

		Designtitle::where('id',$id)->update($merge);
		return redirect()->to('/title_view');
	}
}

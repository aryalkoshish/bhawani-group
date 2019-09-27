<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carousel;
use DB;

class CarouselController extends Controller
{
   public function addcarousel(){
   	return view('cd-admin.carousel.create_carousel');
   } 

   public function storecarousel(){
   	$ca = new Carousel;

   	$re = $this->valcarousel();
   	if(isset($re['image']))
		{
			$file=$re['image'];
			$filename = time().$file->getClientOriginalName();
			$destination = public_path('upload/carousel');
			$file -> move($destination,$filename);
			$ca->image = $filename;
		}
		$ca->altimage = $re['altimage'];
		$ca->status = $re['status'];
		$ca->save();

		return redirect()->to('view_carousel');
   }

   	public function valcarousel(){
		$re= Request()->all();
		$r= Request()->validate([
			'image' => 'required|mimes:png,PNG,jpg,JPEG,JPG,jpeg',
			'altimage' => 'required',
			'status' =>'required',
		]);
		return ($r);
	}

	    public function viewcarousel(){
    	$carousel = DB::table('carousels')->paginate(4);
    	return view('cd-admin.carousel.view_carousel',compact('carousel'));
    }

    public function carouselstatus($id){
        $a=[];
        $request = DB::table('carousels')->where('id',$id)->get()->first();
        if($request ->status =='active'){
            $a['status'] = 'inactive';
        }
        else
        {
            $a['status'] = 'active';
        }
        
        DB::table('carousels')->where('id',$id)->update($a);
        return redirect()->to('view_carousel')->with('success','Status updated');
    }
    public function delcarousel($id)
    {

    	$e = DB::table('carousels')->where('id',$id)->get()->first();
		if(file_exists('public/upload/carousel/'.$e->image)){
			unlink('public/upload/carousel/'.$e->image);
		}
		DB::table('carousels')->where('id',$id)->delete();
		return redirect()->to('view_carousel')->with('success','Carousel Deleted');
    }
    public function showeditcarousel($id){
    	$s = DB::table('carousels')->where('id',$id)->get()->first();
    	return view('cd-admin.carousel.edit_carousel',compact('s'));
    }

    public function editcarousel($id){
    	$d = Carousel::where('id',$id)->get()->first();
$v= $this->valeditcarousel();
if(file_exists('public/upload/carousel'.$d->image))
		{
			unlink('public/upload/carousel/'.$d->image);
			if (isset($v['image']))
			{
				$file = $v['image'];
				$filename = time().$file->getClientOriginalName();
				$destination = public_path('upload/service');
				$file -> move($destination,$filename);
				$d->image = $filename;
			}
		}
		$d->altimage = $v['altimage'];
		$d->save();
		
		return redirect()->to('view_carousel')->with('success','Carousel Edited');
    }

    public function valeditcarousel(){
    	$re = Request()->all();
    	$r = Request()->validate([
    		'image' => 'mimes:png,PNG,jpg,JPEG,JPG,jpeg',
			'altimage' => 'required',
    	]);
    	return ($r);
    }

}

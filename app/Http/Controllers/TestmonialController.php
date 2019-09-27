<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\testimonial;
use DB;
use App\Http\Controllers\Controller;

class TestmonialController extends Controller
{
    public function addtestmonial(){
    	return view('cd-admin.testimonials.create_testmonials');
    }

    public function storetestimonial(){
    	$t = new testimonial;
    	$te = $this->valtesti();
    	if(isset($te['image'])){
    		$file = $te['image'];
    		$filename = time().$file->getClientOriginalName();
    		$destination = public_path('upload/testimonial');
    		$file -> move($destination,$filename);
    		$t['image'] = $filename;    		
    	}

    	$t['altimage'] = $te['altimage'];
    	$t['name'] = $te['name'];
    	$t['description']= $te['description'];
    	$t['seotitle'] = $te['seotitle'];
    	$t['keywords'] = $te['keywords'];
    	$t['seodescription'] = $te['seodescription']; 
        $t['status'] = $te['status'];
        $t->save();
        return redirect()->to('viewtestimonials');
    }

    public function viewtestimonial(){
    	$testimonial = DB::table('testimonials')->paginate(4);
    	return view('cd-admin.testimonials.view_testmonials ',compact('testimonial'));
    }

    public function valtesti(){
    	$re = Request()->all();
    	$r = Request()->validate([
    		'image' => 'required|mimes:JPG,PNG,JPEG,jpg,jpeg,png',
    		'altimage' => 'required',
    		'name' => 'required',
    		'description' => 'required',
    		'seotitle' => 'required',
    		'keywords' => 'required',
    		'seodescription' => 'required',
            'status' => 'required',
        ]);
    	return ($r);	
    }

    public function showedit($id){
        $s = DB::table('testimonials')->where('id',$id)->get()->first();
        return view('cd-admin.testimonials.edit_testmonials',compact('s'));
    }

    public function edittestimonial($id)
    {

        $re = $this->editval();
        

        $s = Testimonial::where('id',$id)->get()->first();
        if(file_exists('public/upload/testimonial'.$s->image))
        {
            unlink('public/upload/testimonial/'.$s->image);
            if(isset($re['image']))
            {
                $file = $re['image'];
                $filename = time().$file->getClientOriginalName();
                $dest=public_path('upload/testimonial');
                $file->move($dest,$filename);
                $s->image = $filename;
            }
            $s->name = $re['name'];
            $s->altimage = $re['altimage'];
            $s->description = $re['description'];
            $s->seotitle = $re['seotitle'];
            $s->keywords = $re['keywords'];
            $s->seodescription = $re['description'];
            $s->save();
            return redirect()->to('viewtestimonials');
        }
    }

    public function editval(){
        $request = request()->all();
        $t = $this->validate(Request(),[
            'image' => 'required',
            'altimage' => 'required',
            'name' =>'required',
            'description' => 'required',
            'seotitle' => 'required',
            'keywords' => 'required',
            'seodescription' => 'required',
            
        ]);
        return($t);
    }

    public function deletetesti($id){
        $test = DB::table('testimonials')->where('id',$id)->get()->first();
        
        if (file_exists('public/upload/testimonial/'.$test->image)) 
        {
            unlink('public/upload/testimonial/'.$test->image);
        }
        DB::table('testimonials')->where('id',$id)->delete();
        return redirect()->to('viewtestimonials');
    }

    public function showtestmonial($id){
        $s =  DB::table('testimonials')->where('id',$id)->get()->first();
        return view ('cd-admin.testimonials.show_testmonials',compact('s'));
    }
}


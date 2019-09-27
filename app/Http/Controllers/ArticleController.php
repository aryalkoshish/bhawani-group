<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\article;


class ArticleController extends Controller
{
    
    public function article(){
    	return view('cd-admin.article.create_article');
    }

    public function storearticle(){
    	$a = new article;

    	$re = $this->val();
        

    	if (isset($re['image'])){
    		$file = $re['image'];
    		$filename = time().$file->getClientOriginalName();;
    		$destination = public_path('upload/article');
    		$file -> move($destination,$filename);
    		$a['image'] = $filename;
    		}
    	
    	$a['altimage'] = $re['altimage'];
    	$a['title'] = $re['title'];
    	$a['description'] = $re['description'];
    	$a['seotitle'] = $re['seotitle'];
    	$a['seokeywords'] = $re['keywords'];
    	$a['seodescription'] = $re['seodescription'];
        $a['status'] = $re['status'];
    	$a->save();
        return redirect()->to('viewarticles');
    }

    public function val(){
    	$re = Request()->all();

    	$r = Request()->validate([
    		'image' => 'required|mimes:JPG,PNG,JPEG,jpg,jpeg,png',
    		'altimage' => 'required',
    		'title' => 'required',
    		'description' => 'required',
    		'seotitle' => 'required',
    		'keywords' => 'required',
    		'seodescription' => 'required',
            'status' => 'required',
    	]);

    	return($r);
    }



    public function viewarticle(){
        $article = DB::table('articles')->get()->all();
        return view('cd-admin.article.view_article',compact('article'));
    }



    public function articlestatus($id){
        $a=[];
        $request = DB::table('articles')->where('id',$id)->get()->first();
        if($request ->status =='active'){
            $a['status'] = 'inactive';
        }
        else
        {
            $a['status'] = 'active';
        }
        
        DB::table('articles')->where('id',$id)->update($a);
        return redirect()->to('viewarticles')->with('success','Status updated');
    }

    public function showarticles($id){
    	$a = DB::table('articles')->where('id',$id)->get()->first();
        
    	return view('cd-admin.article.show_article',compact('a'));
    }

    public function delarticle($id){
        $test = DB::table('articles')->where('id',$id)->get()->first();
        
    if (file_exists('public/upload/articles/'.$test->image)) 
    {
        unlink('public/upload/articles/'.$test->image);
    }
    DB::table('articles')->where('id',$id)->delete();
    return redirect()->to('viewarticles');
    }

    public function showedit($id){
       $t = DB::table('articles')->where('id',$id)->get()->first();
        return view('cd-admin.article.edit_article',compact('t'));
    }

    public function editstore($id)
    {

        $t = Article::where('id',$id)->get()->first();
        $s = $this->edival();

        if(file_exists('public/upload/article'.$t->image))
        {
            unlink('public/upload/article/'.$t->image);
            if (isset($s['image']))
            {
            $file = $s['image'];
            $filename = time().$file->getClientOriginalName();;
            $destination = public_path('upload/article');
            $file -> move($destination,$filename);
            $t->image = $filename;
            }
        }        
        $t->title = $s['title'];
        $t->description = $s['description'];
        $t->altimage = $s['altimage'];
        $t->seotitle = $s['seotitle'];
        $t->seokeywords = $s['keywords'];
        $t->seodescription = $s['seodescription'];

        $t->save();
        return redirect()->to('viewarticles');
    }

        public function edival(){
        $re = Request()->all();
        
        $r = Request()->validate([
            'image' => 'mimes:JPG,PNG,JPEG,jpg,jpeg,png',
            'altimage' => 'required',
            'title' => 'required',
            'description' => 'required',
            'seotitle' => 'required',
            'keywords' => 'required',
            'seodescription' => 'required',
            
        ]);

        return($r);
    }


}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\about;
use DB;
use App\team;


class AboutController extends Controller
{
	
	public function addabout(){
		return view('cd-admin.about.aboutform');
	}

	public function storeabout(){
		$about =new About;
		$re = $this->aboutval();

		if(isset($re['image'])){
			$file = $re['image'];
			$filename = time().$file->getClientOriginalName();
			$destination=public_path('upload/about');
			$file -> move($destination,$filename);
			$about['image'] = $filename;
		}
		
		$about['description'] = $re['description'];
		$about['stitle1'] = $re['stitle1'];
		$about['sdescription1'] = $re['sdescription1'];
		$about['stitle2'] = $re['stitle2'];
		$about['sdescription2'] = $re['sdescription2'];
		$about['stitle3'] = $re['stitle3'];
		$about['sdescription'] = $re['sdescription3'];
		$about->save();
		return redirect()->to('/addabout');
	}

	public function aboutval(){	
		$Request = Request()->all();
		$req=Request()->validate([
			'image' => 'required|mimes:jpg,JPG,jpeg,JPEG,PNG,png',            
			'description' => 'required',                       
			'stitle1' => 'nullable',
			'sdescription1' => 'nullable',
			'stitle2' => 'nullable',
			'sdescription2' => 'nullable',
			'stitle3' => 'nullable',
			'sdescription3' => 'nullable',
		]);
		return($req);
	}

	public function showabout(){
		$d= DB::table('abouts')->get()->first();
		return view('cd-admin.about.showabout',compact('d'));
	}

	public function showeditabout(){
		$d= DB::table('abouts')->get()->first();
		return view('cd-admin.about.editabout',compact('d'));
	}

	public function editabout($id)
	{		
		$r=Request()->all();
		$abo = About::where('id',$id)->get()->first();
		if(file_exists('public/upload/about'.$abo->image))
		{
			unlink('public/upload/about/'.$abo->image);
			if(isset($r['image']))
			{
				$file = $r['image'];
				$filename = time().$file->getClientOriginalName();
				$destination=public_path('upload/about');
				$file -> move($destination,$filename);
				$abo['image'] = $filename;
			}
		}
		$abo['description'] = $r['description'];
		$abo['stitle1'] = $r['stitle1'];
		$abo['sdescription1'] =$r['sdescription1'];
		$abo['stitle2'] = $r['stitle2'];
		$abo['sdescription2'] = $r['sdescription2'];
		$abo['stitle3'] = $r['stitle3'] ;
		$abo['sdescription'] = $r['sdescription3'];

		$abo->save();
		return redirect()->to('showabout');
	}

	public function teams()
	{
		return view('cd-admin.teams.create_teams');
	}

	public function addteam()
	{
		$Request = $this->valteam();

		$team = new Team;
		if(isset($Request['image']))
		{
			$file = $Request['image'];
			$filename = time().$file->getClientOriginalName();
			$destination=public_path('upload/team');
			$file -> move($destination,$filename);
			$team->image = $filename;
		}
		$team->altimage = $Request['altimage'];
		$team->name = $Request['name'];
		$team->post = $Request['post'];		
		$team->save(); 
		return redirect()->to('showabout');
	}

	public function valteam(){
		$re = Request()->all();
		$t = $this->validate(Request(),[
			'image' => 'required',
			'altimage' => 'required',
			'name' => 'required',
			'post' => 'required',
		]);
		return ($t);
	}

	public function viewteam(){
		$s = DB::table('teams')->get()->all();
		return view('cd-admin.teams.view_teams',compact('s'));
	}

	public function showedit($id)
	{
		$s = DB::table('teams')->where('id',$id)->get()->first();
		return view('cd-admin.teams.show_edit',compact('s'));
	}

	public function editteam($id)
	{
		$d = Team::where('id',$id)->get()->first();
		$r = $this->teameditval();        
		if(file_exists('public/upload/team'.$d->image))
		{
			unlink('public/upload/team/'.$d->image);
			if(isset($r['image']))
			{
				$file = $r['image'];
				$filename = time().$file->getClientOriginalName();
				$dest=public_path('upload/testimonial');
				$file->move($dest,$filename);
				$d->image = $filename;
			}
		}
		$d->altimage = $r['altimage'];
		$d->name = $r['name'];
		$d->post = $r['post'];
		$d->save();
		return redirect()->to('viewteam');
	}

	public function teameditval()
	{
		$r= Request()->all();
		$s= Request()->validate([
			'image' => 'mimes:JPG,jpg,JPEG,jpeg,PNG,png',
			'altimage' => 'required',
			'name' =>'required',
			'post' =>'required',
		]);
		return($s);
	}
	public function showteammem($id)
	{
		$s= DB::table('teams')->where('id',$id)->get()->first();
		return view('cd-admin.teams.show_teams',compact('s'));
	}
	public function deleteteam($id){
		$test = DB::table('teams')->where('id',$id)->get()->first();

		if (file_exists('public/upload/team/'.$test->image)) 
		{
			unlink('public/upload/team/'.$test->image);
		}
		DB::table('teams')->where('id',$id)->delete();
		return redirect()->to('viewteam');
	}
}




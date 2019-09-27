<?

namespace App\Traits;

Trait imagetrait{

	public function getimage(){
		// $request = this->valimg();

		if(isset($req['image'])){
			$file=$req['image'];
			$filename = time().$file->getClientOriginalName();
			$destination = public_path('upload');
			$file -> move($destination,$filename);
			return($filename);
		}
		

	}

	// public function valimg(){
	// 	$req = request()->('image');
	// 	$r = request()->validate([
	// 		'image' => 'required|mimes:jpg,JPG,jpeg,JPEG,PNG,png',
	// 	]);
	// 	return($r);
	// }


}


?>
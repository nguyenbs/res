<?php 
namespace App\Http\Controllers;

use App\Http\Requests;
use Lang;
use Redirect;
use Sentinel;
use View;
use DB;
use Request;
use App\Loainhahang;

class LoainhahangController extends JoshController
{

	public function getdanhsach(){

		$loainhahang = Loainhahang::all();

		return view('admin.loainhahang.danhsach',['loainhahang' => $loainhahang]);

	}

	public function getthem()
	{

		return view('admin.loainhahang.them');
	}

	public function postthem(Request $request)
	{
		echo $request->ten;
	}

	public function getsua($idlnh)
	{
		  $loainhahang = DB:: table('loainhahang')->where('idlnh',$idlnh)->get();
		  
		return view('admin.loainhahang.sua',['loainhahang'=>$loainhahang]);

	}

	public function postsua(Request $request,$idlnh)
	{

	}

	public function getxoa($idlnh)
	{

	}

	public function postxoa($idlnh)
	{

	}

}
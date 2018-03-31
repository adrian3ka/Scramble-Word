<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Gamelog;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
	 public function __construct()
    {
		
        $this->middleware('auth');
		$this->middleware('admin')->except('mylog');
		
    }
	 protected function index()
    {
        //
		$user_list = User::orderBy('id')->paginate(5);
		$user_count = User::all()->count();
		$level = '';
		return view('user/index',compact('user_list','user_count','level'));
    }
	protected function show(User $user){
		$gamelog_list = $user->gamelogs()->paginate(5);
		$gamelog_count = $user->gamelogs->count();
		return view('user.show',compact('user','gamelog_list','gamelog_count'));
	}
	public function mylog(){
		$user = Auth::user();
		$gamelog_list = $user->gamelogs()->paginate(5);
		$gamelog_count = $user->gamelogs->count();
		return view('user.mylog',compact('gamelog_list','gamelog_count'));
	}
	public function alllog(){
		$gamelog_list = Gamelog::paginate(5);
		$gamelog_count = Gamelog::all()->count();
		return view('user.allLog',compact('gamelog_list','gamelog_count'));
	}
	public function cari(Request $request){
		$name = $request->input('name');
		$level = $request->input('level');
		if($request->input('name') != ''){
			$query = User::where('name',
									 'LIKE',
									 '%'.$request->input('name'). '%');
			(!empty($level)) ? $query
			->where('level','=', $level) : '';
			
			$user_list = $query->paginate(5);
			$user_count = $user_list->total();		
			$pagination = $user_list->appends(['name' => $name]);
			$pagination = (!empty($level))? $user_list->appends(['level' => $level]) : '' ;
			
			return view('user.index',compact('user_list','name','pagination','user_count','level'));
		}else if($request->input('level') != ''){
			$query = User::where('level','=', $level);
			$user_list = $query->paginate(5);
			$user_count = $user_list->total();
			$pagination = $user_list->appends(['level' => $level]);
			return view('user.index',compact('user_list','name','pagination','user_count','level'));
		}
		return redirect('user');
	}
}

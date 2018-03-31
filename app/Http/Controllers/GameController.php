<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\GameRequest;

use App\Game;
use App\Gamelog;

use Illuminate\Support\Facades\Auth;

use Session;

class GameController extends Controller
{
    //
	public function __construct(){
		$this->middleware('auth');
		$this->middleware('admin')->only('create','store','all');
	}
	public function index(){
		return view('game.index');
	}
	public function create(){
		return view('game.create');
	}
	public function store(GameRequest $gr){
		 $validator  = $this->validate($gr, [
        ]);
		Game::create($gr->all());
		$log_action = 'Has Added word : ' . $gr->get('word');
		$log = array('id_user' => Auth::user()->id, 'action' => $log_action );
		Gamelog::create($log);
		Session::flash('flash_message','Word "'. $gr->get('word') .'" berhasil ditambahkan.');
		return redirect('game/create');
		//return;
	}
	public function all(){
		$game_list = Game::paginate(5);
		$game_count = Game::all()->count();
		return view('game.all',compact('game_list','game_count'));
	}
	public function cari(Request $request){
		if($request->input('word') != ''){
			$game_list = Game::where('word',
									 'LIKE',
									 '%'.$request->input('word'). '%')
									 ->paginate(5);
			$game_count = $game_list->total();				 
			$word = $request->input('word');
			
			$pagination = $game_list->appends(['word' => $word]);
			$pagination = (!empty($id_kelas))? $query->Kelas($id_kelas) : '' ;
			return view('game.all',compact('game_list','word','pagination','game_count'));
		}
		return redirect('game/all');
	}
}

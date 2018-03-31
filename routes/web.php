<?php
use App\Game;
use App\User;
use App\Gamelog;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('sampledata',function(){
	DB::table('users')->insert([
		[
			'name'			=> 'Admin1',
			'email'			=> 'admin1@gmail.com',
			'password'		=> bcrypt('aaaaaa'),
			'level'			=> 'admin',
			'created_at'	=> '2018-03-30 10:26:47',
			'updated_at'	=> '2018-03-30 10:26:47',
		],
		[
			'name'			=> 'Admin2',
			'email'			=> 'admin2@gmail.com',
			'password'		=> bcrypt('aaaaaa'),
			'level'			=> 'admin',
			'created_at'	=> '2018-03-30 10:26:47',
			'updated_at'	=> '2018-03-30 10:26:47',
		],
		[
			'name'			=> 'gamer1',
			'email'			=> 'gamer1@gmail.com',
			'password'		=> bcrypt('aaaaaa'),
			'level'			=> 'gamer',
			'created_at'	=> '2018-03-30 10:26:47',
			'updated_at'	=> '2018-03-30 10:26:47',
		],
		[
			'name'			=> 'gamer2',
			'email'			=> 'gamer2@gmail.com',
			'password'		=> bcrypt('aaaaaa'),
			'level'			=> 'gamer',
			'created_at'	=> '2018-03-30 10:26:47',
			'updated_at'	=> '2018-03-30 10:26:47',
		],
		[
			'name'			=> 'gamer3',
			'email'			=> 'gamer3@gmail.com',
			'password'		=> bcrypt('aaaaaa'),
			'level'			=> 'gamer',
			'created_at'	=> '2018-03-30 10:26:47',
			'updated_at'	=> '2018-03-30 10:26:47',
		],
		[
			'name'			=> 'gamer4',
			'email'			=> 'gamer4@gmail.com',
			'password'		=> bcrypt('aaaaaa'),
			'level'			=> 'gamer',
			'created_at'	=> '2018-03-30 10:26:47',
			'updated_at'	=> '2018-03-30 10:26:47',
		],
		[
			'name'			=> 'gamer5',
			'email'			=> 'gamer5@gmail.com',
			'password'		=> bcrypt('aaaaaa'),
			'level'			=> 'gamer',
			'created_at'	=> '2018-03-30 10:26:47',
			'updated_at'	=> '2018-03-30 10:26:47',
		],
		[
			'name'			=> 'gamer6',
			'email'			=> 'gamer6@gmail.com',
			'password'		=> bcrypt('aaaaaa'),
			'level'			=> 'gamer',
			'created_at'	=> '2018-03-30 10:26:47',
			'updated_at'	=> '2018-03-30 10:26:47',
		],
		[
			'name'			=> 'player1',
			'email'			=> 'player1@gmail.com',
			'password'		=> bcrypt('aaaaaa'),
			'level'			=> 'gamer',
			'created_at'	=> '2018-03-30 10:26:47',
			'updated_at'	=> '2018-03-30 10:26:47',
		],
		[
			'name'			=> 'player2',
			'email'			=> 'player2@gmail.com',
			'password'		=> bcrypt('aaaaaa'),
			'level'			=> 'gamer',
			'created_at'	=> '2018-03-30 10:26:47',
			'updated_at'	=> '2018-03-30 10:26:47',
		],
		[
			'name'			=> 'Adrian Eka Sanjaya',
			'email'			=> 'eekkaaaadrian@gmail.com@gmail.com',
			'password'		=> bcrypt('aaaaaa'),
			'level'			=> 'admin',
			'created_at'	=> '2018-03-30 10:26:47',
			'updated_at'	=> '2018-03-30 10:26:47',
		],
		
	]);
	DB::table('games')->insert([
		[
			'word'			=> 'Kucing',
			'hint'			=> 'Tergolong binatang berkaki 4 dan mamalia',
			'created_at'	=> '2018-03-30 10:26:47',
			'updated_at'	=> '2018-03-30 10:26:47',
		],
		[
			'word'			=> 'Ayam',
			'hint'			=> 'Menghasilkan sesuatu yang menjadi bahan utama pembuatan roti',
			'created_at'	=> '2018-03-30 10:26:47',
			'updated_at'	=> '2018-03-30 10:26:47',
		],
		[
			'word'			=> 'Bebek',
			'hint'			=> 'memiliki kaki berselaput',
			'created_at'	=> '2018-03-30 10:26:47',
			'updated_at'	=> '2018-03-30 10:26:47',
		],
		[
			'word'			=> 'Kuda',
			'hint'			=> 'Sering dijadikan alat transportasi',
			'created_at'	=> '2018-03-30 10:26:47',
			'updated_at'	=> '2018-03-30 10:26:47',
		],
		[
			'word'			=> 'Botol',
			'hint'			=> 'Tempat untuk membawa air',
			'created_at'	=> '2018-03-30 10:26:47',
			'updated_at'	=> '2018-03-30 10:26:47',
		],
		[
			'word'			=> 'Keranjang',
			'hint'			=> 'Biasanya untuk menletakkan sesuatu seperti pakaian',
			'created_at'	=> '2018-03-30 10:26:47',
			'updated_at'	=> '2018-03-30 10:26:47',
		],
		[
			'word'			=> 'Perhiasan',
			'hint'			=> 'Sesuatu yang berharga',
			'created_at'	=> '2018-03-30 10:26:47',
			'updated_at'	=> '2018-03-30 10:26:47',
		],
		[
			'word'			=> 'Permainan',
			'hint'			=> 'Untuk menghilangkan stress',
			'created_at'	=> '2018-03-30 10:26:47',
			'updated_at'	=> '2018-03-30 10:26:47',
		],
		[
			'word'			=> 'Pelajaran',
			'hint'			=> 'Untuk menambah ilmu pengetauhan',
			'created_at'	=> '2018-03-30 10:26:47',
			'updated_at'	=> '2018-03-30 10:26:47',
		],
		[
			'word'			=> 'Bersenandung',
			'hint'			=> 'Beberapa orang melakukannya untuk menghilangkan stress',
			'created_at'	=> '2018-03-30 10:26:47',
			'updated_at'	=> '2018-03-30 10:26:47',
		],
		[
			'word'			=> 'Pelakor',
			'hint'			=> 'Perusak',
			'created_at'	=> '2018-03-30 10:26:47',
			'updated_at'	=> '2018-03-30 10:26:47',
		],
	]);
	return redirect ('/');
});
Route::get('game/all/cari','GameController@cari');
Route::get('user/cari','UserController@cari');
Route::get('game/all','GameController@all');
Route::resource('game','GameController');
Route::get('mylog','UserController@mylog');
Route::get('user/allLog','UserController@alllog');
Route::resource('user','UserController');
Route::get('/', function () {
    return view('welcomes');
});

Auth::routes();

Route::get('/home', function(){
	return view ('welcomes');
});
Route::get('/getRequest',function(){
	if(Request::ajax()){
		
		$count = Game::count();
		$rand = rand(1,$count);
		$game = Game::find($rand);
		$givenWord = $game->word;
		$wordLength = strlen($givenWord);
		for($i = 0 ; $i < $wordLength ; $i++){
			$tempChar = $givenWord[$i];
			$tempRand = rand(0,$wordLength-1);
			$givenWord[$i] =  $givenWord[$tempRand];
			$givenWord[$tempRand] = $tempChar;
		}
		$data = array('id' => $game->id, 'word' => $givenWord , 'hint' => $game->hint);
		return $data;
	}
});
Route::post('/answer',function(){
	if(Request::ajax()){
		$user = User::find(Request::get('idUser'));
		$game = Game::find(Request::get('idGame'));
		$action = 'Input : ' . Request::get('answer') . ' - Answer : ' . $game->word . ',';
		$result;
		
		if(strcasecmp(Request::get('answer'),$game->word) == 0){
			$action .= ' Got 100';
			$user->score += 100;
			$result = 'Correct, you got 100 points!!';
		}else{
			$action .= ' Minus 100';
			$user->score -= 100;
			$result = 'Oops, minus 100 points!!';
		}
		$user->update();
		$log = array('id_user' => Request::get('idUser'), 'action' => $action );
		Gamelog::create($log);
		$return = array('username' => $user->name , 'score' => $user->score, 'result' => $result);
		return Response::json($return);
	}
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

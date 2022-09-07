<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Player;
use App\Models\Sale;
use Illuminate\Http\Request;

class Sale_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sale = Sale::where('type', 1)->get();
        return view('app', compact('sale'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $temp = 'a';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $code=rand(100000,999999);
//        Crear sala, genera una hexadecimal como identificador de la misma
        $array = [];
        $array["code"] = $code;
        $array["type"] = 1;
        $sale = Sale::create($array);

        $request = $request->all();
        $request["role"] = 1;
        $player = Player::create($request);

        $datos_game = [
            "player_id"=> $player->id,
            "sale_id" => $sale->id,
            "card_id" => "1",
        ];
        $game = Game::create($datos_game);


//        dd($player);
//        echo $player->id;

//        dd($request);
//        return redirect()->route('game');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        $sale = Sale::find($id)->where('type', '')->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function queryPlayer(){
        $players = Game::where();
        return view('game', compact('players'));
    }
}

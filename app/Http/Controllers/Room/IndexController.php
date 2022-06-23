<?php

namespace App\Http\Controllers\Room;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;


class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function roomExist(Request $request)
    {
        $validated = $request->validate([
            'roomNumber' => [ 'required', 'integer', 'digits:4']
        ]);     
        $roomNumber = $validated['roomNumber'];
        //roomNumberをセッションに登録
        $roomData = Room::firstOrCreate(['room_id' => $roomNumber]);
        
        if($roomData['password'] === Null){
            return route('room-register');
        }else{
            return view('layouts.myroom', ['roomNumber' => $roomNumber]);
        }

    }
}

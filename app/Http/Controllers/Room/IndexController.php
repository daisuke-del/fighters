<?php

namespace App\Http\Controllers\Room;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {

        if ($request->has('roomNumber')) {

            $roomNumber = $request->roomNumber;
            //roomNumberをセッションに登録
            $roomData = Room::firstOrCreate(['room_id' => $roomNumber]);

            return $roomData;
            
            /** 
            if(DB::table('rooms')->where('room_id', $roomNumber)->exists()){
                return view('layouts.myroom', ['roomNumber' => $roomNumber]);
            }else{
                return Route('room-register');
            }
            */

        }else{
            redirect('/');
        }
    }
}

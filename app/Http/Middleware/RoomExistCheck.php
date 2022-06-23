<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoomExistCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->has('roomNumber')) {

            $roomNumber = $request->roomNumber;
            
            if(DB::table('rooms')->where('room_id', $roomNumber)->exists()){
                return view('layouts.myroom', ['roomNumber' => $roomNumber]);
            }else{
                return view('top');
            }

            return $next($roomNumber);

        }else{
            redirect('/');
        }
    }
}

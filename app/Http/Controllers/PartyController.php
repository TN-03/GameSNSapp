<?php

namespace App\Http\Controllers;

use App\Models\Looking_for_party;
use Illuminate\Http\Request;

class PartyController extends Controller
{
    public function Partystore(Request $request)
    {
        $request->validate([
            'content' => 'required|string' ,
            'game_id' => 'required|exists:games,id',
        ]);
        
        Looking_for_party::create([
            'content' =>$request->input('content'),
            'game_id' => $request->input('game_id'),
            'user_id' =>auth()->id(),
        ]);

        return redirect()->back()->with('sucess','パーティ募集しました');
    }
}

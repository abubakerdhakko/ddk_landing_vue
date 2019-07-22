<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TokenSale;
class TokensaleController extends Controller
{
    public function getlist(Request $request){
        return json_encode(TokenSale::all());
    }
    public function addlist(Request $request){
        return TokenSale::create([
            'title' => $request->input('title'),
            'amount' => $request->input('amount'),
            'percentage' => $request->input('percentage')
        ]);
    }
    public function deletelist(Request $request){
        return json_encode(TokenSale::findOrFail($request->input('id'))->delete());
    }
    public function updatelist(Request $request){
        $tokensalelist = TokenSale::findOrFail($request->input('id'));
        $tokensalelist->title = $request->input('title');
        $tokensalelist->amount = $request->input('amount');
        $tokensalelist->percentage = $request->input('percentage');
        return json_encode($tokensalelist->save());
    }
}

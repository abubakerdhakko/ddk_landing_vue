<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacts;
class ContactController extends Controller
{
    public function update(Request $request){
        $banner = Contacts::findOrFail(1);
        $banner->facebook = $request->input('facebook');
        $banner->instagram = $request->input('instagram');
        $banner->linkedin = $request->input('linkedin');
        $banner->telegram = $request->input('telegram');
        $banner->reddit = $request->input('reddit');
        $banner->quora = $request->input('quora');
        $banner->stackoverflow = $request->input('stackoverflow');
        return json_encode($banner->save());
    }

    public function get(Request $request){
        return Contacts::where('id',1)->get();
    }
}

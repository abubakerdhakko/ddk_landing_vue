<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\AboutList;
class AboutController extends Controller
{
    public function get(Request $request){
        return json_encode(About::where('id', 1)->get());
    }
    public function updatedescription(Request $request){
        $about = About::findOrFail(1);
        $about->description = $request->input('description');
        return json_encode($about->save());
    }
    public function getlist(Request $request){
        return json_encode(AboutList::all());
    }
    public function addlist(Request $request){
        return AboutList::create([
            'description' => $request->input('new_list')
        ]);
    }
    public function deletelist(Request $request){
        return json_encode(AboutList::findOrFail($request->input('id'))->delete());
    }
    public function updatelist(Request $request){
        $aboutlist = AboutList::findOrFail($request->input('id'));
        $aboutlist->description = $request->input('description');
        return json_encode($aboutlist->save());
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Roadmap;
class RoadmapController extends Controller
{
    public function get(Request $request){
        return json_encode(Roadmap::all());
    }

    public function insert(Request $request){
        if($request->input('icon'))
            $exploded_image = explode(',',$request->input('icon'));
        if($request->input('icon'))
            $imagepath = public_path()."/icons/".str_random().(str_contains($exploded_image[0], 'jpeg') ? '.jpg' : '.png'); 
        if($request->input('icon'))
            file_put_contents($imagepath, base64_decode($exploded_image[1]));

        return Roadmap::create([
            'description' => $request->input('description'),
            'icon' => explode('icons/', $imagepath)[1],
            'date' => $request->input('date')
        ]);
    }

    public function update(Request $request){
        if($request->input('iconimg') != "")
            $exploded_image = explode(',',$request->input('iconimg'));
        if($request->input('iconimg') != "")
            $imagepath = public_path()."/icons/".str_random().(str_contains($exploded_image[0], 'jpeg') ? '.jpg' : '.png'); 
        if($request->input('iconimg') != "")
            file_put_contents($imagepath, base64_decode($exploded_image[1]));

        $roadmap = Roadmap::findOrFail($request->input('id'));
        $roadmap->description = $request->input('description');
        $roadmap->date = $request->input('date');
        if($request->input('iconimg') != ""){
            $roadmap->icon = explode('icons/', $imagepath)[1];
        }
        return json_encode($roadmap->save());
    }

    public function delete(Request $request){
        return json_encode(Roadmap::findOrFail($request->id)->delete());
    }
}

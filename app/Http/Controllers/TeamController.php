<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Orders;

class TeamController extends Controller
{

    public function get(Request $request){
        return json_encode(Team::orderBy('team_order', 'asc')->get());
    }

    public function insert(Request $request){
        if($request->input('image'))
            $exploded_image = explode(',',$request->input('image'));
        if($request->input('image'))
            $imagepath = public_path()."/team/".str_random().(str_contains($exploded_image[0], 'jpeg') ? '.jpg' : '.png');
        if($request->input('image'))
            file_put_contents($imagepath, base64_decode($exploded_image[1]));

        $orders = Orders::findOrFail(1);

        $duplicate_order = Team::where('team_order', $request->input('order'))->where('category', $request->input('category'))->first();
        $category = $request->input('category');
        if(sizeof($duplicate_order) != 0):
            $duplicate_order->team_order = $orders->$category;
            $duplicate_order->save();
        endif;

        $orders -> $category = $orders->$category + 1;
        $orders -> save();

        return Team::create([
            'name' => $request->input('name'),
            'title' => $request->input('title'),
            'image' => explode('team/', $imagepath)[1],
            'link' => $request->input('link'),
            'team_order' => $request->input('order'),
            'category' => $request->input('category'),
            'description' => $request->input('description')
        ]);
    }

    public function update(Request $request){
        if($request->input('image') != "")
            $exploded_image = explode(',',$request->input('image'));
        if($request->input('image') != "")
            $imagepath = public_path()."/team/".str_random().(str_contains($exploded_image[0], 'jpeg') ? '.jpg' : '.png');
        if($request->input('image') != "")
            file_put_contents($imagepath, base64_decode($exploded_image[1]));
        
        $member_duplicate_order = Team::where('team_order', $request->input('team_order'))
                                        ->where('category', $request->input('category'))
                                        ->where('id', '<>', $request->input('id'))->first();
        $team = Team::findOrFail($request->input('id'));
        if($member_duplicate_order){
            $member_duplicate_order->team_order = $team->team_order;
            $member_duplicate_order->save();
        }
        $team->name = $request->input('name');
        $team->title = $request->input('title');
        $team->link = $request->input('link');
        $team->team_order = $request->input('team_order');
        $team->category = $request->input('category');
        $team->description = $request->input('description');
        if($request->input('image') != ""){
            $team->image = explode('team/', $imagepath)[1];
        }
        return json_encode($team->save());
    }

    public function delete(Request $request){
        return json_encode(Team::findOrFail($request->id)->delete());
    }

    public function getorders(Request $request){
        return json_encode(Orders::all());
    }


}

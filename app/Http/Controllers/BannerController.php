<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;

class BannerController extends Controller
{
    public function update(Request $request){
        $banner = Banner::findOrFail(1);
        $banner->heading = $request->input('heading');
        $banner->description = $request->input('description');
        $banner->progress_percent = $request->input('progress_percent');
        return json_encode($banner->save());
    }

    public function get(Request $request){
        return Banner::where('id',1)->get();
    }
}

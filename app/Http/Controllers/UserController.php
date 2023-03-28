<?php

namespace App\Http\Controllers;

use App\Models\Accessory;
use App\Models\Door;
use App\Models\Dyeing;
use App\Models\Knob;
use App\Models\Skin;
use App\Models\WidthDimension;
use App\Models\HeightDimension;
use App\Models\OpeningSide;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function main()
    {
        $dyeings = Dyeing::all();
        $skins = Skin::all();
        $knobs = Knob::all();
        $accessories = Accessory::all();
        $widthDimensions = WidthDimension::all();
        $heightDimensions = HeightDimension::all();
        $openingSides = OpeningSide::all();

        return view('main', [
            'dyeings' => $dyeings,
            'skins' => $skins,
            'knobs' => $knobs,
            'accessories' => $accessories,
            'widthDimensions' => $widthDimensions,
            'heightDimensions' => $heightDimensions,
            'openingSides' => $openingSides
        ]);
    }

    public function doorParams(Request $request)
    {
        
        // echo print_r($request->all(), true);

        $door = Door::create();

        // $data = $request->validate([]);

        $door->image = $request->image;
        $door->dyeing_id = $request->dyeingColor;
        $door->skin_id = $request->skinColor;
        $door->knob_id = $request->knobColor;
        $door->width_dimension_id = $request->doorWidth;
        $door->height_dimension_id = $request->doorHeight;
        $door->opening_side_id = $request->openingSide;
        if(is_array($request->accessories)){
            foreach($request->accessories as $acc) {
                $door->accessories()->attach($acc);
            }
        }       

        $door->save();

        return redirect('/');
    }
}
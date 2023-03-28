<?php

namespace App\Http\Controllers;

use App\Models\Accessory;
use App\Models\Dyeing;
use App\Models\Door;
use App\Models\Knob;
use App\Models\Skin;
use App\Helpers\PDFHelper;
use App\Helpers\TelegramHelper;
use Exception;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }

    public function doors()
    {
        $doors = Door::all();

        return view('doors', ['doors' => $doors]);
    }

    public function getDoorPdf(int $id)
    {
        try {
            $door = Door::find($id);
        }
        catch(Exception $e)
        {
            echo 'Данные по двери с номером ' . $id . ' не найдены';
            return;
        }

        PDFHelper::makeDoorPDF($door);
    }

    public function sendDoorPDFToTelegram(int $id)
    {

        try {
            $door = Door::find($id);
        }
        catch(Exception $e)
        {
            echo 'Данные по двери с номером ' . $id . ' не найдены';
            return;
        }

        $file_path = PDFHelper::makeDoorPDF($door, false);
        
        TelegramHelper::sendFile($file_path);        

    }    

    public function dyeings()
    {
        $dyeings = Dyeing::all();

        return view('dyeings', ['dyeings' => $dyeings]);
    }

    public function dyeingAdd(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'value' => ['required'],
            'price' => ['required', 'numeric']
        ]);

        $dyeing = new Dyeing;
        $dyeing->name = $request->name;
        $dyeing->value = $request->value;
        $dyeing->price = $request->price;

        $dyeing->save();

        return redirect('/dashboard/dyeings');
    }

    public function dyeingDelete(int $id)
    {

    }

    public function dyeingUpdate(Request $request, int $id)
    {

    }

    public function skins()
    {
        $skins = Skin::all();

        return view('skins', ['skins' => $skins]);
    }

    public function skinAdd(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'value' => ['required'],
            'price' => ['required', 'numeric']
        ]);

        $skin = new Skin;
        $skin->name = $request->name;
        $skin->value = $request->value;
        $skin->price = $request->price;

        $skin->save();

        return redirect('/dashboard/skins');
    }

    public function knobs()
    {
        $knobs = Knob::all();

        return view('knobs', ['knobs' => $knobs]);
    }

    public function knobAdd(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'value' => ['required'],
            'price' => ['required', 'numeric']
        ]);

        $knob = new Knob;
        $knob->name = $request->name;
        $knob->value = $request->value;
        $knob->price = $request->price;

        $knob->save();

        return redirect('/dashboard/knobs');
    }

    public function accessories()
    {
        $accessories = Accessory::all();

        return view('accessories', ['accessories' => $accessories]);
    }

    public function accessoryAdd(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'price' => ['required', 'numeric']
        ]);

        $accessory = new Accessory;
        $accessory->name = $request->name;
        $accessory->price = $request->price;

        $accessory->save();

        return redirect('/dashboard/knobs');
    }
}
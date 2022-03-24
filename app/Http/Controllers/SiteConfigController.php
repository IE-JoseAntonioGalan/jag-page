<?php

namespace App\Http\Controllers;

use App\Models\SiteConfig;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SiteConfigController extends Controller
{
    public function show() {
        $data = SiteConfig::all();
        if (count($data) == 0) {
            SiteConfig::create();
            $data = SiteConfig::all();
        }

        return response()->json($data[0]);
    }

    public function update(Request $request) {
        $data = SiteConfig::find(1);
        $input = $request->all();
        if (!empty($request->file('shield'))) {
            if (Storage::exists($data->shield)) {
                Storage::delete($data->shield);
            }

            $file_name = $request->file('shield')->getClientOriginalName();
            $save_file = $request->file('shield')->storeAs('site_info', $file_name);
            $input['shield'] = $save_file;
        }
        $data->update($input);


        return response()->json(['message' =>$data]);
    }
}

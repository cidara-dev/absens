<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Facades\File;

class ConfigController extends Controller
{
    public function index()
    {
        $configs =  DB::table('configs')->first();
        return view('dashboard.configs.index', [
            'configs' => $configs,

        ]);
    }
    public function update(Request $request, Config $configs): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:70',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',

        ]);

        $files = Storage::disk('public')->allFiles('storage/images/');
        Storage::disk('public')->delete($files);
        
        $manager = new ImageManager(new Driver());
        $manager->driver();

        // LOGO
        $destinationPath = public_path('storage/images/');
        $logo = $manager->read($request->file('image'));
        $logoName = 'image' . '.' . 'png';
        $logo->toPng();
        $logo->scaleDown(width: 200);
        $logo->save($destinationPath . $logoName);

        $data = Config::find(1);
        $data->image = $logoName;
        $data->name = $request->name;
        $data->address = $request->address;
        $data->npsn = $request->npsn;
        $data->phone = $request->phone;
        $data->save();

        Storage::disk('public')->put('data.json', json_encode($data));
        return Redirect::route('config.index')->with('status', 'Updated');
    }
}

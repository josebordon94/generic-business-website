<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        //Get the main page data file
        $jsonString = file_get_contents(base_path('resources/json/main-data.json'));
        $main_data = json_decode($jsonString, true);
        $photos = Photo::getRoutes();
        $data = compact('photos', 'main_data');
        return view('home/index',$data);
    }

    public function admin(){
        $photos = Photo::getRoutes();
        $jsonString = file_get_contents(base_path('resources/json/main-data.json'));
        $main_data = json_decode($jsonString, true);
        $data = compact('photos', 'main_data');
        return view('home/admin',$data);
    }

    public function save(Request $request){
        $jsonString = file_get_contents(base_path('resources/json/main-data.json'));
        $main_data = json_decode($jsonString, true);
        $main_data['main-header']['pre-title'] = $request->input('pre-title-1');
        $main_data['main-header']['title'] = $request->input('title-1');
        $main_data['main-header']['content'] = $request->input('content-1');
        $main_data['second-header']['pre-title'] = $request->input('pre-title-2');
        $main_data['second-header']['title'] = $request->input('title-2');
        $main_data['second-header']['content'] = $request->input('content-2');
        //Whatsapp
        $main_data['contacts']['whatsapp']['enabled'] = $request->input('whatsapp-active');
        $main_data['contacts']['whatsapp']['value'] = $request->input('whatsapp-value');
        //Facebook
        $main_data['contacts']['facebook']['enabled'] = $request->input('facebook-active');
        $main_data['contacts']['facebook']['value'] = $request->input('facebook-value');
        //Telephone
        $main_data['contacts']['telephone']['enabled'] = $request->input('telephone-active');
        $main_data['contacts']['telephone']['value'] = $request->input('telephone-value');
        //Address
        $main_data['contacts']['address']['enabled'] = $request->input('address-active');
        $main_data['contacts']['address']['value'] = $request->input('address-value');
        //Instagram
        $main_data['contacts']['instagram']['enabled'] = $request->input('instagram-active');
        $main_data['contacts']['instagram']['value'] = $request->input('instagram-value');

        $newJsonString = json_encode($main_data, JSON_PRETTY_PRINT);
        file_put_contents(base_path('resources/json/main-data.json'), stripslashes($newJsonString));
        return redirect()->route('home.admin');


    }
    public function carouselUploadPost(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('img/intro_carousel/'), $imageName);
        /* Store $imageName name in DATABASE from HERE */
        $photo = new Photo();
        $photo->route = $imageName;
        $photo->name = "Danzas españolas";
        $photo->save();

        return redirect()->route('home.admin');
    }

    public function carouselDelete($id)
    {
        $photo = Photo::find($id);
        unlink(public_path('img\intro_carousel\\' . $photo->route));
        $photo->delete();

        return redirect()->route('home.admin');
    }

}

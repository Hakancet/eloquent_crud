<?php

namespace App\Http\Controllers;

use App\Models\Modul;
use Illuminate\Http\Request;

class ModulController extends Controller
{
    public function index()
    {
        return view('module.index');
    }

    
    public function create()
    {
        return view('module.create');
    }

    
    public function store(Request $request)
    {
        $request -> validate([
            'title' => 'required',
            'subtitle' => 'required',
            'content' => 'required',
            'image' => 'required|image|mimes:jpg,png,svg,gif|max:2048', 
            // burada required yazarak zorunlu ve hangi formatları istediğini 248 kb boyutunda olacağını yazdım
            
        ]);
        
        $data = $request->all(); // zorunlu belgleri data değişkeninde tut

        if($image = $request -> file('image')){  // image değişkenine eşit ise file dosyası oluştur içini yükle
            $destinationPath = 'image/';  // kayıt yolunun adını koy
            $moduleImage = date('YmdHis') . '.' .$image->getClientOriginalExtension(); 
            //kaydedilen fotonun tarihi ile birlikte tutum
            $data['image'] = "$moduleImage"; // data da ki image içerisine gönder
        }

        Modul::create($data); // bütün datayı create fonksiyonu içine at

        return redirect() ->route('module.index'); // .alışırsa index sayfasına
    }

    
    public function show(Modul $modul)
    {
        return view('module.show');
    }

    
    public function edit(Modul $modul)
    {
        return view('module.edit');
    }

    
    public function update(Request $request, Modul $modul)
    {
        //
    }

   
    public function destroy(Modul $modul)
    {
        //
    }
}

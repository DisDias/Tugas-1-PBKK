<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
class FormController extends Controller
{
    public function input()
    {
        return view('formulir');
    }
 
    public function proses(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required|max:30',
            'email' => 'required|email',
            'usia' => 'required|numeric',
            'alamat' => 'required|max:50',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'nilai' => 'required|gte:2.50|lte:99.99'
        ]);

        $filename=time().".".$request->image->extension();
        $request->image->move(public_path('post-images'), $filename);
        $request->image = $filename;

        session()->flash('success','Selamat Anda Telah Terdaftar!');
        return view('proses', ['data' => $request]);//->with('success', 'Selamat Anda Telah Terdaftar!');       
    }
}
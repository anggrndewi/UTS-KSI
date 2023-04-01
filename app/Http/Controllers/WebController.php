<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Website;

use App\Models\Login;

use Illuminate\Support\Facades\Storage; 

class WebController extends Controller
{
    public function Beranda()
    {
        $blogs = Website::all();
        return view('Beranda', ['blogs' => $blogs]); // view ke file
    }

    public function Riwayat()
    {
        $blogs = Website::all();
        return view('Riwayat', ['blogs' => $blogs]); // view ke file
    }

    public function Artikel()
    {
        $blogs = Website::all();
        return view('Artikel', ['blogs' => $blogs]); // view ke file
    }

    public function blogdetails($id) 
    {
        $blogs = Website::find($id);

        return view('blog-details', ['blog' => $blogs]);
    }

    public function berita()
    {
        return view('berita'); // view ke file
    }

    public function store(Request $request) // $request variabel khusus untuk submit
    {
        $this->validate($request, [ // Validasi untuk isi form
            'Gambar' => 'mimes:jpg,jpeg,png|image|max:2048',
        ]);

        if($request->hasFile('Gambar')) {
            $path = $request->file('Gambar')->storeAs('img', time().'-'.$request->txtEditor.'.'.$request->file('Gambar')->extension());
        }else{
            $path="";
        }

        $blog = new Website;
        $blog->Nama_berita = $request->txtEditor;
        $blog->Nama_upload = $request->nama;
        $blog->Waktu = $request->tanggal;
        $blog->Tipe = $request->tipe;
        $blog->Isi_berita = $request->isi_berita;
        $blog->Gambar = $path;
        $blog->save();
        return redirect('Beranda'); // redirect ke alamat web browser

        
    }

}

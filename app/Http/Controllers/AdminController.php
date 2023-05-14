<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Models\Visitor;
use Illuminate\Support\Facades\DB;
use Response;
Use \Carbon\Carbon;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class AdminController extends Controller
{
    public function admindas(){

      $data= DB::table('data')->get();
        return view('admindas',compact(['data']));
    }

    public function tambah(){


        return view ('tambah');
    }

     public function tambahprosess(Request $_request){
            $messages = [
    'required' => ':attribute Tidak Boleh Kosong !!!',
    'min' => ':attribute harus diisi minimal :min karakter ya cuy!!!',
    'max' => ':attribute harus diisi maksimal :max karakter ya cuy!!!',
];
              $this->validate($_request,[
        'nama' => 'required',
        'harga' => 'required',
        'type' => 'required',
        'jenis' => 'required',
        'mesin' => 'required',
        'tahun' => 'required',
        'dimensi' => 'required',
      ],$messages);
            

       $file= $_request->file('file');
        //mengambil nama file
        $nama_file= $file->getClientOriginalName();

         $img = Image::make($file);
        if (Image::make($file)->width() > 300) {
             $img->resize(300, null, function ($constraint) {$constraint->aspectRatio();});
     }
         $img->save(public_path('uploads/') .  $nama_file); 
        //memindahkan file ke folder tujuan
   

           DB::table('data')->insert([
               'gambar' => $nama_file,
               'nama' => $_request->nama,
               'dimensi' => $_request->dimensi,
               'tahun' => $_request->tahun,
               'type' => $_request->type,
               'jenis' => $_request->jenis,
               'mesin'  => $_request->mesin,
               'harga'=> $_request->harga,
           ]);
        return redirect('admindata')->with('success','Data Berhasil Disimpan');
    }

    public function admindata(){
        $data=DB::table('data')->get();
 
        return view('admindata',compact('data'));
    }

    public function hapus($id){
    $post= DB::table('data')->where('id', $id)->delete();;

    return redirect('admindata');
}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GaleriController extends Controller
{
    public function indexgaleri()
    {
        $data['galeris']=DB::table('galeris')->get();
        return view('galeris.indexgaleri',$data);
    }

    public function addgaleri()
    {
        return view('galeris.addgaleri');
    }

    public function storegaleri(Request $request)
    {
        $validatedData = $request->validate([
            'namagaleri' => 'required',
            'keterangan' => 'required',
            'gambar' => 'required',
        ]);
        $file=$request->file('gambar');
        $namefile=date('YmdHis').".".$file->getClientOriginalExtension();
        $file->move('images/galeris',$namefile);

        DB::table('galeris')->insert([
            'namagaleri' => $request->namagaleri,
            'keterangan' => $request->keterangan,
            'gambar' => $namefile,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ]);
        return redirect()->route('galeris');
    }

    public function editgaleri($id)
    {
        $data['galeri']=DB::table('galeris')->where('id',$id)->first();
        return view('galeris.editgaleri',$data);
    }

    public function updategaleri(Request $request,$id)
    {
        $file=$request->file('gambar');
        $namefile=date('YmdHis').".".$file->getClientOriginalExtension();
        $file->move('images/galeris',$namefile);

        DB::table('galeris')->where('id',$id)->update([
            'namagaleri' => $request->namagaleri,
            'keterangan' => $request->keterangan,
            'gambar' => $namefile,
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        return redirect()->route('galeris');
    }

    public function deletegaleri($id)
    {
        DB::table('galeris')->where('id', $id)->delete();
        return response()->json([
            'status'=>200,
            'message'=>'Sukses',
        ]);
    }
}

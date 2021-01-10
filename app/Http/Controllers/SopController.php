<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SopController extends Controller
{
    public function index2()
    {
        $data['menus2']=DB::table('sopbencanas')->get();
        // dd($data);
        return view('menus2.index2',$data);
    }

    public function addsop()
    {
        return view('menus2.addsop');
    }

    public function storesop(Request $request)
    {
        $validatedData = $request->validate([
            'namasopbencana' => 'required',
            'keterangan' => 'required',
            'gambar' => 'required',
        ]);

        $file=$request->file('gambar');
        $namefile=date('YmdHis').".".$file->getClientOriginalExtension();
        $file->move('images/sop',$namefile);

        DB::table('sopbencanas')->insert([
            'namasopbencana' => $request->namasopbencana,
            'keterangan' => $request->keterangan,
            'gambar' => $namefile,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ]);
        return redirect()->route('menus2');
    }

    public function editsop($id)
    {
        $data['sopbencana']=DB::table('sopbencanas')->where('id',$id)->first();
        return view('menus2.editsop',$data);
    }

    public function updatesop(Request $request,$id)
    {
        $file=$request->file('gambar');
        $namefile=date('YmdHis').".".$file->getClientOriginalExtension();
        $file->move('images/sop',$namefile);

        DB::table('sopbencanas')->where('id',$id)->update([
            'namasopbencana' => $request->namasopbencana,
            'keterangan' => $request->keterangan,
            'gambar' => $namefile,
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        return redirect()->route('menus2');
    }

    public function deletesop($id)
    {
        DB::table('sopbencanas')->where('id', $id)->delete();
        return response()->json([
            'status'=>200,
            'message'=>'Sukses',
        ]);
    }
}

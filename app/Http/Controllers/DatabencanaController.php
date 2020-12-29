<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatabencanaController extends Controller
{
    public function index()
    {
        $data['menus']=DB::table('menus')->get();
        return view('menus.index',$data);
    }

    public function add()
    {
        return view('menus.add');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'namabencana' => 'required',
            'korbanbencana' => 'required',
            'kerugianbencana' => 'required',
            'lokasi' => 'required',
            'tanggal' => 'required',
            'durasibencana' => 'required',
            'kecamatan' => 'required',
            'caramitigasi' => 'required',
        ]);

        DB::table('menus')->insert([
            'namabencana' => $request->namabencana,
            'korbanbencana' => $request->korbanbencana,
            'kerugianbencana' => $request->kerugianbencana,
            'lokasi' => $request->lokasi,
            'tanggal' => $request->tanggal,
            'durasibencana' => $request->durasibencana,
            'kecamatan' => $request->kecamatan,
            'caramitigasi' => $request->caramitigasi,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ]);
        return redirect()->route('menus');
    }

    public function edit($id)
    {
        $data['databencana']=DB::table('menus')->where('id',$id)->first();
        return view('menus.edit',$data);
    }

    public function update(Request $request,$id)
    {
        DB::table('menus')->where('id',$id)->update([
            'namabencana' => $request->namabencana,
            'korbanbencana' => $request->korbanbencana,
            'kerugianbencana' => $request->kerugianbencana,
            'lokasi' => $request->lokasi,
            'tanggal' => $request->tanggal,
            'durasibencana' => $request->durasibencana,
            'kecamatan' => $request->kecamatan,
            'caramitigasi' => $request->caramitigasi,
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        return redirect()->route('menus');
    }

    public function delete($id)
    {
        DB::table('menus')->where('id', $id)->delete();
        return response()->json([
            'status'=>200,
            'message'=>'Sukses',
        ]);
    }
}

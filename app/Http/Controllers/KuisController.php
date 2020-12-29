<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KuisController extends Controller
{
    public function indexkuis()
    {
        $data['kuiss']=DB::table('kuiss')->get();
        return view('kuiss.indexkuis',$data);
    }

    public function addkuis()
    {
        return view('kuiss.addkuis');
    }

    public function storekuis(Request $request)
    {
        $validatedData = $request->validate([
            'soal' => 'required',
            'pila' => 'required',
            'pilb' => 'required',
            'pilc' => 'required',
            'pild' => 'required',
            'jawaban' => 'required',
        ]);

        DB::table('kuiss')->insert([
            'soal' => $request->soal,
            'pila' => $request->pila,
            'pilb' => $request->pilb,
            'pilc' => $request->pilc,
            'pild' => $request->pild,
            'jawaban' => $request->jawaban,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ]);
        return redirect()->route('kuiss');
    }

    public function editkuis($id)
    {
        $data['kuis']=DB::table('kuiss')->where('id',$id)->first();
        return view('kuiss.editkuis',$data);
    }

    public function updatekuis(Request $request,$id)
    {
        DB::table('kuiss')->where('id',$id)->update([
            'soal' => $request->soal,
            'pila' => $request->pila,
            'pilb' => $request->pilb,
            'pilc' => $request->pilc,
            'pild' => $request->pild,
            'jawaban' => $request->jawaban,
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        return redirect()->route('kuiss');
    }

    public function deletekuis($id)
    {
        DB::table('kuiss')->where('id', $id)->delete();
        return response()->json([
            'status'=>200,
            'message'=>'Sukses',
        ]);
    }
}

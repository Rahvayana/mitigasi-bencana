<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Image;

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
        // dd($request);
        $validatedData = $request->validate([
            'namagaleri' => 'required',
            'keterangan' => 'required',
            'gambar' => 'required',
        ]);
        $image = $request->file('gambar');
        if(!$request->type=='2'){
            $input['imagename'] = time().'.'.$image->extension();
            $normal = Image::make($image)->resize(512, 512)->encode($image->extension());
            $data=Storage::disk('s3')->put('/images/'.$input['imagename'], (string)$normal, 'public');
        }else{
            $input['imagename'] = time().'.'.$image->extension();
            $data= Storage::disk('s3')->put('/images/'.$input['imagename'],$image, 'public');
        }

        DB::table('galeris')->insert([
            'namagaleri' => $request->namagaleri,
            'keterangan' => $request->keterangan,
            'type' => $request->type,
            'gambar' => "https://lizartku.s3.us-east-2.amazonaws.com/".$data,
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
        $image = $request->file('gambar');
        $input['imagename'] = time().'.'.$image->extension();
        $normal = Image::make($image)->resize(512, 512)->encode($image->extension());
        Storage::disk('s3')->put('/images/'.$input['imagename'], (string)$normal, 'public');

        DB::table('galeris')->where('id',$id)->update([
            'namagaleri' => $request->namagaleri,
            'keterangan' => $request->keterangan,
            'gambar' =>"https://lizartku.s3.us-east-2.amazonaws.com/images/".$input['imagename'],
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

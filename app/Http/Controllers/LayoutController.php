<?php

namespace App\Http\Controllers;

use App\Models\Chart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Models\layout;
use Illuminate\Support\Facades\Auth;

class LayoutController extends Controller
{
    function show(){
        $data['layout'] = layout::all();
        return view('layout',$data);
    }
    function add(){
        $data=[
            'action'=>url('layout/create'),
            'tombol'=>'simpan',
            'layout'=>(object)[
                'id' => '',
            'nama' => '',
            'fotobarang'  => '',
            'harga' => ''

            ],
        ];
        return view('formlayout',$data);

    }

    function hapus($id){
    $layout = layout::Where('id',$id)->first();
    $layout->delete();
    Storage::delete($layout->fotobarang);
        return redirect('layout');
        return redirect('shop');

    }
    function edit($id){
        $data['layout']=layout::find($id);
        $data['action']= url('layout/update').'/'.$data['layout']->id;
        $data['tombol']='update';
        return view('formlayout',$data);

    }
    function update(Request $req){
        $this->validate($req,[
            'id' => 'required|min:3|numeric',
            'nama' => 'required|string|max:30',
            'fotobarang' => 'mimes:jpg,png'
        ]);
        if ($req->file('fotobarang')) {
            $layout = layout::where('id',$req->id)->first();
            Storage::delete($layout->fotobarang);

            $file = $req->file('fotobarang')->store('fotobarang');
        }else {
            $file = DB::raw('fotobarang');
        }
        layout::where('id',$req->id)->update([
            'id' => $req->id,
            'nama' => $req->nama,
            'fotobarang' => $file,
            'harga' => $req->harga

            // 'foto' => $req->file('foto')->store('foto'),

        ]);
        return redirect('layout');

    }
    function create(Request $req){
        $this->validate($req ,[
            'id' => 'required|min:3|numeric',
            'nama' => 'required|string|max:30',
            'fotobarang' => 'mimes:jpg,png'
        ]);


        layout::create([
            'id' => $req->id,
            'nama' => $req->nama,
            'fotobarang' => $req->file('fotobarang')->store('fotobarang'),
            'harga' => $req->harga

        ]);
        return redirect('layout');

    }
    function cari(Request $req){
        $data['layout'] = layout::where('id',$req->cari)
        ->orWhere('nama',$req->cari)->get();
        return view('layout',$data);
    }
    function detail($id){
        $data['layout'] = layout::where('id',$id)->first();
        $data['layouts'] = layout::all();
        return view('char',$data);
    }
    function chart($id, Request $request){
       $layout = layout::where('id',$id)->first();
       $total = $request->jumlah * $layout->harga;
        Chart::create([
            'product_id'=>$id,
            'user_id'=>Auth::user()->id,
            'jumlah'=>$request->jumlah,
            'total'=>$total
        ]);
        return redirect('chart');
    }
    function viewchart(Request $request){
        $data['chart'] = Chart::where('user_id',Auth::user()->id)->get();
         return view('chart',$data);
}
}


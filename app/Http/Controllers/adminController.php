<?php

namespace App\Http\Controllers;

use App\Models\account;
use App\Models\contact;
use App\Models\fitness;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = fitness::orderBy('id', 'asc')->get();
        return view('admin-add', [
            'title' => "Product"
        ])->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin-add', [
            'title' => "Product"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $id  = DB::table('fitness')->max('id') + 1;
        $data = [
            'id'=> $id,
            'nama_suplemen'=>$request->name,
            'harga'=>$request->price,
            'isi'=>$request->isi,
            'protein'=>$request->protein,
            'gula'=>$request->gula,
            'kalori'=>$request->kalori,
            'image' => $request->image,
            'info'=>$request->info
        ];

        
        if ($product = fitness::create($data)) {
            $fileName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/product'), $fileName);

            $product->image = $fileName;
            $product->save();
    
        return redirect()->to('/admin/product')->with('success', 'Sukses Menambahkan data');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin-edit', [
            'title' => "Product"
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $idkalori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = [
            'nama_suplemen'=>$request->name,
            'harga'=>$request->price,
            'isi'=>$request->isi,
            'protein'=>$request->protein,
            'gula'=>$request->sugar,
            'kalori'=>$request->kalori,
            'info'=>$request->info
        ];

        fitness::where('id',$id)->update($data);

        return redirect()->to('/admin/product')->with('success', 'Sukses Mengubah Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $news = fitness::findOrFail($id);
    $image_path = public_path("images/product/".$news->image);

    if(file_exists($image_path)){
        //File::delete($image_path);
        File::delete( $image_path);
        fitness::where('id',$id)->delete();
    }
    $news->delete();
        
        return redirect()->to('/admin/product')->with('success', 'Sukses Menghapus Data!');
    }

    public function admin() {
        $contact = contact::orderBy('id', 'desc')->limit(3)->get();
        

        return view('admin', [
            'title' => "Dashboard"
        ])->with('contact',$contact);
    }

    public function message() {

        $data = contact::orderBy('id', 'asc')->get();
        return view('admin-message', [
            'title' => 'Message'
        ])->with('data', $data);
    }

    public function user() {

        $data_old = account::orderBy('id', 'asc')->get();
        return view('admin-user', [
            'title' => "User"
        ])->with('data', $data_old);
    }

    public function user_update(Request $request, $info) {

        
        $data = [
            'alamat'=>$request->address,
            'email'=>$request->email,
            'nohp'=>$request->nohp
        ];

        account::where('id',$info)->update($data);

        return redirect()->to('/admin/user');
    }
}
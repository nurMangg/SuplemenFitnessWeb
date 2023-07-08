<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class contactController extends Controller
{
    public function index() {
        return view('contact-page', [
            "title" => "Contact"
        ]);
    }

    public function store(Request $request) {
        $id  = DB::table('contact_message')->max('id') + 1;
        $data = [
            'id'=> $id,
            'nama' => $request->name,
            'email'=>$request->email,
            'pesan'=>$request->message
        ];

        if (contact::create($data)) {
            return redirect()->to('/contact')->with('success', 'Sukses Mengirim Pesan!');
        } ;
        
    }
}

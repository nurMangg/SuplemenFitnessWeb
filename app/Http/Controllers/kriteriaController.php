<?php

namespace App\Http\Controllers;

use App\Models\kriteria;
use Illuminate\Http\Request;

class kriteriaController extends Controller
{
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $bobot_harga = $request->data0;
        $bobot_isi = $request->data1;
        $bobot_protein = $request->data2;
        $bobot_gula = $request->data3;
        $bobot_kalori = $request->data4;

        kriteria::where('id_kriteria','1')->update(['bobot' => $bobot_harga]);
        kriteria::where('id_kriteria','2')->update(['bobot' => $bobot_isi]);
        kriteria::where('id_kriteria','3')->update(['bobot' => $bobot_protein]);
        kriteria::where('id_kriteria','4')->update(['bobot' => $bobot_gula]);
        kriteria::where('id_kriteria','5')->update(['bobot' => $bobot_kalori]);

        return redirect()->to('/spk')->with('success', 'Sukses Mengubah Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

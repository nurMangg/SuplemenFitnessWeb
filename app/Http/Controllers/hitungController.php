<?php


namespace App\Http\Controllers;

use App\Models\fitness;
use App\Models\kriteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class hitungController extends Controller
{

    public function show() {
        $data = kriteria::orderBy('id_kriteria', 'asc')->get();
        return view('spk-kriteria', [
            "title" => "Kriteria"
        ])->with('data', $data);
    }
    public function hitung(Request $request){

        $kriteria = kriteria::sum('bobot');
        $bobotKriteriaC1 = DB::table('kriteria')->where('kode' ,'C1')->value('bobot');
        $bobotKriteriaC2 = DB::table('kriteria')->where('kode' ,'C2')->value('bobot');
        $bobotKriteriaC3 = DB::table('kriteria')->where('kode' ,'C3')->value('bobot');
        $bobotKriteriaC4 = DB::table('kriteria')->where('kode' ,'C4')->value('bobot');
        $bobotKriteriaC5 = DB::table('kriteria')->where('kode' ,'C5')->value('bobot');
 
        
        $bobot1 = $bobotKriteriaC1/$kriteria;
        $bobot2 = $bobotKriteriaC2/$kriteria;
        $bobot3 = $bobotKriteriaC3/$kriteria;
        $bobot4 = $bobotKriteriaC4/$kriteria;
        $bobot5 = $bobotKriteriaC5/$kriteria;

        // $bobot1 = 4/$kriteria;
        // $bobot2 = 5/$kriteria;
        // $bobot3 = 4/$kriteria;
        // $bobot4 = 4/$kriteria;
        // $bobot5 = 3/$kriteria;
        $widget1 = [
            'kriterias' => $bobot1,
        ];
        $widget2 = [
            'kriterias' => $bobot2,
        ];
        $widget3 = [
            'kriterias' => $bobot3,
        ];
        $widget4 = [
            'kriterias' => $bobot4,
        ];
        $widget5 = [
            'kriterias' => $bobot5,
        ];


        $produk = fitness::get();
        $data = fitness::orderby('nama_suplemen', 'asc')->get();

        $minC1 = fitness::min('harga');
        $maxC1 = fitness::max('harga');
        $minC2 = fitness::min('isi');
        $maxC2 = fitness::max('isi');
        $minC3 = fitness::min('protein');
        $maxC3 = fitness::max('protein');
        $minC4 = fitness::min('gula');
        $maxC4 = fitness::max('gula');
        $minC5 = fitness::min('kalori');
        $maxC5 = fitness::max('kalori');

        $C1min =[
            'fitness' => $minC1,
        ];
        $C1max =[
            'fitness' => $maxC1,
        ];
        $C2min =[
            'fitness' => $minC2,
        ];
        $C2max =[
            'fitness' => $maxC2,
        ];
        $C3min =[
            'fitness' => $minC3,
        ];
        $C3max =[
            'fitness' => $maxC3,
        ];
        $C4min =[
            'fitness' => $minC4,
        ];
        $C4max =[
            'fitness' => $maxC4,
        ];
        $C5min =[
            'fitness' => $minC5,
        ];
        $C5max =[
            'fitness' => $maxC5,
        ];

        $hasil = $minC1/$maxC1;
        $hasil1 =[
            'fitness' => $hasil,
        ];

        return view('spk-hitung', ['title' => "Perhitungan"],compact('hasil1','data', 'widget1', 'widget2', 'widget3', 'widget4', 'widget5', 'C1min', 'C1max', 'C2min', 'C2max', 'C3min', 'C3max', 'C4min', 'C4max', 'C5min', 'C5max'));
    }


    public function hitung_page(){

        $data_bobot = kriteria::orderBy('id_kriteria', 'asc')->get();

        $kriteria = kriteria::sum('bobot');
        $bobotKriteriaC1 = DB::table('kriteria')->where('kode' ,'C1')->value('bobot');
        $bobotKriteriaC2 = DB::table('kriteria')->where('kode' ,'C2')->value('bobot');
        $bobotKriteriaC3 = DB::table('kriteria')->where('kode' ,'C3')->value('bobot');
        $bobotKriteriaC4 = DB::table('kriteria')->where('kode' ,'C4')->value('bobot');
        $bobotKriteriaC5 = DB::table('kriteria')->where('kode' ,'C5')->value('bobot');
 
        
        $bobot1 = $bobotKriteriaC1/$kriteria;
        $bobot2 = $bobotKriteriaC2/$kriteria;
        $bobot3 = $bobotKriteriaC3/$kriteria;
        $bobot4 = $bobotKriteriaC4/$kriteria;
        $bobot5 = $bobotKriteriaC5/$kriteria;

        // $bobot1 = 4/$kriteria;
        // $bobot2 = 5/$kriteria;
        // $bobot3 = 4/$kriteria;
        // $bobot4 = 4/$kriteria;
        // $bobot5 = 3/$kriteria;
        $widget1 = [
            'kriterias' => $bobot1,
        ];
        $widget2 = [
            'kriterias' => $bobot2,
        ];
        $widget3 = [
            'kriterias' => $bobot3,
        ];
        $widget4 = [
            'kriterias' => $bobot4,
        ];
        $widget5 = [
            'kriterias' => $bobot5,
        ];


        $produk = fitness::get();
        $data = fitness::orderby('nama_suplemen', 'asc')->get();

        $minC1 = fitness::min('harga');
        $maxC1 = fitness::max('harga');
        $minC2 = fitness::min('isi');
        $maxC2 = fitness::max('isi');
        $minC3 = fitness::min('protein');
        $maxC3 = fitness::max('protein');
        $minC4 = fitness::min('gula');
        $maxC4 = fitness::max('gula');
        $minC5 = fitness::min('kalori');
        $maxC5 = fitness::max('kalori');

        $C1min =[
            'fitness' => $minC1,
        ];
        $C1max =[
            'fitness' => $maxC1,
        ];
        $C2min =[
            'fitness' => $minC2,
        ];
        $C2max =[
            'fitness' => $maxC2,
        ];
        $C3min =[
            'fitness' => $minC3,
        ];
        $C3max =[
            'fitness' => $maxC3,
        ];
        $C4min =[
            'fitness' => $minC4,
        ];
        $C4max =[
            'fitness' => $maxC4,
        ];
        $C5min =[
            'fitness' => $minC5,
        ];
        $C5max =[
            'fitness' => $maxC5,
        ];

        $hasil = $minC1/$maxC1;
        $hasil1 =[
            'fitness' => $hasil,
        ];

        return view('spk-page', ['title' => "Recommendation"],compact('hasil1','data', 'widget1', 'widget2', 'widget3', 'widget4', 'widget5', 'C1min', 'C1max', 'C2min', 'C2max', 'C3min', 'C3max', 'C4min', 'C4max', 'C5min', 'C5max'))->with('data_bobot', $data_bobot);;
    }
}



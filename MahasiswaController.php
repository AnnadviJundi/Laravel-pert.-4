<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\request;
    class MahasiswaController extends Controller
    {
        public function dataMahasiswa(){
            $mhs1 = 'Fawwaz'; $asal1 = 'Jakarta';
            $mhs2 = 'Inaya'; $asal2 = 'Depok';
            $mhs3 = 'Zidan'; $asal3 = 'Binjai';
            $mhs4 = 'Bambang'; $asal4 = 'Mojokerto';
            $mhs5 = 'Unyil'; $asal5 = 'Bandung';
            return view('data_mahasiswa',
                compact('mhs1','mhs2','mhs3','mhs4','mhs5','asal1','asal2','asal3','asal4','asal5')
            );
        }
    }
?>

<?php

namespace App\Http\Controllers;

use App;
use Alert;
use Carbon;
use DataUser;

use App\User;
use App\Jurusan;
use App\Mahasiswa;
use App\Matakuliah;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth as Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $User = Auth::user();
        return view('admin.dashboard');
    }

    // admin

    public function dataadmin()
    {
        $User = User::all();
        return view('admin.dataadmin',['User' => $User]);
    }
    public function tambahdataadmin()
    {
    return view('admin.tambahdataadmin');
    }

    public function submittambahdataadmin(Request $request)
    {

      $User  = new User;

      $User->nama = $request->nama;
      $User->email = $request->email;
      $User->password = bcrypt($request->password);;
      $User->save();

      return redirect(route('dataadmin'))->with(['success' => 'Data Admin '.$request->nama.' Berhasil di Tambah']);
    }
    public function editdataadmin($Id)
    {
      $User = User::find($Id);
      return view('admin.editdataadmin', ['User'=>$User]);
    }
    public function submiteditdataadmin(Request $request, $Id)
    {
      $User = User::find($Id);

      $User->nama       = $request->nama;
      $User->email      = $request->email;
      if ($request->password) {
        $User->password = bcrypt($request->password);
      }
      $User->save();

      return redirect(route('dataadmin'))->with('success', 'Data Admin '.$request->nama.' Berhasil di Ubah');
    }
      public function hapusdataadmin($Id)
    {
      $User = User::find($Id);
      $User->delete();

      return redirect(route('dataadmin'))->with('success', 'Data Admin Berhasil di Hapus');
    }

    // Mahasiswa
        public function datamahasiswa()
    {
        $Mahasiswa = Mahasiswa::all();
        return view('admin.datamahasiswa',['Mahasiswa' => $Mahasiswa]);
    }
    public function tambahdatamahasiswa()
    {
    return view('admin.tambahdatamahasiswa');
    }

    public function submittambahdatamahasiswa(Request $request)
    {
      $Mahasiswa  = new Mahasiswa;

      $Mahasiswa->nim = $request->nim;
      $Mahasiswa->nama = $request->nama;
      $Mahasiswa->tempat_lahir = $request->tempat_lahir;
      $Mahasiswa->tanggal_lahir = $request->tanggal_lahir;
      $Mahasiswa->jenis_kelamin = $request->jenis_kelamin;
      $Mahasiswa->no_telepon = $request->no_telepon;
      $Mahasiswa->alamat = $request->alamat;
      $Mahasiswa->email = $request->email;
      $Mahasiswa->save();

      return redirect(route('datamahasiswa'))->with('success', 'Data Mahasiswa '.$request->nama.' Berhasil di Tambah');
    }
    public function editdatamahasiswa($Id)
    {
      $Mahasiswa = Mahasiswa::find($Id);
      return view('admin.editdatamahasiswa', ['Mahasiswa'=>$Mahasiswa]);
    }
    public function submiteditdatamahasiswa(Request $request, $Id)
    {
      $Mahasiswa = Mahasiswa::find($Id);

      $Mahasiswa->nim = $request->nim;
      $Mahasiswa->nama = $request->nama;
      $Mahasiswa->tempat_lahir = $request->tempat_lahir;
      $Mahasiswa->tanggal_lahir = $request->tanggal_lahir;
      $Mahasiswa->jenis_kelamin = $request->jenis_kelamin;
      $Mahasiswa->no_telepon = $request->no_telepon;
      $Mahasiswa->alamat = $request->alamat;
      $Mahasiswa->email = $request->email;
      $Mahasiswa->save();

      return redirect(route('datamahasiswa'))->with('success', 'Data Mahasiswa '.$request->nama.' Berhasil di Ubah');
    }
      public function hapusdatamahasiswa($Id)
    {
      $Mahasiswa = Mahasiswa::find($Id);
      $Mahasiswa->delete();

      return redirect(route('datamahasiswa'))->with('success', 'Data Mahasiswa Berhasil di Hapus');
    }

    // Matakuliah
        public function datamatakuliah()
    {
        $Matakuliah = Matakuliah::all();
        return view('admin.datamatakuliah',['Matakuliah' => $Matakuliah]);
    }
    public function tambahdatamatakuliah()
    {
    return view('admin.tambahdatamatakuliah');
    }

    public function submittambahdatamatakuliah(Request $request)
    {
      $Matakuliah  = new Matakuliah;

      $Matakuliah->kode_mk   = $request->kode_mk;
      $Matakuliah->nama      = $request->nama;
      $Matakuliah->sks       = $request->sks;
      $Matakuliah->semester  = $request->semester;

      $Matakuliah->save();

      return redirect(route('datamatakuliah'))->with('success', 'Data Matakuliah '.$request->nama.' Berhasil di Tambah');
    }
    public function editdatamatakuliah($Id)
    {
      $Matakuliah = Matakuliah::find($Id);
      return view('admin.editdatamatakuliah', ['Matakuliah'=>$Matakuliah]);
    }
    public function submiteditdatamatakuliah(Request $request, $Id)
    {
      $Matakuliah = Matakuliah::find($Id);

      $Matakuliah->kode_mk   = $request->kode_mk;
      $Matakuliah->nama      = $request->nama;
      $Matakuliah->sks       = $request->sks;
      $Matakuliah->semester  = $request->semester;

      $Matakuliah->save();

      return redirect(route('datamatakuliah'))->with('success', 'Data Matakuliah '.$request->nama.' Berhasil di Ubah');
    }
      public function hapusdatamatakuliah($Id)
    {
      $Matakuliah = Matakuliah::find($Id);
      $Matakuliah->delete();

      return redirect(route('datamatakuliah'))->with('success', 'Data Matakuliah Berhasil di Hapus');
    }


    // Jurusan
        public function datajurusan()
    {
        $Jurusan = Jurusan::all();
        return view('admin.datajurusan',['Jurusan' => $Jurusan]);
    }
    public function tambahdatajurusan()
    {
    return view('admin.tambahdatajurusan');
    }

    public function submittambahdatajurusan(Request $request)
    {
      $Jurusan  = new Jurusan;

      $Jurusan->kode_jurusan   = $request->kode_jurusan;
      $Jurusan->nama           = $request->nama;

      $Jurusan->save();

      return redirect(route('datajurusan'))->with('success', 'Data Jurusan '.$request->nama.' Berhasil di Tambah');
    }
    public function editdatajurusan($Id)
    {
      $Jurusan = Jurusan::find($Id);
      return view('admin.editdatajurusan', ['Jurusan'=>$Jurusan]);
    }
    public function submiteditdatajurusan(Request $request, $Id)
    {
      $Jurusan = Jurusan::find($Id);

      $Jurusan->kode_jurusan   = $request->kode_jurusan;
      $Jurusan->nama           = $request->nama;

      $Jurusan->save();

      return redirect(route('datajurusan'))->with('success', 'Data Jurusan '.$request->nama.' Berhasil di Ubah');
    }
      public function hapusdatajurusan($Id)
    {
      $Jurusan = Jurusan::find($Id);
      $Jurusan->delete();

      return redirect(route('datajurusan'))->with('success', 'Data Jurusan Berhasil di Hapus');
    }

}

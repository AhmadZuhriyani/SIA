@extends('admin.layouts.master')
@section('content')
<div id="content">
{{ csrf_field() }}
			  <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Data Mahasiswa</h3>
                        <p class="animated fadeInDown">
                          Data <span class="fa-angle-right fa"></span> Data Mahasiswa <span class="fa-angle-right fa"></span> Edit
                        </p>
                    </div>
                  </div>
              </div>
				<div class="col-md-12">
                  <div class="col-md-12 panel">
                    <div class="col-md-12 panel-body" style="padding-bottom:30px;">
                      <div class="col-md-12">
                        {!! Form::open(['url'=>route('submiteditdatamahasiswa', $Mahasiswa->id),'files'=>true,'class'=>'register-form', 'method' => 'POST', 'class' => 'form-horizontal', 'role' => 'form']) !!}
                           <div class="col-md-12">
                            <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nim">NIM <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="nim" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="nim" required="required" value="{{$Mahasiswa->nim}}"  type="text">
                          </div>
                        </div>
                        <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Nama 
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="nama" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="nama" placeholder="both name(s) e.g Jon Doe" required="required" value="{{$Mahasiswa->nama}}" type="text">
                          </div>
                        </div>
                        <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tempat_lahir">Tempat Lahir 
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="tempat_lahir" class="form-control col-md-7 col-xs-12"  data-validate-words="2" name="tempat_lahir" required="required" value="{{$Mahasiswa->tempat_lahir}}" type="text">
                          </div>
                        </div>
                        <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tanggal_lahir">Tanggal Lahir 
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="tanggal_lahir" class="form-control col-md-7 col-xs-12"  name="tanggal_lahir" value="{{$Mahasiswa->tanggal_lahir}}" required="required" type="date">
                          </div>
                        </div>
                        <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jenis_kelamin">Jenis Kelamin 
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="radio" class="flat" name="jenis_kelamin" value="Laki-laki" {{$Mahasiswa->jenis_kelamin == 'Laki-laki' ? 'checked' : ''}} required /> Laki-laki
                            <input type="radio" class="flat" name="jenis_kelamin" value="Perempuan" {{$Mahasiswa->jenis_kelamin == 'Perempuan' ? 'checked' : ''}} /> Perempuan
                          </div>
                        </div>
                        <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_telepon">No. Telepon 
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="no_telepon" class="form-control col-md-7 col-xs-12"  data-validate-words="2" name="no_telepon" required="required" value="{{$Mahasiswa->no_telepon}}" type="text">
                          </div>
                        </div>
                        <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="alamat">Alamat 
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="alamat" class="form-control col-md-7 col-xs-12"  data-validate-words="2" name="alamat" required="required" value="{{$Mahasiswa->alamat}}" type="text">
                          </div>
                        </div>
                        <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="email" id="email" name="email" required="required" value="{{$Mahasiswa->email}}" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                          <div class="col-md-6 col-md-offset-3">
                            <input class="submit btn btn-primary" type="submit" value="Simpan">
                                <a href="{{route('datamahasiswa')}}" class="btn btn-danger">
                                <span class="fa fa-arrow-left"></span>
                                Batal</a>
                          </div>
                        </div>
                      </div>  
                      </div>
                      </div>
                      </div>
                      </div>
                      </div>           

@endsection
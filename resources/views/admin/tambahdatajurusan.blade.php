@extends('admin.layouts.master')
@section('content')
<div id="content">
{{ csrf_field() }}
			  <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data  <span class="fa-angle-right fa"></span> Data Jurusan <span class="fa-angle-right fa"></span> Tambah </h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    {!!Form::open(['url'=>route('submittambahdatajurusan'),'files'=>true,'class'=>'register-form', 'method' => 'POST', 'class' => 'form-horizontal', 'role' => 'form']) !!}
                    {{-- <form class="form-horizontal form-label-left" novalidate> --}}
                    {{ csrf_field() }}
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kode_jurusan">Kode Jurusan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="kode_jurusan" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="kode_jurusan" required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Nama 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="nama" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="nama" placeholder="both name(s) e.g Jon Doe" required="required" type="text">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <input class="submit btn btn-primary" type="submit" value="Simpan">
                              <a href="{{route('datajurusan')}}" class="btn btn-danger">
                              <span class="fa fa-arrow-left"></span>
                              Batal</a>
                        </div>
                      </div>
                    {{-- </form> --}}
                  </div>
                </div>
              </div>
                 
@endsection

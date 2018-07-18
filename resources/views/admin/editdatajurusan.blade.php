@extends('admin.layouts.master')
@section('content')
<div id="content">
{{ csrf_field() }}
			  <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Data Jurusan</h3>
                        <p class="animated fadeInDown">
                          Data <span class="fa-angle-right fa"></span> Data Jurusan <span class="fa-angle-right fa"></span> Edit
                        </p>
                    </div>
                  </div>
              </div>
              <div class="col-md-12">
                  <div class="col-md-12 panel">
                    <div class="col-md-12 panel-body" style="padding-bottom:30px;">
                      <div class="col-md-12">
                        {!! Form::open(['url'=>route('submiteditdatajurusan', $Jurusan->id),'files'=>true,'class'=>'register-form', 'method' => 'POST', 'class' => 'form-horizontal', 'role' => 'form']) !!}
				                <div class="col-md-12">
                            <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kode_jurusan">Kode Jurusan <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="kode_jurusan" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="kode_jurusan" required="required" value="{{$Jurusan->kode_jurusan}}"  type="text">
                          </div>
                        </div>
                        <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Nama 
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="nama" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="nama" placeholder="both name(s) e.g Jon Doe" required="required" value="{{$Jurusan->nama}}" type="text">
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
                      </div>  
                      </div>  
@endsection
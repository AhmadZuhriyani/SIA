@extends('admin.layouts.master')
@section('content')
<div id="content">
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data  <span class="fa-angle-right fa"></span> Data Mata Kuliah</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_title">
                  <a href="{{route('tambahdatamatakuliah')}}" class="btn btn-primary">
                        <i class="fa fa-plus-circle"></i>
                        Tambah
                  </a>
                </div>

                  <div class="x_content">

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th class="column-title">No</th>
                            <th class="column-title">Kode Mata Kuliah</th>
                            <th class="column-title">Nama</th>
                            <th class="column-title">SKS</th>
                            <th class="column-title">Semester</th>
                            <th class="text-center">Aksi </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                          @foreach ($Matakuliah as $Index=>$DataMatakuliah)
                          <tr class="even pointer">
                            <td>{{$Index+=1}}</td>
                            <td>{{$DataMatakuliah->kode_mk}}</td>
                            <td>{{$DataMatakuliah->nama}}</td>
                            <td>{{$DataMatakuliah->sks}}</td>
                            <td>{{$DataMatakuliah->semester}}</td>
                            <td class="text-center">
                            <a href="{{route('editdatamatakuliah',$DataMatakuliah->id)}}" class="btn btn-round btn-info">
                            <span class="fa fa-edit"></span>
                            Edit
                            </a>
                            <a href="{{route('hapusdatamatakuliah',$DataMatakuliah->id)}}" class="btn btn-round btn-danger">
                            <span class="fa fa-trash"></span>
                            Hapus
                            </a>
                          </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>  
               
                          
                        
                      </div>
                  
@endsection            
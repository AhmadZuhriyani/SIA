@extends('admin.layouts.master')
@section('content')
<div id="content">
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data  <span class="fa-angle-right fa"></span> Data Mahasiswa</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_title">
                  <a href="{{route('tambahdatamahasiswa')}}" class="btn btn-primary">
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
                            <th class="column-title">NIM</th>
                            <th class="column-title">Nama</th>
                            <th class="column-title">Tempat Lahir</th>
                            <th class="column-title">Tanggal Lahir</th>
                            <th class="column-title">Jenis Kelamin</th>
                            <th class="column-title">No. Telepon</th>
                            <th class="column-title">Alamat</th>
                            <th class="column-title">Email</th>
                            <th class="text-center">Aksi </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                          @foreach ($Mahasiswa as $Index=>$DataMahasiswa)
                          <tr class="even pointer">
                            <td>{{$Index+=1}}</td>
                            <td>{{$DataMahasiswa->nim}}</td>
                            <td>{{$DataMahasiswa->nama}}</td>
                            <td>{{$DataMahasiswa->tempat_lahir}}</td>
                            <td>{{$DataMahasiswa->tanggal_lahir}}</td>
                            <td>{{$DataMahasiswa->jenis_kelamin}}</td>
                            <td>{{$DataMahasiswa->no_telepon}}</td>
                            <td>{{$DataMahasiswa->alamat}}</td>
                            <td>{{$DataMahasiswa->email}}</td>
                            <td class="text-center">
                            <a href="{{route('editdatamahasiswa',$DataMahasiswa->id)}}" class="btn btn-round btn-info">
                            <span class="fa fa-edit"></span>
                            Edit
                            </a>
                            <a href="{{route('hapusdatamahasiswa',$DataMahasiswa->id)}}" class="btn btn-round btn-danger">
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
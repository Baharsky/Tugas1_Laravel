@extends('template')
@section('main')
      
        <div class="col-xl-12">
          <div class="card">
            <div class="card-header border-0">
              <div class="col-md-12">
                <center><h1>Wisatawan</h1></center>
              </div>
              <div class="row align-items-center">
                <div class="col">
                  <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main" action="{{ url('search') }}" method="get">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="cari" name="cari" aria-label="Search">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
                </div>
                <div class="col text-right">
                
              </div>
                <div class="col text-right">
                  <a href="/dashboard/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
                  <a href="{{ url('create') }}" class="btn btn-primary">Tambah Data</a>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                      <th width="50px">No</th>
      <th width="90px">Nama</th>
                        <th width="180px">Gender</th>
                        <th width="130px">Umur</th>
                        <th width="250px">Asal</th>
                        <th width="100px">Foto</th>
                        <th width="170px">Action</th>
                  </tr>
                </thead>
                <tbody>
    @foreach($fillwisatawan as $wisatawan)
                  <tr>
                    <td>{{ $wisatawan->id }}</td>
                    <td>{{ $wisatawan->nama }}</td>
                    <td>{{ $wisatawan->gender }}</td>
                    <td>{{ $wisatawan->umur }}</td>
                    <td>{{ $wisatawan->asal }}</td>
                    <td><img src="{{ url('img/'.$wisatawan->foto) }}" style="object-fit: cover; width: 70px;height: 70px;">
                    </td>
                    <td><a href="{{ url('/update/'. $wisatawan->id) }}" class="btn btn-primary">Update</a>
        <a href="{{ url('/delete/'. $wisatawan->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                  </tr>
    @endforeach
                </tbody>
              </table>
     <br/>
            <div class="card-footer py-4">
             {{ $fillwisatawan->links() }}
            </div>
              
          
                
               
            </div>

          </div>
        </div>
@stop
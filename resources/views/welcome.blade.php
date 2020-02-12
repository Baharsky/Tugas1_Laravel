@extends('template')
@section('main')
                <div class="col-xl-8">
                    <div class="news_container">
                    
                        <!-- News Post -->
                        <div class="news_post d-flex flex-md-row ">
                            <div class="news_post_content">
                                <div class="news_post_date d-flex flex-row align-items-end justify-content-start">
                                    <div>Data Wisatawan</div>
                                    <div></div>
                                </div><br>
                                <form action="{{ url('search') }}" method="get">
                                    <input type="cari" name="cari" placeholder="Search" aria-label="Search">
                                    <input type="submit" value="search">
                                    </form>
                                <div class="news_post_text">
                                    @if (!empty($fillwisatawan))
                                    <table class="table">
                                       <thead>
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
                                               <td>
                                                    <img src="{{ url('img/'.$wisatawan->foto) }}" style="object-fit: cover; width: 70px;height: 70px;">
                                                </td>
                                               <td>
                                                   <a href="{{ url('/update/'. $wisatawan->id) }}" class="btn btn-primary">Update</a>
                                                   <a href="{{ url('/delete/'. $wisatawan->id) }}" class="btn btn-danger">Delete</a>
                                               </td>
                                           </tr>
                                           @endforeach
                                       </tbody> 
                                    </table>

                              <br/>
                             {{ $fillwisatawan->links() }}

                                    @else
                                    <p>Tidak ada data Wisatawan</p>
                                    @endif

                                </div>
                            </div>

                        </div>
                         <a href="{{ url('create') }}" class="btn btn-primary">Tambah Data</a>
                    </div>
                    <br/>
                    
                </div>
@stop
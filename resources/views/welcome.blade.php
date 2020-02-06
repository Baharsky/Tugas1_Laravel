@extends('template')
@section('main')
                <div class="col-xl-8">
                    <div class="news_container">
                    
                        <!-- News Post -->
                        <div class="news_post d-flex flex-md-row flex-column align-items-start justify-content-start">
                            <div class="news_post_content">
                                <div class="news_post_date d-flex flex-row align-items-end justify-content-start">
                                    <div>Data Wisatawan</div>
                                    <div></div>
                                </div><br>
                                <div class="news_post_text">
                                    @if (!empty($fillwisatawan))
                                    <table class="table">
                                       <thead>
                                           <tr>
                                               <th>No</th>
                                               <th>Nama</th>
                                               <th>Gender</th>
                                               <th>Umur</th>
                                               <th>Asal</th>
                                           </tr>
                                       </thead>
                                       <tbody>
                                           @foreach($fillwisatawan as $wisatawan)
                                           <tr>
                                               <td>{{ $wisatawan->no_wisatawan }}</td>
                                               <td>{{ $wisatawan->nama_wisatawan }}</td>
                                               <td>{{ $wisatawan->gender_wisatawan }}</td>
                                               <td>{{ $wisatawan->umur_wisatawan }}</td>
                                               <td>{{ $wisatawan->asal_wisatawan }}</td>
                                           </tr>
                                           @endforeach
                                       </tbody> 
                                    </table>
                                    @else
                                    <p>Tidak ada data Wisatawan</p>
                                    @endif
                                </div>
                            </div>

                        </div>
                         <a href="{{ url('Wisatawan/create')}} classs="btn btn-primary>Tambah Data</a>
                    </div>
                </div>
@stop
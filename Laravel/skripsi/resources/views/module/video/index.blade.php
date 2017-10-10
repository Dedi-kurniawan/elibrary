@extends('layouts.master')
@section('maincontent')


<section class="content">
        <div class="container-fluid">
            <div class="block-header">
            
 <h2> @foreach($video as $vi) {{ $vi->faculty->jurusan }} / {{ $vi->category->kategori }} @endforeach
                </h2>
            </div>
         <hr>


          
         <!-- menu buku-->
            <div class="row clearfix">
            @foreach($viook as $vi)
                <div class="col-lg-4 col-md-4 col-sm-3 col-xs-10">
                    <div class="card">
                        <div class="header bg-blue">
                            <h2>{{ $vi->judul }}<small> {{ $vi->deskripsi }} </small></h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
            <div class="body">
            <a href=" {{ route ('video.show',$vi->id) }}">
                <img alt="300x200" src="{{ $vi->CoverPath }}" style="border: 0.5px solid #ddd;
                   border-radius: 5px;
                   padding: 5px;
                   width: 100%;"> </a> 

         <center><div class="header"> 
                   <div class="flex">
                    <ul class="list-inline count2">
                        <li><center><h3><i class="material-icons">collections_bookmark</i></h3>
                            <span>e-Book</span></center>
                        </li> 
                        <li><center><h3>{{ $vi->faculty->kode_jurusan }}</h3>
                            <span>Jurusan</span></center>
                        </li> 
                        <li><center><h3><i class="material-icons">file_download</i></h3>
                            <span>Dowload</span></center>
                        </li>  
                    </ul> 
                    </div></center>
                         <h5><strong> @Publisher </strong></h5>
                            <span> {{ $vi->publisher }}</span> 
             </div>
        </div>
     </div>
     @endforeach

                <!-- #END# Browser Usage -->
            </div>
        </div>
    </section> 


@endsection
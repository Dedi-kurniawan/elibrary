@extends('layouts.master')
@section('maincontent')


<section class="content">
        <div class="container-fluid">
            <div class="block-header">

 <h2> @foreach($ebook as $eb)   {{ $eb->category->faculty->jurusan }} / {{ $eb->category->kategory }} @endforeach
                </h2>
            </div>
         <hr>


          
         <!-- menu buku-->
            <div class="row clearfix">
            @foreach($ebook as $eb)
                <div class="col-lg-4 col-md-4 col-sm-3 col-xs-10">
                    <div class="card">
                        <div class="header bg-blue">
                            <h2>{{ $eb->judul }}<small> {{ $eb->deskripsi }} </small></h2>
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
            <a href=" {{ route ('ebook.show',$eb->id) }}">
                <img alt="300x200" src="{{ $eb->CoverPath }}" style="border: 0.5px solid #ddd;
                   border-radius: 5px;
                   padding: 5px;
                   width: 100%;"> </a>  
         <center><div class="header"> 
                   <div class="flex">
                    <ul class="list-inline count2">
                        <li>{!! $eb->TypeColl !!}
                        </li> 
                        <li><center><h3>{{ $eb->category->faculty->kode_jurusan }}</h3>
                            <span>Jurusan</span></center>
                        </li> 
                        <li><center><h3><i class="material-icons">file_download</i></h3>
                            <span>Dowload</span></center>
                        </li>  
                    </ul> 
                    </div></center>
                         <h5><strong> @Publisher </strong></h5>
                            <span> {{ $eb->publisher }}</span> 
             </div>
        </div>
     </div>
     @endforeach
{{-- 
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header bg-green">
                            <h2>
                               Angular 2<small>Description text here..</small>
                            </h2>
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
                <img alt="300x200" src="{{ asset('img/book/javascript.jpg')}}" style="border: 1px solid #ddd;
                   border-radius: 5px;
                   padding: 5px;
                   width: 100%;">     
         <center><div class="header"> 
                   <div class="flex">
                    <ul class="list-inline count2">
                        <li><center><h3><i class="material-icons">collections_bookmark</i></h3>
                            <span>e-Book</span></center>
                        </li> 
                        <li><center><h3>T.IND</h3>
                            <span>Jurusan</span></center>
                        </li> 
                        <li><center><h3><i class="material-icons">file_download</i></h3>
                            <span>Dowload</span></center>
                        </li>  
                    </ul> 
                    </div></center>
                         <h5><strong> @Publisher </strong></h5>
                            <span>Dedi Kurniawan</span> 
             </div>
        </div>
     </div>

      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header bg-grey">
                            <h2>
                               Angular 2<small>Description text here..</small>
                            </h2>
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
                <img alt="300x200" src="{{ asset('img/book/laravel01.jpg')}}" style="border: 0.5px solid #ddd;
                   border-radius: 5px;
                   padding: 5px;
                   width: 100%;">     
         <center><div class="header"> 
                   <div class="flex">
                    <ul class="list-inline count2">
                        <li><center><h3><i class="material-icons">collections_bookmark</i></h3>
                            <span>e-Book</span></center>
                        </li> 
                        <li><center><h3>T.SIP</h3>
                            <span>Jurusan</span></center>
                        </li> 
                        <li><center><h3><i class="material-icons">file_download</i></h3>
                            <span>Dowload</span></center>
                        </li>  
                    </ul> 
                    </div></center>
                         <h5><strong> @Publisher </strong></h5>
                            <span>Dedi Kurniawan</span> 
             </div>
        </div>
     </div>
 --}}

       {{--      <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header bg-orange">
                            <h2>
                                Orange - Title <small>Description text here...</small>
                            </h2>
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
                            Quis pharetra a pharetra fames blandit. Risus faucibus velit Risus imperdiet mattis neque volutpat, etiam lacinia netus dictum magnis per facilisi sociosqu. Volutpat. Ridiculus nostra.
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header bg-blue-grey">
                            <h2>
                                Blue Grey - Title <small>Description text here...</small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li>
                                    <a href="javascript:void(0);">
                                        <i class="material-icons">mic</i>
                                    </a>
                                </li>
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
                            Quis pharetra a pharetra fames blandit. Risus faucibus velit Risus imperdiet mattis neque volutpat, etiam lacinia netus dictum magnis per facilisi sociosqu. Volutpat. Ridiculus nostra.
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header bg-pink">
                            <h2>
                                Pink - Title <small>Description text here...</small>
                            </h2>
                            <ul class="header-dropdown m-r-0">
                                <li>
                                    <a href="javascript:void(0);">
                                        <i class="material-icons">info_outline</i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <i class="material-icons">help_outline</i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            Quis pharetra a pharetra fames blandit. Risus faucibus velit Risus imperdiet mattis neque volutpat, etiam lacinia netus dictum magnis per facilisi sociosqu. Volutpat. Ridiculus nostra.
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Example -->
           
              
                <!-- Browser Usage -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="header">
                            <h2>BROWSER USAGE</h2>
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
                            <div id="donut_chart" class="dashboard-donut-chart"></div>
                        </div>
                    </div>
                </div>
                <!-- #END# Browser Usage -->
            </div>
        </div>
    </section> --}}


@endsection
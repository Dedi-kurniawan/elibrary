@extends('layouts.master')
@section('maincontent')
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                {{-- <h2>
                    Data Jurusan
                    
                </h2> --}}
            </div>


 <!-- #END# Tabs With Only Icon Title -->
            <!-- Tabs With Icon Title -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               {{ $ebook->judul }}
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                   
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#home_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">collections_bookmark</i>Ebook
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#profile_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">info</i>Info e-book
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#messages_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">comment</i>Diskusi
                                    </a>
                                </li>
                                
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="home_with_icon_title">
                                    <div class="product-image">
                              <iframe class="embed-responsive-item" src="/collect//{{ $ebook->file }}" frameborder="0" allowfullscreen width="97%" height="900px"></iframe>
                            </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="profile_with_icon_title">
                                    <b>Deskripsi</b>
                                    <hr>
                                    <p>
                                        {{ $ebook->deskripsi }}
                                        <hr>
                                        @Author : {{ $ebook->author }} <br>
                                        @Publisher : {{ $ebook->publisher }}
                                    </p>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="messages_with_icon_title">
                                    <b>Message Content</b>
                                    <p>
                                        <div id="disqus_thread"></div>
                                    </p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Tabs With Icon Title -->
            <!-- Tabs 


@endsection
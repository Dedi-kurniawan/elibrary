@extends('layouts.master')
@section('maincontent')

<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            <!-- Widgets -->
        <!-- Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Detail E-Book
                            </h2>
                           
                        </div>
                        <div class="body">
                            <form>
                               <label for="email_address">Kode</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" value="{{ $book->kode }}" disabled>
                                    </div>
                                </div>
                                <label for="email_address">Judul</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" value="{{ $book->judul }}" disabled>
                                    </div>
                                </div>
                                <label for="email_address">Deskripsi</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea rows="4" class="form-control no-resize"  disabled >{{ $book->deskripsi }}</textarea>
                                    </div>
                                </div>
                                <label for="email_address">Cover</label>
                                 <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="{{ $book->CoverPath }}" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="{{ $book->CoverPath }}">
                                    </a>
                                </div>
                                </div>
                                <label for="email_address">Author</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" value="{{ $book->author }}" disabled>
                                    </div>
                                </div>
                                <label for="email_address">Publisher</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" value="{{ $book->user->name }}" disabled>
                                    </div>
                                </div>
                                 <label for="email_address">Materi</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" value="{{ $book->category->kategory}}" disabled>
                                    </div>
                                </div>
                                
                                <br><a href="{{ url ('/book') }}">
                                <button type="button" class="btn btn-primary m-t-15 waves-effect">BACK</button></a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
                <!-- #END# Browser Usage -->
            </div>
        </div>
    </section>


@endsection
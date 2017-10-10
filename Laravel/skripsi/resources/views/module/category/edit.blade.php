@extends('layouts.master')
@section('maincontent')
  <section class="content">
     <div class="container-fluid">
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Form Materi</h2>
                        </div>
                       		<div class="body">
              {!! Form::model($kategori, ['route' => ['category.update', $kategori],'method'=>'PUT']) !!}
              @include('module.category._form', ['model'=> $kategori])
               {!! Form::close() !!}
					    	</div>
                    </div>
                </div>
            </div>
      
     </div>
  </section>
@endsection

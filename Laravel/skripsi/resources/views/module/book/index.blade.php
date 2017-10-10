@extends('layouts.master')
@section('maincontent')
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                {{-- <h2>
                    Data Jurusan
                    
                </h2> --}}
            </div>

<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DATA E-Book
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">add</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href=" {{ route('book.create') }} ">Tambah</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Judul</th>
                                            <th>Cover</th>
                                            <th>file</th>
                                            <th>Jurusan</th>     
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Judul</th>
                                            <th>Cover</th>
                                            <th>file</th>
                                            <th>Upload</th>     
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                     <?php $no=1; ?>
                                     @foreach($book as $bo)
                                     
                                    <tbody>
                                        <tr>
                                            <td>{{  $no++ }}</td>
                                            <td>{{  $bo->kode }}</td>
                                            <td>{{  $bo->judul }}</td>
                                            <td>{{  $bo->cover }}</td>
                                            <td>{{  $bo->file }}</td>
                                            <td>{{ $bo->user->name }}</td>
                                            <td>
                                            {!! Form::open(['route' => ['book.destroy', $bo->id], 'method' => 'DELETE']) !!}
                                            <a href=" {{ route ('book.show',$bo->id) }}"><button type="button" class="btn bg-blue waves-effect">
                                            <i class="material-icons">list</i>
                                            </button></a>
                                            <a href=" {{ route ('book.edit',$bo->id) }}"><button type="button" class="btn bg-green waves-effect">
                                            <i class="material-icons">edit</i>
                                            </button></a>
                                            <button type="submit"  class="btn bg-red waves-effect" onclick="_gaq.push(['_trackEvent', 'example, 'try', 'Danger']);"><i class="material-icons">delete</i>
                                            </button>             
                                            {!! Form::close() !!}
                                            </td>
                                        </tr>                                    
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
    </section>


@endsection
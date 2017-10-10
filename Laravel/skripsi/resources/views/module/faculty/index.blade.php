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
                                DATA JURUSAN
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">add</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href=" {{ route('faculty.create') }} ">Tambah</a></li>
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
                                            <th>Kode Jurusan</th>
                                            <th>Jurusan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Jurusan</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                     <?php $no=1; ?>
                                     @foreach($faculty as $fa)
                                    <tbody>
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $fa->kode_jurusan }}</td>
                                            <td>{{ $fa->jurusan }}</td>
                                             <td>
                                            {!! Form::open(['route' => ['faculty.destroy', $fa->id], 'method' => 'DELETE']) !!}
                                            <a href=" {{ route ('faculty.edit',$fa->id) }}"><button type="button" class="btn bg-green waves-effect">
                                            <i class="material-icons">list</i>
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
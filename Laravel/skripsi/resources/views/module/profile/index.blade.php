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
                                        <li><a href=" {{ route('profile.create') }} ">Tambah</a></li>
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
                                            <th>Nim</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>T.T.Lahir</th>
                                            <th>Alamat</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nim</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>T.T.Lahir</th>
                                            <th>Alamat</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                     <?php $no=1; ?>
                                     @foreach($profile as $pr)
                                    <tbody>
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $pr->nim }}</td>
                                            <td>{{ $pr->user->name }}</td>
                                            <td>{{ $pr->user->email }}</td>
                                            <td>{{ $pr->tempat_lahir }}, {{ $pr->tanggal_lahir }}</td>
                                            <td>{{ $pr->alamat }}</td>
                                             <td>
                                            {{-- {!! Form::open(['route' => ['profile.destroy', $pr->id], 'method' => 'DELETE']) !!}
                                            <a href=" {{ route ('profile.edit',$pr->id) }}"><button type="button" class="btn bg-green waves-effect">
                                            <i class="material-icons">list</i>
                                            </button></a>
                                            <button type="submit"  class="btn bg-red waves-effect" onclick="_gaq.push(['_trackEvent', 'example, 'try', 'Danger']);"><i class="material-icons">delete</i>
                                            </button>             
                                            {!! Form::close() !!} --}}
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
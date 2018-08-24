@extends('layouts.admin')


@section('content')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Car Tags</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Car Tags</li>
                </ol>
                <a href="{{route('cartags.create')}}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</a>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-body col-md-6">
                        <table class="table table-hover table-responsive">
                            <thead>
                            <tr>
                                <th>Ime</th>
                                <th>slug</th>
                                <th>opis</th>
                                <th>edit</th>
                                <th>delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cartags as $cartag)
                                <tr>
                                    <td><a href="{{route('cartags.show', $cartag->id)}}">{{$cartag->name}}</a></td>

                                    <td>{{$cartag->slug}}</td>

                                    <td>{{$cartag->description}}</td>

                                    <td><a class="btn btn-success" href="{{route('cartags.edit', $cartag->id)}}">Edit</a></td>

                                    <td>

                                        {!! Form::open(['method'=>'DELETE', 'action'=>['CartagController@destroy', $cartag->id]]) !!}

                                        <div class="form-group">

                                            {!! Form::submit('DELETE', ['class'=>'btn btn-danger']) !!}

                                        </div>

                                        {!! Form::close() !!}

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>



                </div>
            </div>
        </div>
    </div>



@endsection
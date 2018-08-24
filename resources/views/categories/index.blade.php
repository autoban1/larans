@extends('layouts.admin')


@section('content')





    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Kategorije</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Kategorije</li>
                </ol>
                <a href="{{route('categories.create')}}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</a>
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


                    <table class="table table-hover">
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
                        @foreach($categories as $category)
                            <tr>
                                <td><a href="{{route('categories.show', $category->id)}}">{{$category->name}}</a></td>

                                <td>{{$category->slug}}</td>

                                <td>{{$category->description}}</td>

                                <td><a class="btn btn-success" href="{{route('categories.edit', $category->id)}}">Edit</a></td>

                                <td>
                                    {{--<a class="btn btn-danger" href="{{route('categories.destroy', $category->id)}}">Delete</a>--}}

                                    {!! Form::open(['method'=>'DELETE', 'action'=>['CategoryController@destroy', $category->id]]) !!}



                                        {!! Form::submit('DELETE', ['class'=>'btn btn-danger']) !!}



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

@endsection
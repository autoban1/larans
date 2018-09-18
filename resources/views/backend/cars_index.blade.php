@extends('layouts.admin')


@section('content')





    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Vozila</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Vozila</li>
                </ol>
                <a href="#" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</a>
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
                            <th>Model</th>
                            <th>Brand</th>
                            <th>Year</th>
                            <th>Price1h</th>
                            <th>Price1hcost</th>
                            <th>Owner</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cars as $car)
                            <tr>
                                <td><a href="{{route('cars.show', $car->id)}}">{{$car->model}}</a></td>

                                <td>{{$car->brand}}</td>

                                <td>{{$car->year}}</td>

                                <td>{{$car->price1h}}</td>

                                <td>{{$car->price1hcost}}</td>

                                <td>{{$car->owner_user_id}}</td>

                                <td><a class="btn btn-success" href="{{route('cars.edit', $car->id)}}">Edit</a></td>

                                <td>
                                    {{--<a class="btn btn-danger" href="{{route('cars.destroy', $car->id)}}">Delete</a>--}}

                                    {!! Form::open(['method'=>'DELETE', 'action'=>['BackendController@cars_destroy', $car->id]]) !!}



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
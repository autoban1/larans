@extends('layouts.admin')


@section('content')




    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Detalji kategorije - {{$category->name}}</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Ubaci Kategoriju</li>
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
                    <div class="card-body col-md-6">
                        <p>Ime: {{$category->name}}</p>
                        <p>Slug: {{$category->slug}}</p>
                        <p>Opis: {{$category->description}}</p>
                    </div>



                    <div>

                        Vozila u kategoriji:<br>

                        @foreach($category->cars as $car)

                            <a href="{{route('cars.show', $car->id)}}">{{$car->model}}</a> <br>


                            @endforeach


                    </div>


                </div>
            </div>
        </div>
    </div>



@endsection
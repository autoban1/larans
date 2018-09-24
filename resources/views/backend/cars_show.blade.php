@extends('layouts.admin')


@section('content')




    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Detalji kategorije - {{$car->brand}}</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Ubaci Kategoriju</li>
                </ol>
                <a href="{{route('cars.create')}}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</a>
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
                        <p>Brend: {{$car->brand}}</p>

                        <p>Model: {{$car->model}}</p>

                        <p>Godina: {{$car->year}}</p>

                        <p>Cena 1h: {{$car->price1h}}</p>

                        <p>Cena kostanja 1h: {{$car->price1hcost}}</p>

                        <p>Vlasnik: {{$car->owner_user_id}}</p>

                        <p>Opis: {{$car->long_description}}</p>

                        <p>Kategorija Vozila:<br>

                            {{--{{ json_encode($car) }}--}}

                            @foreach($car->categories as $category)

                                <a href="{{route('categories.show', $category->id)}}">{{$category->name}}</a><br>

                            @endforeach
                        </p>


                    </div>



                </div>
            </div>
        </div>
    </div>



@endsection
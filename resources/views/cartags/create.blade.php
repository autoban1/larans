@extends('layouts.admin')


@section('content')



    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Insert Car Tag</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Insert Car Tag</li>
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
                        {!! Form::open(['method'=>'POST', 'action'=>'CartagController@store']) !!}

                        <div class="form-group">
                            {!! Form::label('name', 'Ime taga:') !!}
                            {!! Form::text('name', null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('slug', 'Slug:') !!}
                            {!! Form::text('slug', null, ['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('description', 'Opis:') !!}
                            {!! Form::text('description', null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">

                            {!! Form::submit('Ubaci', ['class'=>'btn btn-primary']) !!}

                        </div>

                        {!! Form::close() !!}
                    </div>



                </div>
            </div>
        </div>
    </div>









@endsection
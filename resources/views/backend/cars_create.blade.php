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
                    <div class="card-body col-md-6">
                        {!! Form::open(['method'=>'POST', 'action'=>'BackendController@cars_store']) !!}

                        <div class="form-group">
                            {!! Form::label('model', 'Model:') !!}
                            {!! Form::text('model', null, ['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('brand', 'Brand:') !!}
                            {!! Form::text('brand', null, ['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('year', 'Year:') !!}
                            {!! Form::text('year', null, ['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('price1h', 'Cena 1h:') !!}
                            {!! Form::text('price1h', null, ['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('price1hcost', 'Cena kostanja 1h:') !!}
                            {!! Form::text('price1hcost', null, ['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('owner_user_id', 'Owner:') !!}
                            {!! Form::text('owner_user_id', null, ['class'=>'form-control']) !!}
                        </div>



                        <div class="form-group">
                            {!! Form::label('kategorije', 'Kategorije:') !!}
                        </div>

                        <div class="form-group">
                            @foreach($categories as $category)
                            {!! Form::checkbox('category_id[]', $category->id, false,['class'=>'form-check-input']) !!}
                                {!! Form::label('category', $category->name) !!}
                                <br>
                            @endforeach

                                {{--<div class="form-group form-check form-check-inline">--}}
                                    {{--@foreach($categories as $category)--}}
                                        {{--<input type="checkbox" value="{{ $category->id }}" name="category_id[]" class="form-check-input">--}}
                                        {{--<label class="form-check-labe btn-margin-right">{{ $category-name }}</label>--}}
                                    {{--@endforeach--}}
                                {{--</div>--}}
                        </div>

                         <div class="form-group">
                            {!! Form::label('long_description', 'Description:') !!}
                            {!! Form::textarea('long_description', null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">

                            {!! Form::submit('Ubaci Vozilo', ['class'=>'btn btn-primary']) !!}

                        </div>

                        {!! Form::close() !!}
                    </div>



                </div>
            </div>
        </div>
    </div>









@endsection
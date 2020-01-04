@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-10">
                <div class="media">
                    <div class="media-body">
                        <h3 class="">عنوان :{{$data->slug}}</h3>
                        <p class=" mt-5">{{$data->body}}</p>
                    </div>
                </div>
                <a href="{{route('home')}}" class="btn btn-outline-info"  >نمایش لیست خاطرات</a>

            </div>

        </div>

    </div>

@endsection

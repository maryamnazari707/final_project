@extends('layouts.app')
@section('content')
    <form action="" method="post">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">

                        <div class="card-body border border-info">
                            @include('error')
                            @csrf
                            <div class="form-group">
                                <label for="title">عنوان</label>
                                <input type="text" name="slug" class="form-control" id="title"
                                       value="{{$data->slug}}">
                            </div>
                            <div class="form-group">
                                <label for="body">متن</label>
                                <textarea name="body" class="form-control" style="height: 12rem" id="body">{{$data->body}}</textarea>
                            </div>
                            <button class="btn btn-outline-info" type="submit">اعمال تغییرات </button>
                            <a href="{{route('home')}}" class="btn btn-outline-info">بیخیال</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

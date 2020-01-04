@extends('layouts.app')
@section('content')
    <form action="{{isset($record) ? route('update',compact('id')) : "" }}" method="post">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">

                        <div class="card-body border border-info">
                            @include('error')
                            @csrf
                            <div class="form-group">
                                <label for="title">عنوان</label>
                                <input type="text" name="slug" class="form-control" id="title">
                            </div>
                            <div class="form-group">
                                <label for="body">متن</label>
                                <textarea name="body" class="form-control" id="body"></textarea>
                            </div>
                            <button class="btn btn-outline-info" type="submit">ذخیره</button>
                            <a href="{{route('home')}}" class="btn btn-outline-info">بیخیال</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

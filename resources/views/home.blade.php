@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-11">

                <a href="{{route('new')}}" class="btn btn-outline-info">+ ثبت خاطره جدید</a>
                <div class="d-flex flex-wrap justify-content-start mt-5">
                    @foreach($data as $khatere)
                        @include('card',compact('khatere'))
                    @endforeach
                </div>

            </div>

        </div>

    </div>

@endsection

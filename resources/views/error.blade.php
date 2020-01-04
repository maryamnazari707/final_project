@if($errors->any())
    <div class="alert alert-danger text-dark">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

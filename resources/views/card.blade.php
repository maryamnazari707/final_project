<div class="card">
    <div class="card-header">
        {{$khatere->slug}}
    </div>
    <div class="card-body">
        <div class="card-text" style="height: 8rem;width: 10rem;overflow: hidden"><span class="text-info"> خلاصه متن:</span> {{$khatere->body}}</div>
        <a href="{{route("show",$khatere->id)}}" class="btn btn-primary">نمایش</a>
        <a href="{{route("edit",$khatere->id)}}" class="btn btn-primary">ویرایش</a>
        <a href="{{route("delete",$khatere->id)}}" class="btn btn-primary">حذف</a>
    </div>
</div>

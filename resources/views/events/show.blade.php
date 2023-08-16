@include('layouts.header')

<div class="container p-3">
    <h2>Blogs</h2>
    <div class="row">
        <div class="col-sm-6">
        <div class="card">
        <div class="card-body">
        <h5 class="card-title">{{$events->event_name}}</h5>
        <h5 class="card-title">{{$events->event_time}}</h5>
        <h5 class="card-title">{{$events->event_date}}</h5>
        <p class="card-text">{{$events->event_details}}</p>
        <a class="btn btn-primary" href="/events">Back</a>
        <a class="btn btn-primary" href="/events/{{$events->id}}/edit">Edit</a>
        <form action="/events/{{$events->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="delete" class="btn btn-danger">Delete</button>
        </form>
        </div>
        </div>
        </div>
</div>

@include('layouts.footer')
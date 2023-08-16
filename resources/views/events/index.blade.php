@include('layouts.header')

<div class="container p-3">
    
    <div class="row">
        <div class="col-10">
        <h2 class="p-2">Events List</h2>
        </div>
        <div class="col-2 pt-2">
        <a class="btn btn-outline-success btn-lg p-3" href="/posts/create">Regster An Event</a>
        </div>
    </div>
    <div class="row">
    @unless( count($events) ==0 )
    @foreach($events as $event)
        <div class="col-sm-6 p-3">
        <div class="card">
        <div class="card-body">
        <!-- <h5 class="card-title">{{$event->id}}</h5> -->
        <h5 class="card-title">{{$event->event_name}}</h5>
        <h5 class="card-title">{{$event->event_date}}</h5>
        <h5 class="card-title">{{$event->event_time}}</h5>
        <p class="card-text text-truncate">{{$event->event_details}}</p>
        <a href="{{ route('events.show', ['id' => $event->id]) }}" class="btn btn-primary">Read More</a>
        </div>
        </div>
        </div>
        @endforeach

        @else
        <div class="row justify-content-center">
        <div class="col-lg-3">
        <h2 class="pt-5">No Events Here</h2>
        <a href="/posts/create" class="btn btn-outline-success text-center">Regster An Event</a>
        </div>
        </div>

        @endunless
        
</div>

@include('layouts.footer')
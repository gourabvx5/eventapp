@include('layouts.header')

<section class="p-5">
    <div class="container text-center">
        <h2>Update an Event</h2>
    </div>
<div class="container pt-5">
<form action="/events/{{$events->id}}/" method="POST">
            @csrf
            @method('PUT')
<div class="form-group">
<div class="mb-3">
  <label for="" class="form-label h2">Event Title</label>
  <input type="text" class="form-control" name="event_name" id="event_name" value="{{$events->event_name}}">
</div>
<div class="mb-3">
  <label for="" class="form-label h2">Event Time</label>
  <input type="text" class="form-control" name="event_time" id="event_time" value="{{$events->event_time}}">
</div>
<div class="mb-3">
  <label for="" class="form-label h2">Event Date</label>
  <input type="text" class="form-control" name="event_date" id="event_date" value="{{$events->event_date}}">
</div>
<div class="mb-3">
  <label for="" class="form-label h2">Event Details</label>
  <textarea class="form-control" name="event_details" id="event_details" rows="3" value="">{{$events->event_details}}</textarea>
</div>
</div>
<button class="btn btn-outline-success btn-lg" type="submit">Update Event</button>
</div>

    </form>
</section>
@include('layouts.footer')

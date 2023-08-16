@include('layouts.header')

<section class="p-5">
    <div class="container text-center">
        <h2>Create an Event</h2>
    </div>
<div class="container pt-5">
<form action="/events" method="POST">
            @csrf 
<div class="form-group">
<div class="mb-3">
  <label for="" class="form-label h2">Event Title</label>
  <input type="text" class="form-control" name="event_name" id="event_name" placeholder="">
</div>
<div class="mb-3">
  <label for="" class="form-label h2">Event Date</label>
  <input type="text" class="form-control" name="event_date" id="event_date" placeholder="">
</div>
<div class="mb-3">
  <label for="" class="form-label h2">Event Time</label>
  <input type="text" class="form-control" name="event_time" id="event_time" placeholder="">
</div>
<div class="mb-3">
  <label for="" class="form-label h2">Event Description</label>
  <textarea class="form-control" name="event_details" id="event_details" rows="3"></textarea>
</div>
</div>
<button class="btn btn-outline-success btn-lg" type="submit">Post Event</button>
</div>

    </form>
</section>
@include('layouts.footer')

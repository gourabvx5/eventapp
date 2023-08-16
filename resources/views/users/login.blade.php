@include('layouts.header')


<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
        <h2 class="pt-3 text-center">Event Management System Login </h2>
      <div class="card">
        <div class="card-header">
          Login Form
        </div>
        <div class="card-body">
          <form action="/login" method="POST">
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>



@include('layouts.footer')
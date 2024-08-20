@extends("dashboard_base")
@section("title") Admin Panel - Add New User | Belsen Herbal & Nutraceuticals @endsection
@section("content")
<div class="row">
<div class="col-12 mb-2">
<h4 class="text-dark border-bottom"><a href="{{ route('users') }}" class="text-muted">Users List</a>/Add New User</h4>
</div>
<div class="col-md-5 mx-auto">
<div class="card card-body">
<form action="{{ route('user_add_handler') }}" method="POST">
@csrf
<label for="full_name">Full Name</label>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text"><i class="fas fa-user"></i></span>
  </div>
  <input type="text" name="full_name" class="form-control" id="full_name" placeholder="enter full name" required>
</div>
<label for="email">Email Address</label>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
  </div>
  <input type="email" name="email" class="form-control" id="email" placeholder="example@mail.com" required>
</div>
<label for="password">Enter Password</label>
<div class="input-group mb-4">
  <div class="input-group-prepend">
    <span class="input-group-text"><i class="fas fa-lock"></i></span>
  </div>
  <input type="text" name="password" class="form-control" id="password" placeholder="*****" required>
</div>
<button type="submit" class="btn btn-success w-100">Submit</button>
</form>
</div>
</div>
</div>
@endsection
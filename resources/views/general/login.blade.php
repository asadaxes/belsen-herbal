@extends("general_base")
@section("title") Login | Belsen Herbal & Nutraceuticals @endsection
@section("content")
<div class="row w-100 my-5">
<div class="col-md-4 mx-auto">
<h3 class="text-center">Login to Continue...</h3>
@if($errors->any() || session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        @if(session('error'))
            {{ session('error') }}
        @else
            <ul class="my-0 mx-2">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
<div class="card card-body bg-light">
<form action="{{ route('login_handler') }}" method="POST">
@csrf
<label for="email" class="font-weight-bold">Email Address</label>
<input type="email" name="email" class="form-control mb-3" id="email" placeholder="Enter your email address" required>
<label for="password" class="font-weight-bold">Password</label>
<input type="password" name="password" class="form-control mb-3" id="password" placeholder="Enter your password" required>
<div class="mb-4">
    {!! NoCaptcha::renderJs() !!}
    {!! NoCaptcha::display() !!}
</div>
<button type="submit" class="btn btn-primary w-100">Login</button>
</form>
</div>
</div>
</div>
@endsection
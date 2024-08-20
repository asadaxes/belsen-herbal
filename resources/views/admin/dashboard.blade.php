@extends("dashboard_base")
@section("title") Admin Panel | Belsen Herbal & Nutraceuticals @endsection
@section("style")
<style>

</style>
@endsection
@section("content")
@if(session('success'))
<div class="position-fixed px-3" style="z-index: 5; right: 0; top: 5;">
  <div class="toast hide" role="alert" aria-live="assertive" aria-atomic="true" data-delay="10000">
    <div class="toast-header bg-success">
      <strong class="mr-auto">Perfect!</strong>
      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="toast-body">
      {{ session('success') }}
    </div>
  </div>
</div>
@endif
<div class="row">
<div class="col-12">
<div class="card card-body">
<div class="text-center">
  <img src="{{ asset('assets/logo.png') }}" class="img-fluid" width="800px">
</div>
</div>
</div>
<div class="col-md-6">
<div class="card card-body">
<div class="d-flex justify-content-around align-items-center">
  <i class="fas fa-users fa-4x text-dark"></i>
  <h1 class="text-dark mb-0">{{ $total_users }}</h1>
</div>
</div>
</div>
<div class="col-md-6">
<div class="card card-body text-center">
<span class="text-dark">Our Products</span>
<div class="d-flex justify-content-around border-top pt-3">
@foreach ($total_products as $product)
<img src="{{ Storage::url($product->thumbnail) }}" class="img-fluid mb-2" width="200px">
@endforeach
</div>
</div>
</div>
</div>
@endsection
@section("script")
<script>
function submitForm() {
  document.getElementById("reserve_stock_updater_form").submit();
}
</script>
@endsection
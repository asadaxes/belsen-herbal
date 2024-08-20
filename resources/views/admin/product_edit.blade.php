@extends("dashboard_base")
@section("title") Admin Panel - Edit Product | Belsen Herbal & Nutraceuticals @endsection
@section("content")
<div class="row">
<div class="col-12 mb-2">
<h4 class="text-dark border-bottom"><a href="{{ route('products') }}" class="text-muted">Products List</a>/Edit Product - {{ $product->name }}</h4>
</div>
<div class="col-md-5 mx-auto">
<div class="card card-body">
<form action="{{ route('product_edit_handler') }}" method="POST"  enctype="multipart/form-data">
@csrf
<div class="mb-3">
<label for="categories" class="mb-1">Select Category</label>
<select name="category_id" id="categories" class="custom-select">
  @foreach ($categories as $category)
    <option value="{{ $category->id }}" {{ $category->id === $product->category_id ? "selected" : "" }}>{{ $category->name }}</option>
  @endforeach
</select>
</div>
<div class="d-flex flex-column mb-3">
  <img src="{{ Storage::url($product->thumbnail) }}" class="img-fluid mb-2" width="100px">
  <label for="thumbnail">Select Thumbnail</label>
  <input type="file" name="thumbnail">
</div>
<div class="mb-3">
  <label for="name">Product Name</label>
  <input type="text" name="name" class="form-control" id="name" placeholder="enter product name" value="{{ $product->name }}" required>
</div>
<input type="hidden" name="pid" value="{{ $product->id }}">
<button type="submit" class="btn btn-success w-100">Save Changes</button>
</form>
</div>
</div>
</div>
@endsection
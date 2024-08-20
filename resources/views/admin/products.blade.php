@extends("dashboard_base")
@section("title") Admin Panel - Products List | Belsen Herbal & Nutraceuticals @endsection
@section("style")
<style>
.page-item.active .page-link{
    background-color: #0f9d4e !important;
    border-color: #0f9d4e !important;
}
</style>
@endsection
@section("content")
<div class="row">
<div class="col-12">
<h4 class="text-dark border-bottom">Products List</h4>
</div>
<div class="col-12 d-flex justify-content-end mb-3">
<a href="{{ route('product_add') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add New Product</a>
</div>
<div class="col-12">
<div class="card card-body">
<table class="table table-bordered text-center" id="products_table">
<thead class="bg-success">
    <tr>
        <th>#</th>
        <th>Thumbnail</th>
        <th>Name</th>
        <th>Category</th>
        <th>Published Date</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
@if(!empty($products))
@foreach ($products as $product)
<tr>
    <td>{{ $loop->iteration }}</td>
    <td><img src="{{ Storage::url($product->thumbnail) }}" class="img-fluid" width="100px"></td>
    <td>{{ $product->name }}</td>
    <td>{{ $product->parent_category->name }}</td>
    <td>{{ \Carbon\Carbon::parse($product->date)->format('M d, Y') }}</td>
    <td class="d-flex justify-content-center">
        <a href="{{ route('product_edit', ['pid' => $product->id]) }}" class="btn btn-info btn-sm mr-1"><i class="fas fa-edit"></i></a>
        <form action="{{ route('product_delete') }}" method="POST">
            @csrf
            <input type="hidden" name="pid" value="{{ $product->id }}">
            <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
        </form>
    </td>
</tr>
@endforeach
@endif
</tbody>
</table>
</div>
</div>
</div>
@endsection
@section("script")
<script>
$("#products_table").DataTable();
</script>
@endsection
@extends("dashboard_base")
@section("title") Categories @endsection
@section("content")
<div class="row">
<div class="col-12">
<h5 class="text-dark border-bottom">Categories</h5>
</div>
<div class="col-12 d-flex justify-content-end mb-3">
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#add_category_modal"><i class="fas fa-plus"></i> Add New Category</button>
</div>
<div class="col-12">
<div class="card card-body">
<table id="category_table" class="table table-bordered table-striped text-center">
<thead>
    <tr>
        <th>#</th>
        <th>Category Name</th>
        <th>Total Products</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
@foreach ($categories as $category)
<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $category->name }}</td>
    <td>{{ $category->products->count() }}</td>
    <td>
        <button type="button" class="btn btn-warning btn-sm edit_category_modal_btn" data-toggle="modal" data-target="#edit_category_modal" data-id="{{ $category->id }}" data-name="{{ $category->name }}"><i class="fas fa-edit"></i> Edit</button>
        <form action="{{ route('category_delete') }}" method="POST" class="d-inline">
            @csrf
            <input type="hidden" name="id" value="{{ $category->id }}">
            <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>
        </form>
    </td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>

<!-- add category modal -->
<div class="modal fade" id="add_category_modal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-dark"><i class="fas fa-border-all"></i> Add Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('category_add') }}" method="POST">
      <div class="modal-body bg-light">
        @csrf
        <label for="name" class="mb-1">Give a name for new category</label>
        <input type="text" name="name" class="form-control" id="name" required>
      </div>
      <div class="modal-footer d-flex justify-content-between p-0">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- edit category modal -->
<div class="modal fade" id="edit_category_modal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-dark"><i class="fas fa-border-all"></i> Edit Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('category_edit') }}" method="POST">
      <div class="modal-body bg-light">
        @csrf
        <label for="edit_category_name" class="mb-1">Update category name</label>
        <input type="text" name="name" class="form-control" id="edit_category_name" required>
        <input type="hidden" name="id" id="edit_category_id">
      </div>
      <div class="modal-footer d-flex justify-content-between p-0">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-success">Save Changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
@endsection
@section("script")
<script>
$("#category_table").DataTable();
$(document).ready(function(){
    $(".edit_category_modal_btn").click(function(){
        let categoryId = $(this).data("id");
        let categoryName = $(this).data("name");
        $("#edit_category_name").val(categoryName);
        $("#edit_category_id").val(categoryId);
    });
});
</script>
@endsection
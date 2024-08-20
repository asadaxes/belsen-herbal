@extends("dashboard_base")
@section("title") Admin Panel - Users List | Belsen Herbal & Nutraceuticals @endsection
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
<h4 class="text-dark border-bottom">Users List</h4>
</div>
<div class="col-12 d-flex justify-content-end mb-3">
<a href="{{ route('user_add') }}" class="btn btn-primary"><i class="fas fa-user-plus"></i> Add New User</a>
</div>
<div class="col-12">
<div class="card card-body">
<table class="table table-bordered text-center" id="users_table">
<thead class="bg-success">
    <tr>
        <th>#</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Joined Date</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
@if(!empty($users))
@foreach ($users as $user)
<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $user->full_name }}</td>
    <td>{{ $user->email }}</td>
    <td>{{ \Carbon\Carbon::parse($user->joined_date)->format('M d, Y') }}</td>
    <td class="d-flex justify-content-center">
        <a href="{{ route('user_edit', ['uid' => $user->id]) }}" class="btn btn-info btn-sm mr-1"><i class="fas fa-user-edit"></i></a>
        <form action="{{ route('user_delete') }}" method="POST">
            @csrf
            <input type="hidden" name="uid" value="{{ $user->id }}">
            <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-user-times"></i></button>
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
$("#users_table").DataTable();
</script>
@endsection
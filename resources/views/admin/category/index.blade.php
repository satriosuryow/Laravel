@extends('admin.app')
@section('content')
<h3>Category</h3>
<hr>
@if (Session::has('status'))
<div class="alert alert-warning" role="alert">
    {{ Session::get('status') }}
</div>
@endif
<a href="{{ url('admin/category/create') }}" class="btn btn-md btn-primary mb-3">
    <i class="fas fa-plus"></i>Tambah Data</a>

<table class="table table-bordered">
    <thead class="bg-primary text-light">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
    </thead>

    @php
    $x = 1;
    @endphp
    @foreach($data as $cat)
    <tr>
        <td>{{ $x++ }}</td>
        <td>{{ $cat->name }}</td>
        <td><img src="{{ url($cat->image) }}" width="100px"></td>
        <td>
            <a href="{{ url('admin/category/edit/'.$cat->id) }}" class="btn btn-primary btn-md"><i class="far fa-edit"></i>Edit</a>
            <a href="{{ url('admin/category/delete/'.$cat->id) }}" class="btn btn-danger btn-md"><i class="fas fa-trash"></i>Delete</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection
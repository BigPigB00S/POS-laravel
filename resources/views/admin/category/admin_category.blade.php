@extends('layouts.app-layout')

@section('title', 'admin-category')

@section('content')

    <div class="row">
        <div class="d-flex justify-content-between mb-2">
            <h3>Category List</h3>
            <a class="btn btn-success" href="{{ route('admin.category.admin_create') }}" role="button">Create</a>
        </div>
        <!-- Blog entries-->
        <div class="col-lg-12">
            <div class="card p-3">
                <table id="datatable" class="table table-striped" style="width: 100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Category</th>
                            <th style="width: 100px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $categories)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$categories->name}}</td>
                                <td>
                                    <a class="btn btn-primary btn-sm"
                                        href={{ route('admin.category.admin_edit', ['id' => $categories->id]) }}" role="button">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Tag</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection

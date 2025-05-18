@extends('layouts.app-layout')


@section('title','Edit Category')

@section('content')
    <div class="row">
        <div class="d-flex justify-content-between mb-2">
            <h3>Edit Category</h3>
            <a class="btn btn-success" href="{{route('admin.category.admin_category')}}" role="button">Back</a>
        </div>
        <!-- Blog entries-->
        <div class="col-lg-12">
            <div class="card p-3">
                <form method="PUT" action="{{route('admin.category.update', ['id' => $categories->id])}}">
                    <div class="mb-3">
                        <label for="name" class="form-label">Category</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$category->name}}"/>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@extends('admin.master')

@section ('header')

   <strong>Edit Category</strong>
    <i class="fa fa-edit fa-lg"></i>

@endsection

@section ('breadcrumb-li')

    <li><a href="{{ route('category.index') }}">Categories</a></li>
    <li class="active">Edit</li>

@endsection


@section('content')
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <form method="post" action="{{ route('category.update',$data->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="title">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{$data->name}}">
            </div>
            <button type="submit" class="btn btn-success mt-4">Save</button>
        </form>
    </div>
</div>
@endsection
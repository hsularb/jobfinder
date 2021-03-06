@extends("admin.master")

@section ("header")

    <strong>Add New Location</strong>

@endsection

@section ('breadcrumb-li')

    <li><a href="{{ route('location.index') }}">Locations</a></li>
    <li class="active">Add New Location</li>

@endsection

@section('content')
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <form method="post" action="{{ route('location.store') }}" autocomplete="off"
            enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="title">Name</label>
                <input type="text" name="name" class="form-control" id="cast_name" placeholder="Name" value="{{old('title')}}">
            </div>
            <button type="submit" class="btn btn-success mt-4">Save</button>
        </form>
    </div>
</div>
@endsection
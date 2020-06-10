@extends("admin.master")

@section ("header")

    <strong>Add New Job</strong>

@endsection

@section ('breadcrumb-li')

    <li><a href="{{ route('job.index') }}">Jobs</a></li>
    <li class="active">Add New Job</li>

@endsection

@section('content')
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <form method="post" action="{{ route('job.store') }}" autocomplete="off" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Title" value="{{old('title')}}">
            </div>
            <div class="form-group">
                <label for="title">Company</label>
                <select name="company_id" class="form-control">
                    <option value="option_select" disabled selected>All Companies</option>
                    @foreach($company as $result)
                        <option value="{{$result->id}}">{{$result->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="title">Category</label>
                <select class="select2-multi form-control" name="states[]" multiple="multiple">
                    @foreach($category as $cs)
                        <option value="{{$cs->id}}">{{$cs->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="title">Requirements</label>
                <textarea name="requirements" class="form-control" placeholder="Requirements" value="{{old('title')}}"></textarea>
            </div>
            <div class="form-group">
                <label for="title">Short description</label>
                <textarea name="short_description" class="form-control" placeholder="Short description" value="{{old('title')}}"></textarea>
            </div>
            <div class="form-group">
                <label for="title">Long description</label>
                <textarea name="full_description" class="form-control"placeholder="Long description" value="{{old('title')}}"></textarea>
            </div>
            <div class="form-group">
                <label for="title">Salary</label>
                <input type="text" name="salary" class="form-control" placeholder="Title" value="{{old('title')}}">
            </div>
            <div class="form-group">
                <label for="title">Address</label>
                <input type="text" name="address" class="form-control" placeholder="Title" value="{{old('title')}}">
            </div>
            <div class="form-group">
                <label for="title">Locations</label>
                <select name="location_id" class="form-control">
                    <option value="option_select" disabled selected>All Locations</option>
                    @foreach($location as $result)
                        <option value="{{$result->id}}">{{$result->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="title">Job Type</label>
                <select name="type_id" class="form-control">
                    <option value="option_select" disabled selected>All Types</option>
                    @foreach($type as $result)
                        <option value="{{$result->id}}">{{$result->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-check">
                <input type="hidden" name="top_rated" value="0">
                <input type="checkbox" value="1" class="form-check-input" name="top_rated">
                <label class="form-check-label">Top rated</label>
            </div>
                            
            <button type="submit" class="btn btn-success mt-4">Save</button>        
        </form>
    </div>
</div>
@endsection

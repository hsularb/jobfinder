@extends("admin.master")

@section ("header")

    <strong>All Jobs</strong>
    <a href="{{ route('job.create') }}" type="button">Add New</a>

@endsection

@section ('breadcrumb-li')

    <li class="active">Job</li>

@endsection


@section('content')
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="box box-primary">
            <div class="box-body">
                  <div class="dataTables_wrapper form-inline dt-bootstrap">
                      <div class="table-responsive">
                            <table class="table table-bordered table-hover dataTable">
                <thead>
                  <th>#</th>
                  <th>Title</th>
                  <th>Company</th>
                  <th>Category</th>
                  <th>Amount</th>
                  <th>Top rated</th>
                  <th>Job Type</th>
                  <th>Requirement</th>
                  <th>Short Description</th>
                  <th>Full Description</th>
                  <th>Address</th>
                  <th>Location</th>
                  <th class="disabled-sorting text-right">Actions</th>
                </thead>
                <tbody>
                @foreach($data as $row)
                <tr>
                    <td>{{$row->id}}</td>
                    <td>{{$row->title}}</td>
                    <td>{{$row->company->name}}</td>
                    <td>
                      @foreach($row->category as $result)
                        {{$result->name}}
                      @endforeach
                    </td>
                    <td>{{$row->salary}}</td>
                    <td>{{$row->top_rated}}</td>
                    <td>{{$row->type->name}}</td>
                    <td>{{$row->requirements}}</td>
                    <td>{{$row->short_description}}</td>
                    <td>{{$row->full_description}}</td>
                    <td>{{$row->address}}</td>
                    <td>{{$row->location->name}}</td>
                    <td class="td-actions text-right">
                      <a type="button" href="#" class="btn btn-info btn-icon btn-sm btn-round">
                        
                      </a>
                      <a type="button" href="{{ route('job.edit',$row->id) }}" class="btn btn-success btn-icon btn-sm btn-round">
                      </a>

                      <form action="{{ route('job.destroy', $row->id) }}" method="post" style="display:inline-block;" class ="delete-form">
                        @csrf
                        @method('delete')
                        <button type="button" class="btn btn-danger btn-icon btn-sm delete-button btn-round " onclick="confirm('{{ __('Are you sure you want to delete this user?') }}') ? this.parentElement.submit() : ''">
                        </button>
                      </form>
                    </td>
                </tr>
                @endforeach
              </tbody>
                            </table>
                        </div>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection
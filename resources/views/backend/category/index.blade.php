@extends("admin.master")

@section ("header")

    <strong>All Categories</strong>
    <a href="{{route('category.create')}}" type="button">Add New</a>

@endsection

@section ('breadcrumb-li')

    <li class="active">Category</li>

@endsection


@section("content")
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="box box-primary">
            <div class="box-body">
                  <div class="dataTables_wrapper form-inline dt-bootstrap">
                      <div class="table-responsive">
                            <table class="table table-bordered table-hover dataTable">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Name</th>
                                  <th class="text-right">Actions</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($data as $value)
                                <tr>
                                    <td>{{$value->id}}</td>
                                    <td>{{$value->name}}</td>
                                    <td class="text-right">
                                      <a type="button" href="#" rel="tooltip" class="btn btn-info btn-icon btn-sm btn-round" data-original-title="" title="">
                                        <i class="now-ui-icons ui-1_zoom-bold"></i>
                                      </a>
                                      <a type="button" href="{{ route('category.edit',$value->id) }}" class="btn btn-success btn-icon btn-sm btn-round">
                                      </a>

                                      <form action="{{ route('category.destroy', $value->id) }}" method="post" style="display:inline-block;" class ="delete-form">
                                        @csrf
                                        @method('delete')
                                        <button type="button" class="btn btn-danger" onclick="confirm('{{ __('Are you sure you want to delete this user?') }}') ? this.parentElement.submit() : ''">
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
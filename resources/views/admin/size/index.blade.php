@extends('admin.master')

@section('title','Manage Size')

@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Size Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Size</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage Size</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">All Size Info</h3>
                </div>
                <div class="card-body">
                    <p class="text-success">{{ session('message') }}</p>

                    <div class="table-responsive">
                        <table id="example3" class="table table-bordered text-nowrap border-bottom">
                            <thead>
                            <tr>
                                <th class="border-bottom-0">Sl No.</th>
                                <th class="border-bottom-0">Size Name</th>
                                <th class="border-bottom-0">Code</th>
                                <th class="border-bottom-0">Description</th>
                                <th class="border-bottom-0">Status</th>
                                <th class="border-bottom-0">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($sizes as $size)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $size->name }}</td>
                                    <td>{{ $size->code }}</td>
                                    <td>{{ $size->description }}</td>
                                    <td>{{ $size->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                    <td class="d-flex">
                                        <a href="{{ route('size.edit',$size->id) }}" class="btn btn-success btn-sm me-3">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <form action="{{ route('size.destroy',$size->id) }}" method="post">
                                            @method("DELETE")
                                            @csrf
                                            <button type="submit"  class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete?') ">
                                                <i class="fa fa-trash"></i>
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
@endsection

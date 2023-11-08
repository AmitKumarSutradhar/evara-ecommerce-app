@extends('admin.master')

@section('title','Edit Size')

@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Size Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Size</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Size</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Edit Size</h3>
                </div>
                <div class="card-body">
                    <p class="text-success">{{ session('message') }}</p>
                    <form class="form-horizontal" action="{{ route('size.update',$size->id) }}" method="post">
                        @csrf
                        <div class="row mb-4">
                            <label for="lastName" class="col-md-3 form-label">Color Name</label>
                            <div class="col-md-9">
                                <input type="text" name="name" value="{{ $size->name }}" id="firstName" class="form-control" placeholder="Size Name" />
                                <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="lastName" class="col-md-3 form-label">Color Code</label>
                            <div class="col-md-9">
                                <input type="text" name="code" value="{{ $size->code }}" id="firstName" class="form-control" placeholder="Size Code" />
                                <span class="text-danger">{{ $errors->has('code') ? $errors->first('code') : '' }}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="lastName" class="col-md-3 form-label">Size Description</label>
                            <div class="col-md-9">
                                <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Size Description">{{ $size->description }}</textarea>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="email" class="col-md-3 form-label">Published Status</label>
                            <div class="col-md-9 pt-3">
                                <label class=""><input type="radio" name="status" value="1" {{ $size->status == 1 ? 'checked' : '' }}><span class="text-13">Published</span></label>
                                <label class=""><input type="radio" name="status" value="0" {{ $size->status == 0 ? 'checked' : '' }}><span class="text-13">Unpublished</span></label>
                            </div>
                        </div>
                        <button class="btn btn-primary rounded-0 float-end" type="submit">Create New Size</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

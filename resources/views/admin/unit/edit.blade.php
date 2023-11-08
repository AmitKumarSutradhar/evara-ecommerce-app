@extends('admin.master')

@section('title','Edit Unit')

@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Unit Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Unit</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Unit</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Edit Unit</h3>
                </div>
                <div class="card-body">
                    <p class="text-success">{{ session('message') }}</p>
                    <form class="form-horizontal" action="{{ route('unit.update',$unit->id) }}" method="post">
                        @method('PUT')
                        @csrf
                        <div class="row mb-4">
                            <label for="lastName" class="col-md-3 form-label">Unit Name</label>
                            <div class="col-md-9">
                                <input type="text" name="name" value="{{ $unit->name }}" id="firstName" class="form-control" placeholder="Unit Name" />
                                <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="lastName" class="col-md-3 form-label">Unit Code</label>
                            <div class="col-md-9">
                                <input type="text" name="code" value="{{ $unit->code }}" id="firstName" class="form-control" placeholder="Unit Code" />
                                <span class="text-danger">{{ $errors->has('code') ? $errors->first('code') : '' }}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="lastName" class="col-md-3 form-label">Unit Description</label>
                            <div class="col-md-9">
                                <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Unit Description">{{ $unit->description }}"</textarea>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="email" class="col-md-3 form-label">Published Status</label>
                            <div class="col-md-9 pt-3">
                                <label class=""><input type="radio" name="status" value="1" {{ $unit->status == 1 ? 'checked' : '' }}><span class="text-13">Published</span></label>
                                <label class=""><input type="radio" name="status" value="0" {{ $unit->status == 0 ? 'checked' : '' }}><span class="text-13">Unpublished</span></label>
                            </div>
                        </div>
                        <button class="btn btn-primary rounded-0 float-end" type="submit">Update Unit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

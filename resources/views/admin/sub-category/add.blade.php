@extends('admin.master')

@section('title','Manage Category Page')

@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Sub Category Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Sub Category</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Sub Category</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Add Sub Category</h3>
                </div>
                <div class="card-body">
                    <p class="text-success">{{ session('message') }}</p>
                    <form class="form-horizontal" action="{{ route('sub-category.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Category Name</label>
                            <div class="col-md-9">
                                <select name="category_id" id="" class="form-control" required>
                                    <option value="" disabled selected>-- Select Category --</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" >{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ $errors->has('category_id') ? $errors->first('category_id') : '' }}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="lastName" class="col-md-3 form-label">Sub Category Name</label>
                            <div class="col-md-9">
                                <input type="text" name="name" value="{{ old('name') }}" id="firstName" class="form-control" placeholder="Sub Category Description" />
                                <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="lastName" class="col-md-3 form-label">Sub Category Description</label>
                            <div class="col-md-9">
                                <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Sub Category Description"></textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="email" class="col-md-3 form-label">Sub Category Image</label>
                            <div class="col-md-9">
                                <input class="form-control" id="imgInp"  type="file" name="image">
                                <img src="" alt="" id="categoryImage" class="mt-3">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="email" class="col-md-3 form-label">Published Status</label>
                            <div class="col-md-9 pt-3">
                                <label class=""><input type="radio" name="status" value="1" checked><span class="text-13">Published</span></label>
                                <label class=""><input type="radio" name="status" value="0"><span class="text-13">Unpublished</span></label>
                            </div>
                        </div>
                        <button class="btn btn-primary rounded-0 float-end" type="submit">Create New Sub Category</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

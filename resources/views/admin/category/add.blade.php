@extends('admin.master')

@section('title','Manage Category Page')

@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Category Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Add Category</h3>
                </div>
                <div class="card-body">
                    <p class="text-success">{{ session('message') }}</p>
                    <form class="form-horizontal">
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Category Name</label>
                            <div class="col-md-9">
                                <input class="form-control" name="name" id="firstName" placeholder="Enter Category Name" type="text">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="lastName" class="col-md-3 form-label">Category Description</label>
                            <div class="col-md-9">
                                <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Category Description"></textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="email" class="col-md-3 form-label">Category Image</label>
                            <div class="col-md-9">
                                <input class="form-control" id=""  type="file" name="image">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="email" class="col-md-3 form-label">Published Status</label>
                            <div class="col-md-9 pt-3">
                                <label class=""><input type="radio" name="status" value="1" checked><span class="text-13">Published</span></label>
                                <label class=""><input type="radio" name="status" value="0"><span class="text-13">Unpublished</span></label>
                            </div>
                        </div>
                        <button class="btn btn-primary rounded-0 float-end" type="submit">Create New Category</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

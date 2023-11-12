@extends('admin.master')

@section('title','Add Product')

@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Product Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Product</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Product</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Add Product Form</h3>
                </div>
                <div class="card-body">
                    <p class="text-success">{{ session('message') }}</p>
                    <form class="form-horizontal" action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Category Name</label>
                            <div class="col-md-9">
                                <select name="category_id" onchange="setSubCategory(this.value)" id="" class="form-control" required>
                                    <option value="" disabled selected>-- Select Category --</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" >{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ $errors->has('category_id') ? $errors->first('category_id') : '' }}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Sub Category Name</label>
                            <div class="col-md-9">
                                <select name="sub_category_id" id="subCategoryId" class="form-control" required>
                                    <option value="" disabled selected>-- Select Sub Category --</option>
                                    @foreach($sub_categories as $sub_category)
                                        <option value="{{ $sub_category->id }}" >{{ $sub_category->name }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ $errors->has('sub_category_id') ? $errors->first('sub_category_id') : '' }}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Brand Name</label>
                            <div class="col-md-9">
                                <select name="brand_id" id="" class="form-control" required>
                                    <option value="" disabled selected>-- Select Brand --</option>
                                    @foreach($brands as $brand)
                                        <option value="{{ $brand->id }}" >{{ $brand->name }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ $errors->has('brand_id') ? $errors->first('brand_id') : '' }}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Unit Name</label>
                            <div class="col-md-9">
                                <select name="unit_id" id="" class="form-control" required>
                                    <option value="" disabled selected>-- Select Unit --</option>
                                    @foreach($units as $unit)
                                        <option value="{{ $unit->id }}" >{{ $unit->name }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ $errors->has('unit_id') ? $errors->first('unit_id') : '' }}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Color Name</label>
                            <div class="col-md-9 form-group">
                                <select multiple name="color_id[]" id="" class="form-control select2-show-search form-select" required data-placeholder="Select Color">
                                    @foreach($colors as $colors)
                                        <option value="{{ $colors->id }}" >{{ $colors->name }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ $errors->has('color_id') ? $errors->first('color_id') : '' }}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Size Name</label>
                            <div class="col-md-9 form-group">
                                <select multiple name="size_id[]" id="" class="form-control select2-show-search form-select" required data-placeholder="Select Product Size">
                                    @foreach($sizes as $size)
                                        <option value="{{ $size->id }}" >{{ $size->name }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ $errors->has('size_id') ? $errors->first('size_id') : '' }}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="lastName" class="col-md-3 form-label">Product Name</label>
                            <div class="col-md-9">
                                <input type="text" name="name" value="{{ old('name') }}" id="firstName" class="form-control" placeholder="Product Name" />
                                <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="productCode" class="col-md-3 form-label">Product Code</label>
                            <div class="col-md-9">
                                <input type="text" name="code" value="{{ old('code') }}" id="productCode" class="form-control" placeholder="Product Code" />
                                <span class="text-danger">{{ $errors->has('code') ? $errors->first('code') : '' }}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="shortDescription" class="col-md-3 form-label">Short Description</label>
                            <div class="col-md-9">
                                <textarea name="short_description" id="shortDescription" cols="30" rows="10" class="form-control" placeholder="Short Description"></textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="summernote" class="col-md-3 form-label">Long Description</label>
                            <div class="col-md-9">
                                <textarea name="long_description" id="summernote" cols="30" rows="10" class="form-control" placeholder="Long Description"></textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="email" class="col-md-3 form-label">Product Image</label>
                            <div class="col-md-9">
                                <input type="file" class="dropify" name="image" data-height="200" />
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="email" class="col-md-3 form-label">Product Other Image</label>
                            <div class="col-md-9">
                                <input id="demo" type="file" name="other_image" accept=" image/jpeg, image/png, text/html, application/zip, text/css, text/js" multiple />
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="email" class="col-md-3 form-label">Product Price</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <input class="form-control" name="regular_price" id=""  type="number" placeholder="Regular Price">
                                    <input class="form-control" name="selling_price" id=""  type="number" placeholder="Selling Price">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="stockAmount" class="col-md-3 form-label">Stock Amount</label>
                            <div class="col-md-9">
                                <input class="form-control" name="stock_amount" id="stockAmount"  type="number" placeholder="Stock Amount">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="email" class="col-md-3 form-label">Published Status</label>
                            <div class="col-md-9 pt-3">
                                <label class=""><input type="radio" name="status" value="1" checked><span class="text-13">Published</span></label>
                                <label class=""><input type="radio" name="status" value="0"><span class="text-13">Unpublished</span></label>
                            </div>
                        </div>
                        <button class="btn btn-primary rounded-0 float-end" type="submit">Create New Product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

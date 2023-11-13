@extends('admin.master')

@section('title','Product Details')

@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Product Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Product</a></li>
                <li class="breadcrumb-item active" aria-current="page">Product Detail</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Product Details Information</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <tr>
                            <th>Product Id</th>
                            <td>123</td>
                        </tr>
                        <tr>
                            <th>Product Name</th>
                            <td>{{ $product->name }}</td>
                        </tr>
                        <tr>
                            <th>Product Code</th>
                            <td>123</td>
                        </tr>
                        <tr>
                            <th>Category Name</th>
                            <td>123</td>
                        </tr>
                        <tr>
                            <th>Sub Category Name</th>
                            <td>123</td>
                        </tr>
                        <tr>
                            <th>Brand Name</th>
                            <td>123</td>
                        </tr>
                        <tr>
                            <th>Product Color</th>
                            <td>
                                @foreach($product->colors as $color)
                                    <span>{{ $color->color->name  }},</span>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>Product Size</th>
                            <td>123</td>
                        </tr>
                        <tr>
                            <th>Short Description</th>
                            <td>123</td>
                        </tr>
                        <tr>
                            <th>Long Description</th>
                            <td>123</td>
                        </tr>
                        <tr>
                            <th>Price</th>
                            <td>
                                <span>Regular Price: 1123</span> <br/>
                                <span>Selling Price: 1123</span>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

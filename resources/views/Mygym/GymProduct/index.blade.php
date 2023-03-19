@extends('Mygym.Master.masterLayout')
@section('title', 'My Products|MyGym')
@section('page', 'Product Manager')
@section('content')
    <div class="row">

        <div class="col-lg-12">
            <div class="card-style mb-30">
                <div class="title d-flex flex-wrap align-items-center justify-content-between">
                    <div class="left">
                        <a href="{{ route('my-gym-products.create') }}" class="btn btn-primary btn-md"><b>New Product</b> </a>
                        {{-- @if (Session::has('msg'))
                            <p class="alert alert-info">{{ Session::get('msg') }}</p>
                        @endif --}}

                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table top-selling-table">
                        <thead>
                            <tr>
                                <th>
                                    <h6 class="text-sm text-medium">Title</h6>
                                </th>
                                <th class="min-width">
                                    <h6 class="text-sm text-medium">
                                        Brand</i>
                                    </h6>
                                </th>
                                <th class="min-width">
                                    <h6 class="text-sm text-medium">
                                        Total Quantity</i>
                                    </h6>
                                </th>
                                <th class="min-width">
                                    <h6 class="text-sm text-medium">
                                        Price</i>
                                    </h6>
                                </th>

                                <th class="min-width">
                                    <h6 class="text-sm text-medium">
                                        Status</i>
                                    </h6>
                                </th>
                                <th>
                                    <h6 class="text-sm text-medium text-end">
                                        Actions</i>
                                    </h6>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($my_products as $product)
                                <tr>
                                    <td>
                                        <div class="product">
                                            <div class="image">
                                                <img src="http://127.0.0.1:8002/Gym/assets/images/products/product-mini-1.jpg"
                                                    alt="" />
                                            </div>
                                            <p class="text-sm">{{ $product->name }}</p>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-sm">{{ $product->brand_name  }}</p>
                                    </td>
                                    {{-- <td>
                                    <p class="text-sm">$345</p>
                                </td> --}}
                                    <td>
                                        <span class="">{{ $product->quantiy_available  }}</span>
                                    </td>

                                    <td>
                                        <span class="">{{ $product->price  }}</span>
                                    </td>

                                    <td>
                                        <span class="status-btn close-btn">{{ $product->status == 0 ? "Pending" : "Approved"  }}</span>
                                    </td>
                                    <td>
                                        <div class="action justify-content-end">
                                            <a href="{{ route('my-gym-products.show', $product->slug) }}"><i
                                                    class="text-success lni lni-eye"></i></a>


                                            <button class="more-btn ml-10 dropdown-toggle" id="moreAction1"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="lni lni-more-alt"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="moreAction1">
                                                <li class="dropdown-item">
                                                    <a href="#0" class="text-gray">Remove</a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="{{ route('my-gym-products.edit', $product->slug) }}" class="text-gray">Edit</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

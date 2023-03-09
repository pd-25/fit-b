@extends('Mygym.Master.masterLayout')
@section('title', 'Create-Product|MyGym')
@section('page', 'Create Product')
@section('content')
    <div class="form-elements-wrapper mb-4">
        <form action="{{ route('my-gym-products.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-6">
                    <div class="card-style mb-30">
                        <div class="input-style-1">
                            <label>Product Title <span class="text-danger">*</span></label>
                            <input name="name" type="text" value="{{ old('name') }}" />
                            @if ($errors->has('name'))
                                <div class="alert-danger">{{ $errors->first('name') }}</div>
                            @endif
                        </div>

                        <div class="input-style-1">
                            <label>Brand <span class="text-danger">*</span></label>
                            <input name="brand_name" type="text" value="{{ old('brand_name') }}" />
                            @if ($errors->has('brand_name'))
                                <div class="alert-danger">{{ $errors->first('brand_name') }}</div>
                            @endif
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-style-1">
                                    <label>Product Manufacture Date <span class="text-danger">*</span></label>
                                    <input type="date" value="{{ old('manufacture_date') }}" name="manufacture_date">
                                    @if ($errors->has('manufacture_date'))
                                        <div class="alert-danger">{{ $errors->first('manufacture_date') }}</div>
                                    @endif
                                </div>


                            </div>
                            <div class="col-md-6">
                                <div class="input-style-1">
                                    <label>Product Expiry Date <span class="text-danger">*</span></label>
                                    <input type="date" value="{{ old('expiry_date') }}" name="expiry_date">
                                    @if ($errors->has('expiry_date'))
                                        <div class="alert-danger">{{ $errors->first('expiry_date') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="input-style-1">
                            <label>Total Quantity Available <span class="text-danger">*</span></label>
                            <input value="{{ old('quantiy_available') }}" name="quantiy_available" type="number" />
                            @if ($errors->has('quantiy_available'))
                                <div class="alert-danger">{{ $errors->first('quantiy_available') }}</div>
                            @endif
                        </div>

                        <div class="input-style-1">
                            <label>Product Type <span class="text-danger">*</span></label>
                            <div class="select-style-2">
                                <div class="select-position">
                                    <select value="{{ old('product_type') }}" name="product_type" class="form-control">
                                        <option value="Powder">Powder</option>
                                        <option value="Liquid">Liquid</option>
                                        <option value="Tablet">Tablet</option>
                                    </select>
                                    @if ($errors->has('product_type'))
                                        <div class="alert-danger">{{ $errors->first('product_type') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="input-style-1">
                            <label>Barcode (Optional)</label>
                            <input type="file" value="{{ old('barcode_image') }}" name="barcode_image">
                            @if ($errors->has('barcode_image'))
                                <div class="alert-danger">{{ $errors->first('barcode_image') }}</div>
                            @endif
                        </div>

                        <div class="input-style-1">
                            <label>Upload Images of the Product <span class="text-danger">*</span></label>
                            <input type="file" value="{{ old('name') }}" name="product_image[]" multiple>
                            @if ($errors->has('product_image'))
                                <div class="alert-danger">{{ $errors->first('product_image') }}</div>
                            @endif
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card-style mb-30">
                        <div class="input-style-1">
                            <label>Product Description <span class="text-danger">*</span></label>
                            <textarea value="{{ old('description') }}" name="description" cols="30" rows="10"></textarea>
                            @if ($errors->has('description'))
                                <div class="alert-danger">{{ $errors->first('description') }}</div>
                            @endif
                        </div>
                    </div>
                    <h6>Pricing Details</h6>
                    <div class="card-style mb-30">
                        <div class="input-style-1">
                            <label>Product Currency/Price <span class="text-danger">*</span></label>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="select-style-2">
                                        <div class="select-position">
                                            <select value="{{ old('currency') }}" name="currency" class="form-control">
                                                <option value="INR">INR(₹)</option>
                                                <option value="USD">USD($)</option>
                                            </select>
                                            @if ($errors->has('currency'))
                                                <div class="alert-danger">{{ $errors->first('currency') }}</div>
                                            @endif
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <input value="{{ old('price') }}" name="price" type="number" />
                                    @if ($errors->has('price'))
                                        <div class="alert-danger">{{ $errors->first('price') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="input-style-1">
                            <label>Discount Price (Optional)</label>
                            <input value="{{ old('discount_price') }}" name="discount_price" type="number" />
                            @if ($errors->has('discount_price'))
                                <div class="alert-danger">{{ $errors->first('discount_price') }}</div>
                            @endif
                        </div>

                        <div class="input-style-1">
                            <label>Referrel code for member(Optional)</label>
                            <input value="{{ old('referral_code_for_member') }}" name="referral_code_for_member"
                                type="text" />
                            @if ($errors->has('referral_code_for_member'))
                                <div class="alert-danger">{{ $errors->first('referral_code_for_member') }}</div>
                            @endif
                        </div>
                    </div>
                </div>


            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary btn-lg">Create</button>
            </div>
        </form>
    </div>
@endsection

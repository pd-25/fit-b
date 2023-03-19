@extends('Mygym.Master.masterLayout')
@section('title', 'Edit-Product|MyGym')
@section('page', 'Edit Product')
@section('content')
    <div class="form-elements-wrapper mb-4">
        <form action="{{ route('my-gym-products.update', $gym_product->slug) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="col-lg-6">
                    <div class="card-style mb-30">
                        <div class="input-style-1">
                            <label>Product Title <span class="text-danger">*</span></label>
                            <input name="name" type="text" value="{{ $gym_product->name }}" />
                            @if ($errors->has('name'))
                                <div class="alert-danger">{{ $errors->first('name') }}</div>
                            @endif
                        </div>

                        <div class="input-style-1">
                            <label>Brand <span class="text-danger">*</span></label>
                            <input name="brand_name" type="text" value="{{ $gym_product->brand_name }}" />
                            @if ($errors->has('brand_name'))
                                <div class="alert-danger">{{ $errors->first('brand_name') }}</div>
                            @endif
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-style-1">
                                    <label>Product Manufacture Date <span class="text-danger">*</span></label>
                                    <input type="date" value="{{ $gym_product->manufacture_date }}" name="manufacture_date">
                                    @if ($errors->has('manufacture_date'))
                                        <div class="alert-danger">{{ $errors->first('manufacture_date') }}</div>
                                    @endif
                                </div>


                            </div>
                            <div class="col-md-6">
                                <div class="input-style-1">
                                    <label>Product Expiry Date <span class="text-danger">*</span></label>
                                    <input type="date" value="{{ $gym_product->expiry_date }}" name="expiry_date">
                                    @if ($errors->has('expiry_date'))
                                        <div class="alert-danger">{{ $errors->first('expiry_date') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="input-style-1">
                            <label>Total Quantity Available <span class="text-danger">*</span></label>
                            <input value="{{ $gym_product->quantiy_available }}" name="quantiy_available" type="number" />
                            @if ($errors->has('quantiy_available'))
                                <div class="alert-danger">{{ $errors->first('quantiy_available') }}</div>
                            @endif
                        </div>

                        <div class="input-style-1">
                            <label>Product Type <span class="text-danger">*</span></label>
                            <div class="select-style-2">
                                <div class="select-position">
                                    <select value="{{ old('product_type') }}" name="product_type" class="form-control">
                                        <option value="Powder" {{ $gym_product->product_type == "Powder" ? "selected" : "" }}>Powder</option>
                                        <option value="Liquid" {{ $gym_product->product_type == "Liquid" ? "selected" : "" }}>Liquid</option>
                                        <option value="Tablet" {{ $gym_product->product_type == "Tablet" ? "selected" : "" }}>Tablet</option>
                                    </select>
                                    @if ($errors->has('product_type'))
                                        <div class="alert-danger">{{ $errors->first('product_type') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @if (isset($gym_product->barcode_image) && !empty($gym_product->barcode_image && File::exists(public_path('storage/ProductBarcodeImages/' . $gym_product->barcode_image))))
                        <div class="input-style-1">
                            <div class="row">
                                <div class="col-md-6">
                            <label>Current Barcode</label>
                                    
                                </div>

                                <div class="col-md-6">
                            <img src="{{ asset('storage/ProductBarcodeImages/'. $gym_product->barcode_image) }}" alt="Barcode-Image" height="100px" width="100px">
                                    
                                </div>
                            </div>
                        </div>
                        @endif
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
                            <textarea name="description" cols="30" rows="10">{{ $gym_product->description }}</textarea>
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
                                            <select  name="currency" class="form-control">
                                                <option value="INR" {{ $gym_product->currency ==  "INR" ? "selected" : ""}}>INR(₹)</option>
                                                <option value="USD" {{ $gym_product->currency ==  "USD" ? "selected" : ""}}>USD($)</option>
                                            </select>
                                            @if ($errors->has('currency'))
                                                <div class="alert-danger">{{ $errors->first('currency') }}</div>
                                            @endif
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <input value="{{ $gym_product->price }}" name="price" type="number" />
                                    @if ($errors->has('price'))
                                        <div class="alert-danger">{{ $errors->first('price') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="input-style-1">
                            <label>Discount Price (Optional)</label>
                            <input value="{{ $gym_product->discount_price }}" name="discount_price" type="number" />
                            @if ($errors->has('discount_price'))
                                <div class="alert-danger">{{ $errors->first('discount_price') }}</div>
                            @endif
                        </div>

                        <div class="input-style-1">
                            <label>Referrel code for member(Optional)</label>
                            <input value="{{ $gym_product->referral_code_for_member }}" name="referral_code_for_member"
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

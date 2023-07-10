
@extends('Admin.Main.mainLayout')
@section('title', 'Admin-Products | Fitbouncer')
@section('content')
<div class="card">
    <div class="card-title">
      
        
        <div class="float-left ml-2">
            <input class="form-control"  type="search" placeholder="Search user">
        </div>
        

        
        <a href="{{ route("users.create") }}" class="btn btn-sm btn-primary float-right"><i class="ti-plus"></i></a>
    </div><br>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Seller</th>
                        <th>Brand</th>
                        <th>Upload Dt</th>
                        <th>Exp Dt</th>
                        <th>Price</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        
                    
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->product_seller->name }}</td>
                        <td>{{ $product->brand_name }}</td>
                        <td>{{ $product->created_at }}</td>
                        <td>{{ $product->expiry_date }}</td>

                        <td><span class="badge badge-primary">{{ $product->price }}</span></td>
                        <td><span class="badge badge-primary">Sale</span></td>
                        <td>January 22</td>
                        <td class="color-primary">$21.56</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
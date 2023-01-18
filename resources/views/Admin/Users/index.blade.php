
@extends('Admin.Main.mainLayout')
@section('title', 'Users | Fitbouncer')
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
                        <th>Profile Image</th>
                        <th>Status</th>
                        <th>Point</th>
                        <th>Date</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Kolor Tea Shirt For Man</td>
                        <td>Kolor Tea Shirt For Man</td>
                        <td><span class="badge badge-primary">Sale</span></td>
                        <td><span class="badge badge-primary">Sale</span></td>
                        <td>January 22</td>
                        <td class="color-primary">$21.56</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Kolor Tea Shirt For Women</td>
                        <td>Kolor Tea Shirt For Women</td>
                        <td><span class="badge badge-success">Tax</span></td>
                        <td><span class="badge badge-success">Tax</span></td>
                        <td>January 30</td>
                        <td class="color-success">$55.32</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Blue Backpack For Baby</td>
                        <td>Blue Backpack For Baby</td>
                        <td><span class="badge badge-danger">Extended</span></td>
                        <td><span class="badge badge-danger">Extended</span></td>
                        <td>January 25</td>
                        <td class="color-danger">$14.85</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
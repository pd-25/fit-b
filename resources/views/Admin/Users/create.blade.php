@extends('Admin.Main.mainLayout')
@section('title', 'Add-User | Fitbouncer')
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card">
            <div class="card-title">
                <h4>Create user</h4>
                
            </div>
            <div class="card-body">
                <div class="horizontal-form">
                    <form class="form-horizontal" action="{{ route("users.create") }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control" placeholder="Enter name">
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" name="email" class="form-control" placeholder="Email">
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Phone</label>
                            <div class="col-sm-10">
                                <input type="number" name="phone" class="form-control" placeholder="Phone">
                                @if ($errors->has('phone'))
                                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Address</label>
                            <div class="col-sm-10">
                                <input type="text" name="address" class="form-control" placeholder="address">
                                @if ($errors->has('address'))
                                    <span class="text-danger">{{ $errors->first('address') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Image</label>
                            <div class="col-sm-10">
                                <input type="file" name="image" class="form-control">
                                @if ($errors->has('image'))
                                    <span class="text-danger">{{ $errors->first('image') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">Create</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /# column -->
</div>
@endsection
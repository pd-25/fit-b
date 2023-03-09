@extends('Mygym.Master.masterLayout')
@section('title', 'Event|MyGym')
@section('page', 'Event Manager')
@section('content')
    <div class="row">

        <div class="col-lg-12">
            <div class="card-style mb-30">
                <div class="title d-flex flex-wrap align-items-center justify-content-between">
                    <div class="left">
                        <a href="{{ route('my-gym-events.create') }}" class="btn btn-primary btn-md"><b>New event</b> </a>
                        @if(Session::has('msg'))
                        <p class="alert alert-info">{{ Session::get('msg') }}</p>
                    @endif

                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table top-selling-table">
                        <thead>
                            <tr>
                                <th>
                                    <h6 class="text-sm text-medium">Event Name</h6>
                                </th>
                                <th class="min-width">
                                    <h6 class="text-sm text-medium">
                                        Total Subevent</i>
                                    </h6>
                                </th>
                                {{-- <th class="min-width">
                                    <h6 class="text-sm text-medium">
                                        Total Participant</i>
                                    </h6>
                                </th> --}}
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
                            @foreach ($my_gym_events as $gym_event)
                                
                            <tr>
                                <td>
                                    <div class="product">
                                        <div class="image">
                                            <img src="http://127.0.0.1:8002/Gym/assets/images/products/product-mini-1.jpg"
                                                alt="" />
                                        </div>
                                        <p class="text-sm">{{ $gym_event->title }}</p>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-sm">{{ $gym_event->total_subevent }}</p>
                                </td>
                                {{-- <td>
                                    <p class="text-sm">$345</p>
                                </td> --}}
                                <td>
                                    <span class="status-btn close-btn">{{ $gym_event->status }}</span>
                                </td>
                                <td>
                                    <div class="action justify-content-end">
                                     <a  href="{{ route('my-gym-events.show',$gym_event->slug ) }}"><i class="text-success lni lni-eye"></i></a>
                                            
                                       
                                        <button class="more-btn ml-10 dropdown-toggle" id="moreAction1"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="lni lni-more-alt"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="moreAction1">
                                            <li class="dropdown-item">
                                                <a href="#0" class="text-gray">Remove</a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="#0" class="text-gray">Edit</a>
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

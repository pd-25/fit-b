@extends('Mygym.Master.masterLayout');
@section('title', 'Create-Event|MyGym')
@section('content')
    <form action="{{ route('my-gym-events.store') }}" method="POST" class="mb-5" enctype="multipart/form-data">
        @csrf
        <div class="row justify-content-center">

            <div class="col-lg-12">
                <!-- input style start -->
                <div class="card-style mb-30">
                    <h6 class="mb-25">Fill event details</h6>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-style-1">
                                <h6>Event title</label>
                                    <input type="text" placeholder="Full Name" name="title"
                                        value="{{ old('title') }}" />
                                    @if ($errors->has('title'))
                                        <div class="alert-danger">{{ $errors->first('title') }}</div>
                                    @endif
                            </div>
                            <div class="input-style-2">
                                <label>Venue </label>
                                <input type="text" placeholder="venue" name="venue" value="{{ old('venue') }}" />
                                @if ($errors->has('venue'))
                                    <div class="alert-danger">{{ $errors->first('venue') }}</div>
                                @endif
                            </div>
                            <div class="input-style-2">
                                <label>Start date </label>
                                <input type="date" name="start_date" value="{{ old('start_date') }}" />
                                @if ($errors->has('start_date'))
                                    <div class="alert-danger">{{ $errors->first('start_date') }}</div>
                                @endif
                            </div>

                            <div class="input-style-2">
                                <label>End date </label>
                                <input type="date" name="end_date" value="{{ old('end_date') }}" />
                                @if ($errors->has('end_date'))
                                    <div class="alert-danger">{{ $errors->first('end_date') }}</div>
                                @endif
                            </div>

                            <div class="input-style-2">
                                <label>Event banner image </label>
                                <input type="file" name="image" value="{{ old('image') }}" class="form-control" />
                                @if ($errors->has('image'))
                                    <div class="alert-danger">{{ $errors->first('image') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                           
                            
                            <div class="input-style-2">
                                <h6>Write in brief </h6>
                                <input type="text" placeholder="Short description" name="short_desc"
                                    value="{{ old('short_desc') }}" />
                                @if ($errors->has('short_desc'))
                                    <div class="alert-danger">{{ $errors->first('short_desc') }}</div>
                                @endif

                            </div>
                            <div class="input-style-3">
                                <label>Write all about this event </label>
                                <textarea name="description" id="summernote" cols="30" rows="20"
                                    placeholder="Discuss about the advantage, prize, venue, criteria etc ">{{ old('description') }}</textarea>
                                @if ($errors->has('description'))
                                    <div class="alert-danger">{{ $errors->first('description') }}</div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="text-center">
                        <h2>add sub-events</h2>
                        <a class="btn btn-primary btn-lg" href="#subevents"><i class="lni lni-angle-double-down"></i></a>
                    </div>


                </div>

            </div>
        </div>

        <div class="row" id="subevents">
            <div class="col-lg-6">
                <div class="card-style mb-30">
                    <div class="input-style-2">
                        <h2 class="text-center">
                            Sub-event- <button class="btn btn-circle btn-primary" disabled>1</button>
                        </h2>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <div class="input-style-1">
                                    <h6>Sub-event name</label>
                                        <input type="text" placeholder="Full Name"
                                            name="addMoreSubEvent[0][sub_event_name]"
                                            value="{{ old('sub_event_name') }}" />
                                        @if ($errors->has('sub_event_name'))
                                            <div class="alert-danger">{{ $errors->first('sub_event_name') }}</div>
                                        @endif
                                </div>

                                {{-- <div class="input-style-1">
                                    <label>Start date </label>
                                    <input type="date" name="addMoreSubEvent[0][start_date]"
                                        value="{{ old('start_date') }}" />
                                    @if ($errors->has('start_date'))
                                        <div class="alert-danger">{{ $errors->first('start_date') }}</div>
                                    @endif
                                </div> --}}


                            </div>
                            <div class="col-md-6">

                                <div class="input-style-2">
                                    <label>Participant age limit </label>
                                    <input type="number" placeholder="participant age limit"
                                        name="addMoreSubEvent[0][participant_age_limit]"
                                        value="{{ old('participant_age_limit') }}" />
                                    @if ($errors->has('participant_age_limit'))
                                        <div class="alert-danger">{{ $errors->first('participant_age_limit') }}</div>
                                    @endif
                                </div>

                                {{-- <div class="input-style-1">
                                    <label>End date </label>
                                    <input type="date" name="addMoreSubEvent[0][end_date]"
                                        value="{{ old('end_date') }}" />
                                    @if ($errors->has('end_date'))
                                        <div class="alert-danger">{{ $errors->first('end_date') }}</div>
                                    @endif
                                </div> --}}

                            </div>

                            <div class="col-md-12">
                                <div class="input-style-2">
                                    <label>1st prize</label>
                                    <input type="text" name="addMoreSubEvent[0][prize]" value="{{ old('prize') }}">
                                    @if ($errors->has('prize'))
                                        <div class="alert-danger">{{ $errors->first('prize') }}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="input-style-2">
                                    <label>2nd prize</label>
                                    <input type="text" name="addMoreSubEvent[0][second_prize]" value="{{ old('second_prize') }}">
                                    @if ($errors->has('second_prize'))
                                        <div class="alert-danger">{{ $errors->first('second_prize') }}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="input-style-2">
                                    <label>3rd prize</label>
                                    <input type="text" name="addMoreSubEvent[0][third_prize]" value="{{ old('third_prize') }}">
                                    @if ($errors->has('third_prize'))
                                        <div class="alert-danger">{{ $errors->first('third_prize') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="input-style-2">
                                    <h6>Write in brief </h6>
                                    <input type="text" placeholder="Short description"
                                        name="addMoreSubEvent[0][sub_event_short_desc]"
                                        value="{{ old('sub_event_short_desc') }}" />
                                    @if ($errors->has('sub_event_short_desc'))
                                        <div class="alert-danger">{{ $errors->first('sub_event_short_desc') }}</div>
                                    @endif

                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="input-style-3">
                                    <label>Write all about this event </label>
                                    <textarea name="addMoreSubEvent[0][sub_event_description]" id="summernote" cols="30" rows="10"
                                        placeholder="Discuss about the advantage, prize, venue, criteria etc ">{{ old('sub_event_description') }}</textarea>
                                    @if ($errors->has('sub_event_description'))
                                        <div class="alert-danger">{{ $errors->first('sub_event_description') }}</div>
                                    @endif
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            {{-- <a href="https://www.w3schools.com/jsref/tryit.asp?filename=tryjsref_onbeforeunload_addeventlistener" target="_blank" rel="noopener noreferrer"></a> --}}


            <div class="col-lg-6" id="addbutton">
                <div class="text-center m-5 ">
                    <button type="button" class="btn-success btn-circle" onclick="addMoreSubEvent(0)"><i
                            class="lni lni-circle-plus"></i> Add more</button>

                </div>
            </div>
            
        </div>
        <div style="float: right;">
            <button type="submit" class="btn btn-primary">Create</button>
            <a href="{{ route('my-gym-events.index') }}" class="btn btn-danger">Cancel</a>

        </div>
    </form>

@endsection
@section('addMoreSubEvent')
    <script>
        // var i = 1;
        var formNo = 1;

        function addMoreSubEvent(i) {
            // alert(i);
            ++formNo;
            newI = ++i;
            // alert(i);
            var newForm =
                ' <div class="col-lg-6" id="subEvent'+formNo+'"><div class="card-style mb-30"><div class="input-style-2"><h2 class="text-center">Sub-event- <button class="btn btn-circle btn-primary" disabled>' +
                formNo +
                '</button></h2><div class="row mt-3"><div class="col-md-6"><div class="input-style-1"><h6>Sub-event name</label><input type="text" placeholder="Full Name" name="addMoreSubEvent[' +
                i +
                '][sub_event_name]" value="{{ old('"sub_event_name"') }}" />@if ($errors->has('"sub_event_name"'))<div class="alert-danger">{{ $errors->first('"sub_event_name"') }}</div> @endif</div></div><div class="col-md-6"> <div class="input-style-2"><label>Participant age limit </label><input type="number" placeholder="participant age limit" name="addMoreSubEvent[' +
                i +
                '][participant_age_limit]" value="{{ old('"participant_age_limit"') }}" />@if ($errors->has('"participant_age_limit"'))<div class="alert-danger">{{ $errors->first('"participant_age_limit"') }}</div>@endif </div></div><div class="col-md-12"><div class="input-style-2"><label>1st prize</label><input type="text" name="addMoreSubEvent[0][prize]" value="{{ old('"prize"') }}">@if ($errors->has('"prize"'))<div class="alert-danger">{{ $errors->first('"prize"') }}</div>@endif</div></div><div class="col-md-12"><div class="input-style-2"><label>2nd prize</label><input type="text" name="addMoreSubEvent[0][second_prize]" value="{{ old('"second_prize"') }}">@if ($errors->has('"second_prize"'))<div class="alert-danger">{{ $errors->first('"second_prize"') }}</div>@endif </div> </div><div class="col-md-12"><div class="input-style-2"><label>3rd prize</label><input type="text" name="addMoreSubEvent[0][third_prize]" value="{{ old('"third_prize"') }}">@if ($errors->has('"third_prize"'))<div class="alert-danger">{{ $errors->first('"third_prize"') }}</div> @endif</div></div><div class="col-lg-12"><div class="input-style-2"> <h6>Write in brief </h6><input type="text" placeholder="Short description" name="addMoreSubEvent[' +
                i +
                '][sub_event_short_desc]" value="{{ old('"sub_event_short_desc"') }}" />@if ($errors->has('"sub_event_short_desc"'))<div class="alert-danger">{{ $errors->first('"sub_event_short_desc"') }}</div>@endif</div></div><div class="col-lg-12"><div class="input-style-3"><label>Write all about this event </label><textarea name="addMoreSubEvent[' +
                i +
                '][sub_event_description]" id="summernote" cols="30" rows="10" placeholder="Discuss about the advantage, prize, venue, criteria etc ">{{ old('"sub_event_description"') }}</textarea>@if ($errors->has('"sub_event_description"'))<div class="alert-danger">{{ $errors->first('"sub_event_description"') }}</div>@endif</div></div><div class="text-center"><button class="btn btn-danger btn-sm" type="button" onclick="removeSubEvent('+formNo+')">Remove</button></div> </div></div></div></div><div class="col-lg-6" id="addbutton"><div class="text-center m-5 "><button type="button" class="btn-primary btn-circle" onclick="addMoreSubEvent(' +
                newI + ')"><i class="lni lni-circle-plus"></i> Add more</button></div></div>';
            document.getElementById("addbutton").remove();
            document.getElementById("subevents").innerHTML += newForm;
            // i++;
        }

        function removeSubEvent(subevent_id){
            const element = document.getElementById('subEvent'+subevent_id).remove();
        }

        window.onbeforeunload = function (e){
            return "You will lost the data";

        }

     
        // window.addEventListener("beforeunload", function(event) {
        // event.returnValue = "Write something clever here..";
        // $(function() {
        //     $(window).on('beforeunload', function() {
        //         return ';'
        //     })
        // });
    </script>

@endsection

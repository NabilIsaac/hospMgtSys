@extends('layouts.app')

@section('content')

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Create Patient</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('patients.store') }}" method="POST"  class="form-horizontal">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class=" form-control-label">Full name</label>
                            <input type="text" id="text-input" name="fullname" placeholder="full name" class="form-control shadow-none">
                        </div>
                    </div>
                    @if(Auth::user()->hasRole(['nurse']))
                    <div class="col-lg-6">
                        <label class="form-control-label">Doctor</label>
                        <select name="doctor_id" class="form-control shadow-none">
                            <option> Select Doctor  </option>
                            @foreach ($doctors as $doctor)
                                <option value="{{ $doctor->id }}"> {{ $doctor->name }} </option>
                            @endforeach
                        </select>
                        @if ($errors->has('doctor_id'))
                        <div class="error">
                            {{ $errors->first('doctor_id') }}
                        </div>
                        @endif
                    </div>
                    @endif
                    @if(Auth::user()->hasRole(['receptionist']))
                    <div class="col-lg-6">
                        <label class="form-control-label">Nurse</label>
                        <select name="nurse_id" class="form-control shadow-none">
                            <option> Select Nurse  </option>
                            @foreach ($nurses as $nurse)
                                <option value="{{ $nurse->id }}"> {{ $nurse->name }} </option>
                            @endforeach
                        </select>
                        @if ($errors->has('nurse_id'))
                        <div class="error">
                            {{ $errors->first('nurse_id') }}
                        </div>
                        @endif
                    </div>
                    @endif
                    @if(Auth::user()->hasRole(['nurse']))
                    <div class="col-lg-6">
                        <label class="form-control-label">Ward</label>
                        <select name="ward_id" class="form-control shadow-none">
                            <option> Select Ward  </option>
                            @foreach ($wards as $ward)
                                <option value="{{ $ward->id }}"> {{ $ward->name }} </option>
                            @endforeach
                        </select>
                        @if ($errors->has('ward_id'))
                        <div class="error">
                            {{ $errors->first('ward_id') }}
                        </div>
                        @endif
                    </div>
                    
                    <div class="col-lg-6">
                        <label class="form-control-label">Room</label>
                        <select name="room_id" class="form-control shadow-none">
                            <option> Select Room  </option>
                            @foreach ($rooms as $room)
                                <option value="{{ $room->id }}"> {{ $room->room_type }} </option>
                            @endforeach
                        </select>
                        @if ($errors->has('room_id'))
                        <div class="error">
                            {{ $errors->first('room_id') }}
                        </div>
                        @endif
                    </div>
                    @endif
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class=" form-control-label">Phone</label>
                            <input type="text" id="text-input" name="phone" placeholder="phone" class="form-control shadow-none">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class=" form-control-label">Email</label>
                            <input type="text" id="text-input" name="email" placeholder="email" class="form-control shadow-none">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class=" form-control-label">Gender</label>
                            <select name="gender" class="form-control">
                                <option value="male"> Male </option>
                                <option value="female"> Female </option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class=" form-control-label">Age</label>
                            <input type="number" name="age" placeholder="age" class="form-control shadow-none">
                        </div>
                    </div>
                    
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class=" form-control-label">Created by</label>
                            <input type="text" name="created_by" placeholder="created by" class="form-control shadow-none">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class=" form-control-label">Insurance</label>
                            <input type="text" name="insurance" placeholder="insurance" class="form-control shadow-none">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class=" form-control-label">Status</label>
                            <select name="status" class="form-control">
                                <option value="admission"> Admission </option>
                                <option value="discharge"> Discharge </option>
                                <option value="consultation"> Consultation </option>
                                <option value="emergency"> Emergency </option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class=" form-control-label">Next of kin</label>
                            <input type="text" name="next_of_kin" placeholder="next of kin" class="form-control shadow-none">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class=" form-control-label">Marital Status</label>
                            <select name="marital_status" class="form-control">
                                <option value="single"> Single </option>
                                <option value="divorced"> Divorced </option>
                                <option value="married"> Married </option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class=" form-control-label">Disease</label>
                            <input type="text" name="disease" placeholder="disease" class="form-control shadow-none">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class=" form-control-label">Home Address</label>
                            <input type="text" name="home_address" placeholder="home address" class="form-control shadow-none">
                        </div>
                    </div>
                    
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Submit
                    </button>
                    <a href="{{ route('patients.index') }}" class="btn btn-danger btn-sm">Cancel</a>
                    
                </div>
            </form>
        </div>
    </div>
</div>
    
@endsection
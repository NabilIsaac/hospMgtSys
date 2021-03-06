@extends('layouts.app')

@section('content')

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Create Doctor</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('doctors.store') }}" method="POST"  class="form-horizontal">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class=" form-control-label">Full name</label>
                            <input type="text" id="text-input" name="name" placeholder="full name" class="form-control shadow-none">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <label class="form-control-label">Profession</label>
                        <select name="doctor_type_id" class="form-control shadow-none">
                            <option> Select Profession  </option>
                            @foreach ($doctor_types as $doctor_type)
                                <option value="{{ $doctor_type->id }}"> {{ $doctor_type->title }} </option>
                            @endforeach
                        </select>
                        @if ($errors->has('doctor_type_id'))
                        <div class="error">
                            {{ $errors->first('doctor_type_id') }}
                        </div>
                        @endif
                    </div>
                    
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class=" form-control-label">Phone</label>
                            <input type="text" name="phone" placeholder="phone" class="form-control shadow-none">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class=" form-control-label">Email</label>
                            <input type="email" name="email" placeholder="email" class="form-control shadow-none">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class=" form-control-label">Home Address</label>
                            <input type="text" name="home_address" placeholder="home address" class="form-control shadow-none">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class=" form-control-label">Specialization</label>
                            <input type="text" name="specialization" placeholder="specialization" class="form-control shadow-none">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class=" form-control-label">Brief History</label>
                            <input type="text" name="brief_history" placeholder="brief history" class="form-control shadow-none">
                        </div>
                    </div>
                    
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Submit
                    </button>
                    <a href="{{ route('doctors.index') }}" class="btn btn-danger btn-sm">Cancel</a>
                    
                </div>
            </form>
        </div>
    </div>
</div>
    
@endsection
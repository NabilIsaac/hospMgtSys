@extends('layouts.app')

@section('content')

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Create Prescription</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('prescriptions.store') }}" method="POST"  class="form-horizontal">
                @csrf
                <div class="row">
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

                    <div class="col-lg-6">
                        <label class="form-control-label">Patient</label>
                        <select name="patient_id" class="form-control shadow-none">
                            <option> Select Patient  </option>
                            @foreach ($patients as $patient)
                                <option value="{{ $patient->id }}"> {{ $patient->fullname }} </option>
                            @endforeach
                        </select>
                        @if ($errors->has('patient_id'))
                        <div class="error">
                            {{ $errors->first('patient_id') }}
                        </div>
                        @endif
                    </div>
                    
                    <div class="col-lg-6">
                        <label class="form-control-label">Drug</label>
                        <select name="drug_id" class="form-control shadow-none">
                            <option> Select Drug  </option>
                            @foreach ($pharmacies as $pharmacy)
                                <option value="{{ $pharmacy->id }}"> {{ $pharmacy->drug_name }} </option>
                            @endforeach
                        </select>
                        @if ($errors->has('drug_id'))
                        <div class="error">
                            {{ $errors->first('drug_id') }}
                        </div>
                        @endif
                    </div>
                    
                    
                    
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class=" form-control-label">Dose</label>
                            <input type="text" name="dose" placeholder="dose" class="form-control shadow-none">
                        </div>
                    </div>
                    
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Submit
                    </button>
                    <a href="{{ route('prescriptions.index') }}" class="btn btn-danger btn-sm">Cancel</a>
                    
                </div>
            </form>
        </div>
    </div>
</div>
    
@endsection
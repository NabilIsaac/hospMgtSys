@extends('layouts.app')

@section('content')

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Create Examination</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('examinations.store') }}" method="POST"  class="form-horizontal">
                @csrf
                <div class="row">
                    

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
                        <div class="form-group">
                            <label class=" form-control-label">Symptoms</label>
                            <input type="text" name="symptoms" placeholder="symptoms" class="form-control shadow-none">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class=" form-control-label">Comment</label>
                            <input type="text" name="comment" placeholder="comment" class="form-control shadow-none">
                        </div>
                    </div>
                    
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Submit
                    </button>
                    <a href="{{ route('examinations.index') }}" class="btn btn-danger btn-sm">Cancel</a>
                    
                </div>
            </form>
        </div>
    </div>
</div>
    
@endsection
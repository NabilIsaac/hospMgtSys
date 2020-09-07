@extends('layouts.app')

@section('content')

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Create Ward</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('wards.store') }}" method="POST"  class="form-horizontal">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class=" form-control-label">Name</label>
                            <input type="text" name="name" placeholder="ward name" class="form-control shadow-none">
                        </div>
                    </div>
                    
                    <div class="col-lg-6">
                        <label class="form-control-label">Supervisor</label>
                        <select name="supervisor_id" class="form-control shadow-none">
                            <option> Select Supervisor  </option>
                            @foreach ($doctors as $doctor)
                                <option value="{{ $doctor->id }}"> {{ $doctor->name }} </option>
                            @endforeach
                        </select>
                        @if ($errors->has('supervisor_id'))
                        <div class="error">
                            {{ $errors->first('supervisor_id') }}
                        </div>
                        @endif
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class=" form-control-label">Block Name</label>
                            <input type="text" name="block_name" placeholder="block name" class="form-control shadow-none">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class=" form-control-label">Number of rooms</label>
                            <input type="number" name="no_of_rooms" placeholder="number of rooms" class="form-control shadow-none">
                        </div>
                    </div>
                    
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Submit
                    </button>
                    <a href="{{ route('wards.index') }}" class="btn btn-danger btn-sm">Cancel</a>
                    
                </div>
            </form>
        </div>
    </div>
</div>
    
@endsection
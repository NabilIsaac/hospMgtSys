@extends('layouts.app')

@section('content')

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Create Rooms</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('rooms.store') }}" method="POST"  class="form-horizontal">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class=" form-control-label">Room Type</label>
                            <input type="text" name="room_type" placeholder="room type" class="form-control shadow-none">
                        </div>
                    </div>
                    
                    <div class="col-lg-6">
                        <div class="form-group">
                            <select name="doctor_id" class="form-control shadow-none">
                                <option> Available  </option>
                                    <option value="yes"> yes </option>
                                    <option value="no"> no </option>
                            </select>
                        </div>
                    </div>
                    
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Submit
                    </button>
                    <a href="{{ route('rooms.index') }}" class="btn btn-danger btn-sm">Cancel</a>
                    
                </div>
            </form>
        </div>
    </div>
</div>
    
@endsection
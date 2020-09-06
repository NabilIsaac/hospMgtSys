@extends('layouts.app')

@section('content')

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Create Receptionist</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('receptionists.store') }}" method="POST"  class="form-horizontal">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class=" form-control-label">Full name</label>
                            <input type="text" id="text-input" name="name" placeholder="full name" class="form-control shadow-none">
                        </div>
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
                            <label class=" form-control-label">Brief History</label>
                            <input type="text" name="brief_history" placeholder="brief history" class="form-control shadow-none">
                        </div>
                    </div>
                    
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Submit
                    </button>
                    <a href="{{ route('receptionists.index') }}" class="btn btn-danger btn-sm">Cancel</a>
                    
                </div>
            </form>
        </div>
    </div>
</div>
    
@endsection
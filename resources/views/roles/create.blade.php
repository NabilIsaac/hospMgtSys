@extends('layouts.app')

@section('content')

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Create Role</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('roles.store') }}" method="POST"  class="form-horizontal">
            @csrf
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class=" form-control-label">Role name</label>
                        <input type="text" name="name" placeholder="Name" class="form-control shadow-none">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class=" form-control-label">Guard name</label>
                        <input type="text" name="guard_name" placeholder="guard name" class="form-control shadow-none">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Submit
                    </button>
                    <a href="{{ route('drugs.index') }}" class="btn btn-danger btn-sm">Cancel</a>
                    
                </div>
            </form>
        </div>
    </div>
</div>
    
@endsection
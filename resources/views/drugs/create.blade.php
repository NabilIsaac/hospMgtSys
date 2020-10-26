@extends('layouts.app')

@section('content')

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Create Drugs</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('pharmacies.store') }}" method="POST"  class="form-horizontal">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class=" form-control-label">Drug name</label>
                            <input type="text" name="drug_name" placeholder="drug name" class="form-control shadow-none">
                        </div>
                    </div>
                    
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class=" form-control-label">Drug brand</label>
                            <input type="text" name="drug_brand" placeholder="drug brand" class="form-control shadow-none">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class=" form-control-label">Description</label>
                            <input type="text" name="description" placeholder="description" class="form-control shadow-none">
                        </div>
                    </div>
                    
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Submit
                    </button>
                    <a href="{{ route('pharmacies.index') }}" class="btn btn-danger btn-sm">Cancel</a>
                    
                </div>
            </form>
        </div>
    </div>
</div>
    
@endsection
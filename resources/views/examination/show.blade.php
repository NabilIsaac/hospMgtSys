@extends('layouts.app')

@section('content')
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Examination</strong>
                        <a href="{{ route('examinations.create') }}" class="btn btn-sm btn-primary float-right">Create Examination</a>
                    </div>
                    <div class="table-stats order-table ov-h">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th>Patient</th>
                                    <th>Nurse</th>
                                    <th>Symptoms</th>
                                    <th>Comment</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    
                                    <td>
                                        <span class="name">{{ $examination->patient->fullname }}</span>
                                    </>
                                    <td>{{ $examination->nurse->name }}</td>
                                    <td>{{ $examination->symptoms }}</td>
                                    <td>{{ $examination->comment }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
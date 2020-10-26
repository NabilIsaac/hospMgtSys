@extends('layouts.app')

@section('content')
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Records</strong>
                        <a href="{{ route('records.create') }}" class="btn btn-sm btn-primary float-right">Create Appointment</a>
                    </div>
                    <div class="table-stats order-table ov-h">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th class="serial">#</th>
                                    <th>Doctor</th>
                                    <th>Patient</th>
                                    <th>Appointment Date</th>
                                    <th>Created on</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($records as $record)
                                <tr>
                                    <td class="serial">{{ $loop->iteration }}</td>
                                    <td>
                                        <span class="name">{{ $record->doctor->name }}</span>
                                    </td>
                                    <td>{{ $record->patient->fullname }}</td>
                                    <td>{{ $record->appointment_date }}</td>
                                    <td>{{ $record->created_at }}</td>
                                </tr>
                               @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Appointments</strong>
                        <a href="{{ route('appointments.create') }}" class="btn btn-sm btn-primary float-right">Create Appointment</a>
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
                                @foreach ($appointments as $appointment)
                                <tr>
                                    <td class="serial">{{ $loop->iteration }}</td>
                                    <td>
                                        <span class="name">{{ $appointment->doctor->name }}</span>
                                    </td>
                                    <td>{{ $appointment->patient->fullname }}</td>
                                    <td>{{ $appointment->appointment_date }}</td>
                                    <td>{{ $appointment->created_at }}</td>
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
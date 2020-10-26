@extends('layouts.app')

@section('content')
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Prescription</strong>
                        <a href="{{ route('prescriptions.create') }}" class="btn btn-sm btn-primary float-right">Create Prescription</a>
                    </div>
                    <div class="table-stats order-table ov-h">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th class="serial">#</th>
                                    <th>Doctor</th>
                                    <th>Patient</th>
                                    <th>Drug</th>
                                    <th>Dose</th>
                                    <th>Created on</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($prescriptions as $prescription)
                                <tr>
                                    <td class="serial">{{ $loop->iteration }}</td>
                                    <td>
                                        <span class="name">{{ $prescription->doctor->name }}</span>
                                    </td>
                                    <td>{{ $prescription->patient->fullname }}</td>
                                    <td>{{ $prescription->pharmacy->drug_name }}</td>
                                    <td>{{ $prescription->dose }}</td>
                                    <td>{{ $prescription->created_at }}</td>
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
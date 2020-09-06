@extends('layouts.app')

@section('content')
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Patient</strong>
                        <a href="{{ route('patients.create') }}" class="btn btn-sm btn-primary float-right">Create Patient</a>
                    </div>
                    <div class="table-stats order-table ov-h">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th class="serial">#</th>
                                    <th>Doctor</th>
                                    <th>Ward</th>
                                    <th>Room</th>
                                    <th>Full name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Gender</th>
                                    <th>Age</th>
                                    <th>Created by</th>
                                    <th>Insurance</th>
                                    <th>Status</th>
                                    <th>Next of kin</th>
                                    <th>Marital Status</th>
                                    <th>Disease</th>
                                    <th>Home Address</th>
                                    <th>Created on</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($patients as $patient)
                                <tr>
                                    <td class="serial">{{ $loop->iteration }}</td>
                                    <td>
                                        <span class="name">{{ $patient->doctor->name }}</span>
                                    </td>
                                    <td> {{ $patient->ward->name }} </td>
                                    <td>{{ $patient->room->room_type }}</td>
                                    <td>{{ $patient->fullname }}</td>
                                    <td>{{ $patient->phone }}</td>
                                    <td>
                                        {{ $patient->email }}
                                    </td>
                                    <td>
                                        {{ $patient->gender }}
                                    </td>
                                    <td>
                                        {{ $patient->age }}
                                    </td>
                                    <td>
                                        {{ $patient->created_by }}
                                    </td>
                                    <td>
                                        {{ $patient->Insurance }}
                                    </td>
                                    <td>
                                        {{ $patient->status }}
                                    </td>
                                    <td>
                                        {{ $patient->next_of_kin }}
                                    </td>
                                    <td>
                                        {{ $patient->marital_status }}
                                    </td>
                                    <td>
                                        {{ $patient->disease }}
                                    </td>
                                    <td>
                                        {{ $patient->home_address }}
                                    </td>
                                    <td>
                                        {{ $patient->created_at }}
                                    </td>
                                </tr>
                               @endforeach
                            </tbody>
                        </table>
                    </div> <!-- /.table-stats -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
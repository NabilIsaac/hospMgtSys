@extends('layouts.app')

@section('content')
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Doctor</strong>
                        <a href="{{ route('doctors.create') }}" class="btn btn-sm btn-primary float-right">Create Patient</a>
                    </div>
                    <div class="table-stats order-table ov-h">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th class="serial">#</th>
                                    <th>Full Name</th>
                                    <th>Profession</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Home Address</th>
                                    <th>Specialization</th>
                                    <th>Brief History</th>
                                    <th>Created on</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($doctors as $doctor)
                                <tr>
                                    <td class="serial">{{ $loop->iteration }}</td>
                                    <td>
                                        <span class="name">{{ $doctor->name }}</span>
                                    </td>
                                    <td> {{ $doctor->doctor_type->title }} </td>
                                    <td>{{ $doctor->email }}</td>
                                    <td>{{ $doctor->phone }}</td>
                                    <td>{{ $doctor->home_address }}</td>
                                    <td>
                                        {{ $doctor->specialization }}
                                    </td>
                                    <td>
                                        {{ $doctor->brief_history }}
                                    </td>
                                    <td>
                                        {{ $doctor->created_at }}
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
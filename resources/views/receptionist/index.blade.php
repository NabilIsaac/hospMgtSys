@extends('layouts.app')

@section('content')
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Receptionist</strong>
                        <a href="{{ route('receptionists.create') }}" class="btn btn-sm btn-primary float-right">Create Patient</a>
                    </div>
                    <div class="table-stats order-table ov-h">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th class="serial">#</th>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Home Address</th>
                                    <th>Brief History</th>
                                    <th>Created on</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($receptionists as $receptionist)
                                <tr>
                                    <td class="serial">{{ $loop->iteration }}</td>
                                    <td>
                                        <span class="name">{{ $receptionist->name }}</span>
                                    </td>
                                    <td>{{ $receptionist->email }}</td>
                                    <td>{{ $receptionist->phone }}</td>
                                    <td>{{ $receptionist->home_address }}</td>
                                    <td>
                                        {{ $receptionist->brief_history }}
                                    </td>
                                    <td>
                                        {{ $receptionist->created_at }}
                                    </td>
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
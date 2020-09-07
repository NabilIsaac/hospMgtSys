@extends('layouts.app')

@section('content')
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Nurses</strong>
                        <a href="{{ route('nurses.create') }}" class="btn btn-sm btn-primary float-right">Create Nurse</a>
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
                                    <th>Specialization</th>
                                    <th>Brief History</th>
                                    <th>Created on</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($nurses as $nurse)
                                <tr>
                                    <td class="serial">{{ $loop->iteration }}</td>
                                    <td>
                                        <span class="name">{{ $nurse->name }}</span>
                                    </td>
                                    <td>{{ $nurse->email }}</td>
                                    <td>{{ $nurse->phone }}</td>
                                    <td>{{ $nurse->home_address }}</td>
                                    <td>{{ $nurse->specialization }}</td>
                                    <td>
                                        {{ $nurse->brief_history }}
                                    </td>
                                    <td>
                                        {{ $nurse->created_at }}
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
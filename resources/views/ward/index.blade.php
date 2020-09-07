@extends('layouts.app')

@section('content')
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Wards</strong>
                        <a href="{{ route('wards.create') }}" class="btn btn-sm btn-primary float-right">Create Ward</a>
                    </div>
                    <div class="table-stats order-table ov-h">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th class="serial">#</th>
                                    <th>Name</th>
                                    <th>Supervisor</th>
                                    <th>Block name</th>
                                    <th>No. of rooms</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($wards as $ward)
                                <tr>
                                    <td class="serial">{{ $loop->iteration }}</td>
                                    <td>
                                        <span class="name">{{ $ward->name }}</span>
                                    </td>
                                    <td>{{ $ward->doctor->name }}</td>
                                    <td>{{ $ward->block_name }}</td>
                                    <td>{{ $ward->no_of_rooms }}</td>
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
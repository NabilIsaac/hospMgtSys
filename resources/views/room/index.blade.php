@extends('layouts.app')

@section('content')
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Rooms</strong>
                        <a href="{{ route('rooms.create') }}" class="btn btn-sm btn-primary float-right">Create Room</a>
                    </div>
                    <div class="table-stats order-table ov-h">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th class="serial">#</th>
                                    <th>Room Type</th>
                                    <th>Available</th>
                                    <th>Created on</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rooms as $room)
                                <tr>
                                    <td class="serial">{{ $loop->iteration }}</td>
                                    <td>
                                        <span class="name">{{ $room->room_type }}</span>
                                    </td>
                                    <td>{{ $room->available }}</td>
                                    <td>{{ $room->created_at }}</td>
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
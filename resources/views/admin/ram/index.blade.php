@extends('layouts.settings')

@section('route')
    "admin/rams/create";
@endsection

@section('title')
    RAM
@endsection


@section('head')
    <tr>
        <th>Isim</th>
        <th>Transfer Rate</th>
        <th>Clock Speed</th>
        <th>Bus Speed</th>
    </tr>
@endsection



@section('body')

    @foreach($rams as $ram)
        <tr>
            <td>{{ $ram->name }}</td>
            <td>{{ $ram->transfer_rate }}</td>
            <td>{{ $ram->clock_speed }}</td>
            <td>{{ $ram->bus_speed }}</td>
        </tr>
    @endforeach
@endsection


@section('foot')
    <tr>
        <th>Isim</th>
        <th>Transfer Rate</th>
        <th>Clock Speed</th>
        <th>Bus Speed</th>
    </tr>
@endsection

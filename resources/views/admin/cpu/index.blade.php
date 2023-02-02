@extends('layouts.settings')

@section('route')
    "admin/cpus/create";
@endsection

@section('title')
    CPU
@endsection


@section('head')
    <tr>
        <th>Isim</th>
        <th>Clock</th>
        <th>Core</th>
    </tr>
@endsection



@section('body')

    @foreach($cpus as $cpu)
        <tr>
            <td>{{ $cpu->name }}</td>
            <td>{{ $cpu->clock }}</td>
            <td>{{ $cpu->core }}</td>
        </tr>
    @endforeach
@endsection


@section('foot')
    <tr>
        <th>Isim</th>
        <th>Clock</th>
        <th>Core</th>
    </tr>
@endsection

@extends('layouts.settings')

@section('route')
    "admin/disks/create";
@endsection

@section('title')
    Disk
@endsection


@section('head')
    <tr>
        <th>Isim</th>
        <th>Kapasite</th>
        <th>Okuma Hizi</th>
        <th>Yazma Hizi</th>
        <th>Teknoloji</th>
    </tr>
@endsection



@section('body')

    @foreach($disks as $disk)
        <tr>
            <td>{{ $disk->name }}</td>
            <td>{{ $disk->capacity }}</td>
            <td>{{ $disk->read_speed }}</td>
            <td>{{ $disk->write_speed }}</td>
            <td>{{ $disk->technology }}</td>
        </tr>
    @endforeach
@endsection


@section('foot')
    <tr>
        <th>Isim</th>
        <th>Kapasite</th>
        <th>Okuma Hizi</th>
        <th>Yazma Hizi</th>
        <th>Teknoloji</th>
    </tr>
@endsection

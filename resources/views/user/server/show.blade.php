@extends('layouts.admin')

@section('title')
    Sunucu
@endsection


@section('head')
    <tr>
        <th>CPU</th>
        <th>RAM</th>
        <th>Disk</th>
        <th>Isletim Sistemi Versiyonu</th>
        <th>A Kaydi</th>
        <th>Ag Turu</th>
        <th>Talep Edilme Sebebi</th>
        <th>Aciklama</th>
        <th>Talep Tarihi</th>
    </tr>
@endsection



@section('body')
    <tr>
        @foreach($servers as $server)
            <td>{{ $server->cpu->name }}</td>
            <td>{{ $server->ram->name }}</td>
            <td>{{ $server->disk->name }}</td>
            <td>{{ $server->system->name }}</td>
            <td>{{ $server->kayit}}</td>
            <td>{{ $server->reason}}</td>
            <td>{{ $server->description}}</td>
            <td>{{ $server->created_at }}</td>
        @endforeach
    </tr>
@endsection



@section('foot')
    <tr>
        <th>CPU</th>
        <th>RAM</th>
        <th>Disk</th>
        <th>Isletim Sistemi Versiyonu</th>
        <th>A Kaydi</th>
        <th>Ag Turu</th>
        <th>Talep Edilme Sebebi</th>
        <th>Aciklama</th>
        <th>Talep Tarihi</th>
    </tr>
@endsection

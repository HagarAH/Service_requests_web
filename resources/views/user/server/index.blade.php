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
        <th>Talep Edilme Sebebi</th>
        <th>Aciklama</th>
        <th>Talep Tarihi</th>
        <th>Durumu</th>
        <th>Düzenleme</th>
    </tr>
@endsection



@section('body')
    @foreach($servers as $server)
        <tr>
            <td>{{ $server->cpu->name }}</td>
            <td>{{ $server->ram->name }}</td>
            <td>{{ $server->disk->name }}</td>
            <td>{{ $server->system->name }}</td>
            <td>{{ $server->kayit}}</td>
            <td>{{ $server->reason}}</td>
            <td>{{ $server->description}}</td>
            <td>{{ $server->created_at }}</td>
            <td>{{ $server->status->name }}</td>
            <td><button class="btn btn-primary waves-effect waves-themed">Düzenle</button></td>
        </tr>
    @endforeach
@endsection



@section('foot')
    <tr>
        <th>CPU</th>
        <th>RAM</th>
        <th>Disk</th>
        <th>Isletim Sistemi Versiyonu</th>
        <th>A Kaydi</th>
        <th>Talep Edilme Sebebi</th>
        <th>Aciklama</th>
        <th>Talep Tarihi</th>
        <th>Durumu</th>
        <th>Düzenleme</th>

    </tr>
@endsection

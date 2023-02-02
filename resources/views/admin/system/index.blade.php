@extends('layouts.settings')

@section('route')
    "admin/systems/create";
@endsection

@section('title')
    Isletim Versiyonu
@endsection


@section('head')
    <tr>
        <th>Isim</th>
        <th>Architecture</th>
    </tr>
@endsection



@section('body')

    @foreach($systems as $system)
        <tr>
            <td>{{ $system->name }}</td>
            <td>{{ $system->architecture }}</td>
        </tr>
    @endforeach
@endsection


@section('foot')
    <tr>
        <th>Isim</th>
        <th>Architecture</th>
    </tr>
@endsection

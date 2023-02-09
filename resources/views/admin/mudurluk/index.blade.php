@extends('layouts.settings')

@section('route')
    "admin/mudurluks/create";
@endsection

@section('title')
    Genel Mudurluk
@endsection


@section('head')
    <tr>
        <th>Isim</th>
        <th>Daire Baskanligi Bolumu</th>
    </tr>
@endsection



@section('body')

    @foreach($mudurluks as $mudurluk)
        <tr>
            <td>{{ $mudurluk->name }}</td>
            <td>{{ $mudurluk->daire->name }}</td>
        </tr>
    @endforeach
@endsection


@section('foot')
    <tr>
        <th>Isim</th>
        <th>Daire Baskanligi Bolumu</th>
    </tr>
@endsection

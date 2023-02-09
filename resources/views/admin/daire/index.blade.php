@extends('layouts.settings')

@section('route')
    "admin/daires/create";
@endsection

@section('title')
    Daire Baskanligi Bolumleri
@endsection


@section('head')
    <tr>
        <th>Isim</th>
    </tr>
@endsection



@section('body')

    @foreach($daires as $daire)
        <tr>
            <td>{{ $daire->name }}</td>
        </tr>
    @endforeach
@endsection


@section('foot')
    <tr>
        <th>Isim</th>
    </tr>
@endsection

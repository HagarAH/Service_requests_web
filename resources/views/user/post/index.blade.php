@extends('layouts.admin')

@section('title')
    Sunucu
@endsection


@section('head')
    <tr>
        <th>Kategori</th>
        <th>Açıklama</th>
        <th>Durumu</th>
        <th>Düzenleme</th>
    </tr>
@endsection



@section('body')
    @foreach($posts as $post)
        <tr>
            <td>{{ $post->category->name }}</td>
            <td>{{ $post->description}}</td>
            <td>{{ $post->status->name }}</td>
            <td><button class="btn btn-primary waves-effect waves-themed">Düzenle</button></td>
        </tr>
    @endforeach
@endsection



@section('foot')
    <tr>
        <th>Kategori</th>
        <th>Açıklama</th>
        <th>Durumu</th>
        <th>Düzenleme</th>

    </tr>
@endsection

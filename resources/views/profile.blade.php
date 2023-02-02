@extends('layouts.main')

@section('content')
    <label>{{ $user->id }}</label>
    <label>{{ $user->name }}</label>
    <label>{{ $user->email }}</label>
    <label>{{ $profile->id }}</label>
    <label>{{ $profile->user_id }}</label>
    <label>{{ $profile->fname }}</label>
    <label>{{ $profile->lname }}</label>
    <label>{{ $profile->phone }}</label>
    <label>{{ $profile->mudurluk->name}}</label>
    <label>{{ $profile->mudurluk->daire->name}}</label>
@endsection

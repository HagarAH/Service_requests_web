@extends('layouts.main')


@section('content')
    <div class="page-content">
        <div class="d-flex justify-content-center">
            <div class="col-xl-7">

                <div id="panel-1" class="panel">
                    <div class="panel-hdr">

                        <h2>
                            Profil <span class="fw-300"><i>Düzenleme</i></span>

                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse"
                                    data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen"
                                    data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-close"
                                    data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-content">
                                <form class="pt-3"
                                      action="{{route('Profile.update',[$profile->id])}}"
                                      method="POST"
                                      enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-row ">
                                        <div class="position-absolute pos-top pos-right col-4 pt-4">
                                            <img src="img/demo/avatars/avatar-admin-lg.png"
                                                 class="rounded-circle shadow-2 img-thumbnail" alt="">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-label">Eposta</label>
                                            <input type="email" class="form-control form-control-range rounded-pill"
                                                   name="email" value="{{auth()->user()->email}}">

                                        </div>
                                    </div>
                                    <div class="form-row pt-3">
                                        <div class="form-group col-md-4">
                                            <label class="form-label " >Kullanıcı Adı</label>
                                            <input type="text" name="name"
                                                   value="{{auth()->user()->name}}"
                                                   class="form-control form-control-range rounded-pill">

                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputPassword4" class="form-label">Password</label>
                                            <input name="password" type="password" class="form-control form-control-range rounded-pill"
                                                   id="inputPassword4"
                                                   >
                                        </div>
                                    </div>
                                    <hr class="border-faded">
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label class="form-label " for="simpleinput">Ad</label>
                                            <input type="text" id="simpleinput" name="fname"
                                                   value="{{$profile->fname}}"
                                                   class="form-control form-control-range rounded-pill">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputPassword4" class="form-label">Soyad</label>
                                            <input name="lname" class="form-control form-control-range rounded-pill"
                                                   id="inputPassword4" value="{{$profile->lname}}">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4" class="form-label">Telefon</label>
                                            <input name="phone" class="form-control form-control-range rounded-pill"
                                                   id="inputPassword4" value="{{$profile->phone}}">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-5">
                                            <label class="form-label pt-4" for="example-select">Müdürlük</label>
                                            <select name="mudurluk" class="form-control form-control-range rounded-pill">  <option>1</option></select>
                                        </div>
                                        <div class="form-group col-md-5">
                                            <label class="form-label pt-4" for="example-select">Daire</label>
                                            <select name="daire" class="form-control form-control-range rounded-pill" placeholder="{{$profile->daire->name}}">
{{--                                                <option></option>--}}
                                            </select>

                                        </div>
                                    </div>

                                    </hr>
                                    <div class="d-flex justify-content-end pt-2">
                                        <button type="submit"
                                                class="btn btn-primary btn-pills waves-effect waves-themed">Düzenle
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

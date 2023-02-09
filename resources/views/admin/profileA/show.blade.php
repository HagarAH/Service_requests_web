@extends('layouts.main')


@section('content')
    <div class="page-content">
        <div class="d-flex justify-content-center">
            <div class="col-xl-7">

                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2 class="m-0">
                            Profil
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
                                <form class="pt-3">
                                    <div class="form-row ">
                                        <div class="position-absolute pos-top pos-right col-4 pt-4">
                                            <img src="img/demo/avatars/avatar-admin-lg.png"
                                                 class="rounded-circle shadow-2 img-thumbnail" alt="">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4" class="form-label">Eposta</label>
                                            <input type="email" class="form-control form-control-range rounded-pill"
                                                   readonly=" " id="inputEmail4" value="{{auth()->user()->email}}">

                                        </div>
                                    </div>
                                    <div class="form-row pt-3">
                                        <div class="form-group col-md-4">
                                            <label class="form-label " for="simpleinput">Kullanıcı Adı</label>
                                            <input type="text" id="simpleinput"
                                                   readonly=" " value="{{auth()->user()->name}}"
                                                   class="form-control form-control-range rounded-pill">

                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputPassword4" class="form-label">Password</label>
                                            <input type="password" class="form-control form-control-range rounded-pill"
                                                   readonly=" " id="inputPassword4" value="{{auth()->user()->getAuthPassword()}}">
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end pt-2">
                                        <a type="button" href="{{route('profileA.edit',auth()->id())}}" class="btn btn-primary btn-pills waves-effect waves-themed">Güncelle</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

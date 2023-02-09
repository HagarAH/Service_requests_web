@extends('layouts.main')


@section('content')
    <div class="page-content">
        <div class="d-flex justify-content-center">
            <div class="col-xl-7">

                <div id="panel-1" class="panel">
                    <div class="panel-hdr">

                        <h2>
                            Profil <span class="fw-300"><i>Güncelleme</i></span>

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
                        <a href="{{route('profile.show',['id'=>\App\Models\Profile::where('user_id',auth()->id())->first()->id])}}" class=" pos-right" title="Geri dön">
                            <i class="fal fa-chevron-left pl-5 pt-5"></i>
                        </a>
                        <div class="panel-content">
                                <form class="pt-3"
                                      action="{{route('profile.update')}}"
                                      method="POST"
                                      enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <hr class="border-faded">
                                    <div class="max-w-7xl mx-auto pb-5 px-4 sm:px-6 ">
                                        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                                            Profil Bilgisi
                                        </h2>
                                        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                            Profil hesap bilgilerinizin güncel kaldığından emin olun.
                                        </p>
                                    </div>
                                    <div class="form-row ">
                                        <div class="form-group col-md-3">
                                            <label class="form-label ">Kullanıcı Adı</label>
                                            <input type="text" name="name"
                                                   value="{{auth()->user()->name}}"
                                                   class="form-control form-control-range rounded-pill">
                                        </div>
                                        <div class="form-group col-lg-8 ">
                                                <label class="form-label">Eposta</label>
                                                <input type="email" class="form-control form-control-range rounded-pill"
                                                       name="email" value="{{auth()->user()->email}}">

                                        </div>
                                    </div>



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
                                        <div class="position-absolute pos-right pr-6  sm:rounded-lg">
                                            <img src="img/demo/avatars/avatar-admin-lg.png"
                                                 class="rounded-circle shadow-2 img-thumbnail shadow" alt="">
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
                                            <select name="mudurluk"
                                                    class="form-control form-control-range rounded-pill">
                                                <option>1</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-5">
                                            <label class="form-label pt-4" for="example-select">Daire</label>
                                            <select name="daire" class="form-control form-control-range rounded-pill"
                                                    placeholder="{{$profile->daire->name}}">
                                                {{--                                                <option></option>--}}
                                            </select>

                                        </div>
                                    </div>

                                    </hr>
                                    <div class="d-flex justify-content-end pr-4 pt-2">
                                        <button type="submit"
                                                class="btn btn-primary btn-pills waves-effect waves-themed">Kaydet
                                        </button>

                                    </div>
                                </form>
                                @if (session('status') === 'profile-updated')
                                    <p
                                        x-data="{ show: true }"
                                        x-show="show"
                                        x-transition
                                        x-init="setTimeout(() => show = false, 2000)"
                                        class="text-sm text-gray-600 dark:text-gray-400 pos:right"
                                    >{{ __('Kaydedildi.') }}</p>
                                @endif
                                <hr class="border-faded">

                                <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
                                    @csrf
                                    @method('put')
                                        <div class="max-w-xl">

                                            <div class="max-w-7xl mx-auto pb-5 px-4 sm:px-6 ">
                                                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                                                    Şifre Güncelle
                                                </h2>
                                                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                                    Hesabınızın güvende kalması için uzun, rastgele bir parola kullandığından emin olun.
                                                </p>
                                            </div>

                                            <div class="form-group col-md-5 pl-2">
                                                <label for="current_password" class="form-label">Mevcut Şifre</label>
                                                <input id="current_password" name="current_password" type="password"
                                                       class="form-control form-control-range rounded-pill "
                                                >
                                                <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                                            </div>
                                            <div class="form-row pl-2" >
                                            <div class="form-group col-md-5">
                                                <label for="password" class="form-label">Yeni Şifre</label>
                                                <input name="password" type="password"
                                                       class="form-control form-control-range rounded-pill"
                                                       id="password">
                                                <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                                            </div>

                                            <div class="form-group col-md-5">
                                                <label for="password_confirmation" class="form-label">Şifre Onayı</label>
                                                <input id="password_confirmation" name="password_confirmation" type="password"
                                                       class="form-control form-control-range rounded-pill">
                                                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                                            </div>
                                            </div>
                                            <div class="d-flex justify-content-end pr-4 pt-2">
                                                <button type="submit"
                                                        class="btn btn-primary btn-pills waves-effect waves-themed">Kaydet
                                                </button>

                                            </div>
                                            @if (session('status') === 'password-updated')
                                                <p  x-data="{ show: true }"
                                                    x-show="show"
                                                    x-transition
                                                    x-init="setTimeout(() => show = false, 2000)"
                                                    class="text-sm text-gray-600 dark:text-gray-400 pos:right"
                                                >{{ __('Kaydedildi.') }}</p>
                                            @endif
                                        </div>
                                </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

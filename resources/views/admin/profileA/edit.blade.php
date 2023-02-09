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
                        <a href="{{route('profileA.show',auth()->id())}}" class=" pos-right" title="Geri dön">
                            <i class="fal fa-chevron-left pl-5 pt-5"></i>
                        </a>
                        <div class="panel-content">
                            <form class="pt-3"
                                  action="{{route('profileA.update',auth()->id())}}"
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

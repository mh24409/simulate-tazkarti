@extends('layouts.app3')

@section('content')
<div class="container">
    <div class="row justify-content-center" style="padding-top: 50px;">
        <div class="col-md-8">
            <div class=" text-center">{{ __('التقدم بطلب التسجيل') }}</div>
            <br>
            <div class=" text-center text-muted" >{{ __('الرجاء التأكد من البيانات  حتي يتم الموافقه علي طلبك') }}</div>

            <div class="card-body">
                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                    @csrf

                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0 text-right">
                                    <button class="btn btn-outline-success " data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        البيانات الشخصيه
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <div class="form-group row ">
                                        <label for="fisrtname"
                                            class="col-md-4 col-form-label text-md-right">{{ __('FisrtName') }}</label>

                                        <div class="col-md-6">
                                            <input id="fisrtname" type="text"
                                                class="form-control @error('fisrtname') is-invalid @enderror"
                                                name="fisrtname" value="{{ old('fisrtname') }}" required
                                                autocomplete="fisrtname" autofocus>

                                            @error('fisrtname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- secondname -->
                                    <div class="form-group row ">
                                        <label for="secondname"
                                            class="col-md-4 col-form-label text-md-right">{{ __('SecondName') }}</label>

                                        <div class="col-md-6">
                                            <input id="secondname" type="text"
                                                class="form-control @error('secondname') is-invalid @enderror"
                                                name="secondname" value="{{ old('secondname') }}" required
                                                autocomplete="secondname" autofocus>

                                            @error('secondname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- thirdname -->
                                    <div class="form-group row">
                                        <label for="thirdname"
                                            class="col-md-4 col-form-label text-md-right">{{ __('ThirdName') }}</label>

                                        <div class="col-md-6">
                                            <input id="thirdname" type="text"
                                                class="form-control @error('thirdname') is-invalid @enderror"
                                                name="thirdname" value="{{ old('thirdname') }}" required
                                                autocomplete="thirdname" autofocus>

                                            @error('thirdname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- momname -->
                                    <div class="form-group row">
                                        <label for="momname"
                                            class="col-md-4 col-form-label text-md-right">{{ __('MomName') }}</label>

                                        <div class="col-md-6">
                                            <input id="momname" type="text"
                                                class="form-control @error('momname') is-invalid @enderror"
                                                name="momname" value="{{ old('momname') }}" required
                                                autocomplete="momname" autofocus>

                                            @error('momname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- gender -->
                                    <div class="form-group row">
                                        <label for="gender"
                                            class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                                        <div class="col-md-6">
                                            <input id="gender" type="text"
                                                class="form-control @error('gender') is-invalid @enderror" name="gender"
                                                value="{{ old('gender') }}" required autocomplete="gender" autofocus>

                                            @error('gender')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- blood -->
                                    <div class="form-group row">
                                        <label for="blood"
                                            class="col-md-4 col-form-label text-md-right">{{ __('Blood Type') }}</label>

                                        <div class="col-md-6">
                                            <input id="blood" type="text"
                                                class="form-control @error('blood') is-invalid @enderror" name="blood"
                                                value="{{ old('blood') }}" required autocomplete="blood" autofocus>

                                            @error('blood')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- idtype -->
                                    <div class="form-group row">
                                        <label for="idtype"
                                            class="col-md-4 col-form-label text-md-right">{{ __('ID Type') }}</label>

                                        <div class="col-md-6">
                                            <input id="idtype" type="text"
                                                class="form-control @error('idtype') is-invalid @enderror" name="idtype"
                                                value="{{ old('idtype') }}" required autocomplete="idtype" autofocus>

                                            @error('idtype')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header text-right" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-outline-success  collapsed" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        مستندات شخصيه
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <!-- national -->
                                    <div class="form-group row">
                                        <label for="national"
                                            class="col-md-4 col-form-label text-md-right">{{ __('National') }}</label>

                                        <div class="col-md-6">
                                            <input id="national" type="text"
                                                class="form-control @error('national') is-invalid @enderror"
                                                name="national" value="{{ old('national') }}" required
                                                autocomplete="national" autofocus>

                                            @error('national')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- nationalid -->
                                    <div class="form-group row">
                                        <label for="nationalid"
                                            class="col-md-4 col-form-label text-md-right">{{ __('National Id') }}</label>

                                        <div class="col-md-6">
                                            <input id="nationalid" type="number"
                                                class="form-control @error('nationalid') is-invalid @enderror"
                                                name="nationalid" value="{{ old('nationalid') }}" required
                                                autocomplete="nationalid" autofocus>

                                            @error('nationalid')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- national id image -->
                                    <div class="form-group row">
                                        <label for="password-confirm"
                                            class="col-md-4 col-form-label text-md-right">{{ __('National Id Image') }}</label>

                                        <div class="col-md-6">
                                            <input type="file" name="nationalimage" class="form-control"
                                                id="nationalimage" placeholder="number">
                                        </div>
                                    </div>
                                    <!-- personal image -->
                                    <div class="form-group row">
                                        <label for="password-confirm"
                                            class="col-md-4 col-form-label text-md-right">{{ __('Personal Image') }}</label>

                                        <div class="col-md-6">
                                            <input type="file" name="personalimage" class="form-control"
                                                id="personalimage" placeholder="number">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header text-right" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn  btn-outline-success collapsed" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        بيانات التواصل
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <!-- mobile -->
                                    <div class="form-group row">
                                        <label for="mobile"
                                            class="col-md-4 col-form-label text-md-right">{{ __('Mobile') }}</label>

                                        <div class="col-md-6">
                                            <input id="mobile" type="number"
                                                class="form-control @error('mobile') is-invalid @enderror" name="mobile"
                                                value="{{ old('mobile') }}" required autocomplete="mobile" autofocus>

                                            @error('mobile')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- E-Mail Address -->
                                    <div class="form-group row">
                                        <label for="email"
                                            class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Password -->
                                    <div class="form-group row">
                                        <label for="password"
                                            class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="new-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- Confirm Password -->
                                    <div class="form-group row">
                                        <label for="password-confirm"
                                            class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control"
                                                name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- button -->
                    <div class="form-group text-center mb-0" style="margin-top: 40px;">
                        <div class=" ">
                            <button type="submit" class="btn btn-outline-success">
                                {{ __('تقديم البيانات') }}
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection

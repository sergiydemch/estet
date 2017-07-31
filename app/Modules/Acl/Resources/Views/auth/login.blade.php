@extends('acl::layouts.default')


@section('left_column')
    <h2 class="font-bold">
        {{ t('cp__title__login', 'Добро пожаловать') }}
    </h2>

    <p>{{ t('login_form__text__text1',
     'Прекрасно оформленные и точно подготовленной admin тема с
     более чем 50 страниц с дополнительные новые веб-приложения представлений.') }}
        {{--Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.--}}
    </p>

    <p>{{ t('login_form__text__text2', 'Lorem Ipsum просто манекен текст в печати и вэб промышленности.
        Lorem Ipsum был индустрии «s стандартные манекен текст начиная с XVI века.') }}
        {{--Lorem Ipsum is simply dummy text of the printing and typesetting industry.--}}
        {{--Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.--}}
    </p>

    <p>{{ t('login_form__text__text3', 'Когда неизвестный принтер взял камбуз типа и кинулись его, чтобы сделать тип образца ') }}
        {{--When an unknown printer took a galley of type and scrambled it to make a type specimen book.--}}
    </p>

    <p><small>{{ t('login_form__text__small_text4', 'Он пережил не только пять столетий,
            но и перешагнул в электронный верстки,
            по существу остается без изменений.') }}
            {{--It has survived not only five centuries,--}}
            {{--but also the leap into electronic typesetting,--}}
            {{--remaining essentially unchanged.--}}</small>
    </p>
@endsection

@section('right_column')
    <div class="ibox-content">

        <form class="m-t" role="form" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <input id="email" type="email" class="form-control"
                       placeholder="{{ t('login_form__placeholder__email', 'Email') }}"
                       name="email" value="{{ old('email') }}" required autofocus>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>


            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <input id="password" type="password" class="form-control"
                       placeholder="{{ t('login_form__placeholder__password', 'Пароль') }}"
                       name="password" required>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        {{ t('login_form__checkbox__remember_me', 'Запомнить меня') }}
                    </label>
                </div>
            </div>

            @if(\App::environment('prod'))
                <div class="recaptcha">
                    {!! app('captcha')->display($attributes = [], $lang = null) !!}
                </div>
            @endif

            <button type="submit" class="btn btn-primary block full-width m-b">
                {{ t('login_form__btn__login', 'Войти') }}
            </button>
        </form>

        <p class="m-t">
            <small>{{ t('login_form__text__small_copyright', 'ELU 2017') }}</small>
        </p>
    </div>
@endsection


@section('under')
    <div class="col-md-6">
        {{ t('login_form__text__small_copyright_elu', '© Все права защищены. ELU') }}
    </div>
    <div class="col-md-6 text-right">
        <small>{{ t('login_form__text__small_copyright_bottom', '© 2017') }}</small>
    </div>
@endsection

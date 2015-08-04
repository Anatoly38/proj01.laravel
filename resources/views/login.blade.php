@extends ('layouts.plane')
@section ('body')
<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
            <br /><br /><br />
               @section ('login_panel_title','Пожалуйста авторизуйтесь')
               @if (Session::has('message'))
                @include('widgets.alert', array('class'=>'danger', 'message'=> Session::get('message') ))
               @endif
               @section ('login_panel_body')
                        <form role="form"  method="POST" action="/login">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <fieldset>
                                <div class="form-group">
                                   {{-- <input class="form-control" placeholder="Имя пользователя или E-mail" name="email" type="email" autofocus value="{{ old('email') }}" >--}}
                                    <input class="form-control" placeholder="Имя пользователя или E-mail" name="email" autofocus value="{{ old('email') }}" >
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Пароль" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Запомнить меня
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-lg btn-success btn-block" style="margin-right: 15px;">
                                    Login
                                </button>
                            </fieldset>
                        </form>
                    
                @endsection
                @include('widgets.panel', array('as'=>'login', 'header'=>true))
            </div>
        </div>
    </div>
@stop
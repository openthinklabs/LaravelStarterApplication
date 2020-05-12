@extends('layouts.app')

@section('content')
<div class="ui container" style="padding-top:10%">
    <div class="ui grid center aligned">
        <div class="row">
            <div class="sixteen wide tablet six wide computer column">
                <div class="ui left aligned segment">

                    <div id="form1" class="ui form">
                      <form method="POST" action="{{ route('login') }}">
                        @csrf  
                        <h1 class="ui center aligned">
                            <img src="img/logo.png" alt="logo" class="ui centered medium circular image" title="{{ __('Login') }}">

                            <div class="content">
                            </div>
                        </h1>

                        <div class="field">
                            <label>
                                {{ __('E-Mail Address') }}:
                            </label>
                            <div class="ui fluid icon input @error('email') error @enderror">
                                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus style="width:100%!important;min-width:100%;width:100%;" placeholder="E-Mail Address...">
                                <i class="icon mail outline"></i>
                            </div>
                            @error('email')
                            <div class="ui error visible message">
                                <strong>{{ $message }}</strong>
                            </div>
                            @enderror                            
                        </div>
                        <div class="field">
                            <label>
                                {{ __('Password') }}:
                            </label>
                            <div class="ui fluid icon input">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" style="width:100%!important;min-width:100%;width:100%;">
                                <i class="icon key"></i>
                            </div>
                            @error('password')
                            <div class="ui error visible message">
                                <strong>{{ $message }}</strong>
                            </div>
                            @enderror                            
                        </div>
                        <div class="field">
                            <label>
                                {{ __('Remember Me') }}
                            </label>    
                            <div class="ui fluid input">                                          
                              <input class="form-control" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            </div>
                        </div>
                        <div class="field">

                            <button type="submit" class="ui teal right labeled icon button fluid">
                                {{ __('Login') }} <i class="icon sign in"></i>
                            </button>

                            @if (Route::has('password.request'))
                            <a class="ui blue right labeled icon button fluid" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                                <i class="icon spy"></i>
                            </a>
                            @endif                              
                        </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    var colors = ["#DB261C", "#0C0C0E"];
    var rand = Math.floor(Math.random() * colors.length);
    $('body').css("background-color", colors[rand]);
</script>
@endsection

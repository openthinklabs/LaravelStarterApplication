@extends('layouts.app')

@section('content')
<div class="ui container" style="padding-top:10%">
    <div class="ui grid center aligned">
        <div class="row">
            <div class="sixteen wide tablet six wide computer column">
                <div class="ui left aligned segment">

                    <div id="form1" class="ui form">
                        @if (session('status'))
                        <div class="ui visible message">
                            {{ session('status') }}
                        </div>
                         @endif
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf  
                        <h1 class="ui center aligned">
                            <a href="{{ route('home') }}"><img src="/img/logo.png" alt="logo" class="ui centered medium circular image" title="{{ __('Login') }}"></a>

                            <div class="content">
                                {{ __('Reset Password') }}    
                            </div>
                        </h1>

                        <div class="field">
                            <label>
                                {{ __('E-Mail Address') }}:
                            </label>
                            <div class="ui fluid icon input @error('email') error @enderror">
                                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <i class="icon key"></i>
                            </div>
                            @error('email')
                            <div class="ui error visible message">
                                <strong>{{ $message }}</strong>
                            </div>
                            @enderror
                        </div>
                        <div class="field">
                            <button type="submit" class="ui teal right labeled icon button fluid">
                                {{ __('Send Password Reset Link') }} <i class="icon sign in"></i>
                            </button>                            
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

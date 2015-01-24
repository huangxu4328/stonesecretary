@extends('admin._layouts.login')

@section('main')

        <div id="login-content">

            {{ Form::open() }}

            <form action="index.html">

                @if ($errors->has('login'))

                <div class="notification information png_bg">

                    <div> Just click "Sign In". No password needed. </div>

                </div>

                @endif

                <p>

                    <!--<label></label>-->

                    {{ Form::label('', 'Username') }}

                    <!--<input class="text-input" type="text" />-->

                    {{ Form::inputEmail() }}


                </p>

                <div class="clear"></div>

                <p>

                    <!--<label>Password</label>-->

                    {{ Form::label('', 'Password') }}

                    <!--<input class="text-input" type="password" />-->

                    {{ Form::inputPwd() }}

                </p>

                <div class="clear"></div>

                <!--<p id="remember-password">

                    <input type="checkbox" />

                    Remember me
                </p>-->

                <div class="clear"></div>

                <p>

                    <!--<input class="button" type="submit" value="Sign In" />-->
                    
                    {{ Form::submit('Login', array('class' => 'button')) }}
                </p>
            </form>
        </div>

@stop
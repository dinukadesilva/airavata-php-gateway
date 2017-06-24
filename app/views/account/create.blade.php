@extends('layout.basic')

@section('page-header')
@parent
@stop

@section('content')

<div class="col-md-offset-4 col-md-4">
    @if (!empty($auth_password_option))
    <div class="page-header">
        <h3>Create New {{{ $auth_password_option["name"] }}} Account
            <small>
                <small> (Already registered? <a href="login">Log in with {{{ $auth_password_option["name"] }}}</a>)</small>
            </small>
        </h3>
    </div>
    @if ($errors->has())

    @foreach ($errors->all() as $error)
    {{ CommonUtilities::print_error_message($error) }}
    @endforeach

    @endif

    <form action="create" method="post" role="form">

        @if( Session::has('username_exists'))
        {{ CommonUtilities::print_error_message('The username you entered is already in use. Please select another.') }}
        @endif
        <?php
        Session::forget("username_exists");
        ?>
        <div class="form-group required"><label class="control-label">Username</label>

            <div><input class="form-control" id="username" minlength="6" maxlength="30" name="username"
                        placeholder="Username" required="required" type="text" value="{{Input::old('username') }}"
                        onblur="this.value = this.value.toLowerCase()"
                        data-container="body" data-toggle="popover" data-placement="left" data-content="Username can only contain lowercase letters, numbers, underscores and hyphens."/>
            </div>
        </div>
        <div class="form-group required"><label class="control-label">Password</label>

            <div><input class="form-control" id="password" minlength="6" name="password" placeholder="Password"
                        required="required" title="" type="password" data-container="body" data-toggle="popover" data-placement="left" data-content="Password needs to contain at least (a) One lower case letter (b) One Upper case letter and (c) One number (d) One of the following special characters - !@#$*"/>
            </div>
        </div>
        <div class="form-group required"><label class="control-label">Password (again)</label>

            <div><input class="form-control" id="confirm_password" name="confirm_password"
                        placeholder="Password (again)" required="required" title="" type="password"/>
            </div>
        </div>
        <div class="form-group required"><label class="control-label">E-mail</label>

            <div><input class="form-control" id="email" name="email" placeholder="email@example.com"
                        required="required" title="" type="email" value="{{Input::old('email') }}"
                         data-toggle="popover" data-placement="left" data-content="Please make sure that you enter a correct email address as a verification mail will be sent to this addresss."/></div>
        </div>
        <div class="form-group required"><label class="control-label">First Name</label>

            <div><input class="form-control" id="first_name" maxlength="30" name="first_name"
                        placeholder="First Name" required="required" title="" type="text"
                        value="{{Input::old('first_name') }}"/></div>
        </div>
        <div class="form-group required"><label class="control-label">Last Name</label>

            <div><input class="form-control" id="last_name" maxlength="30" name="last_name"
                        placeholder="Last Name" required="required" title="" type="text"
                        value="{{Input::old('last_name') }}"/></div>
        </div>
        <br/>
        <input name="Submit" type="submit" class="btn btn-primary btn-block" value="Create">
    </form>

        @if (!empty($auth_code_options))
            <h4>OR</h4>
        @endif
    @endif {{-- @if (!empty($auth_password_option)) --}}

    @if (!empty($auth_code_options))
        @include('partials/login-external', array("auth_code_options" => $auth_code_options))
    @endif

    <style media="screen" type="text/css">
        .form-group.required .control-label:after {
            content: " *";
            color: red;
        }
    </style>
    <br/><br/><br/>
</div>
</body>

@stop

@section('scripts')
@parent
<script>
    $("[data-toggle=popover]").popover({
        'trigger':'focus'
    });
</script>
@stop

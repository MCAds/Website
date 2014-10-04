@extends('layouts.base')

@section('content')
<div class='container-fluid' style='text-align:center;margin:0 auto; width: 670px'>

{{ Form::open(array('action' => 'RegistrationController@registerUser')) }}

<h2>Login</h2>
<br />
<div class='input-group'>
	<span class="input-group-addon">Username</span><input type='text' id='username' name='username' class='form-control' style='width:670px' />
</div>
<br />
<div class='input-group'>
<span class="input-group-addon">Password</span><input type='password' id='password' name='password' class='form-control' style='width:670px' />
</div>
<br />
<input type='submit' value='Login' class='btn btn-success' style="width:400px" />
{{ Form::close() }}
</div>

@stop

@extends('layouts.base')

@section('content')
<div class='container-fluid' style='text-align:center;margin:0 auto; width: 670px'>

{{ Form::open(array('action' => 'LoginController@loginUser')) }}

<h2>Login</h2>
<br />
<div class='input-group'>
	<span class="input-group-addon" style="width:100px">Username</span><input type='text' id='username' name='username' class='form-control' style='width:570px' />
</div>
<br />
<div class='input-group'>
<span class="input-group-addon" style="width:100px">Password</span><input type='password' id='password' name='password' class='form-control' style='width:570px' />
</div>
<br />
<input type='submit' value='Login' class='btn btn-success' style="width:400px" />
{{ Form::close() }}
</div>

@stop

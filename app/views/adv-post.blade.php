@extends('layouts.base')

@section('content')
<div class='container-fluid' style='text-align:center;margin:0 auto; width: 670px'>

@if($https===true)
    {{ Form::open(array('action' => 'RegistrationController@registerUser', 'url' => URL::to('/post-ad-proc', array(), true))) }}
@else
    {{ Form::open(array('action' => 'RegistrationController@registerUser')) }}
@endif
    
<h2>Post An Ad</h2>
<br />
<div class='input-group'>
	<span class="input-group-addon" maxlength="30" style="width:100px">Title</span><input type='text' id='title' name='title' class='form-control' style='width:570px' />
</div><span style="font-size:">Please keep titles under 30 characters.</span>
<br />
<div class='input-group'>
	<span class="input-group-addon" maxlength="250" style="width:100px">Link</span><input type='text' id='link' name='link' class='form-control' style='width:570px' />
</div>
<br />
<div class='input-group'>
<span class="input-group-addon" style="width:180px">$USD per 1000 clicks</span><input type='text' id='text' name='pptc' class='form-control' style='width:490px' />
</div>
<br />
Type of Ad:
<select name="type" id="type" class="form-control" style="width:660px">
<option value="Bossbar">Bossbar</option>
<option value="Chat">Chat</option>
<option value="Hologram">Hologram</option>
<option value="Scoreboard">Scoreboard</option>
</select>
<br />
<input type='submit' value='Create' class='btn btn-success' style="width:400px" />
{{ Form::close() }}
</div>

@stop

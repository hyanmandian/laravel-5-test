@if(isset($user))
	{!! Form::model($user, ['route' => ['user.update', $user->id], 'method' => 'PUT', 'class' => 'ajax-form']) !!}
@else
	{!! Form::open(['route' => 'user.store', 'method' => 'POST', 'class' => 'ajax-form']) !!}
@endif
	
	<div class="form-group">
		{!! Form::label('name', 'Last name') !!}
		{!! Form::text('name') !!}
		<span class="form-message"></span>
	</div>

	<div class="form-group">
		{!! Form::label('email', 'Email') !!}
		{!! Form::email('email') !!}
		<span class="form-message"></span>
	</div>

	<span class="form-status"></span>
	
	{!! Form::submit('Save') !!}

{!! Form::close() !!}
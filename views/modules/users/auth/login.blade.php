@extends(Theme::getLayout())

@section('header')
	Login
@stop

@section('content')
	<div class="wrapper">
		<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-default panel-login">
				<div class="panel-body">
					{!! Form::open() !!}
						<fieldset>
							<div class="form-group {{ $errors->has('email') ? 'has-error' : null }}">
								<div class="input-group">
									<div class="input-group-addon"><i class="btl bt-envelope"></i></div>
									{!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
								</div>

								{!! $errors->first('email', '<p class="help-block text-danger">:message</p>') !!}
							</div>

							<div class="form-group {{ $errors->has('password') ? 'has-error' : null }}">
								<div class="input-group">
									<div class="input-group-addon"><i class="btl bt-key"></i></div>
									{!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}
								</div>

								{!! $errors->first('password', '<p class="help-block text-danger">:message</p>') !!}
							</div>

							<div class="text-center">
								<div class="checkbox">
									<label>
										{!! Form::checkbox('remember_me', '1') !!} Remember me
									</label>
								</div>

								<p class="help-block"><small>(This is not recommended for shared computers)</small></p>
							</div>

							<hr>

							{!! Form::submit('Log In', ['class' => 'btn btn-primary btn-block']) !!}

							<p class="help-block text-center">
								<a href="/register">I don't have an account</a><br>
								<a href="/password/reset">I forgot my password</a>
							</p>
						</fieldset>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
@stop
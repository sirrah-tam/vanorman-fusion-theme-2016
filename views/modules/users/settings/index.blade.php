@extends(Theme::getLayout())

@section('header')
    Account Settings
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="text-center">
                    <p><img src="{{ $currentUser->gravatar(200) }}" class="img-thumbnail"></p>
                    <p><small>Avatar by <a href="//gravatar.com">gravatar.com</a></small></p>
                </div>

                <div class="list-group" id="setting-groups">
					<a href="#profile" data-toggle="tab" class="list-group-item">Profile</a>
                    <a href="#account" data-toggle="tab" class="list-group-item">Account</a>
				</div>
            </div>

            <div class="col-md-8">
                <div class="tab-content">
                    <div class="tab-pane" id="profile">
                        <div class="panel panel-default">
        					<div class="panel-heading">
        						<h3 class="panel-title">Profile</h3>
        					</div>

                            <div class="panel-body">
                                {!! Form::open(['route' => ['users.settings.profile'], 'role' => 'form', 'class' => 'form-horizontal form']) !!}
                                    <div class="form-group">
                                        <label for="first_name" class="control-label col-sm-2">First Name</label>
                                        <div class="col-sm-10">
                                            {{ Form::text('first_name', $currentUser->first_name, ['class' => 'form-control']) }}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="last_name" class="control-label col-sm-2">Last Name</label>
                                        <div class="col-sm-10">
                                            {{ Form::text('last_name', $currentUser->last_name, ['class' => 'form-control']) }}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-default">Save</button>
                                        </div>
                                    </div>
                                {{ Form::close() }}
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="account">
                        <div class="panel panel-default">
        					<div class="panel-heading">
        						<h3 class="panel-title">Account</h3>
        					</div>

                            <div class="panel-body">
                                {!! Form::open(['route' => ['users.settings.account'], 'role' => 'form', 'class' => 'form-horizontal form']) !!}
                                    <div class="form-group">
                                        <label for="email" class="control-label col-sm-2">E-mail</label>
                                        <div class="col-sm-10">
                                            {{ Form::text('email', $currentUser->email, ['class' => 'form-control']) }}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-default">Save</button>
                                        </div>
                                    </div>
                                {{ Form::close() }}
                            </div>
                        </div>

                        <div class="panel panel-default">
        					<div class="panel-heading">
        						<h3 class="panel-title">Change Password</h3>
        					</div>

                            <div class="panel-body">
                                {!! Form::open(['route' => ['users.settings.password'], 'role' => 'form', 'class' => 'form-horizontal form']) !!}
                                    <div class="form-group">
                                        <label for="current_password" class="control-label col-sm-2">Current</label>
                                        <div class="col-sm-10">
                                            {{ Form::password('current_password', ['class' => 'form-control']) }}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password" class="control-label col-sm-2">New</label>
                                        <div class="col-sm-10">
                                            {{ Form::password('password', ['class' => 'form-control']) }}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="confirm_password" class="control-label col-sm-2">Confirm</label>
                                        <div class="col-sm-10">
                                            {{ Form::password('confirm_password', ['class' => 'form-control']) }}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-default">Change Password</button>
                                        </div>
                                    </div>
                                {!! Form::close() !!}
                            </div>
                        </div>

                        {{-- <div class="panel panel-danger">
        					<div class="panel-heading">
        						<h3 class="panel-title">Delete Account</h3>
        					</div>

                            <div class="panel-body">
                                <div class="form-horizontal form">
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <p>Once you delete your account, there is no going back. Please be certain this is what you want to do.</p>

                                            <a href="#" data-toggle="modal" data-target="#delete-account" class="btn btn-danger">Delete My Account</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('after')
    <div class="modal fade" id="delete-account" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3 class="modal-title text-danger">Delete Account</h3>
                </div>

                <div class="modal-body">
                    <h4>Are you sure?</h4>
                    <p>This action can not be undone once made. All information related to your user account will be deleted from the server.</p>
                </div>

                <div class="modal-footer">
                    {!! Form::open(['method' => 'DELETE', 'route' => ['users.settings.delete'], 'role' => 'form']) !!}
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@stop

@section('javascript')
	<script>
		$(function() {
			$('#setting-groups a:first').tab('show');
			$('#setting-groups .list-group-item:first').addClass('active');

			$('.list-group-item').on('click',function(e){
				var previous = $(this).closest(".list-group").children(".active");
				previous.removeClass('active');
				$(e.target).addClass('active');
			});
		});
	</script>
@endsection

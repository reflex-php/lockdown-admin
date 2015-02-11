@extends('lockdown::layout')

@section('notifications')

@endsection

@section('subtitle')
    <h2>Role Management</h2>
@endsection

@section('content')
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Create A New Role</h3>
        </div>
        {!! Form::open(['route' => ['lockdown.roles.store'], 'class' => 'form-horizontal', 'role' => 'form', 'autocomplete' => 'on', 'method' => 'post']) !!}
        <div class="box-body">
            {!! HTML::error_block($errors) !!}
            <div class="form-group">
                {!! Form::label('name', 'Role Name', ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-10">
                    {!! Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Role Name', 'required' => 'required']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('description', 'Description', ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-10">
                    {!! Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Description', 'required' => 'required']) !!}
                </div>
            </div>
        </div>
        <div class="box-footer">
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    {!! Form::submit('Create', ['class' => 'btn btn-primary', 'id' => 'create-submit']) !!}
                    {!! link_to_route('lockdown.home', 'Cancel', [], ['class' => 'btn btn-danger']) !!}
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
@endsection
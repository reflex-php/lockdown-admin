@extends('lockdown::layout')

@section('subtitle')
    <h2>Role Management</h2>
@endsection

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">All Roles</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            <table id="all-roles" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Key</th>
                        <th>Description</th>
                        <th>Created</th>
                        <th>Last Edited</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
    @foreach ($roles as $role)
                    <tr>
                        <td>{{ $role->name }}</td>
                        <td>{{ $role->key }}</td>
                        <td>{{ $role->description }}</td>
                        <td>{{ $role->created_at }}</td>
                        <td>{{ $role->updated_at }}</td>
                        <td>
                            {!! Form::open(['route' => ['lockdown.roles.destroy', $role->id], 'method' => 'delete', 'style' => 'display: inline']) !!}
                                {!! Form::button('', ['type' => 'submit', 'class' => 'btn-link fa fa-trash-o']) !!}
                            {!! Form::close() !!}
                            {!! link_to(route('lockdown.roles.edit', [$role->id]), '', ['class' => 'fa fa-edit']) !!}
                        </td>
                    </tr>
    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Key</th>
                        <th>Description</th>
                        <th>Created</th>
                        <th>Last Edited</th>
                        <th>Options</th>
                    </tr>
                </tfoot>
            </table>
        </div><!-- /.box-body -->
    </div>
@endsection
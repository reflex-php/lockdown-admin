@extends('lockdown::layout')

@section('subtitle')
    Role Management
@endsection

@section('content')
    @foreach ($roles as $role)
        {!! $role->name !!}
    @endforeach
@endsection
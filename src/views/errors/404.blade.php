@extends('lockdown::layout')

@section('subtitle')
    <h2>Page Not Found | 404</h2>
@endsection

@section('content')
    <div class="box box-danger">
        <div class="box-header">
            <h3>Page Not Found | 404</h3>
        </div>
        <div class="box-body">The Page '{{ Request::path() }}' couldn't be found</div>
        <div class="box-footer">...</div>
    </div>
@endsection
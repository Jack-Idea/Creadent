@extends('master')

@section('title') Специалисты @endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/employees.css?v=1') }}">
@endsection

@section('main')

    <employees-component></employees-component>

@endsection

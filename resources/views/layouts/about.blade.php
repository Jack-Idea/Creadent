@extends('master')

@section('title') О клинике @endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/about.css?v=1') }}">
@endsection

@section('main')

    <about-component></about-component>

@endsection

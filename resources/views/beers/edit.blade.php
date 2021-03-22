@extends('template')

@section('title', 'New Beer')

@section('content')

@include('beers.form', ['create'=>false])

@endsection


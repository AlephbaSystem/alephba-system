@extends('layouts.default')
@section('infoheader')
@include('includes.home.header')
@stop
@section('content')
@include('includes.home.slider')
@include('includes.home.cta')
@include('includes.home.boxes')
@include('includes.home.services')
@include('includes.home.history')
@stop
@section('includescripts')
@stop
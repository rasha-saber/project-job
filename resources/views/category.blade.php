@push('pageHeader')
category
@endpush

@extends('layouts.main')
@push('pageTitle')
category
@endpush



@section('contentcategory')
@include('includes.header')
@include('includes.Category')
@endsection










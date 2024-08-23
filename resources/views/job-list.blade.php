@push('pageHeader')
job-list
@endpush

@extends('layouts.main')
@push('pageTitle')
job-list
@endpush



@section('contentjob-list')
@include('includes.header')
@include('includes.job')
@endsection







     

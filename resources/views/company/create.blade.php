@extends('layouts.app')

@section('content')

    <h1>Enter a new Company</h1>

    <hr/>

    {!! Form::model($company = new \App\Company, ['url' => 'company']) !!}
        @include('company.form', ['submitButtonText' => 'Add Company'])
    {!! Form::close() !!}
@stop
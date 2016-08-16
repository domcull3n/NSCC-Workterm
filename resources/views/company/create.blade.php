@extends('layouts.app')

@section('content')

    <h1>Enter a new Company</h1>

    <hr/>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            There were some problems adding the category.<br />
            <ul>
                @foreach ($errors->all() as $error)
                    <li></li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::open(array('route' => 'company.store')) !!}
        @include('company.form', ['submitButtonText' => 'Add Company'])
    {!! Form::close() !!}
@stop
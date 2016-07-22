@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                @foreach($companies as $company)
                    <div class="panel panel-default">

                        <div class="panel-heading">
                            <a href={{ url('company', $company->id) }}>
                                {{ $company->company_name }}
                            </a>
                        </div>

                        <div class="panel-body">
                            @foreach($company->tasks as $task)
                                <div class="h2">
                                    <a href="{{ url('task', $task->id) }}">
                                        {{ $task->name }}
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <div class="panel panel-default">

                    <div class="panel-heading">
                        <a href="{{ url('task', $task->id) }}">
                            {{ $task->name }}
                        </a>
                    </div>

                    <div class="panel-body">

                        <p>Status: {{ $task->status }}</p>
                        <p>
                            Short Description:
                            {{ $task->short_description }}
                        </p>

                        <p>Company Name:
                            <a href="{{ url('company', $task->company->id) }}">
                                {{ $task->company->company_name }}
                            </a>
                        </p>

                        <p>
                            Notes:
                            <div>
                                {{ $task->notes }}
                            </div>
                        </p>

                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
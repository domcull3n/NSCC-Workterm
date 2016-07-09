@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            @foreach($companies as $company)
            <div class="panel panel-default">

                    <div class="panel-heading">
                        {{ $company->company_name }}
                    </div>

                    <div class="panel-body">
                        <p>Province: {{ $company->province }}</p>
                        <p>City: {{ $company->city }}</p>
                        <p>Postal Code: {{ $company->postal_code }}</p>
                        <p>Apartment Number: {{ $company->apartment_number }}</p>
                        <p>Company Email: {{ $company->email }}</p>
                        <p>Company Phone Number: {{ $company->phone_number }}</p>
                        <p>Type: {{ $company->type }}</p>

                        <p>Additional Info:</p>
                        <div class="divider">
                            {{ $company->additional_info }}
                        </div>
                    </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
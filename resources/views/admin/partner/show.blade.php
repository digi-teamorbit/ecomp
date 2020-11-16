@extends('layouts.app')

@section('content')
    <div class="container-fluid bg-white mt-5">
        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box card">
                <div class="card-body">
                    <h3 class="box-title pull-left">Partner #{{ $partner->id }}</h3>
                    
                        <a class="btn btn-success pull-right" href="{{ url('/admin/partner') }}">
                            <i class="icon-arrow-left-circle" aria-hidden="true"></i> Back</a>
                    
                    <div class="clearfix"></div>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table">
                            <tbody>
                            <tr>
                                <th>ID</th>
                                <td>{{ $partner->id }}</td>
                            </tr>
                            <tr><th> First Name </th><td> {{ $partner->first_name }} </td></tr><tr><th> Last Name </th><td> {{ $partner->last_name }} </td></tr><tr><th> Email </th><td> {{ $partner->email }} </td></tr><tr><th> Phone </th><td> {{ $partner->phone }} </td></tr><tr><th> Company Name </th><td> {{ $partner->company_name }} </td></tr><tr><th> Software Name </th><td> {{ $partner->software_name }} </td></tr><tr><th> Primary State Served </th><td> {{ $partner->primary_state }} </td></tr><tr><th> Estimated Number of Customers </th><td> {{ $partner->customers }} </td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.admin.footer')
</div>
@endsection


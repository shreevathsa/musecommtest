@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('User Details') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf


                        <table class="table-bordered table-responsive">
                            <tr>
                            <th>sl no</th>
                            <th>user type</th>
                            <th>name</th>
                            <th>Email</th>
                            <th>Mobile Number</th>
                            <th>College</th>
                            <th>Branch</th>
                            <th>Company Name</th>
                            <th>Designation</th>



                            </tr>
                            <tbody>
                                @foreach($details as $key=>$det)           
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$det->user_type}}</td>
                                    <td>{{$det->name}}</td>
                                    <td>{{$det->email}}</td>
                                    <td>{{$det->mobile_number}}</td>
                                    <td>{{$det->college}}</td>
                                    <td>{{$det->branch}}</td>
                                    <td>{{$det->company_name}}</td>
                                    <td>{{$det->designation}}</td>

                                </tr>
                                @endforeach
                            </tbody>

</table>    

                        
                 </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

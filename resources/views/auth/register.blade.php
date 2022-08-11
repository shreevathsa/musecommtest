@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="nametest form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row"> 
                        <div class="col-md-6">
                            <label class="col-md-4 col-form-label text-md-right radio-inline">
                            <input type="radio" id="user_type_fresher" name="user_type" value="fresher">Fresher</label>

                            <label class="radio-inline">
                            <input type="radio" id="user_type_experienced"  name="user_type" value="experienced">Experienced</label>
                        </div>
                        </div>

                        



                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        
                    
                    <!-- Personal details fresher -->
                    <div class="Personaldetails" >
                        <hr/>
                        <h3>Personal Details</h3>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                            <div class="col-md-6">
                                <input id="p_name" type="text" class="form-control" name="p_name" value="" required autocomplete="name" autofocus>
                               
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="p_email" type="email" class="form-control" name="p_email" value="" required autocomplete="email">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Mobile Number') }}</label>

                            <div class="col-md-6">
                                <input id="mobile_number" type="text" class="form-control" name="mobile_number" value="" required autocomplete="email">
                            </div>
                        </div>

                        </div>



                        <!-- Educational  -->
                    <div class="educational" >
                        <hr/>
                        <h3>Educational Details</h3>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Passout Year') }}</label>
                            <div class="col-md-6">
                                <input id="passout_year" type="text" class="form-control" name="passout_year" value="" required autocomplete="name" autofocus>
                               
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Branch') }}</label>

                            <div class="col-md-6">
                                <input id="branch" type="text" class="form-control" name="branch" value="" required autocomplete="email">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('College') }}</label>

                            <div class="col-md-6">
                                <input id="college" type="college" class="form-control" name="college" value="" required autocomplete="email">
                            </div>
                        </div>

                        </div>


                            <!-- job details -->
                    <div class="jobDetails" id="jobDetails" >
                        <hr/>
                        <h3>Job Details</h3>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Current Company Name') }}</label>
                            <div class="col-md-6">
                                <input id="company_name" type="text" class="form-control" name="company_name" value=""  autocomplete="name">
                               
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('designation') }}</label>

                            <div class="col-md-6">
                                <input id="designation" type="text" class="form-control" name="designation" value=""  autocomplete="email">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Location') }}</label>

                            <div class="col-md-6">
                                <input id="location" type="text" class="form-control" name="location" value=""  autocomplete="email">
                            </div>
                        </div>

                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')


<script type="text/javascript">
$(function(){
    $( document ).ready(function() {
    console.log( "ready!" );
    $(".jobDetails").hide();
    $(".Personaldetails").hide();
    $(".educational").hide();
});

$(document).on('keyup','input[name=name]',function(){
        var v = this.value;
        console.log(v);
        $("#p_name").val(this.value);
});

$(document).on('keyup','input[name=email]',function(){
        var v = this.value;
        console.log(v);
        $("#p_email").val(this.value);
});

$(document).on('click','input[name=user_type]',function(){

    // alert("hi");
    if (this.value == 'fresher') {
        // ...
        // alert(this.value);

        $(".jobDetails").hide();
        $(".Personaldetails").show();
        $(".educational").show();


    }
    else if (this.value == 'experienced') {
        $(".jobDetails").show();
        $(".Personaldetails").show();
        $(".educational").show();
    }
});
// $('input[name=user_type]').click(function() {
//     alert("asda");
//     if (this.value == 'fresher') {
//         // ...
//         alert(this.value);
//     }
//     else if (this.value == 'experienced') {
//         // ...
//         alert(this.value);
//     }
// });
});
</script>
@endsection




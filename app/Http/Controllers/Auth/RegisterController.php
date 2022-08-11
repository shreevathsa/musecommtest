<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\PersonalDetails;
use App\JobDetails;
use App\EducationalDetails;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'user_type' => ['required'],
        
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        // dd($data);
        $result =  User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'user_type' => $data['user_type'],
            'password' => Hash::make($data['password']),
        ]);
    
        if($data['user_type'] == "fresher" || $data['user_type'] == "experienced")
        {
            PersonalDetails::create([
                'user_id' => $result->id,
                'mobile_number' => $data['mobile_number']
            ]);

            EducationalDetails::create([
                'user_id' => $result->id,
                'passout_year' => $data['passout_year'],
                'branch' => $data['branch'],
                'college' => $data['college'],
            ]);
        }

        if($data['user_type'] == "experienced")
        {
            JobDetails::create([
                'user_id' => $result->id,
                'company_name' => $data['company_name'],
                'designation' => $data['designation'],
                'location' => $data['location'],
            ]);
        }   
    
        
        
        return redirect('/login');



    }
}

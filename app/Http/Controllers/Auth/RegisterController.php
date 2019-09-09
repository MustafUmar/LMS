<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\UserDetail;
use App\Account;
use App\Contribution;
use Carbon\Carbon;

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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        return view('users.register');
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
            'firstname' => ['required', 'string', 'max:100'],
            'othername' => ['max:100'],
            'lastname' => ['required', 'string', 'max:100'],
            'phone' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'confirmed'],

            'stateoforigin' => ['required', 'string', 'max:100'],
            'placeofbirth' => ['required', 'string', 'max:100'],
            'dateofbirth' => ['required', 'string', 'date_format:d-M-Y'],
            'gender' => ['required','max:1'],
            'maritalstatus' => ['required','max:1'],
            'phaddress' => ['required', 'string', 'max:255'],
            'nokfullname' => ['required', 'string', 'max:150'],
            'nokphonenum' => ['required', 'string', 'max:20'],
            'nokaddress' => ['required', 'string', 'max:255'],
            'occupation' => ['required', 'string', 'max:225'],
            'bankname' => ['required', 'string', 'max:255'],
            'accountname' => ['required', 'string', 'max:255'],
            'accountnumber' => ['required', 'string', 'max:10'],
            'username' => ['required', 'string', 'max:255'],
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
        $user = User::create([
            'firstname' => $data['firstname'],
            'othername' => $data['othername'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'memberid' => 'CP'.$this->generateID(),
            'password' => Hash::make($data['password']),
            'isactive' => true
        ]);

        $user->userdetail()->create([
            'gender' => $data['gender'],
            'maritalstatus' => $data['maritalstatus'],
            'dob' => Carbon::createFromFormat('d-M-Y', $data['dateofbirth']),
            'pob' => $data['placeofbirth'],
            'stateoforigin' => $data['stateoforigin'],
            'phaddress' => $data['phaddress'],
            'profession' => $data['occupation'],
            'companyname' => $data['compname'],
            'companyaddress' => $data['compaddress'],
            'kinfullname' => $data['nokfullname'],
            'kinphonenum' => $data['nokphonenum'],
            'kinaddress' => $data['nokaddress']
        ]);

        $account = $user->account()->create([
            'memberid' => $user->memberid,
            'bankname' => $data['bankname'],
            'accountname' => $data['accountname'],
            'accountnumber' => $data['accountnumber'],
            'balance' => 0
        ]);

        $contrib = new Contribution([
            'accountname' => $account->accountname,
            'balance' => 0
        ]);
        $contrib->account()->associate($account);
        $contrib->save();

        return $user;
    }

    private function generateID() {
        $memid = 0;
        for ($i=0; $i < 60; $i++) { 
            $memid = mt_rand(100000000, 999999999);
            if(!(User::where('memberid', $memid)->exists())) {
               break;
            }
        }
        return $memid;
    }
}

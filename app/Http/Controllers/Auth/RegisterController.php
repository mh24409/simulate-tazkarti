<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
            'fisrtname' => ['required', 'string', 'max:255'],
            'secondname' => ['required', 'string', 'max:255'],
            'thirdname' => ['required', 'string', 'max:255'],
            'momname' => ['required', 'string', 'max:255'],

            'national' => ['required', 'string', 'max:255'],
            'nationalid' => ['required', 'string', 'digits:14'],
            'mobile' => ['required', 'string',],
            'gender' => ['required', 'string', 'max:255'],
            'blood' => ['required', 'string', 'max:255'],
            'idtype' => ['required', 'string', 'max:255'],

            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],

            'personalimage' => 'required', 'image|mimes:jpg,png,jpeg|max:1999',


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
        $personalimageName = time() . '.' . $data['personalimage']->getClientOriginalExtension();

        $data['personalimage']->move(
            base_path() . '/public/storage/images/users',
            $personalimageName
        );

        $nationalimageName = time() . '.' . $data['nationalimage']->getClientOriginalExtension();

        $data['nationalimage']->move(
            base_path() . '/public/storage/images/users',
            $nationalimageName
        );

        return User::create([
            'fisrtname' => $data['fisrtname'],
            'secondtname' => $data['secondname'],
            'thirdtname' => $data['thirdname'],
            'momname' => $data['momname'],
            'national' => $data['national'],
            'nationalid' => $data['nationalid'],
            'mobile' => $data['mobile'],
            'gender' => $data['gender'],
            'blood' => $data['blood'],
            'idtype' => $data['idtype'],
            'personalimage' => $personalimageName,
            'nationalimage' => $nationalimageName,

            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}

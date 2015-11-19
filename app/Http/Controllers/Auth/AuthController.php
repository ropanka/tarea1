<?php

namespace App\Http\Controllers\Auth;

use App\Usuario;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    protected function getLogin()
    {
        return view('auth.login');
    }

    public function postLogin()
    {
        //obtenemos los datos del formulario
        $data=[
            'username'=>Input::get('username'),
            'password'=>Input::get('password')
        ];
        //verificamos los datos
        if(Auth::attempt($data, Input::get('remember')))
        {
            //si los datos son correctos muestra inicio
            return Redirect::intended('index');
        }
        //si los datos no son los correctos volvemos al login y mostramos un error
        return Redirect::back()->with('error_message','Datos invalidos')->withInput();
    }

    protected $redirectPath = 'template.main';
}

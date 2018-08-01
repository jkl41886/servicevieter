<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use GuzzleHttp\Client;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('guest')->except('logout');
        $this->client = new Client([
            'base_uri' => env('MIX_API_BASE_URL')
        ]);
    }

    protected function attemptLogin(Request $request){
        $credentials = $this->credentials($request);
        $isLogin = $this->guard()->attempt($credentials, $request->filled('remember'));
        $retVal = false;
        if($isLogin){
            $response = $this->client->post('/api/v1/login', [
                'form_params' => [
                    'email' => $credentials['email'],
                    'password' => $credentials['password']
                ]
            ]);
            if($response->getStatusCode() === 200){
                $data = json_decode($response->getBody());
                if(isset($data->success) AND isset($data->success->token)){
                    session(['api-token'=>$data->success->token]);
                    $retVal = true;
                }
            }
        }
        return $retVal;
    }
}

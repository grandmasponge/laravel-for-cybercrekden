<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Testing\Fluent\Concerns\Has;

class authController extends Controller
{
    public function login() {
        return view('Authenticate.login');
    }
    public function register(){
        return view('Authenticate.register');
    }
    public function getResponse(Request $request){
        $validater = $request-> validate([
            'DiscordUsername' => 'required|min:1|max:100',
           'Username' => 'required|min:4|max:250|',
            'Password' => 'required|min:8|max:100'
        ]);

        $password = request('Password');
        $user = users::firstOrCreate([
            'Username' => request('Username')],
            [
                'DiscordUsername' => request('DiscordUsername'),
                'HashedPassword' => $this->Hash($password)
        ]);

        return redirect('/login');
    }

    public function LoginRequest() {
        $user = users::where('Username', request('Login_Username'))->first();
        $password = request('Login_Password');
        if($user){
            $userpassword = $user->HashedPassword;
            $verify = password_verify($password, $userpassword);
            if ($verify){
                $user->session()->put([
                    'Discord_Username' => 'DiscordUsername',
                    'Is_Verified' => 'isVerified'
                ]);
                return redirect('');
            }
            else{
                return('nope');
            }
        }else{
            return('/no');
        }


    }
    private function Hash(string $password): string
    {
       $hashedpassword =  password_hash($password, PASSWORD_BCRYPT);
       $hashedpasswordtrimmed = trim($hashedpassword);
       return $hashedpasswordtrimmed;
    }

}

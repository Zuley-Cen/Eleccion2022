<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite; #--- se agrega esta referencia

class LoginController extends Controller
{
    use AuthenticatesUsers;
    #--- se agrega esta método
    public function index()
    {
       // echo "ghghghghjghj";
        return view('auth/login');
    }
    /**
    * Redirecciona al usuario a la página de Facebook para autenticarse
    *
    * @return \Illuminate\Http\Response
    */
    public function redirectToFacebookProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }
    /**
    * Obtiene la información de Facebook
    *
    * @return \Illuminate\Http\RedirectResponse
    */
    //EAARBqaU5O9EBAL5H4yY9ZCTx7lmwTzVwamteWoekFHoZAque99SV7P1Bq3wQZCDtF2YibaIzrjl6pVfIOVf0sGC7utFGMow7CS1sNznF1LhR5ErgFwUnyua1uZCGayfLO9Akb5Rz3SlHrWYkv9JfcKCYIM6pWKd
    public function handleProviderFacebookCallback()
    {
        $auth_user = Socialite::driver('facebook')->user(); // Fetch authenticated user
        return redirect("/voto");
    }
}//--- End class

/* ----Acesso Gmail --
email: melhoridadesa@gmail.com
Senha: MelhorIdae2016
//----Acesso Gmail --


//---Login no Facebook ---


---Acesso:

usuario: melhoridadesa@gmail.com
senha: mudarq1w2e3r4

---Acesso.

Para adicionar no arquivo .env

FACEBOOK_CLIENT_ID=276093516068374
FACEBOOK_CLIENT_SECRET=25b5437bf8c16b2f497c6b07aa30d8db
FACEBOOK_REDIRECT=http://portalidoso.com.br/facebook

Caso necessario instalar os pacotes a seguir:

apt-get install curl
aptitude install php5-curl

Alias (Arquivo: config/app.php): 'Socialite' => 'Laravel\Socialite\Facades\Socialite',
Provider (Arquivo: config/app.php): 'Laravel\Socialite\SocialiteServiceProvider',


Controller do Modulo Site

<?php

/*namespace Modules\Site\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class FacebookController extends Controller
{
	public function login()
	{
		return \Socialize::with('facebook')->redirect();
	}
	public function pageFacebook()
	{
		$user = \Socialize::with('facebook')->user();
		return response()->json($user);
	}
}


//--- Login no Facebook --- */

<?php

class AuthController extends BaseController {
	/*
	 |--------------------------------------------------------------------------
	 | Controlador de la autenticación de usuarios
	 |--------------------------------------------------------------------------
	 */
	public function showLogin() {
		// Verificamos que el usuario no esté autenticado
		if (Auth::check()) {
			// Si está autenticado lo mandamos a la raíz donde estara el mensaje de bienvenida.
			return Redirect::to('home');
		}
		// Mostramos la vista login.blade.php (Recordemos que .blade.php se omite.)
		return View::make('login3');
	}

	/**
	 * Valida los datos del usuario.
	 */
	public function postLogin() {


        $usuario = Input::get('usuario');
        $password = Input::get('password');
        $user = User::whereRaw("name = '{$usuario}' AND password = '{$password}'")->first();

        if(!empty($user)){
            // Validamos los datos y además mandamos como un segundo parámetro la opción de recordar el usuario.
            if (Auth::login($user)) {
                // De ser datos válidos nos mandara a la bienvenida
                return Redirect::to('home');
            }
        }
        // En caso de que la autenticación haya fallado manda un mensaje al formulario de login y también regresamos los valores enviados con withInput().
        return Redirect::to('login') -> with('mensaje_error', 'Tus datos son incorrectos') -> withInput();
    }

	public function logOut() {
		Auth::logout();
		return Redirect::to('login') -> with('mensaje_error', 'Tu sesión ha sido cerrada.');
	}

}

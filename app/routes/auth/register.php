<?php
/*
* Author: Antoni F. Setiawan
* Steps: 
* + /registration get -> Display registration form
* + /registration post -> create new user
*	- validate
*	- hash password
*	- 
*/

$app->get('/register', function() use ($app){
	$app->render('auth/register.php');
})->name('register');

/*
* User registration
* Step:
* 
*/
$app->post('/register', function() use ($app){
	
	$request = $app->request();

	$email = $request->post('email');
	$username = $request->post('username');
	$password = $request->post('password');
	$password_confirmation = $request->post('password_confirmation');
	
	$data = [
		'email' => $email,
		'username' => $username,
		'password' => $app->hash->password($password)
	];

	$v = $app->validation;

	$v->validate ([
		'email' => [$email, 'required|email|uniqueEmail'],
		'username' => [$username, 'required|alnumDash|max(20)|uniqueUsername'],
		'password' => [$password, 'required|min(6)'],
		'password_confirmation' => [$password_confirmation, 'required|matches(password)'],
	]);

	if ( $v->passes() ) {
		$app->user->create($data);

		
		
		$app->flash('global', "User has been created!");
		$app->response->redirect($app->urlFor('home'));
	}
	
	$app->render('auth/register.php', [
		'errors' => $v->errors(),
		'request' => $request,
	]);

})->name('register.post');


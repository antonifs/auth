{% extends 'templates/default.php' %}

{% block title %} Register {% endblock %}

{% block content %} 

<div>
	<h1> Form registration </h1>
</div>

<div>
	<form action="{{ urlFor('register.post') }}" method="post">
		<div>
			<label for="email">Email</label>
			<input name="email" id="email" type="text" {% if request.post('email') %} value="{{request.post('email')}}" {% endif %}>
			{% if errors.first('email') %} {{ errors.first('email') }} {% endif %}
		</div>
		
		<div>
			<label for="username">Username</label>
			<input name="username" id="username" type="text" {% if request.post('username') %} value="{{request.post('username')}}" {% endif %}>
			{% if errors.first('username') %} {{ errors.first('username') }} {% endif %}
		</div>
		
		<div>
			<label for="password">Password</label>
			<input name="password" id="password" type="password">
			{% if errors.first('password') %} {{ errors.first('password') }} {% endif %}
		</div>

		<div>
			<label for="password_confirmation">Password Confirmation</label>
			<input name="password_confirmation" id="password" type="password">
			{% if errors.first('password_confirmation') %} {{ errors.first('password_confirmation') }} {% endif %}
		</div>

		<div>
			<input type="submit" value="Register" >
		</div>

	</form>
</div>
{% endblock %}
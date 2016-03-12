{% extends 'templates/default.php' %}

{% block title %} Login {% endblock %}

{% block content %} 

<div>
	<h1> Form Login </h1>
</div>

<div>
	<form action="{{ urlFor('login.post') }}" method="post">
		<div>
			<label for="identifier">Email/Username</label>
			<input name="identifier" id="identifier" type="text" {% if request.post('identifier') %} value="{{request.post('identifier')}}" {% endif %}>
			{% if errors.first('identifier') %} {{ errors.first('identifier') }} {% endif %}
		</div>
				
		<div>
			<label for="password">Password</label>
			<input name="password" id="password" type="password">
			{% if errors.first('password') %} {{ errors.first('password') }} {% endif %}
		</div>

		<div>
			<input type="submit" value="Login" >
		</div>

	</form>
</div>
{% endblock %}
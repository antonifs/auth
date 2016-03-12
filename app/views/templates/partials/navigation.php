{% if auth %}
	Hello, {{ auth.getFullNameOrUsername }}
{% endif %}

<ul>
	<li><a href="{{ urlFor('home') }}">Home</a></li>
	
	{% if auth %}
		Is Logged in.
	{% else %}
	<li><a href="{{ urlFor('register') }}">Register</a></li>
	<li><a href="{{ urlFor('login') }}">Login</a></li>
	{% endif %}

</ul>
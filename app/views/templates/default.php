<!DOCTYPE html>
<html>
<head>
	<title>
		Wesite with Slim | {% block title %} {% endblock %}
	</title>
</head>
<body>
	{% include 'templates/partials/messages.php' %}
	{% include 'templates/partials/navigation.php' %}
	{% block content %} {% endblock %}
</body>
</html>
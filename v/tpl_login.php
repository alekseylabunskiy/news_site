<?/*
Шаблон авторизации пользователя
===============================
$login - логин пользователя

*/?>
<div id="login_form">
	<form method="post" id="l_form">
		<span id="authorization_f"><p>Авторизация</p></span>
		Логин:
		<br/>
		<input name="login" type="text" value="<?=$login?>"/>
		<br/>
		Пароль:
		<br/> 
		<input name="password" type="password"/>
		<br/>
		<input type="checkbox" name="remember" /> запомнить меня
		<br/>	
		<input type="submit" value="Войти"/>
		<br/>
		<br/>	
	</form>
</div>

<?php
/**
 * Created by JetBrains PhpStorm.
 * User: FredRSF
 * Date: 21.09.11
 * Time: 21:21
 */
?>
<script type="text/javascript">
	function Validation()
	{
		if($("#login").val() == '')
		{
			$("#msg_login").html("Введите логин.");
			return false;
		}
		
		if($("#password").val() == '')
		{
			$("#msg_password").html("Введите пароль.");
			return false;
		}
	}
</script>
<form method="post">
<div class="authorization">
<?php if(!$errors):?>
	<h2 align="center">Введите логин и пароль для входа на сайт.</h2>
<?php else:?>
	<h2 align="center" style="color:#ff0000;">Неправильное имя пользователя или пароль!</h2>
<?php endif;?>
	<table border="0" cellpadding="" cellspacing="8">
    <tr>
		<td><b>Логин:</b></td>
		<td><input type="text" id="login" name="login" value="<?php echo $login; ?>" /><span id="msg_login" class="msg_log"></span></td>
	</tr>
    <tr>
		<td><b>Пароль:</b></td>
		<td><input type="password" id="password" name="password" /><span id="msg_password" class="msg_log"></span></td>
	</tr>
    <tr>
		<td colspan="2"><input type="checkbox" name="remember" /> запомнить меня</td>
	</tr>
    <tr>
		<td colspan="2" align="center"><input type="submit" class="adm_button" value="Войти" onclick="return Validation();" /></td>
	</tr>
	</table>
</div>
</form>
<p align="center"><a href="/registration.html">Регистрация</a> | <a href="/recover.html">Забыли пароль?</a> | <a href="/injustice.html">Не пришло письмо подтверждения регистрации?</a></p>
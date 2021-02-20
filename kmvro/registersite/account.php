<?php


session_start();
include_once 'config.php'; // loads config variables
include_once 'query.php'; // imports queries
include_once 'functions.php';
include_once 'js/alertas.js';

if ($CONFIG_disable_account || check_ban())
	redir("motd.php", "main_div", "Disabled");

if ($CONFIG_max_accounts) {
	$query = sprintf(MAX_ACCOUNTS);
	$result = execute_query($query, 'account.php');
	$maxaccounts = $result->fetch_row();
	if ($maxaccounts[0] >= $CONFIG_max_accounts)
		redir("motd.php", "main_div", $lang['ACCOUNT_MAX_REACHED']);
}

if (isset($POST_opt)) {
	if ($POST_opt == 1 && isset($POST_frm_name) && !strcmp($POST_frm_name, "account")) {
		$session = $_SESSION[$CONFIG_name.'sessioncode'];
		if ($CONFIG_auth_image && function_exists("gd_info")
			&& strtoupper($POST_code) != substr(strtoupper(md5("Mytext".$session['account'])), 0,6))
			alert($lang['INCORRECT_CODE']);

		if (inject($POST_username) || inject($POST_password) || inject($POST_email))
			alert($lang['INCORRECT_CHARACTER']);

		if (strlen(trim($POST_username)) < 4 || strlen(trim($POST_username)) > 23)
			alert($lang['USERNAME_LENGTH']);

		if ($CONFIG_safe_pass && (strlen(trim($POST_password)) < 6 || strlen(trim($POST_password)) > 23))
			alert($lang['PASSWORD_LENGTH']);

		if (strlen(trim($POST_password)) < 4 || strlen(trim($POST_password)) > 23)
			alert($lang['PASSWORD_LENGTH_OLD']);

		if (!strcmp($POST_password, $POST_username)) // passwords e username iguais
			alert($lang['PASSWORD_REJECTED']);

		if (strcmp($POST_password, $POST_confirm))
			alert($lang['PASSWORD_NOT_MATCH']);

		if ($CONFIG_safe_pass && thepass(trim($POST_password)))
			alert($lang['PASSWORD_REJECTED']);

		if (strlen($POST_email) < 7 || !strstr($POST_email, '@') || !strstr($POST_email, '.'))
			alert($lang['EMAIL_NEEDED']);

		if (strlen($POST_birthdate) < 8 || inject($POST_birthday))
			alert($lang['INVALID_BIRTHDAY']);

		$query = sprintf(CHECK_USERID, trim($POST_username));
		$result = execute_query($query, 'account.php');

		if ($result->count())
			alert($lang['USERNAME_IN_USE']);

		if ($POST_sex)
			$POST_sex = 'F';
		else
			$POST_sex = 'M';

		if ($CONFIG_md5_pass)
			$POST_password = md5($POST_password);

		$query = sprintf(INSERT_CHAR, trim($POST_username), trim($POST_password), $POST_sex, $POST_email, $POST_birthdate, $_SERVER['REMOTE_ADDR']);
		$result = execute_query($query, 'account.php');

		$query = sprintf(CHECK_ACCOUNTID, trim($POST_username), trim($POST_password));
		$result = execute_query($query, 'account.php');

		if ($line = $result->fetch_row()) {
			erro_de_login(1);
			redir("motd.php", "main_div", $lang['ACCOUNT_CREATED']);
		} else {
			erro_de_login(1);
			redir("motd.php", "main_div", $lang['ACCOUNT_PROBLEM']);
		}

	}
}

if (isset($_SESSION[$CONFIG_name.'sessioncode']))
	$session = $_SESSION[$CONFIG_name.'sessioncode'];
$session['account'] = rand(12345, 99999);
$_SESSION[$CONFIG_name.'sessioncode'] = $session;
$var = rand(10, 9999999);

	opentable($lang['NEW_ACCOUNT']);
	echo "
	<form id=\"account\" onSubmit=\"return POST_ajax('account.php','main_div','account');\"><table>
	<tr><td align=\"right\">".$lang['USERNAME'].":</td><td align=\"left\">
	<input type=\"text\" name=\"username\" placeholder=\"Minimo 4 caracteres\" maxlength=\"23\" size=\"23\" onKeyPress=\"return force(this.name,this.form.id,event);\">
	</td></tr>
	<tr><td align=\"right\">".$lang['PASSWORD'].":</td><td align=\"left\">
	<input type=password name=\"password\" placeholder=\"Minimo 6 caracteres\" maxlength=\"23\" size=\"23\" onKeyPress=\"return force(this.name,this.form.id,event);\">
	</td></tr>
	<tr><td align=\"right\">".$lang['CONFIRM'].":</td><td align=\"left\">
	<input type=password name=\"confirm\" maxlength=\"23\" size=\"23\" onKeyPress=\"return force(this.name,this.form.id,event);\">
	</td></tr>
	<tr><td align=\"right\">".$lang['SEX'].":</td><td align=\"left\">
	<select name=\"sex\" onKeyPress=\"return force(this.name,this.form.id,event);\">
	<option value=\"0\">".$lang['SEX_MALE']."<option value=\"1\">".$lang['SEX_FEMALE']."</select></td></tr>
	<tr><td align=\"right\">".$lang['MAIL'].":</td><td align=\"left\">
	<input type=\"text\" name=\"email\" maxlength=\"40\" size=\"40\" onKeyPress=\"return force(this.name,this.form.id,event);\">
	<tr><td align=\"right\">".$lang['BIRTHDAY'].":</td><td align=\"left\">
	<input type=\"text\" name=\"birthdate\" maxlength=\"8\" size=\"8\" onKeyPress=\"return force(this.name,this.form.id,event);\">
	<input type=\"hidden\" name=\"opt\" value=\"1\"></td></tr>
	<input type=\"hidden\" name=\"ipaddress\" value=\"".$_SERVER['REMOTE_ADDR']."\">";
	if ($CONFIG_auth_image && function_exists("gd_info"))
		{
			echo "<tr><td></td><td align=left><img src=\"img.php?img=account&var=$var\" alt=\"".$lang['SECURITY_CODE']."\">
			</td></tr><tr><td align=right>".$lang['CODE'].":</td>
			<td align=\"left\">
			<input type=\"text\" name=\"code\" maxlength=\"6\" size=\"6\" onKeyPress=\"return force(this.name,this.form.id,event);\">
			&nbsp;</td></tr>";
		}

	echo "
	<tr><td>&nbsp;</td><td><input name='button2' type='submit' onclick='crear();' value='Crear'></td></tr>
	</table></form>
	";
	closetable();
?>

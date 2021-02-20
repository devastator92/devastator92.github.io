<?php
/*
Ceres Control Panel

This is a control pannel program for Athena and Freya
Copyright (C) 2005 by Beowulf and Nightroad

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

To contact any of the authors about special permissions send
an e-mail to cerescp@gmail.com
*/

//Do not change tags %s e %d ou %%

//misc
$lang['LOGGED'] = 'Usted est� logueado.';
$lang['LOGGEDOFF'] = 'Usted est� deslogueado.';
$lang['COOKIE_REJECTED'] = 'Cookie rechazada.';
$lang['INCORRECT_CHARACTER'] = 'Caracter incorrecto detectado.';
$lang['UNKNOWN_MAIL'] = 'Correo desconocido.';
$lang['INCORRECT_CODE'] = 'C�digo Incorrecto.';
$lang['INCORRECT_PASSWORD'] = 'Contrase�a Incorrecta.';
$lang['PASSWORD_CHANGED'] = 'Contrase�a Cambiada.';
$lang['CHANGE_PASSWORD'] = 'Cambiar Contrase�a';
$lang['USERNAME_LENGTH'] = 'Nombre del usuario debe tener entre 4 y 23 caracteres.';
$lang['PASSWORD_LENGTH_OLD'] = 'La contrase�a debe tener entre 6 y 23 caracteres.';
$lang['PASSWORD_LENGTH'] = 'La contrase�a debe tener entre 4 y 23 caracteres.';
$lang['WRONG_USERNAME_PASSWORD'] = 'Usuario/Contrase�a Incorrecta.';
$lang['USERNAME'] = 'Usuario';
$lang['PASSWORD'] = 'Contrase�a';
$lang['NEW_PASSWORD'] = 'Nueva Contrase�a';
$lang['CONFIRM'] = 'Confirmar';
$lang['CODE'] = 'C�digo';
$lang['SECURITY_CODE'] = 'C�digo de Seguridad';
$lang['RECOVER'] = 'Recuperar';
$lang['PASSWORD_NOT_MATCH'] = 'Las contrase�as no coinciden.';
$lang['PASSWORD_REJECTED'] = 'Contrase�a rechazada: Insegura.\nNecesita contener 2 n�meros y 2 letras siquiera y tama�o 6.\nEx: cake48';
$lang['EMAIL_NEEDED'] = 'El correo es necesario.';
$lang['INVALID_BIRTHDAY'] = 'Fecha de Nacimiento Incorrecta.';
$lang['SEX'] = 'Sexo';
$lang['REAL_SEX'] = 'Sexo Real';
$lang['JANUARY'] = 'Enero';
$lang['FEBRUARY'] = 'Febrero';
$lang['MARCH'] = 'Marzo';
$lang['APRIL'] = 'Abril';
$lang['MAY'] = 'Mayo';
$lang['JUNE'] = 'Junio';
$lang['JULY'] = 'Julio';
$lang['AUGUST'] = 'Agosto';
$lang['SEPTEMBER'] = 'Septiembre';
$lang['OCTOBER'] = 'Octubre';
$lang['NOVEMBER'] = 'Noviembre';
$lang['DECEMBER'] = 'Diciembre';
$lang['MAIL'] = 'Correo';
$lang['CREATE'] = 'Crear';
$lang['NEED_TO_LOGIN'] = 'Necesita estar logueado para tener acceso a esta p�gina.';
$lang['NEED_TO_LOGIN_F'] = 'Necesita estar logueado para tener acceso a esta funci�n.';
$lang['DB_ERROR'] = '�Lo sentimos! Se ha encontrado un error en la DB, intentelo en otra ocasi�n. Reporte este error a la administraci�n.';
$lang['TXT_ERROR'] = 'Error en archivo texto.';
$lang['NEED_TO_LOGOUT_F'] = 'Usted debe estar deslogueado del juego para utilizar esta funci�n.';
$lang['CHANGE'] = 'Cambiar';
$lang['SUNDAY'] = 'Domingo';
$lang['MONDAY'] = 'Lunes';
$lang['TUESDAY'] = 'Martes';
$lang['WEDNSDAY'] = 'Mi�rcoles';
$lang['THURSDAY'] = 'Jueves';
$lang['FRIDAY'] = 'Viernes';
$lang['SATURDAY'] = 'S�bado';
$lang['BLOCKED'] = 'Est�s bloqueado, intente otra vez en %d min';

//menu.php
$lang['MENU_HOME'] = "Principal";
$lang['MENU_MYACCOUNT'] = "Mi Cuenta";
$lang['MENU_MYCHARS'] = "Mis Personajes";
$lang['MENU_RANKING'] = "Ranking";
$lang['MENU_INFORMATION'] = "Informaci�n";
$lang['MENU_PROBLEMS'] = "Problemas";
$lang['MENU_MESSAGE'] = "Mensaje";
$lang['MENU_CHANGEPASS'] = "Cambiar Contrase�a";
$lang['MENU_CHANGEMAIL'] = "Cambiar Correo";
$lang['MENU_TRANFMONEY'] = "Transferir Dinero";
$lang['MENU_CHANGESLOT'] = "Cambiar Slot";
$lang['MENU_MARRIAGE'] = "Matrimonio";
$lang['MENU_PLAYERLADDER'] = "Lider de Jugadores";
$lang['MENU_GUILDLADDER'] = "Lider de Guilds";
$lang['MENU_ZENYLADDER'] = "Lider de Zeny";
$lang['MENU_WHOSONLINE'] = "Qui�n Est� Online";
$lang['MENU_ABOUT'] = "Sobre";
$lang['MENU_RESETPOS'] = "Reset de Posici�n";
$lang['MENU_RESETLOOK'] = "Reset de Apariencia";
$lang['MENU_OTHER'] = "Otro";
$lang['MENU_LINKS'] = "Links";

//common
$lang['NAME'] = 'Nombre';
$lang['CLASS'] = 'Clase';
$lang['BLVLJLVL'] = 'Blvl/Jlvl';
$lang['MAP'] = 'Mapa';
$lang['UNKNOWN'] = 'Desconocido';
$lang['POS'] = 'Pos';
$lang['ZENY'] = 'Zeny';
$lang['SLOT'] = 'Slot';
$lang['ONE_CHAR'] = 'Usted debe tener por lo menos un personaje.';
$lang['WOE_TIME'] = 'No es possible ver esa funcion durante la WoE.';

//whoisonline.php
$lang['WHOISONLINE_WHOISONLINE'] = 'Qui�n Est� Online';
$lang['WHOISONLINE_COORDS'] = 'Coords';

//top100zeny.php
$lang['TOP100ZENY_TOP100ZENY'] = 'Top 100 Zeny';

//slot.php
$lang['SLOT_NOT_SELECTED'] = 'Ninguna posici�n nueva seleccionada.';
$lang['SLOT_CHANGE_FAILED'] = 'El Cambio Fall�.';
$lang['SLOT_WRONG_NUMBER'] = 'N�mero incorrecto de slot detectado.';
$lang['SLOT_CHANGE_SLOT'] = 'Cambiar Slot de Personaje';
$lang['SLOT_NEW_SLOT'] = 'Nuevo Slot';
$lang['SLOT_PS1'] = '*Si en el slot seleccionado existe un personaje, este ser� cambiado tambi�n';
$lang['SLOT_PS2'] = '*Usted puede cambiar solamente uno por uno';

//server_status.php
$lang['SERVERSTATUS_LOGIN'] = 'Login Server';
$lang['SERVERSTATUS_CHAR'] = 'Char Server';
$lang['SERVERSTATUS_MAP'] = 'Map Server';
$lang['SERVERSTATUS_ONLINE'] = 'Online';
$lang['SERVERSTATUS_OFFLINE'] = 'Offline';
$lang['SERVERSTATUS_USERSONLINE'] = 'Usuarios Online';
$lang['AGIT'] = 'WoE';
$lang['AGIT_OFF'] = 'Off';
$lang['AGIT_ON'] = 'On';

//resetlook.php
$lang['RESETLOOK_RESET_LOOK'] = 'El Reset Fall�.';
$lang['RESETLOOK_EQUIP_OK'] = 'El equipo ha sido resetado.';
$lang['RESETLOOK_HAIRC_OK'] = 'El color del pelo ha sido resetado.';
$lang['RESETLOOK_HAIRS_OK'] = 'El estilo del pelo ha sido resetado.';
$lang['RESETLOOK_CLOTHESC_OK'] = 'El color de la ropa ha sido resetado.';
$lang['RESETLOOK_SELECT'] = 'Seleccione por lo menos una apariencia para reajustar.';
$lang['RESETLOOK_RESETLOOK'] = 'Reset de Apariencia';

//recover.php
$lang['RECOVER_RECOVER'] = 'Recupere su Contrase�a';

//position.php
$lang['POSITION_RESET'] = 'El Reset Fall�.';
$lang['POSITION_NO_ZENY'] = 'No hay suficiente Zeny.';
$lang['POSITION_OK'] = 'La posici�n ha sido reseteada.';
$lang['POSITION_TITLE'] = 'Reset de Posici�n';
$lang['POSITION_LEVEL'] = 'Nivel';
$lang['POSITION_SELECT'] = 'Seleccionar';
$lang['POSITION_RESET'] = 'Resetear';
$lang['POSITION_PS1'] = '*Habr� un cobro de %d zenys por utilizar este servicio';
$lang['POSITION_JAIL'] = 'No puedes usar esto en la prisi�n.';

//motd.php
$lang['NEWS_MESSAGE'] = 'Mensaje';

//money.php
$lang['MONEY_INCORRECT_NUMBER'] = 'N�mero Incorrecto Detectado.';
$lang['MONEY_CHEAT_DETECTED'] = 'Trampa Detectada.';
$lang['MONEY_OPER_IMPOSSIBLE'] = 'Operaci�n Imposible.';
$lang['MONEY_OK'] = 'Zeny Transferido.';
$lang['MONEY_AMMOUNT'] = 'Cantidad de Zeny de la Transferencia';
$lang['MONEY_AVAILABLE'] = 'Cantidad disponible';
$lang['MONEY_TRANSFER'] = 'Cantidad a transferir';
$lang['MONEY_CHANGE'] = 'Transferir';
$lang['MONEY_TWO_CHAR'] = 'Usted debe tener por lo menos dos personajes.';
$lang['MONEY_TRANSFER_FROM'] = 'Transferir Zeny de';
$lang['MONEY_TRANSFER_TO'] = 'Transferir Zeny a';
$lang['MONEY_PS1'] = '*Habr� un cobro de %d%%, de la cantidad transferida, por utilizar este servicio';

//marriage.php
$lang['MARRIAGE'] = 'Matrimonio';
$lang['MARRIAGE_COUPLE_OFF'] = 'Esta funci�n puede ser utilizada solamente cuando la pareja est� offline del juego. Su compa�ero(a) est� online ahora.';
$lang['MARRIAGE_DIVORCE_OK'] = 'Su personaje ahora est� divorciado.';
$lang['MARRIAGE_NOTHING'] = 'No se realiz� ninguna acci�n.';
$lang['MARRIAGE_PARTNER'] = 'Compa�ero';
$lang['MARRIAGE_DIVORCE'] = 'Divorcio';
$lang['MARRIAGE_SINGLE'] = 'Soltero';
$lang['MARRIAGE_PS1'] = '*Compruebe y confirme para divorciar, ambos deben estar offline para hacerlo';
$lang['MARRIAGE_PS2'] = '*Usted puede modificar solamente uno por uno';
$lang['MARRIAGE_PS3'] = '*Usted ser� baneado por 2 minutos para guardar los cambios';

//ladder.php
$lang['LADDER_TOP100'] = 'Rank TOP 100 de Jugadores';
$lang['LADDER_GUILD'] = 'Guild';
$lang['LADDER_STATUS'] = 'Estado';
$lang['LADDER_STATUS_ON'] = 'on';
$lang['LADDER_STATUS_OFF'] = 'off';

//guild.php
$lang['GUILD_TOP50'] = 'Rank TOP 50 de Guilds';
$lang['GUILD_EMBLEM'] = 'Emblema';
$lang['GUILD_GNAME'] = 'Nombre';
$lang['GUILD_GLEVEL'] = 'Nivel';
$lang['GUILD_GEXPERIENCE'] = 'Experiencia';
$lang['GUILD_GAVLEVEL'] = 'Nivel Medio';
$lang['GUILD_GCASTLES'] = 'Castillos de Guild';
$lang['GUILD_GCASTLE'] = 'Castillo';
$lang['GUILD_MEMBERS'] = 'Miembros';

//changemail.php
$lang['CHANGEMAIL_MAIL_INVALID'] = 'El nuevo correo no es un correo v�lido.';
$lang['CHANGEMAIL_CHANGEMAIL'] = 'Cambiar Correo';
$lang['CHANGEMAIL_CHANGE'] = 'Cambiar';
$lang['CHANGEMAIL_NEW_MAIL'] = 'Nuevo correo';
$lang['CHANGEMAIL_CURRENT_MAIL'] = 'Correo actual';

//account.php
$lang['USERNAME_IN_USE'] = 'Nombre de usuario no disponible.';
$lang['ABR_SEX_MALE'] = 'M';
$lang['ABR_SEX_FEMALE'] = 'F';
$lang['SEX_MALE'] = 'Masculino';
$lang['SEX_FEMALE'] = 'Femenino';
$lang['ACCOUNT_CREATED'] = 'Cuenta Creada exitosamente. Usted ya puede ingresar.';
$lang['ACCOUNT_PROBLEM'] = 'Error al crear la cuenta, por favor intente nuevamente.';
$lang['INTERNAL_STATISTIC'] = '(para la estad�stica interna)';
$lang['BIRTHDAY'] = 'Fecha de Nacimiento (AAAAMMDD)';
$lang['ACCOUNT_MAX_REACHED'] = 'Hay demasiadas cuentas registradas, por favor intente m�s tarde.';

//index.php
$lang['NEW_ACCOUNT'] = 'Nueva Cuenta';
$lang['RECOVER_PASSWORD'] = 'Recupere su contrase�a';

//links.php
$lang['LINKS_LINKS'] = 'Links';
$lang['LINKS_NAME'] = 'Nombre';

//login.php
$lang['LOGIN_WELCOME'] = 'Bienvenido';
$lang['LOGIN_HELLO'] = 'Hola';
$lang['LOGIN_REMEMBER'] = 'Recordarme';

//about.php
$lang['ABOUT_ABOUT'] = 'Sobre el servidor';
$lang['ABOUT_SERVER_NAME'] = 'Nombre del servidor';
$lang['ABOUT_RATE'] = 'Rates';
$lang['ABOUT_TOTAL_ACCOUNTS'] = 'Total de Cuentas';
$lang['ABOUT_TOTAL_CHAR'] = 'Total de Personajes';
$lang['ABOUT_TOTAL_ZENY'] = 'Total de Zeny';
$lang['ABOUT_TOTAL_CLASS'] = 'Total por clase';
$lang['ABOUT_WOE_TIMES'] = 'Horarios de WoE';

//ceres.php
$lang['ABOUT_CERES'] = 'Informaci�n Ceres Control Panel';
$lang['CERES_TITLE'] = 'Ceres Control Panel';
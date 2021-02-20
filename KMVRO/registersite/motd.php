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

session_start();
include_once 'config.php'; // loads config variables
include_once 'query.php'; // imports queries
include_once 'functions.php';
include_once 'menu.js';

opentable($lang['NEWS_MESSAGE']);
?>
<table width="540">
<h3>Bienvenido al sitio de Registro y Administracion de cuenta de KMV Ragnarok.</h3><p>
Para crear una cuenta nueva ve al menu y selecciona Cuenta > Registrarme y rellena los datos.<p>
Recuerda visitar nuestro <a href="http://www.facebook.com/KLGRagnarok" target="_blank"> Fanpage </a> para recibir las ultimas noticias<p>
Siguenos en Twitter @KLG_Ragnarok<p>
Siguenos en <a href="https://www.instagram.com/klgragnarokoficial/" target="_blank"> Instagram </a>
</table>
<?php
closetable();
fim();
?>

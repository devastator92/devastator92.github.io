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

//N�o mude tags %s e %d ou %%

//misc
$lang['LOGGED'] = 'Voc� est� logado.';
$lang['LOGGEDOFF'] = 'Voc� est� deslogado.';
$lang['COOKIE_REJECTED'] = 'Cookie rejeitado.';
$lang['INCORRECT_CHARACTER'] = 'Caracter incorreto detectado.';
$lang['UNKNOWN_MAIL'] = 'E-Mail desconhecido.';
$lang['INCORRECT_CODE'] = 'C�digo Incorreto.';
$lang['INCORRECT_PASSWORD'] = 'Senha Incorreta.';
$lang['PASSWORD_CHANGED'] = 'Senha Alterada.';
$lang['CHANGE_PASSWORD'] = 'Alterar Senha';
$lang['USERNAME_LENGTH'] = 'Nome de Usu�rio deve conter entre 4 a 23 caracteres.';
$lang['PASSWORD_LENGTH_OLD'] = 'Senha deve conter entre 4 a 23 caracteres.';
$lang['PASSWORD_LENGTH'] = 'Senha deve conter entre 6 a 23 caracteres.';
$lang['WRONG_USERNAME_PASSWORD'] = 'Usu�rio/Senha Incorreta.';
$lang['USERNAME'] = 'Usu�rio';
$lang['PASSWORD'] = 'Senha';
$lang['NEW_PASSWORD'] = 'Nova Senha';
$lang['CONFIRM'] = 'Confirmar';
$lang['CODE'] = 'C�digo';
$lang['SECURITY_CODE'] = 'C�digo de Seguran�a';
$lang['RECOVER'] = 'Recuperar';
$lang['PASSWORD_NOT_MATCH'] = 'As senhas n�o conferem.';
$lang['PASSWORD_REJECTED'] = 'Senha rejeitada: Insegura.\nEla Precisa conter ao menos 2 n�meros e 2 letras e ter um tamanho de 6 caracteres no minimo.\nEx: cake48';
$lang['EMAIL_NEEDED'] = 'Email � necess�rio.';
$lang['INVALID_BIRTHDAY'] = 'Anivers�rio Invalido.';
$lang['SEX'] = 'Sexo';
$lang['REAL_SEX'] = 'Sexo real';
$lang['JANUARY'] = 'Janeiro';
$lang['FEBRUARY'] = 'Fevereiro';
$lang['MARCH'] = 'Mar�o';
$lang['APRIL'] = 'Abril';
$lang['MAY'] = 'Maio';
$lang['JUNE'] = 'Junho';
$lang['JULY'] = 'Julho';
$lang['AUGUST'] = 'Agosto';
$lang['SEPTEMBER'] = 'Setembro';
$lang['OCTOBER'] = 'Outubro';
$lang['NOVEMBER'] = 'Novembro';
$lang['DECEMBER'] = 'Dezembro';
$lang['MAIL'] = 'E-Mail';
$lang['CREATE'] = 'Criar';
$lang['NEED_TO_LOGIN'] = 'Voc� precisa estar logado para acessar est� pagina.';
$lang['NEED_TO_LOGIN_F'] = 'Voc� precisa estar logado para usufluir dessa fun��o.';
$lang['DB_ERROR'] = 'Desculpe! Um erro foi encontrado no acesso ao banco de dados, tente novamente mais tarde.';
$lang['TXT_ERROR'] = 'Erro no arquivo texto.';
$lang['NEED_TO_LOGOUT_F'] = 'Voc� deve estar deslogado do jogo, para usufluir desta fun��o.';
$lang['CHANGE'] = 'Alterar';
$lang['SUNDAY'] = 'Domingo';
$lang['MONDAY'] = 'Segunda';
$lang['TUESDAY'] = 'Ter�a';
$lang['WEDNSDAY'] = 'Quarta';
$lang['THURSDAY'] = 'Quinta';
$lang['FRIDAY'] = 'Sexta';
$lang['SATURDAY'] = 'S�bado';
$lang['BLOCKED'] = 'Voc� foi bloqueado, tente novamente em %d min';

//menu.php
$lang['MENU_HOME'] = "Principal";
$lang['MENU_MYACCOUNT'] = "Minha Conta";
$lang['MENU_MYCHARS'] = "Meus Personagens";
$lang['MENU_RANKING'] = "Ranking";
$lang['MENU_INFORMATION'] = "Informa��es";
$lang['MENU_PROBLEMS'] = "Problemas";
$lang['MENU_MESSAGE'] = "Mensagem";
$lang['MENU_CHANGEPASS'] = "Alterar Senha";
$lang['MENU_CHANGEMAIL'] = "Alterar e-mail";
$lang['MENU_TRANFMONEY'] = "Transferir Dinheiro";
$lang['MENU_CHANGESLOT'] = "Mudar Slot";
$lang['MENU_MARRIAGE'] = "Casamento";
$lang['MENU_PLAYERLADDER'] = "Ladder de Jogadores";
$lang['MENU_GUILDLADDER'] = "Ladder de Guildas";
$lang['MENU_ZENYLADDER'] = "Ladder de Zenny";
$lang['MENU_WHOSONLINE'] = "Quem Est� Online";
$lang['MENU_ABOUT'] = "Sobre";
$lang['MENU_RESETPOS'] = "Reset de Posi��o";
$lang['MENU_RESETLOOK'] = "Reset de Apar�ncia";
$lang['MENU_OTHER'] = "Outro";
$lang['MENU_LINKS'] = "Links";

//common
$lang['NAME'] = 'Nome';
$lang['CLASS'] = 'Classe';
$lang['BLVLJLVL'] = 'Blvl/Jlvl';
$lang['MAP'] = 'Mapa';
$lang['UNKNOWN'] = 'Desconhecido';
$lang['POS'] = 'Pos';
$lang['ZENY'] = 'Zeny';
$lang['SLOT'] = 'Slot';
$lang['ONE_CHAR'] = 'Voc� deve ter no m�nimo um personagem.';
$lang['WOE_TIME'] = 'N�o � poss�vel ver essa fun��o durante o WoE.';

//whoisonline.php
$lang['WHOISONLINE_WHOISONLINE'] = 'Quem est� online';
$lang['WHOISONLINE_COORDS'] = 'Coords';

//top100zeny.php
$lang['TOP100ZENY_TOP100ZENY'] = 'Top 100 Zeny';

//slot.php
$lang['SLOT_NOT_SELECTED'] = 'Nenhum slot novo selecionado.';
$lang['SLOT_CHANGE_FAILED'] = 'A mudan�a falhou.';
$lang['SLOT_WRONG_NUMBER'] = 'Detectado n�mero incorreto de slot.';
$lang['SLOT_CHANGE_SLOT'] = 'Mudan�a de Slot de Personagem';
$lang['SLOT_NEW_SLOT'] = 'Novo Slot';
$lang['SLOT_PS1'] = '*Se o slot selecionado conter um personagem, ele ser� mudado de posi��o tambem';
$lang['SLOT_PS2'] = '*Voc� s� � capaz de mudar um personagem de posi��o por vez.';

//server_status.php
$lang['SERVERSTATUS_LOGIN'] = 'Login Server';
$lang['SERVERSTATUS_CHAR'] = 'Char Server';
$lang['SERVERSTATUS_MAP'] = 'Map Server';
$lang['SERVERSTATUS_ONLINE'] = 'Online';
$lang['SERVERSTATUS_OFFLINE'] = 'Offline';
$lang['SERVERSTATUS_USERSONLINE'] = 'Usu�rios On';
$LANG['AGIT'] = 'WoE';
$LANG['AGIT_OFF'] = 'Off';
$LANG['AGIT_ON'] = 'On';

//resetlook.php
$lang['RESETLOOK_RESET_LOOK'] = 'Reset de apar�ncia falhou.';
$lang['RESETLOOK_EQUIP_OK'] = 'Equipamento foi resetado.';
$lang['RESETLOOK_HAIRC_OK'] = 'Cor de cabelo foi resetada.';
$lang['RESETLOOK_HAIRS_OK'] = 'Estilo de cabelo foi resetado.';
$lang['RESETLOOK_CLOTHESC_OK'] = 'Cor de roupa foi resetada.';
$lang['RESETLOOK_SELECT'] = 'Selecione ao menos uma apar�ncia a ser resetada.';
$lang['RESETLOOK_RESETLOOK'] = 'Reset de Apar�ncia';

//recover.php
$lang['RECOVER_RECOVER'] = 'Recuperar Senha';

//position.php
$lang['POSITION_RESET'] = 'Reset de Posi��o Falhou.';
$lang['POSITION_NO_ZENY'] = 'Voc� n�o possui zeny o suficiente.';
$lang['POSITION_OK'] = 'Posi��o resetada com sucesso.';
$lang['POSITION_TITLE'] = 'Reset de Posi��o';
$lang['POSITION_LEVEL'] = 'N�vel';
$lang['POSITION_SELECT'] = 'Selecionar';
$lang['POSITION_RESET'] = 'Resetar';
$lang['POSITION_PS1'] = '*Haver� um custo de %d zenys para utiliza��o deste servi�o';
$lang['POSITION_JAIL'] = 'N�o pode suar isto enquanto estiver na pris�o.';

//motd.php
$lang['NEWS_MESSAGE'] = 'Mensagem';

//money.php
$lang['MONEY_INCORRECT_NUMBER'] = 'N�mero incorreto detectado.';
$lang['MONEY_CHEAT_DETECTED'] = 'Cheat Detectado.';
$lang['MONEY_OPER_IMPOSSIBLE'] = 'Est� opera��o � impossivel.';
$lang['MONEY_OK'] = 'Zeny Transferido com sucesso.';
$lang['MONEY_AMMOUNT'] = 'Quantidade de Zeny a transferir';
$lang['MONEY_AVAILABLE'] = 'Quantidade disponivel';
$lang['MONEY_TRANSFER'] = 'Quantidade a transferir';
$lang['MONEY_CHANGE'] = 'Transferir';
$lang['MONEY_TWO_CHAR'] = 'Voc� deve possuir ao menos dois personagens.';
$lang['MONEY_TRANSFER_FROM'] = 'Transferir Zeny De';
$lang['MONEY_TRANSFER_TO'] = 'Transferir Zeny Para';
$lang['MONEY_PS1'] = '*Haver� um custo de %d%%, do montante transferido, para utiliza��o deste servi�o';

//marriage.php
$lang['MARRIAGE'] = 'Casamento';
$lang['MARRIAGE_COUPLE_OFF'] = 'Est� fun��o s� est� disponivel quando o casal esta desconectado do jogo. Porem seu/sua companheiro(a) est� online no momento.';
$lang['MARRIAGE_DIVORCE_OK'] = 'Personagem foi divorciado.';
$lang['MARRIAGE_NOTHING'] = 'Nothing to be done.';
$lang['MARRIAGE_PARTNER'] = 'Companheiro';
$lang['MARRIAGE_DIVORCE'] = 'Divorcio';
$lang['MARRIAGE_SINGLE'] = 'Solteiro';
$lang['MARRIAGE_PS1'] = '*Para execu��o do divorcio, ambos devem estar offline do jogo';
$lang['MARRIAGE_PS2'] = '*Voc� s� pode alterar um personagem por vez';
$lang['MARRIAGE_PS3'] = '*Voc� ser� banido por 2 minutos para fazer efeito';

//ladder.php
$lang['LADDER_TOP100'] = 'Ladder Top 100 Rank';
$lang['LADDER_GUILD'] = 'Guilda';
$lang['LADDER_STATUS'] = 'Estado';
$lang['LADDER_STATUS_ON'] = 'on';
$lang['LADDER_STATUS_OFF'] = 'off';

//guild.php
$lang['GUILD_TOP50'] = 'Top 50 Ladder de Guildas';
$lang['GUILD_EMBLEM'] = 'Emblema';
$lang['GUILD_GNAME'] = 'Nome da Guilda';
$lang['GUILD_GLEVEL'] = 'N�vel';
$lang['GUILD_GEXPERIENCE'] = 'Experiencia';
$lang['GUILD_GAVLEVEL'] = 'N�vel M�dio';
$lang['GUILD_GCASTLES'] = 'Castelos de Guildas';
$lang['GUILD_GCASTLE'] = 'Castelo';
$lang['GUILD_MEMBERS'] = 'Membros';

//changemail.php
$lang['CHANGEMAIL_MAIL_INVALID'] = 'Novo e-mail n�o � um e-mail v�lido.';
$lang['CHANGEMAIL_CHANGEMAIL'] = 'Alterar E-Mail';
$lang['CHANGEMAIL_CHANGE'] = 'Alterar';
$lang['CHANGEMAIL_NEW_MAIL'] = 'Novo e-mail';
$lang['CHANGEMAIL_CURRENT_MAIL'] = 'e-mail Atual';

//account.php
$lang['USERNAME_IN_USE'] = 'Nome de Usu�rio em uso.';
$lang['ABR_SEX_MALE'] = 'M';
$lang['ABR_SEX_FEMALE'] = 'F';
$lang['SEX_MALE'] = 'Masculino';
$lang['SEX_FEMALE'] = 'Feminino';
$lang['ACCOUNT_CREATED'] = 'Conta criada. Voc� pode se logar agora.';
$lang['ACCOUNT_PROBLEM'] = 'Error ao criar conta, por favor tente mais tarde.';
$lang['INTERNAL_STATISTIC'] = '(para estat�stica interna)';
$lang['BIRTHDAY'] = 'Nascimento (AAAAMMDD)';
$lang['ACCOUNT_MAX_REACHED'] = 'J� existem muitas contas registradas, tente mais tarde.';

//index.php
$lang['NEW_ACCOUNT'] = 'Nova Conta';
$lang['RECOVER_PASSWORD'] = 'Recuperar sua senha';

//links.php
$lang['LINKS_LINKS'] = 'Links';
$lang['LINKS_NAME'] = 'Nome';

//login.php
$lang['LOGIN_WELCOME'] = 'Bem vindo';
$lang['LOGIN_HELLO'] = 'Ol�';
$lang['LOGIN_REMEMBER'] = 'lembrar-se';

//about.php
$lang['ABOUT_ABOUT'] = 'Sobre o Servidor';
$lang['ABOUT_SERVER_NAME'] = 'Nome do Servidor';
$lang['ABOUT_RATE'] = 'Rate';
$lang['ABOUT_TOTAL_ACCOUNTS'] = 'Total de Contas';
$lang['ABOUT_TOTAL_CHAR'] = 'Total de Personagens';
$lang['ABOUT_TOTAL_ZENY'] = 'Total de Zeny';
$lang['ABOUT_TOTAL_CLASS'] = 'Total por classe';
$lang['ABOUT_WOE_TIMES'] = 'Hor�rios do WoE';

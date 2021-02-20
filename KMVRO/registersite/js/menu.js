$( "#text" ).empty();
//Home
$(document).ready(function()
	{
		$("#home").click(function(){
			$.get("motd.php", function(htmlexterno){
$("#text").html(htmlexterno);
	});
		});
	});

//Message

$(document).ready(function()
		{
		$("#motd").click(function(){
				$.get("motd.php", function(htmlexterno){
		   $("#text").html(htmlexterno);
				});
		});
		});
//Links
$(document).ready(function()
		{
		$("#links").click(function(){
				$.get("links.php", function(htmlexterno){
		   $("#text").html(htmlexterno);
				});
		});
		});
//Player Ladder

$(document).ready(function()
		{
		$("#p-ladder").click(function(){
				$.get("ladder.php", function(htmlexterno){
		   $("#text").html(htmlexterno);
				});
		});
		});
//Guild Ladder
$(document).ready(function()
		{
		$("#g-ladder").click(function(){
				$.get("guild.php", function(htmlexterno){
		   $("#text").html(htmlexterno);
				});
		});
		});
//Zeny Ladder
$(document).ready(function()
		{
		$("#z-ladder").click(function(){
				$.get("top100zeny.php", function(htmlexterno){
		   $("#text").html(htmlexterno);
				});
		});
		});
//Who is online
$(document).ready(function()
		{
		$("#online").click(function(){
				$.get("whoisonline.php", function(htmlexterno){
		   $("#text").html(htmlexterno);
				});
		});
		});
//About
$(document).ready(function()
		{
		$("#about").click(function(){
				$.get("about.php", function(htmlexterno){
		   $("#text").html(htmlexterno);
				});
		});
		});
//Register
$(document).ready(function()
		{
		$("#register").click(function(){
				$.get("account.php", function(htmlexterno){
		   $("#text").html(htmlexterno);
				});
		});
		});

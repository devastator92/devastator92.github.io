//MY ACCOUNT
$(document).ready(function()
		{
		$("#account").click(function(){
				$.get("account.php", function(htmlexterno){
		   $("#text").html(htmlexterno);
				});
		});
		});
		
//PASSWD RESET
$(document).ready(function()
		{
		$("#password").click(function(){
				$.get("password.php", function(htmlexterno){
		   $("#text").html(htmlexterno);
				});
		});
		});
		
//EMAIL RESET
$(document).ready(function()
		{
		$("#mail").click(function(){
				$.get("changemail.php", function(htmlexterno){
		   $("#text").html(htmlexterno);
				});
		});
		});
		
//PROBLEMS
$(document).ready(function()
		{
		$("#problems").click(function(){
				$.get("top100zeny.php", function(htmlexterno){
		   $("#text").html(htmlexterno);
				});
		});
		});
		
//RESET POSITION
$(document).ready(function()
		{
		$("#position").click(function(){
				$.get("position.php", function(htmlexterno){
		   $("#text").html(htmlexterno);
				});
		});
		});
		
//RESET LOOK
$(document).ready(function()
		{
		$("#look").click(function(){
				$.get("resetlook.php", function(htmlexterno){
		   $("#text").html(htmlexterno);
				});
		});
		});
		

$(document).ready(function(){
	$("#mission").show();
	$("#research").hide();
	$("#financial").hide();

	$("#mission-link").click(function(){
		$("#content-header").html("Our Mission")
		$("#mission").show();
		$("#research").hide();
		$("#financial").hide();
	});

	$("#research-link").click(function(){
		$("#content-header").html("The Research")
		$("#mission").hide();
		$("#research").show();
		$("#financial").hide();
	});

	$("#financial-link").click(function(){
		$("#content-header").html("Financial Plan")
		$("#mission").hide();
		$("#research").hide();
		$("#financial").show();
	});

});
var default_content="";

$(document).ready(function(){
	
	checkURL();

	$(document).on('click','#nav-select-link', function(e)
	{
		checkURL(this.hash);
	});
	
	
	setInterval("checkURL()",250);
	
});

var lasturl="";

function checkURL(hash)
{
	if(!hash) hash=window.location.hash;
	
	if(hash != lasturl)
	{
		lasturl=hash;
		loadPage(hash);
	}
}





function loadPage(url)
{
	url=url.replace('#/','');
	//echo $url;
	//alert(url);
	if(url=='') url='home';
	var route = ['home','portofolio','hobby','aboutme','login','dashboard','register','dashboard/Dportofolio','dashboard/editp','dashboard/Dhobby'];
	if(route.indexOf(url)!=-1)
	{
		if(url.indexOf('dashboard')!=-1) $('#nav').load('nav-dashboard');
		else $('#nav').load('nav-homepage');
		$('#content').load(url);
	}
	else 
	{
		//url = 'error404';
		$('#content').load('error404');
	}

}



$(document).on('click','#footer-music', function(e)
{
	e.preventDefault();
	var flag = $("#audio").attr('flag-show');
	if(flag=='1')
	{
		$("#audio").attr('flag-show','0');
		$("#audio").attr('style','display:none');
	}
	else
	{
		$("#audio").attr('flag-show','1');
		$("#audio").attr('style','');
	}
	
});

$(document).on('submit','#form-login',function(e){
	e.preventDefault();
	var username = $("#username").val();
	var password = $("#password").val();
	$.ajax({
		type:'POST',
		url:'dologin',
		data:'username='+username+'&password='+password,
		success:function(response){
			if(response==1)
			{
				alert("Welcome back "+username+" :)");
				$('#nav').load('nav-homepage');
				window.location.hash = "#/home";
			}
			else
			{
				alert("Password atau Username salah");
			}
		}
	});
	
});

$(document).on('click','#logout',function(e){
	e.preventDefault();
	$.ajax({
		type:'POST',
		url:'logout',
		success:function(response){
			alert('Terima Kasih');
			$('#nav').load('nav-homepage');
			$('#content').load('login');
			window.location.hash = "#/login";
		}
	});
});

$(document).on('click','.lrraction1',function(e)
{
		var dest = $(this).attr('href');
		dest = dest.replace('#/','');
		$('#content').load(dest);

});

$(document).on('change','#password,#cpassword',function(e)
{
	var password = $('#password').val();
	var cpassword = $('#cpassword').val();
	var goodColor = "#66cc66";
	var badColor = "#ff6666";
	if(password!=""&&cpassword!="")
	{
		if(password==cpassword)
		{
			$('.messageCP').text('Password dan Konfirmasi password sama');
			$('.messageCP').css('color',goodColor);
		}
		else
		{
			$('.messageCP').text('Password dan Konfirmasi password tidak sama');
			$('.messageCP').css('color',badColor);
		}
	}
	else
	{
		$('.messageCP').text('');
	}
});

$(document).on('submit','#form-register',function(e)
{
	e.preventDefault();
	var username = $("#username").val();
	var password = $("#password").val();
	var cpassword = $("#cpassword").val();

	if(password==cpassword)
	{
		$.ajax({
		type:'POST',
		url:'doregister',
		data:'username='+username+'&password='+password,
		success:function(response){
				if(response)
				{
					alert(response);
				}
				$("#content").load('login');
			}
		});
	}
	else
	{
		alert("Pastikan semua persyaratan terpenuhi sebelum register");
	}
});


$(document).on('click','.edithobby',function(e)
{
	e.preventDefault();
	var id = $(this).attr('this-id');
	$('#caption-hobby'+id).hide();
	$('#textarea-cap'+id).css('display','block');
	$('#button-cap-edit'+id).css('display','block');
});

$(document).on('click','.button-cap-edit',function(e)
{
	e.preventDefault();
	var id = $(this).attr('this-id');
	var caption = $('#textarea-cap'+id).val();
	alert(caption);
	alert(id);
	$.ajax({
		type:'POST',
		url:'edithobby',
		data:'caption='+caption+'&id='+id,
		success:function(response){
				console.log(response);
				$('#content').load('hobby');
				window.location.hash="#/hobby";
			}
		});
	
});
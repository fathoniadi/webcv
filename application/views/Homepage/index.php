<html>
<head>
	<title></title>
	<link href="<?php echo BASE_URL;?>/assets/css/style.css" rel="stylesheet">
	 <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
</head>
<body>
	<div id="wrapper">
		<div class ="nav" style="">
			<div id="nav">
				<?php include('application/views/Homepage/nav-homepage.php');?>
			</div>
			<div class="nav-select">
				<a id="mute" href="">Mute</a>
			</div>
		</div>
		<img src="<?php echo ASSETS_PATH;?>img/bHome.jpg" id="bg">
		<div id="content">
			<section id="home">
				<p>&nbsp;</p>
			</section>
		</div>
	</div>
</body>
<footer>
	<a href="" id="footer-music">fathoniadi</a>
</footer>
<?php include('application/views/Homepage/playlist.php'); ?>
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.min.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>home.main.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>dashboard.main.js"></script>
<script type="text/javascript">
	$(document).on('click','.portofolio-more', function(){
	var last_id = $(this).attr('last-id');
	var urldest = "<?php echo BASE_URL;?>/portofoliomore";
	$('.portofolio-more-div').hide();
	$.ajax({
		type:'POST',
		url:urldest,
		data:'li='+last_id,
		success:function(response){
			$('#portofolio-list').append(response);
		}
	});
});

	$(document).on('click','.hobby-more', function(e)
	{
		var last_id = $(this).attr('last-id');
		$('.hobby-more-div').hide();
		$.ajax({
		type:'POST',
		url:'hobbymore',
		data:'li='+last_id,
		success:function(response){
			$('#hobby-list').append(response);
		}
		});
	});
</script>
</html>
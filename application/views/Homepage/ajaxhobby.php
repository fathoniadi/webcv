<?php
if(isset($_POST['li'])&&$_SERVER['REQUEST_METHOD']=="POST")
{
	$li = $_POST['li'];
	$qHLoad = "SELECT * from hobby where hobby_id > ".$li." limit 5 ";
	$flagqHLoad = $DB->query($qHLoad)->fetchAll();

	if($flagqHLoad)
	{
		foreach ($flagqHLoad as $data) 
		{
?>
			<div class="section-main" style="margin-top:1em">
				<?php if($auth->isAdmin())
					{
				?>
				<div class="section-tittle" style="text-align:right">
					<span class="edithobby" this-id="<?php echo $data['hobby_id']?>">Edit</span>
					<span class="deletehobby" this-id="<?php echo $data['hobby_id']?>">&nbsp;Delete</span>
				</div>
				<?php
					}
				?>
				<div class="section-content" style="margin-top:0.5em">
					<div style="text-align:center">
						<img class="img-portofolio" src="<?php echo BASE_URL;?>/uploads/hobby/img/<?php echo $data['gambar_hobby']?>">
					</div>
					<div id="div-cap<?php echo $data['hobby_id']?>" style="text-align:center; margin:0 auto">
						<p class="section-text" id="caption-hobby<?php echo $data['hobby_id']?>" style="padding:20px; text-align:center">
							<?php echo $data['caption_hobby']?>
						</p>
						<textarea style='margin-top:0.5em;display: none; left:50%' cols='50' rows='10' name='caption' id='textarea-cap<?php echo $data['hobby_id']?>'><?php echo $data['caption_hobby']?></textarea>
						<button style='display: none' this-id="<?php echo $data['hobby_id']?>" id="button-cap-edit<?php echo $data['hobby_id']?>" class="button-cap-edit">Edit</button>
					</div>
				</div>
			</div>
				<div class="hobby-more-div" style="text-align:center; margin:20px 0px; color:#5884e6">
					<span class="hobby-more" last-id="<?php echo $data['hobby_id']?>">Show More</span>
				</div>
<?php
		}
	}
	else
	{

	}
}
else
{
	include('application/views/errors/403.php');
	die();
}
?>
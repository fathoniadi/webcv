<?php
    $count='0';
    if ($handle = opendir('uploads/music')) {
        while (false !== ($entry = readdir($handle))) {
            if ($entry != "." && $entry != "..") {
                $vararray[$count]=$entry;
                $count++;
            }
        }
    }
    closedir($handle);
    for($i=0;$i<$count;$i++)
    {
      $arcount[$i]=$i;
    }
    shuffle($arcount);
?>
<div id="playlist-music" style="text-align:center; position: fixed;bottom:35px;width:100%">
<audio flag-show="0" style="display:none"  id="audio" preload="auto" autoplay tabindex="0" controls="">
    <source id="music" src="uploads/music/<?php echo $vararray[$arcount[0]];?>">
</audio>
<ul id="playlist" hidden>
    <?php
        for($i=0;$i<$count;$i++)
        {
            if($i==0)
            {
               $a=$vararray[$arcount[$i]]; 
               echo 
               "<li class='active'>
                    <a class='playlist-content' href='uploads/music/$a'>$a</a>
                </li> 
                ";
            }
            else
            {
                $c=$vararray[$arcount[$i]];
                echo 
               "<li>
                    <a class='playlist-content' href='uploads/music/$c'>$c</a>
                </li>
                ";
            }
        }            
    ?>
</ul>
</div>
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.min.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>home.playlist.js"></script>
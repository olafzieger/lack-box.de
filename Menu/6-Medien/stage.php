<div id=frame>
	<?php
	      $mode2 = "Menu/6-Medien";
              $i = 0;
              $h_DIR = opendir($mode2); // DIR REF HANDLE
              $n_DIR = array();   // DIR ARRAY 
              $r_DIR = array();
              while ($n_DIR[$i] = readdir($h_DIR)) // NAV DIR ARRAY FEED
              { 
                if(!strchr($n_DIR[$i],'.') && !strchr($n_DIR[$i],'_') && $n_DIR[$i] !=  '.') // EXCLUDE STANDARDS & FILES by STRCHR'.',=='..'
                { 
                 $r_DIR[$i] = $n_DIR[$i];
                }   
                $i++;
              }
              sort($r_DIR);
              $rL = count($r_DIR);
              $j = 0;
              // echo $rL; 
              while($j < $rL)
              {
              $cut = explode("-",$r_DIR[$j]);
              $hold = $cut[1];
	      echo '<div id=half class=blog><div id=blogTitle>'.$hold.'</div>';
		include("Menu/6-Medien/".$r_DIR[$j]."/blog.php");
		if($type == "pic")
		{
			echo '<div id=blogPicImg><img src="Menu/6-Medien/'.$r_DIR[$j].'/title.jpg" width=100%>';

      echo '</div>';
			echo '<div id=blogPicTxt><div id=txt>';
			include("Menu/6-Medien/".$r_DIR[$j]."/info.php");
			echo '</div></div>';
		}
		if($type == "album")
		{
			echo '<div id=blogPicImg><div id=shutter><img src="Menu/6-Medien/'.$r_DIR[$j].'/title.png" width=100%>';
      if(file_exists('Menu/6-Medien/'.$r_DIR[$j].'/img1.png')) echo '<img src="Menu/6-Medien/'.$r_DIR[$j].'/img1.png" width=100%>';
      if(file_exists('Menu/6-Medien/'.$r_DIR[$j].'/img2.png')) echo '<img src="Menu/6-Medien/'.$r_DIR[$j].'/img2.png" width=100%>';
      if(file_exists('Menu/6-Medien/'.$r_DIR[$j].'/img3.png')) echo '<img src="Menu/6-Medien/'.$r_DIR[$j].'/img3.png" width=100%>';
      echo '</div></div>';
			echo '<div id=blogAlbTxt><div id=txt>';
			include("Menu/6-Medien/".$r_DIR[$j]."/info.php");
			echo '</div></div><div id=blogAlbBar>';
			echo '<div id=blogAlbImg class=img0><img src="Menu/6-Medien/'.$r_DIR[$j].'/title.png" width=100%></div>';
			if(file_exists('Menu/6-Medien/'.$r_DIR[$j].'/img1.png'))echo '<div id=blogAlbImg class=img1><img src="Menu/6-Medien/'.$r_DIR[$j].'/img1.png" width=100%></div>';
			if(file_exists('Menu/6-Medien/'.$r_DIR[$j].'/img2.png')) echo '<div id=blogAlbImg class=img2><img src="Menu/6-Medien/'.$r_DIR[$j].'/img2.png" width=100%></div>';
			if(file_exists('Menu/6-Medien/'.$r_DIR[$j].'/img3.png')) echo '<div id=blogAlbImg class=img3><img src="Menu/6-Medien/'.$r_DIR[$j].'/img3.png" width=100%></div>';
			echo '</div>';
		}
		if($type == "txt")
		{
			echo '<div id=blogTxt>';
				include("Menu/6-Medien/".$r_DIR[$j]."/info.php");
			echo '</div>';
		}
		if($type == "vid")
		{
			echo '<div id=blogPicImg>';
			include("Menu/6-Medien/".$r_DIR[$j]."/embed.php");
			echo '</div>';
			echo '<div id=blogPicTxt><div id=txt>';
			include("Menu/6-Medien/".$r_DIR[$j]."/info.php");
			echo '</div></div>';
		}
		echo '</div>';
              
              $j++;
              }
		
	?></div>

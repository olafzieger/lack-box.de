<?php
  session_start();
  if(isset($_GET['kat'])) $kat = $_GET['kat'];
  else $kat = "0-Lack@Box";
  if(isset($_GET['sub'])) $sub = $_GET['sub'];
  else $sub = "";
  $NIK = 'niko';
  $PIN = "passwort11";
  
  ?>

<html>
<head>
 <title>Lack-Box.de</title>
 <link rel="stylesheet" type="text/css" href="main.css">

 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
// SETUP FUNCTION
function right_left()
{
$(document).ready(function(){
	// INITIALIZE
  

    
	// ON CLICK
  $("div#p1").click(function(event){$("div#drive").animate({top:"-0px"},{queue:false, duration:5000});event.preventDefault();});
  $("div#p2").click(function(event){$("div#drive").animate({top:"-200px"},{queue:false, duration:5000});event.preventDefault();});
  $("div#p3").click(function(event){$("div#drive").animate({top:"-400px"},{queue:false, duration:5000});event.preventDefault();});
  $("div#p4").click(function(event){$("div#drive").animate({top:"-600px"},{queue:false, duration:5000});event.preventDefault();});
  $("div#p5").click(function(event){$("div#drive").animate({top:"-800px"},{queue:false, duration:5000});event.preventDefault();});

  $("div.img0").click(function(event){$("div#shutter").animate({top:"0px"},{queue:false, duration:5000});event.preventDefault();});
  $("div.img1").click(function(event){$("div#shutter").animate({top:"-150px"},{queue:false, duration:5000});event.preventDefault();});
  $("div.img2").click(function(event){$("div#shutter").animate({top:"-300px"},{queue:false, duration:5000});event.preventDefault();});
  $("div.img3").click(function(event){$("div#shutter").animate({top:"-450px"},{queue:false, duration:1000});event.preventDefault();});

  });
}
function vn()
{
$(document).ready(function(){

   $("div#slide").animate({top:"0px"},{queue:false, duration:0, complete: function(){
        $("div#slide").delay(0).animate({opacity:"1"},{duration:500, complete: function(){
        $("div#slide").delay(8000).animate({opacity:"0"},{duration:500, complete: function(){
        $("div#slide").delay(0).animate({top:"-200px"},{duration:0, complete: function(){
        $("div#slide").delay(0).animate({opacity:"1"},{duration:500, complete: function(){
        $("div#slide").delay(8000).animate({opacity:"0"},{duration:500, complete: function(){
        $("div#slide").delay(0).animate({top:"-400px"},{duration:0, complete: function(){
        $("div#slide").delay(0).animate({opacity:"1"},{duration:500, complete: function(){
        $("div#slide").delay(8000).animate({opacity:"0"},{duration:500, complete: function(){
        $("div#slide").delay(0).animate({top:"-600px"},{duration:0, complete: function(){
        $("div#slide").delay(0).animate({opacity:"1"},{duration:500, complete: function(){
        $("div#slide").delay(8000).animate({opacity:"0"},{duration:500, complete: function(){
        $("div#slide").delay(0).animate({top:"-800px"},{duration:0, complete: function(){
        $("div#slide").delay(0).animate({opacity:"1"},{duration:500, complete: function(){
        $("div#slide").delay(8000).animate({opacity:"0"},{duration:500, complete: function(){
        $("div#slide").delay(0).animate({top:"-1000px"},{duration:0, complete: function(){
        $("div#slide").delay(0).animate({opacity:"1"},{duration:500, complete: function(){
        $("div#slide").delay(8000).animate({opacity:"0"},{duration:500, complete: function(){
        $("div#slide").delay(0).animate({top:"-1200px"},{duration:0, complete: function(){
        $("div#slide").delay(0).animate({opacity:"1"},{duration:500, complete: function(){
        $("div#slide").delay(8000).animate({opacity:"0"},{duration:500, complete: function(){
        $("div#slide").delay(0).animate({top:"-1400px"},{duration:0, complete: function(){
        $("div#slide").delay(0).animate({opacity:"1"},{duration:500, complete: function(){
        $("div#slide").delay(8000).animate({opacity:"0"},{duration:500, complete: function(){
        $("div#slide").delay(0).animate({top:"-1600px"},{duration:0, complete: function(){
        $("div#slide").delay(0).animate({opacity:"1"},{duration:500, complete: function(){
        $("div#slide").delay(8000).animate({opacity:"0"},{duration:500, complete: function(){
        $("div#slide").delay(0).animate({top:"-1800px"},{duration:0, complete: function(){
        $("div#slide").delay(0).animate({opacity:"1"},{duration:500, complete: function(){
        $("div#slide").delay(8000).animate({opacity:"0"},{duration:500, complete: function(){
    }});
    }});
    }});
    }});
    }});
    }});
    }});
    }});
    }});
    }});
    }});
    }});
    }});
    }});
    }});
    }});
    }});
    }});
    }});
    }});
    }});
    }});
    }});
    }});
    }});
    }});
    }});
    }});
    }});
    }});
    x = setTimeout(function(){vn()}, 100000);
  });
}   
    
    
// CALL FUNCTION
vn();
right_left();
</script>
</head>
<body>
 <div id=body>
  <div id=head>
  
    <div id=logo>
     <img src="IMG/static/logo.png" width=100%;id=logo>
     
    </div>
    <div id=navigation> 
     <?php 

              $mode = "Menu";
              $i = 0;
              $h_DIR = opendir($mode); // DIR REF HANDLE
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
      	      $schnipp = explode('@',$hold);
      	      $go = implode('-',$schnipp);
              if($j == 0) echo '<a href="?kat='.$r_DIR[$j].'" id=link1>&nbsp;'.$go.'&nbsp;</a>'; 
              else echo '<a href="?kat='.$r_DIR[$j].'" id=link>&nbsp;'.$go.'&nbsp;</a>';
              $j++;
              }
                        
     ?>
    </div>
    <div id=lang>
    
    </div>
  </div>
  <div id=stage>
  <?php 
if($kat == "adminlog")
{
echo "<div id=frame>";
$nik = $_POST['nik'];
$pin = $_POST['pin'];
  if(($nik == $NIK && $pin == $PIN) || ($_SESSION['nik'] == $NIK && $_SESSION['pin'] == $PIN))
  {
    if(isset($_POST['nik']))
    {
    $_SESSION['nik'] = $nik;
    $_SESSION['pin'] = $pin; 
    }
  echo "<br><br><a href='?kat=new'>Neuer Blogeintrag</a><br>";
  echo "<a href='?kat=edit'>Blogeintrag bearbeiten</a><br>";
  echo "<a href='?kat=delete'>Blogeintrag l&ouml;schen</a><br>";
  echo "<a href='?kat=logout'>Ausloggen</a><br>";
  }
else echo "nik / pin falsch";
echo "</div>";
}
else if($kat == "new")
{
  if($_SESSION['nik'] == $NIK && $_SESSION['pin'] == $PIN)
  {
  echo "<div id=frame><div id=halfsmall><div id=txt style='font-size:2em;'>";
  echo '<form method=post action="?kat=insert">';
  echo '<select name=type>';
  echo '<option name=txt>txt</option>';
  echo '<option name=pic>pic</option>';
  echo '<option name=vid>vid</option>';
  echo '<option name=album>album</option>';
  echo '</select>';
  echo '<input type=text name=title value=TITLE>';
  echo '<input type=submit value=WEITER>';
  echo '</form>';
  echo '</div></div>';
  echo "<br><br><a href='?kat=adminlog'>Zur&uuml;ck</a><br>";
  echo "<a href='?kat=logout'>Ausloggen</a><br>";
  echo '</div>';
  }
  else echo "<div id=frame><br><br><a href='?kat=adminlog'>Zur&uuml;ck</a></div>";
}
else if($kat == "edit")
{

}
else if($kat == "delete")
{

}
else if($kat == "insert")
{
if($_SESSION['nik'] == $NIK && $_SESSION['pin'] == $PIN)
  {
  $comb = date('Ymd').'-'.$_POST['title'];
  echo "<div id=frame><div id=half><div id=txt style='font-size:2em;'>";
    if($_POST['type'] == 'txt')
    {
    echo $comb;
    echo '<form method=post action="?kat=transfer">';
    echo '<textarea name=txt>BLOGTEXT</textarea>';
    echo '<input type=hidden name=type value=txt>';
    echo '<input type=hidden name=title value='. $comb .'>';
    echo '<input type=submit value=WEITER>';
    echo '</form>';
    }
    if($_POST['type'] == 'vid')
    {
    echo $comb;
    echo '<form method=post action="?kat=transfer">';
    echo '<input type=text name=url value="http://xmpl.com/video.mpg">';
    echo '<input type=hidden name=type value=vid>';
    echo '<input type=hidden name=title value='. $comb .'>';
    echo '<input type=submit value=WEITER>';
    echo '</form>';
    }
    if($_POST['type'] == 'pic')
    {
    echo $comb;
    echo '<form method=post action="?kat=transfer" enctype=multipart/form-data>';
    echo '<textarea name=txt>BLOGTEXT</textarea>';
    echo '<input type=file name=img>';
    echo '<input type=hidden name=type value=pic>';
    echo '<input type=hidden name=title value='. $comb .'>';
    echo '<input type=submit value=WEITER>';
    echo '</form>';
    }
    if($_POST['type'] == 'album')
    {
    echo $comb;
    echo '<form method=post action="?kat=transfer" enctype=multipart/form-data>';
    echo '<textarea name=txt>BLOGTEXT</textarea>';
    echo '<input type=file name=img>';
    echo '<input type=file name=img2>';
    echo '<input type=file name=img3>';
    echo '<input type=file name=img4>';
    echo '<input type=hidden name=type value=album>';
    echo '<input type=hidden name=title value='. $comb .'>';
    echo '<input type=submit value=WEITER>';
    echo '</form>';
    }
  echo '</div></div>';
  echo "<br><br><a href='?kat=adminlog'>Zur&uuml;ck</a><br>";
  echo "<a href='?kat=logout'>Ausloggen</a><br>";
  echo '</div>';
  }
  else echo "<div id=frame><a href='?kat=adminlog'>Zur&uuml;ck</a></div>";
}
else if($kat == "logout")
{
session_destroy();
echo "<div id=frame><a href='?kat=_Admin'>Zur&uuml;ck</a></div>";
}
else if($kat == "transfer")
{
  if($_SESSION['nik'] == $NIK && $_SESSION['pin'] == $PIN)
  {
    echo "<div id=frame>";
    echo "<br>";
    echo "<br>";
    echo $_POST['type'];
    echo "<br>";
    echo $_POST['title'];
    echo "<br>";
    echo "<br>";
    echo $_POST['txt'];
    echo $_POST['url'];
    echo "<br>";
    echo "<br>";
    
    // IMG
    $dateityp = GetImageSize($_FILES['img']['tmp_name']);
    if($dateityp[2] == 2)
    {
  
    if($_FILES['img']['size'] <  102400)
        {
        $DIR = 'Menu/3-Medien/'.$_POST['title'];
        if(!is_dir($DIR)) mkdir($DIR,0777);
        move_uploaded_file($_FILES['img']['tmp_name'], $DIR.'/img.jpg');
        echo "<img src='".$DIR."/img.jpg' />";
        }
        else echo "Das Bild darf nicht größer als 100 kb sein ";
    }
    else   echo "Bitte nur Bilder im jpg Format hochladen";
    // IMG2
    $dateityp = GetImageSize($_FILES['img2']['tmp_name']);
    if($dateityp[2] == 2)
    {
  
    if($_FILES['img2']['size'] <  102400)
        {
        $DIR = 'Menu/3-Medien/'.$_POST['title'];
        if(!is_dir($DIR)) mkdir($DIR,0777);
        move_uploaded_file($_FILES['img2']['tmp_name'], $DIR.'/img2.jpg');
        echo "<img src='".$DIR."/img2.jpg' />";
        }
        else echo "Das Bild darf nicht größer als 100 kb sein ";
    }
    else   echo "Bitte nur Bilder im jpg Format hochladen";
    // IMG
    $dateityp = GetImageSize($_FILES['img3']['tmp_name']);
    if($dateityp[2] == 2)
    {
  
    if($_FILES['img3']['size'] <  102400)
        {
        $DIR = 'Menu/3-Medien/'.$_POST['title'];
        if(!is_dir($DIR)) mkdir($DIR,0777);
        move_uploaded_file($_FILES['img3']['tmp_name'], $DIR.'/img3.jpg');
        echo "<img src='".$DIR."/img3.jpg' />";
        }
        else echo "Das Bild darf nicht größerer als 100 kb sein ";
    }
    else   echo "Bitte nur Bilder im jpg Format hochladen";
    // IMG
    $dateityp = GetImageSize($_FILES['img4']['tmp_name']);
    if($dateityp[2] == 2)
    {
  
    if($_FILES['img4']['size'] <  102400)
        {
        $DIR = 'Menu/3-Medien/'.$_POST['title'];
        if(!is_dir($DIR)) mkdir($DIR,0777);
        move_uploaded_file($_FILES['img4']['tmp_name'], $DIR.'/img4.jpg');
        echo "<img src='".$DIR."/img4.jpg' />";
        
        }
        else echo "Das Bild darf nicht größer als 100 kb sein ";
    }
    else   echo "Bitte nur Bilder im jpg Format hochladen";
    
    echo "<br>";
    echo "<a href='?kat=adminlog'>Zur&uuml;ck</a>";
    echo '</div>';
  }
  else echo "<div id=frame><a href='?kat=adminlog'>Zur&uuml;ck</a></div>";
}
else
{
  $stage = "Menu/".$kat."/stage.php";
  include($stage);
}

 ?> 
  </div>
	<div id=foot>
		<div id=txt style="color:#fff;font-size:0.8em;"><a href="?kat=_Admin" style="color:#fff;">&copy;</a> Lack-Box.de 2013. Alle Rechte vorbehalten.
			<a href="?kat=4-Kontakt" style="margin-left:360px;color:#fff;">Kontakt </a> | <a href="?kat=_Impressum" style="color:#fff;"> Impressum</a> | <a href="?kat=_Datenschutz" style="color:#fff;"> Datenschutz </a>
		</div>
	</div>
 </div> 
</body>
</html>
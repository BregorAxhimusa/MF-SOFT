<?php
session_start();
if(isset($_GET['route'])){
  if(
    $_GET['route'] == "404front"
  ){
// Header frronti
    include("includes/frontheader.php");
    include("modules/".$_GET['route'].".php");
    include("includes/frontfooter.php");
// Footer
  }
  else if($_GET['route'] == "CMS"                ||
    $_GET['route'] == "dashboard"                ||
    $_GET['route'] == "regjistrimi-mallit"       ||
    $_GET['route'] == "fletore"                  ||
    $_GET['route'] == "veshtrimi-faturave"       ||
    $_GET['route'] == "furnizimi"                ||
    $_GET['route'] == "stoku"                    ||
    $_GET['route'] == "statistikat"              ||
    $_GET['route'] == "arka"                     ||
    $_GET['route'] == "shfrytezuesit"            ||
    $_GET['route'] == "bizneset"
  )
  {
    include("Views/includes/header.php");
    include("modules/CMS/".$_GET['route'].".php");
    include("Views/includes/footer.php");
  }
  else if( $_GET['route'] == "startimi-arkes"    ||
    $_GET['route'] == "startimi-arkes"
  )
  {
    include("Views/modules/startimi-arkes/header.php");
    include("modules/startimi-arkes/".$_GET['route'].".php");
    include("Views/modules/startimi-arkes/footer.php");
  }
  else{
    include("modules/CMS/404.php");
  }
}
else{

  include("includes/frontheader.php");
// include("modules/homepage.php");
  include("includes/frontfooter.php");
}
?>
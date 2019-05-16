<?PHP





define ("P",dirname(__FILE__)."/");
define ("URI","https://".$_SERVER["HTTP_HOST"]."/");

require_once ("templates/blocks/head.php");
require_once ("templates/blocks/header.php");
require_once ("templates/blocks/sidebar.php");

if(isset($_GET['page'])){
  if($_GET['page']=="blog"){
    include "templates/pages/blog.php";
  }
  elseif($_GET['page']=="products"){
    include "templates/pages/products.php";
  }
  else{
    include "templates/blocks/index.php";
  }
}else{
  include "templates/blocks/index.php";
}




require_once ("templates/blocks/footer.php");
?>
 <?php
function url($url ='')
{
    echo BURL.$url;
}
 function redirect($page,$data=[])
 {
     extract($data);
     header('location: ' . BURL  .$page);
 }
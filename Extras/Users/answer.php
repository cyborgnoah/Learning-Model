<?php
$a1=@$_GET[t1];
if($a1!=null)
{
 header("location:user.php");
}
else
{
 header("location:user.php?x=1");
}
?>
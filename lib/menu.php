<?php
$nomecartella='./Menu';
$d = dir($nomecartella);
while (false !== ($entry = $d->read())) {
	if(!(strpos($entry,'.php') === false)){
		echo '<a dest="container" meth="GET"  href="Menu/'.$entry.'" class="btn btn-default">'.str_replace('.php','',$entry).'</a>';
	}
}
?>
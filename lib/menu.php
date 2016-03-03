<?php
$nomecartella='./Menu';
$d = dir($nomecartella);
while (false !== ($entry = $d->read())) {
	if(!(strpos($entry,'.php') === false)){
		echo '<a orig="origdata" dest="container" meth="POST"  href="Menu/'.$entry.'" class="btn btn-default">'.str_replace('.php','',$entry).'</a>';
	}
}
?>
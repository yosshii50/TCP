<?php

$Title = "販売業務システム";

$data = file_get_contents( "index.base.html" );
$body = "";
$javascript = "";



$data = str_replace( "{%title%}" , $Title , $data );
$data = str_replace( "{%body%}" , $body , $data );
$data = str_replace( "{%javascript%}" , $javascript , $data );

echo $data;
?>

<?php


$site_name = "SpaceBlog";

function get_posts( $json){
  $json = file_get_contents( $json );
  $posts = json_decode( $json, true );
  return $posts ;
}

<?php
include( 'lib/functions.php' );
include( 'templates/header.php' );
include( 'templates/sidebar.php');

$posts = get_posts( './data/posts.json');
// var_dump($posts); 
echo '<div class = "body-text">';
foreach ($posts as $post ):
  echo '<h2 class = "title">' . $post['title'] . '<h2>';
  echo '<p>' . $post['post_date'] . '</p>';
  echo '<p>' . $post['author'] . '</p>';
  echo '<p>' . $post['content'] . '</p>';
  echo '<p>' . $post['category'] . '</p>';

endforeach;
echo '</div>';
include( 'templates/footer.php');




// make a loop
// <!-- include header and side base_convert
// includes and html structure

// json with class
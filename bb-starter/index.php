<?php
include( 'lib/functions.php' );
include( 'templates/header.php' );
include( 'templates/sidebar.php');

// var_dump($posts); 

echo '<div class = "body-text">';

$posts = get_posts( './data/posts.json');
usort($posts, function ($a,$b){
    return $b['post_date'] - $a['post_date'];
});

foreach ($posts as $post ):

  echo '<p class = "title">' . $post['title'] . '<p>';

  $date = $post['post_date'];
  echo '<p>' . date("F j, Y", $post['post_date']) . '</p>';
  echo '<p>' . $post['author'] . '</p>';
  echo '<p>' . $post['content'] . '</p>';

  $catCount = count($post['category']);

  echo '<div class ="container">';

for ($i = 0 ; $i < $catCount ; $i++ ){
  echo '<p class = "categories">' . $post['category'][$i] . ', </p>';
};
echo '</div>';
endforeach;
echo '</div>';
include( 'templates/footer.php');




  //foreach ($movies_1 as &$movie) {  //allows us to update gloabal '&'
  //   sort( $movie['stars']);
  
  // }
  // print_r( $movies_1);
  
  

  // print_r( $posts);
  
  

//   echo '<div class=“sidebar1”>'  ;
  
// $title = ($posts[$i+4][title]);
// $content = ($posts[$i+4][content]);
// $author = ($posts[$i+4][author]);
// $title = ucwords($title);

// for ($x = 0; $x <= 5; $x++) {
//  $tags = ($posts[$i][category][$x]);
//  echo “<p> $tags</p>“;
// };
// echo “<h1>$title</h1>“;
// echo “<p1>$content</p1>“;
// echo “<p1><em>$author</em></p1>“;

// echo '</div>'


// sort by chronological order-- can reverse order
// usort( $posts, funtion ($a, $b ) {
//   return $b['post_date'] - a$['post_date'];
//}


// make a loop
// <!-- include header and side base_convert
// includes and html structure

// json with class
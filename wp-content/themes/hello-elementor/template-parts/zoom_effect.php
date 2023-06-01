<?php
/*
Template Name: Category Slider Template
*/

get_header(); ?>

<style>
.category-slider {
  display: flex;
}

.category {
  cursor: pointer;
  padding: 10px;
  margin-right: 10px;
  background-color: #ccc;
}

.category.active {
  background-color: #999;
}

.posts {
  margin-top: 20px;
}

.post {
  display: none;
  margin-bottom: 10px;
}

.post.active {
  display: block;
}
</style>

<div class="category-slider">
  <?php
  // Get all post categories
  $categories = get_categories();
  
  // Loop through categories
  foreach ($categories as $category) {
    $category_class = ($category === $categories[0]) ? 'active' : ''; // Add active class to the first category
    
    // Display category
    echo '<div class="category ' . $category_class . '" data-category="' . $category->slug . '">' . $category->name . '</div>';
  }
  ?>
</div>

<div class="posts">
  <?php
  // Get the first category
  $first_category = $categories[0]->slug;
  
  // Query posts for the first category
  $query_args = array(
    'category_name' => $first_category,
    'posts_per_page' => -1 // Display all posts
  );
  $query = new WP_Query($query_args);
  
  // Loop through posts
  if ($query->have_posts()) {
    while ($query->have_posts()) {
      $query->the_post();
      echo '<div class="post ' . $first_category . '">' . get_the_title() . '</div>';
    }
  }
  wp_reset_postdata();
  ?>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<script>
jQuery(document).ready(function($) {
  // Set the first category as active by default
  $('.category:first').addClass('active');
  $('.post.<?php echo $first_category; ?>').addClass('active');
  
  // Initialize Slick Slider
  $('.category-slider').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    arrows: true,
    infinite: false,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 3
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 2
        }
      }
    ]
  });
  
  // Handle click event on category
  $('.category').click(function() {
    // Remove active class from all categories
    $('.category').removeClass('active');
    // Add active class to the clicked category
    $(this).addClass('active');
    
    // Get the selected category
    var selectedCategory = $(this).data('category');
    
    // Hide all posts
    $('.post').removeClass('active');
    
    // Show posts for the selected category
    $('.post.' + selectedCategory).addClass('active');
  });
});
</script>

<?php get_footer(); ?>
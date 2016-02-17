<?php

// get the post categories
$categories = get_the_category($post->ID);

// comma-separate posts
$separator = ', ';

// create output variable
//$output = __('Posted in', 'unlimited') . ' ';

// if there are categories for the post
if($categories){

	echo '<p class="post-categories" info="post-categories">';
		foreach($categories as $category) {
			// if it's the last and not also the first (only) category, pre-prend with "and"
/*
			if( $category === end($categories) && $category !== reset($categories) ) {
				$output .= __('and', 'unlimited') . ' ';
			}
*/
			// output category name linked to the archive
//			$output .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s", 'unlimited' ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
			$output = '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s", 'unlimited' ), $category->name ) ) . '" class="icon-' . $category->category_nicename . '">'.$category->cat_name.'</a>'.$separator;
//			print_r($category);
//			print $category->category_nicename;
		}
		echo trim($output, $separator);
	echo "</p>";
}
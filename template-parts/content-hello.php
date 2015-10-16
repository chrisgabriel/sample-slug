<?php
/**
 * Template part for displaying MY posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Sample_Theme
 */

?>

<div class="myPostContainer" id="id-<?php the_ID(); ?>" >
    
    
    <div class="myPostTitle">
    <?php 
    the_title();
    ?>
    </div>
    <div class="postContent">
    <?php
    the_content();
    ?>

    </div>
    <div class="postInfo">
    <?php the_date( 'F j, Y g:i A' ) ?>
    By <?php the_author() ?>

    </div>
</div><br>
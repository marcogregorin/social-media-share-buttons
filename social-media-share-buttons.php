<?php

  /*
    Social Media Sharing Buttons
    Marco Gregorin
    v.1.0.0.
  */

  // Crete variables for Post Title and URL
  $postTitle = get_the_title();
  $postPermalink = get_the_permalink();
  // Set Twitter User Handler
  $twitterHandler = '&amp;via=oneoceanforum';
  // Get Post Thumbnail for pinterest
  $pinterestThumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
  // Open dialog in a modal
  $modal = "window.open(this.href, 'socialsharewindow','left=20,top=20,width=600,height=500,toolbar=0,resizable=1'); return false;"

  // Connect to APIs
  $twitter = 'https://twitter.com/intent/tweet?text=' . $postTitle . '&amp;url=' . $postPermalink . $twitterHandler . '' ;
  $facebook = 'https://www.facebook.com/sharer/sharer.php?u=' . $postPermalink;
  $google = 'https://plus.google.com/share?url=' . $postPermalink;
  $linkedin = 'https://www.linkedin.com/shareArticle?mini=true&url='.$postPermalink.'&amp;title='.$postTitle;
  $whatsapp = 'whatsapp://send?text='.$postTitle . ' ' . $postPermalink;
  $pinterest = 'https://pinterest.com/pin/create/button/?url='.$postPermalink.'&amp;media='.$pinterestThumbnail[0].'&amp;description='.$postTitle;
  $email = 'mailto:?subject=Check out this post: '.$postTitle . '&body='.$postTitle . '&#32;&#32;' . $postPermalink;

?>

<div class="social-share">
 <ul>
   <!-- Facebook -->
   <li class="facebook">
     <a href="<?php echo $facebook ?>" rel="nofollow" target="blank" onclick="<?php echo $modal ?>">Facebook</a>
   </li>
   <!-- Twitter -->
   <li class="twitter">
     <a href="<?php echo $twitter ?>" rel="nofollow" target="blank" onclick="<?php echo $modal ?>">Twitter</a>
   </li>
   <!-- Google Plus -->
   <li class="google">
     <a href="<?php echo $google ?>" rel="nofollow" target="blank" onclick="<?php echo $modal ?>">Google +</a>
   </li>
   <!-- Linkedin -->
   <li class="linkedin">
     <a href="<?php echo $linkedin ?>" rel="nofollow" target="blank" onclick="<?php echo $modal ?>">Linkedin</a>
   </li>
   <!-- Pinterest -->
   <li class="pinterest">
     <a href="<?php echo $pinterest ?>" rel="nofollow" target="blank" onclick="<?php echo $modal ?>">Pinterest</a>
   </li>
   <!-- WhatsApp -->
   <li class="whats-app">
     <a href="<?php echo whatsapp ?>" rel="nofollow" target="blank" onclick="<?php echo $modal ?>">What's App</a>
   </li>
   <!-- Email -->
   <li class="email">
     <a href="<?php echo $email ?>" rel="nofollow" target="blank" onclick="<?php echo $modal ?>">Email</a>
   </li>
 </ul>
</div>

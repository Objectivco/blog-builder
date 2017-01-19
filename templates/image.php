<?php
$image = wp_get_attachment_image( $atts->img_id, 'full' );
?>

<div class="blog-builder-module blog-builder-<?php echo $atts->slug; ?>">
    <figure>
        <?php echo $image; ?>
    </figure>
</div>

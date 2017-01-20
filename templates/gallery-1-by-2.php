<?php
$image_1 = wp_get_attachment_image( $atts->img_1_id, 'mg_three_four_image' );
$image_2 = wp_get_attachment_image( $atts->img_2_id, 'mg_three_four_image' );
?>

<div class="blog-builder-module blog-builder-<?php echo $atts->slug; ?>">
    <div class="blog-builder-module-grid">
        <div class="blog-builder-image three-four">
            <?php echo $image_1; ?>
        </div>
        <div class="blog-builder-image three-four">
            <?php echo $image_2; ?>
        </div>
    </div>
</div>

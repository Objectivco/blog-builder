<?php
$image_1 = wp_get_attachment_image( $atts->img_1_id, 'mg_one_one_image' );
$image_2 = wp_get_attachment_image( $atts->img_2_id, 'mg_one_one_image' );
$image_3 = wp_get_attachment_image( $atts->img_3_id, 'mg_one_one_image' );
$image_4 = wp_get_attachment_image( $atts->img_4_id, 'mg_one_one_image' );
?>

<div class="blog-builder-module blog-builder-<?php echo $atts->slug; ?>">
    <div class="blog-builder-module-grid">
        <div class="blog-builder-image one-one">
            <?php echo $image_1; ?>
        </div>
        <div class="blog-builder-image one-one">
            <?php echo $image_2; ?>
        </div>
        <div class="blog-builder-image one-one">
            <?php echo $image_3; ?>
        </div>
        <div class="blog-builder-image one-one">
            <?php echo $image_4; ?>
        </div>
    </div>
</div>

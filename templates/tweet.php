<?php
$string = rawurlencode( $atts->text . ' ' . get_the_permalink( get_the_ID() ) . ' via @mooreandgiles' );
?>
<a class="blog-builder-module blog-builder-<?php echo $atts->slug; ?>" href="https://twitter.com/intent/tweet?text=<?php echo $string; ?>">
    <span class="blog-builder-<?php echo $atts->slug; ?>-content"><?php echo $atts->text; ?></span>
    <div class="blog-builder-<?php echo $atts->slug; ?>-icon">
        <svg width="130px" height="144px" viewBox="0 0 130 144" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <!-- Generator: Sketch 41.2 (35397) - http://www.bohemiancoding.com/sketch -->
            <title>twitter-badge</title>
            <desc>Created with Sketch.</desc>
            <defs></defs>
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="twitter-badge">
                    <path d="M51,14 L8.00953096,14 C3.57854197,14 0,17.5859892 0,22.009531 L0,135.990469 C0,140.421458 3.58598916,144 8.00953096,144 L121.990469,144 C126.421458,144 130,140.414011 130,135.990469 L130,22.009531 C130,17.578542 126.414011,14 121.990469,14 L79,14 L65,0 L51,14 Z" id="bg_box" fill="#EEEEEE"></path>
                    <path d="M106.9845,53.52325 C104.03375,54.839125 101.547,54.882625 98.911625,53.58125 C102.311875,51.544 102.46775,50.112125 103.696625,46.262375 C100.513875,48.151 96.98675,49.524875 93.234875,50.264375 C90.233375,47.067125 85.95225,45.0625 81.214375,45.0625 C72.115625,45.0625 64.742375,52.443 64.742375,61.5345 C64.742375,62.825 64.887375,64.082875 65.1665,65.29 C51.4785,64.604875 39.338375,58.04725 31.21475,48.0785 C29.797375,50.510875 28.985375,53.342 28.985375,56.361625 C28.985375,62.07825 31.89625,67.117 36.3115,70.071375 C33.610875,69.984375 31.073375,69.244875 28.854875,68.012375 C28.85125,68.08125 28.85125,68.1465 28.85125,68.219 C28.85125,76.20125 34.528,82.85675 42.068,84.372 C39.65375,85.028125 37.109,85.129625 34.625875,84.658375 C36.72475,91.197875 42.8075,95.961125 50.014,96.09525 C42.963375,101.61975 34.2235,103.921625 25.625,102.913875 C32.9185,107.5865 41.571375,110.3125 50.87675,110.3125 C81.1745,110.3125 97.74075,85.213 97.74075,63.444875 C97.74075,62.727125 97.729875,62.02025 97.69725,61.313375 C100.912625,58.993375 104.776875,56.82925 106.9845,53.52325 Z" id="twitter_bird"></path>
                </g>
            </g>
        </svg>
    </div>
</a>

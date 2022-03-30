<?php
/**
 * Title: Podcast episode with media, text.
 * Slug: frost/general-podcast
 * Categories: frost-general
 * Viewport Width: 1280
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0px"}}},"layout":{"inherit":true}} -->
<div class="wp-block-group alignfull" style="margin-top:0px">
<!-- wp:spacer {"height":100} -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":"60px"}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center">
<!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%">
<!-- wp:image {"id":3489,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( __( 'https://frostwp.com/wp-content/uploads/2021/12/sample-black_800x800.jpg', 'frost' ) ); ?>"  alt="<?php echo esc_attr__( 'Sample Image', 'frost' ); ?>" class="wp-image-3489"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"center","width":"70%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:70%">
<!-- wp:heading {"fontSize":"x-large"} -->
<h2 class="has-x-large-font-size" id="sample-podcast-episode"><?php echo esc_html__( 'Sample Podcast Episode', 'frost' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}}} -->
<p style="line-height:1.5">Lorem ipsum dolor sit amet, consectetur adipiscing vestibulum. Quisque vitae mi pellentesque arcu fermentum, dignissim velit vitae, malesuad elit condimentum. Vestibulum et faucibus.</p>
<!-- /wp:paragraph -->
<!-- wp:audio {"id":3546} -->
<figure class="wp-block-audio"><audio controls src="<?php echo esc_url( __( 'https://frostwp.com/wp-content/uploads/2021/12/sample-audio-file.mp3', 'frost' ) ); ?>"></audio></figure>
<!-- /wp:audio -->
<!-- wp:buttons {"style":{"spacing":{"blockGap":"10px"}}} -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link" href="#">Apple Podcasts</a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link" href="#">Google Podcasts</a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link" href="#">Spotify</a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link" href="#">Stitcher</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
<!-- wp:spacer {"height":100} -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
</div>
<!-- /wp:group -->

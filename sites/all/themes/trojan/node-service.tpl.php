<?php
?>
<div id="node-<?php print $node->nid; ?>" class="node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?>">

<?php if ($page == 0): ?>
<!--  <h2><a href="//<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>-->
<?php endif; ?>

	
	
			
				<?php 
			if (count($node->field_services_slider_images[$l]) > 0) {
				print '<div id="services-slider">
		<div class="inner-wrapper">
			<ul class="slider bxslider">';
				foreach ($node->field_services_slider_images as $image) { ?>
				<li>
					<?php 
					$title = '';
					if (isset($image['data']['description']) && !empty($image['data']['description'])) { 
						$title = $image['data']['description'];
					} // end if (isset($image['data']['description']) && !empty($image['data']['description']))
					print theme('imagecache', 'services_slider', $image['filepath'], '', $title); ?>
				</li>
			<?php } // end foreach ($node->field_services_slider_images as $image)
			
			print '</ul>
		</div>
	</div>';
			
			} // end if (count($node->field_services_slider_images[$l]) > 0) ?>
			
  <div class="content clear-block">
    <?php print $node->content['body']['#value'] ?>
  </div>

  <div class="clear-block">
    <div class="meta">
    <?php if ($taxonomy): ?>
      <div class="terms"><?php print $terms ?></div>
    <?php endif;?>
    </div>

    <?php if ($links): ?>
      <div class="links"><?php print $links; ?></div>
    <?php endif; ?>
  </div>

</div>

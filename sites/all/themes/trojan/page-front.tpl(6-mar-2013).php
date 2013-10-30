<?php
global $base_url;
$theme_path = $base_url . '/' . drupal_get_path('theme', 'trojan');
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
    <head>
        <?php print $head ?>
        <title><?php print $head_title ?></title>
        <?php print $styles ?>
        <?php print $scripts ?>
        <!--[if lt IE 7]>
        <?php print phptemplate_get_ie_styles(); ?>
        <![endif]-->
        <link href='http://fonts.googleapis.com/css?family=Cabin+Condensed:400,500,600,700' rel='stylesheet' type='text/css'></link>
    </head>
    <body <?php print phptemplate_body_class($left, $right); ?>>
        <div id="header">
            <div class="wrapper">
                <div id="header-top">
                    <?php
                    if ($logo || $site_title) {
                        print '<a href="' . check_url($front_page) . '" title="' . $site_title . '">';
                        if ($logo) {
                            print '<img src="' . check_url($logo) . '" alt="' . $site_title . '" id="logo" />';
                        }
                        print $site_html . '</a>';
                    }
                    ?>
                    <div id="header-login">
                        <div id="header-login-r">
				<?php print(views_embed_view('branch_phone_numbers', 'block_1')); ?>
                            <?php print l('Employee LogIn', 'node/13'); ?>
                        </div>
						<?php echo weather_get(); ?>
                        <!--<a href="#"><img src="<?php print $theme_path; ?>/images/trojan/weather.png" alt="Weather" /></a>-->
                    </div>
                    <div id="topnav">
                        <ul class="menu">
                            <li id="services-links"><?php print l('Services', 'node/10'); ?>
                                <ul>
                                    <li><?php print l('First Aid', 'node/8'); ?></li>
                                    <li><?php print l('Fire & Shower', 'node/5'); ?></li>
                                    <li><?php print l('H2S Safety', 'node/6'); ?></li>
                                    <li><?php print l('Air Monitoring', 'node/18', array('attributes' => array('style' => 'margin-left:210px;'))); ?></li>
                                    <li><?php print l('Sales & services', 'node/7'); ?></li>
                                    <li><?php print l('Training', 'node/4'); ?></li>

                                </ul>
                            </li>
                        </ul>
                        <ul class="menu" style="margin-right:270px;">
                            <li><?php print l('Careers', 'node/9'); ?></li>
                        </ul>
                        <ul class="menu">
                            <li><?php print l('Partners', 'node/12'); ?></li>
                        </ul>
                        <ul class="menu">
														<li id="branches-links"><?php print l('Contact Us', 'node/11'); ?>
                                <ul style="left:-787px;">
                                    <li><?php print l('Fort St. john', 'node/1'); ?></li>
                                    <li><?php print l('Grande Prairie', 'node/14'); ?></li>
                                    <li><?php print l('Red Deer', 'node/15'); ?></li>
                                    <li><?php print l('Calgary', 'node/16', array('attributes' => array('style' => 'margin-left:210px;'))); ?></li>
                                    <li><?php print l('Weyburn', 'node/17'); ?></li>
                                    <!--<li><?php print l('Fort St. john', 'node/1'); ?></li>-->
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="navbg" style="display: none;"></div>
                </div>
            </div>
            <div id="myslides" class="myslider-margin-top"> 
			    <?php $slider_result = db_query("SELECT nid FROM {node} WHERE type = 'header_slider' ORDER BY title"); ?>
				<?php while($row = db_fetch_object($slider_result)): ?>
				  <?php $__node = node_load($row->nid); ?>
				  <?php $field_image = $base_url .'/'. $__node->field_image[0]['filepath']; ?>
				  <img src="<?php print $field_image; ?>" alt="Header" width="100%" />
				<?php endwhile; ?>
            </div>
        </div>

        <!--<div class="navbg2">
          <div style="color: white; font-family: 'CabinCondensedBold'; text-decoration: none; font-size: 33px;">Services</div>
        </div>-->
        <!--<div id="nav" style="background: none; position: relative; z-index: 5; margin: -44px 0px 0px 0px; color: white; font-size: 33px;">
          <div class="wrapper">
        <?php print drupal_get_title(); ?>
          </div>
        </div>-->
        <div id="nav">
            <div class="wrapper">
                <?php if (isset($primary_links)) : ?>
                    <?php print theme('links', $primary_links, array('class' => 'links primary-links')) ?>
                <?php endif; ?>
            </div>
        </div>

        <?php if ($show_messages && $messages): print $messages;
        endif; ?>

					<div class="nearest-location">
						<div class="inner-wrapper">
							<?php print $nearest_location ?>
						</div>
					</div>
        <div class="content">
<?php print $content ?>
        </div>

        <div id="footer">
            <div class="wrapper">
                <div class="footer-box">
                    <h2>General Information</h2>
                    <?php if (isset($footer_links1)) : ?>
                        <?php print theme('links', $footer_links1, array('class' => 'links footer-links1')) ?>
<?php endif; ?>

                </div>
                <div class="footer-box" style="margin-left: 225px;">
                    <h2>Search Information</h2>
                    <div class="footer-search">
                        <a href="#" class="search"></a>
                        <input name="" type="text" />
                    </div>
                </div>
                <a href="#"><img src="<?php print $theme_path; ?>/images/trojan/footerlogo.png" alt="Logo" style="margin-top: 39px;" /></a>
                <div class="footer-image" style="margin-top: -25px; float: left;">
				    <?php $slider_result = db_query("SELECT nid FROM {node} WHERE type = 'footer_images' ORDER BY title"); ?>
					<?php while($row = db_fetch_object($slider_result)): ?>
				  		<?php $__node = node_load($row->nid); ?>
				  		<?php $field_image = $base_url .'/'. $__node->field_footer_image[0]['filepath']; ?>
						<?php $field_image = "{$base_url}/imgsize.php?img={$field_image}&w=99&h=39"; ?>
				  		<img src="<?php print $field_image; ?>" alt="Header" width="99" height="39" />
					<?php endwhile; ?>
                </div>
            </div>
        </div>
<?php print $closure ?>
    </body>
</html>
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
		<script type="text/javascript" src="<?php print $theme_path; ?>/js/jquery.bxSlider.min.js"></script>
		<script type="text/javascript">
          $(document).ready(function(){
            $('#slider1').bxSlider();
          });
        </script>
        <!--[if lt IE 7]>
        <?php print phptemplate_get_ie_styles(); ?>
        <![endif]-->
        <link href='http://fonts.googleapis.com/css?family=Cabin+Condensed:400,500,600,700' rel='stylesheet' type='text/css'></link>
		<script type="text/javascript">var switchTo5x=true;</script>
		<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
		<script type="text/javascript" src="http://s.sharethis.com/loader.js"></script>
    </head>
    <body class="<?php print $body_classes.' '.phptemplate_body_class($left, $right); ?>">
        <div id="header">
            <div class="wrapper">
                <div id="header-top">
                    <?php
					
                    if ($logo || $site_title) {
						 
                        print '<a href="' . check_url($front_page) . '" title="' . $site_title . '">'.$header_closest;
                        if ($logo) {
                            print '<img src="' . check_url($logo) . '" alt="' . $site_title . '" id="logo" />';
                        }
                        print $site_html.'</a>';
                    }
                    ?>
					
                    <div id="header-login">
                        <div id="header-login-r">
													<?php 
														print views_embed_view('branch_phone_numbers', 'block_1');
													?>
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
                                    <li><?php print l('Training', 'node/4'); ?></li>
                                    <li><?php print l('Air Monitoring', 'node/18', array('attributes' => array('style' => 'margin-left:186px;'))); ?></li>
                                    <li><?php print l('Well Control', 'node/54'); ?></li>
                                    <li><?php print l('Sales & Services', 'node/7'); ?></li>

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
                                    <li><?php print l('Fort St. John', 'node/1'); ?></li>
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
				<?php if(isset($headerbanner) && !empty($headerbanner)): ?>
				<?php print $headerbanner ?>
				<?php endif; ?>
            </div>
        </div>

        <div class="navbg2">
            <!--<div style="color: white; font-family: 'CabinCondensedBold'; text-decoration: none; font-size: 33px;">Services</div>-->
        </div>
        <div id="nav" style="background: none; position: relative; z-index: 101; margin: -44px 0px 0px 0px; color: white; font-size: 33px;">
            <div class="wrapper">
			    <?php $__title = drupal_get_title(); ?>
				<?php $__title = trim($__title) == "Partners" ? 'Our Partners' : $__title; ?>
                <?php print $__title; ?>
            </div>
        </div>
        <div id="breadcrumbs">
            <div class="wrapper">
			    <?php $service_class = ''; ?>
                <!--<?php if (isset($primary_links)) : ?>
                    <?php print theme('links', $primary_links, array('class' => 'links primary-links')) ?>
                <?php endif; ?>-->
                <?php echo l('Home', ''); ?>&nbsp;<img src="<?php echo $theme_path; ?>/images/trojan/navarrow.png" style="width:32px; height:32px;position:relative; top:11px;" />
                <?php if($node->type == 'branch'){ ?>
				      <?php $service_class = 'branches-class'; ?>
                      <?php echo l('Branch', 'node/11'); ?>&nbsp;<img src="<?php echo $theme_path; ?>/images/trojan/navarrow.png" style="width:32px; height:32px;position:relative; top:11px;" />
                <?php } else if(isset($node) && $node->nid <> 11 && $node->nid <> 10) { ?>
				      <?php $service_class = 'services-class'; ?>
                      <?php echo l('Services', 'node/10'); ?>&nbsp;<img src="<?php echo $theme_path; ?>/images/trojan/navarrow.png" style="width:32px; height:32px;position:relative; top:11px;" />
                <?php }?>
                <a href="#_" class="active"><?php print drupal_get_title(); ?></a>
            </div>
        </div>

     

        <div class="content <?php print $service_class ?> <?php echo !isset($node) ? 'wrapper top-space' : ''; ?>"><!-- wrapper -->
		<?php if(isset($nearest_location) && !empty($nearest_location)): ?>
					<div class="nearest-location">
						<div class="inner-wrapper">
							<?php print $nearest_location ?>
						</div>
					</div>
			<?php endif; ?>
			  <?php if ($show_messages && $messages):  print '<div class="message">'.$messages.'</div>';         endif; ?>
		 <?php if ($tabs): print '<div class="tabs"><ul>'.$tabs.'</ul></div>';         endif; ?>
          <div id="content-content">
						<?php print $content ?>
          </div>
        </div>

		<?php if(isset($node) && $node->nid == 9) : ?>
		  <div class="wrapper demo-wrap demo-wrap-img" style="width: 860px;">
		    <img src="<?php print $theme_path; ?>/images/trojan/testimonial-head.png" />
		  </div>
		  <div class="wrapper demo-wrap" style="width: 860px;">
		    <div id="slider1" style="border: 2px solid #CCC; padding: 12px;">
			  <?php $result = db_query("SELECT nid FROM {node} WHERE type = 'testimonial'"); ?>
			  <?php while($row = db_fetch_object($result)) : ?>
			  <?php $_node = node_load($row->nid); ?>
                <div>
				  <span><?php print $_node->body; ?><span>
				  <br />
				  <span class="title"><?php print $_node->title; ?></span>
				</div>
			  <?php endwhile; ?>
            </div>
		  </div>
		<?php endif; ?>

        <div id="footer">
            <div class="wrapper">
              <!--   <div class="footer-box">
                    <h2>General Information</h2>
                    <?php // if (isset($footer_links1)) : ?>
                        <?php// print theme('links', $footer_links1, array('class' => 'links footer-links1')) ?>
<?php //endif; ?>

                </div> -->
				<div class="footer-box">
                    <?php print $trojan_branches ?>

                </div>
                <div class="footer-box search">
                    <h2>Search Information</h2>
                    <div class="footer-search">
                        <a href="#" class="search"></a>
                        <input name="" type="text" />
                    </div>
                </div>
                <a href="#"><img src="<?php print $theme_path; ?>/images/trojan/footerlogo.png" alt="Logo" style="margin-top: 39px; margin-left: 35px;" /></a>
                <div class="footer-image" style="margin-top: -10px; float: left;">
				<?php if(isset($footerimage) && !empty($footerimage)): ?>
				<?php print $footerimage; ?>
				<?php endif; ?>
                </div>
				<div id="copy-right">Copyright 2011 Trojan Safety Services Inc.</div>
            </div>
        </div>
<?php print $closure ?>
    </body>
</html>
<script type="text/javascript">stLight.options({publisher: "ur-7a0f644d-e4fd-374-3de3-68fba69c739e", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
<script>
var options={ "publisher": "ur-7a0f644d-e4fd-374-3de3-68fba69c739e", "position": "left", "ad": { "visible": false, "openDelay": 5, "closeDelay": 0}, "chicklets": { "items": ["facebook", "twitter", "linkedin", "pinterest", "email", "sharethis"]}};
var st_hover_widget = new sharethis.widgets.hoverbuttons(options);
</script>
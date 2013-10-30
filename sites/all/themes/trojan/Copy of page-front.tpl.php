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
  </head>
  <body <?php print phptemplate_body_class($left, $right); ?>>
<div id="header">
	<div class="wrapper">
    	<div id="header-top">
			<?php
				if ($logo || $site_title) {
					print '<a href="'. check_url($front_page) .'" title="'. $site_title .'">';
					if ($logo) {
						print '<img src="'. check_url($logo) .'" alt="'. $site_title .'" id="logo" />';
					}
					print $site_html .'</a>';
				}
			?>
        	<div id="header-login">
            	<div id="header-login-r">
                	<p>Fort St John: 250-785-9557<br />
                    Grande Prairie: 780-567-3440<br />
                    Red Deer: 403-309-3025</p>
					<?php print l('Employee LogIn', 'user/login'); ?>
                </div>
            	<a href="#"><img src="<?php print $theme_path; ?>/images/trojan/weather.png" alt="Weather" /></a>
            </div>
			<div id="topnav">
				<?php if (isset($secondary_links)) : ?>
					<?php print theme('links', $secondary_links, array('class' => 'links secondary-links')) ?>
				<?php endif; ?>
			</div>
        </div>
    </div>
    <img src="<?php print $theme_path; ?>/images/trojan/header.jpg" alt="Header" width="100%" />
</div>
<div id="nav">
	<div class="wrapper">
		<?php if (isset($primary_links)) : ?>
			<?php print theme('links', $primary_links, array('class' => 'links primary-links')) ?>
		<?php endif; ?>
	</div>
</div>
<div class="content">
	<div class="inner-wrapper">
    	<h2 class="heading"><span>of Oil Field<br />Safety Experience</span>19 Years</h2>
    	<div class="left">
        	<img src="<?php print $theme_path; ?>/images/trojan/image.gif" alt="Image" class="left-img" />
        	<p>Trojan Safety has been providing safety services for the Oil and Gas, Mining, Pulp & Paper, Forestry and Construction industries of Western Canada for over 19 years.</p>
            
            <p>Trojan Safety offers industrial fire fighting, first aid & paramedic services, H2S safety services, blowout & well control, portable & stand-alone gas monitoring, mobile air quality monitoring, infrared gas detection and decontamination shower units. Our head office in Fort St John also houses a training centre for teaching ENFORM and other industry required courses and a certified sales and service department for your all of your safety equipment needs.</p>
            
            <p>head office in Fort St John also houses a training centre for teaching ENFORM and other industry required courses and a certified sales and service department for your all of your safety equipment needs.</p>
        </div>
        <div class="right">
        	<img src="<?php print $theme_path; ?>/images/trojan/emergency.png" alt="Emergency" />
            <img src="<?php print $theme_path; ?>/images/trojan/certificate.png" alt="Certificate" />
        </div>
    </div>
</div>
<div class="content">
    <div class="inner-wrapper">
        <img src="<?php print $theme_path; ?>/images/trojan/branchmap.png" alt="Branch Map" />
    </div>
</div>
<div class="content2">
	<div class="inner-wrapper">
    	<div class="left2">
        	<h2>HEALTH AND SAFETY</h2>
            <p>Trojan Safety is committed to the safety of our employees and the communities that surround our work sites. A large part of this commitment to safety was achieved by obtaining a Certificate of Recognition (COR) under the Alberta Human Resource Employment / Worksafe BC program. COR is a formal acknowledgement that Trojan Safety Services has successfully implemented, and maintains, a workplace health and safety program.</p>
            <p>COR has given us the ability to involve all personnel - from senior management to the most junior worker - in various aspects of developing and maintaining our program and therefore to share the same commitment to exceptional safety service.</p>
            <p>Our safety program instills competency in our workers, opens up communication throughout our company and improves attitudes toward safety.</p>
            <p>Our health and safety program is based on the following fundamental elements:</p>
            <ul class="liststyle">
            	<li>Management's involvement</li>
            	<li>Hazard identification and control</li>
            	<li>Work rules and procedures</li>
            	<li>Training</li>
            	<li>Communications</li>
            	<li>Incident and accident reporting and investigation</li>
            </ul>
        </div>
        <div id="contact">
        	<h2>Contact</h2>
            <p>Name:</p>
            <input name="" type="text" />
            <p>E-mail:</p>
            <input name="" type="text" />
            <p>Message:</p>
            <textarea name="" cols="" rows=""></textarea>
            <input name="Email Us" type="submit" value="Email Us" />
        </div>
    </div>
</div>
<div class="content2">
	<div class="inner-wrapper" id="president">
    	<h1>LETTER FROM THE PRESIDENT</h1>
        <div id="president-left">
        	<img src="<?php print $theme_path; ?>/images/trojan/photo.gif" alt="President" />
        </div>
        <div id="president-right">
        	<p>Dear Friends,</p>
            <p>Trojan's success is the result of its people, values, and a clear vision for the future.</p>
            <p>Dedicated professionals within Trojan are what have made all of our success a reality. Our people are passionate about providing the absolute best service possible to our clients. We arm our people with thorough training programs that ensure our staff are up to date with leading edge procedures, policies and industry recommended practices.</p>
            <p>We are committed to maintaining a safe and clean environment for everyone in the field. We accomplish this through proven procedures and policies established within Trojan that follow industry standards.</p>
            <p>Most importantly, we are grateful to our clients who have made us the safety company of choice. As a result of an open dialog, we continue to listen to both our customers, and our staff. Ensuring the needs of everyone are met on a consistent basis.</p>
            <p>As we continue to grow, we are excited about future opportunities unfolding before us. We value the business of our clients and look forward to providing professional service for many years to come.</p>
            <p>Sincerely,</p>
            <p>Al Kirschner</p>
            <p>Al Kirschner</p>
            <p>President, Trojan Safety Services</p>
        </div>
    </div>
</div>
<div id="footer">
	<div class="wrapper">
    	<div class="footer-box">
        	<h2>General Information</h2>
			<?php if (isset($footer_links1)) : ?>
				<?php print theme('links', $footer_links1, array('class' => 'links footer-links1')) ?>
			<?php endif; ?>
            <div class="footer-image">
            	<img src="<?php print $theme_path; ?>/images/trojan/worksafe.png" alt="Work Safe" />
            	<img src="<?php print $theme_path; ?>/images/trojan/worksafe.png" alt="Work Safe" />
            </div>
        </div>
        <div class="footer-box">
        	<h2>General Information</h2>
			<?php if (isset($footer_links2)) : ?>
				<?php print theme('links', $footer_links2, array('class' => 'links footer-links2')) ?>
			<?php endif; ?>
            <div class="footer-image">
            	<img src="<?php print $theme_path; ?>/images/trojan/worksafe.png" alt="Work Safe" />
            	<img src="<?php print $theme_path; ?>/images/trojan/worksafe.png" alt="Work Safe" />
            </div>
        </div>
        <div class="footer-box">
        	<h2>Search Information</h2>
            <div class="footer-search">
            	<a href="#" class="search"></a>
                <input name="" type="text" />
            </div>
        </div>
		<a href="#"><img src="<?php print $theme_path; ?>/images/trojan/footerlogo.png" alt="Logo" /></a>
    </div>
</div>
<?php print $closure ?>
  </body>
</html>

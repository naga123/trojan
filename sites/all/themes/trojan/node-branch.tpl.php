<?php
global $base_url;
$theme_path = $base_url . '/' . drupal_get_path('theme', 'trojan');
?> 
<input type="hidden" value="<?php echo $node->field_branch_street[0]['value']; ?> <?php echo $node->field_branch_city[0]['value']; ?> , <?php echo $node->field_branch_state[0]['value']; ?> , <?php echo $node->field_branch_zip[0]['value']; ?> canada" id="branch_address" />
<script type="text/javascript"
src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAaGkUDd3Nk5Pqt1ONsd2drcWD4EnliyUI&sensor=false"></script>


<div class="content2">
    <div class="inner-wrapper">
        <h2 class="heading"><?php print $node->title; ?></h2>
        <div id="slideshow">
            <?php
            	$count = 0;
            	foreach ($node->field_branch_slider_image as $img_obj)
				{
                	$class = ($count == 0) ? "active" : '';
                	$count++;
            ?>
                	<img width="612" height="345" src="<?php echo base_path() . $img_obj['filepath']; ?>" class="<?php echo $class; ?>" />
            <?php
            	}
            ?>
        </div>
        <div id="branchtop" style="margin-top: 50px;">
            <p><?php echo $node->content['body']['#value']; ?></p>
        </div>
    </div>
</div>
<div class="content3">
    <div class="inner-wrapper">
	    <style>
		    .photoframe {width: auto;}
		</style>
        <div class="left3">
            <!--$node->field_branch_contact_person[0]['value']-->
            <h3>OFFICE CONTACTS</h3>
			<ul class="officecontacts">
			<?php 
				foreach ($node->field_branch_contact_name as $i => $field)
				{
					if (isset($field['value']) && !empty($field['value']))
					{
						list($name, $position) = explode(',', $field['value']);
						$img_src = isset($node->field_branch_contact_photo[$i]['filepath']) ? $node->field_branch_contact_photo[$i]['filepath'] : 'sites/default/files/trojan/spic.gif';
			?>
						<li>
							<div class="photoframe">
								<img src="<?php print $base_url .'/'. $img_src ?>" alt="<?php print $field['value']?>" />
							</div>
							<div>
								<h4><?php print isset($node->field_branch_contact_email[$i]['email']) ? l($name, 'mailto:'. $node->field_branch_contact_email[$i]['email']) : $name ?></h4>
								<p><?php print $position ?></p>
							</div>
						</li>
			<?php 
			          } // end if (isset($field['value']) && !empty($field['value']))
			    } // end foreach ($node->field_branch_contact_name as $i => $field) ?>
			</ul>
        </div>
        <div class="right2">
            <h3>Branch Information</h3>
            <p>
            	<?php echo $node->field_branch_street[0]['value']; ?> <br />
            	<?php echo $node->field_branch_city[0]['value']; ?>, 
            	<?php echo $node->field_branch_state[0]['value']; ?><br />
            	<?php echo $node->field_branch_zip[0]['value']; ?>
            </p>
            <p class="bold">
				Phone: <?php echo $node->field_branch_phone[0]['value']; ?><br />
                <?php
                	if (!empty($node->field_branch_fax[0]['value']))
					{
                ?>
                		Fax: <?php echo $node->field_branch_fax[0]['value']; ?>
                <?php
                	}
                ?>
            </p>
            <div id="map_canvas" style="width:415px; height:415px"></div>
        </div>
        <br clear="all" />
        <div id="contactbranch">
			<?php 
				print drupal_get_form('trojan_contact_branch_form', $node); 
			?>
            <?php /*
				<h2>Contact Our Branch</h2>
             	<p>You can put whatever information you think you should have here</p>
				<div id="contactbranch-left">
              		<h4>Name</h4>
              		<input name="" type="text" />
              		<h4>Email</h4>
              		<input name="" type="text" />
              		<h4>Contact</h4>
              		<select name="">
              			<option></option>
              			<option></option>
              			<option></option>
              		</select>
              	</div>
              	<div id="contactbranch-right">
              		<h4>Subject</h4>
              		<input name="" type="text" style="width:354px;" />
              		<h4>Message</h4>
              		<textarea name="" cols="" rows=""></textarea>
              	</div>
              	<input name="" type="submit" name="Submit" style="margin-top:123px;" />
             */ 
			?>
        </div>
    </div>
</div>
<!--
	<?php //print_r($node->field_branch_contact_person); exit;       ?>
	<div id="node-<?php print $node->nid; ?>" class="node">
    <div class="slide-wrapper"> 
	    <div id="slideshow">
		<?php
			$count = 0;
			foreach ($node->field_branch_slider_image as $img_obj)
			{
			    $class = ($count == 0) ? "active" : '';
			    $count++;
	    ?>
  				<img src="<?php echo base_path() . $img_obj['filepath']; ?>" class="<?php echo $class; ?>" />
	    <?php
			}
		?>
        </div>
    </div>
    <div class="content clear-block">
        <div class="branch-info"> 
            <h2>Branch Information</h2>
			<?php echo $node->content['body']['#value']; ?> 
        </div>
        <div class="branch-location"> 
            <h2>Branch Location</h2>
			<?php echo $node->locations['0']['street']; ?>, 
			<?php echo $node->locations['0']['city']; ?>,
			<?php echo $node->locations['0']['province']; ?> 
			<?php echo $node->locations['0']['postal_code']; ?>
			<?php echo $node->locations['0']['country_name']; ?>
            <br />
            <b>Phone:</b>
			<?php echo $node->field_branch_phone[0]['value']; ?>
            <br />
            <b>Fax:</b> <?php echo $node->field_branch_fax[0]['value']; ?>    
        </div>
        <div class="branch-info"> 
            <h2>Contact List</h2>
            <ul>
			<?php
				foreach ($node->field_branch_contact_person as $contact_obj)
				{
					$contact_person = explode(',', $contact_obj['value']);
					echo '<li> <b>' . $contact_person[0] . '</b> <br /> ' . $contact_person[1] . ' </li>';
				}
			?> 
            </ul>
        </div>
        <div id="map_canvas" style="width:450px; height:450px"></div>
	</div>
</div>-->
<?php
global $base_url;
list($width, $height, $type, $attr) = getimagesize($node->field_calendar_image[0]['filepath']);
if($width > 950){
    $src = $base_url.'/imgsize.php?w=950&img='.$node->field_calendar_image[0]['filepath'];
} else {
    $src = $base_url.'/'.$node->field_calendar_image[0]['filepath'];
}
?>
<div class="content2">
    <div class="inner-wrapper" style="padding-top: 20px;">
        <img src="<?php echo $src; ?>" />
    </div>
</div>

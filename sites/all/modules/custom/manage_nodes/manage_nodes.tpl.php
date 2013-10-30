<?php 


global $base_url;


$type = arg(2);


?>


<div>


<input type="hidden" value="<?php echo $base_url;?>" id="base_url" />


<input type="hidden" value="<?php echo $type;?>" id="node_type" />


<?php if($type == "banner") { ?>


You can manage the Banner from below. The Banner that is on top, will be shown.


The other banners will remain there until you delete them.


<br />


To change the order of items, you can drag and drop items in order by holding


the arrow icon and moving it up or down. In order to delete item(s), please


select them by click in check-box(es), and then click on Delete below.


<br />


In order to Edit a Banner, click on the Edit link, and then Choose a new image


to upload and then save.


<?php } else { ?>


You can manage your items from below. To change the order of items, you can


drag and drop items in order by holding the arrow icon and moving it up or down.


In order to delete item(s), please select them by click in check-box(es), and


then click on Delete below.


<?php } ?>


</div>


<div class="add-link"><?php echo l('Add '. str_replace('_', ' ', $type), 'node/add/'. str_replace('_', '-', $type), array('query' => 'destination=manage/nodes/'.$type)); ?></div>








<div class="add-room-hdng">Operations</div>


<div class="mp-heading">


<div class="manage_photos_parent"><input type="checkbox" id="parent-checkbox"/></div>


<div class="mp_title_heading">Title</div>


<div class="mp_type" style="display:none">Type</div>


<!-- <div class="mp_author">Author</div> -->


<div class="mp_option">Edit</div>


</div>


<?php 


if($total_records > 0){ ?>





    <ul id="sortable" class="manage_photos">


        <?php


        $counter = 0;


        while($row = db_fetch_object($result)){ 


            $counter++;


            if($counter % 2 == 0){


                $class = 'odd';


            } else {


                $class = 'even';


            }


        ?>


        <li class="ui-state-default <?php echo $class; ?>">


          <div class="mp_check"><input type="checkbox" value="<?php echo $row->nid;?>" class="hiddenId" /> &nbsp;&nbsp;</div>


          <div class="title"><?php echo $row->title; ?> &nbsp;&nbsp;</div>


          <div class="type" style="display:none"><?php echo $type; ?> &nbsp;&nbsp;</div>


          <!-- <div class="author"><?php echo $row->name; ?> &nbsp;&nbsp;</div> -->


          <div class="option"><div class="edit"><?php echo l('Edit', 'node/'.$row->nid.'/edit', array('query' => 'destination=manage/nodes/'.$type)); ?></div></div>


        </li>


        <?php


        } ?>


    </ul>


<?php


} else { ?>





	<div>


    <?php


    if(user_access('access manage nodes')){


	?>


			<div id="no-result">You do not have any content in this area yet. To add contents, please <?php echo l('click here', 'node/add/'.$type, array('query' => 'destination=manage/nodes/'.$type)); ?>.</div>


	<?php 


	}?>


    </div>





<?php


} ?>





<div class="add-btn"><input type="button" value="Delete" id="delete-btn" /></div>
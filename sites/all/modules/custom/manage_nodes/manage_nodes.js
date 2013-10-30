$(function() {	
    $("#delete-btn").click(function(){
        
        var type = $('#node_type').val()
        
        if($('.hiddenId').filter(':checked').length < 1){
            alert('Please select at least 1 '+type);
            return false;
        }
        
        if(confirm('Are you sure? you want to delete selected '+type+'(s)')){
            var qs = "";
            $('.hiddenId').each(function(index){
                if($(this).is(':checked')){				 
                    qs+= '&nid[]='+$(this).val();
                }
            });
            if(qs != ""){
                $.ajax({
                    type: "POST",
                    url: $('#base_url').val()+"/manage/nodes/del",
                    data: qs,
                    success: function(msg){
                        $('.hiddenId').attr('checked', false);
                        $('#parent-checkbox').attr('checked', false);
                        location.reload(); 
                    }
                });	
            }
			
        }
								   
    });

        
    $('.parent_checkbox').click(function(){
        if($(this).is(':checked')){				 
            $('.hiddenId').attr('checked', true);
        } else {
            $('.hiddenId').attr('checked', false);	
        }
    });
	
});
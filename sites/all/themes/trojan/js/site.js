bolCloseNav = false;
objCloseNav = false;
$(document).ready(function(){







  $("#services-links").hoverIntent({
    timeout: 1,
    over: function(){	  bolCloseNav = false;	  $('.menu ul').hide();
	  $('ul', $(this)).show();
	  $('.navbg').show();
	},
    out: function(){	  objCloseNav = $('ul', $(this));      bolCloseNav = true;      setTimeout("closeNav()", 1000);
	}
  });

  $("#branches-links").hoverIntent({
    timeout: 1,
    over: function(){	  bolCloseNav = false;	  $('.menu ul').hide();
	  $('ul', $(this)).show();
	  $('.navbg').show();
	},
    out: function(){	  objCloseNav = $('ul', $(this));      bolCloseNav = true;      setTimeout("closeNav()", 1000);
	}
  });
  
  $('#myslides').cycle({
	fx: 'fade',
	speed: 3000,
	timeout: 2000
  });
  
  /*$('.officecontacts .photoframe img').each(function() {
    var img_src = Drupal.settings.basePath + "imgsize.php?img=" + $(this).attr('src') + "&w=99&h=39";
    console.log(img_src);
    $(this).attr('src', img_src);
  });*/

	$('.slider').bxSlider({
		mode: 'fade',
		captions: true,
		auto: true,
		controls: false,
		pager: true
	});

	// On load, get the user's location and show them the nearest location
		getLocation();
});//ready
function closeNav() {  
	if(bolCloseNav) {    
		objCloseNav.hide();    
		$('.navbg').hide();  
	}
}
function getLocation()
  {

  if (navigator.geolocation)
    {
    navigator.geolocation.getCurrentPosition(showPosition,showError);
    }
  else{alert("Geolocation is not supported by this browser.");}
  }
function showPosition(position)
  {
 	$('#edit-distance-latitude').val(position.coords.latitude);
			$('#edit-distance-longitude').val(position.coords.longitude);
			$('#views-exposed-form-branch-location-block-1').submit();

  }

  function showError(error)
  {
  switch(error.code) 
    {
    case error.PERMISSION_DENIED:

      alert("User denied the request for Geolocation.");
      break;
    case error.POSITION_UNAVAILABLE:
      alert("Location information is unavailable.");
      break;
    case error.TIMEOUT:
      alert("The request to get user location timed out.");
      break;
    case error.UNKNOWN_ERROR:
      alert("An unknown error occurred.");
      break;
    }
  }
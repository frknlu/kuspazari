(function($) {    "use strict";		  $("#defualt" ).on('click',function(){			  $("#color" ).attr("href", "css/colors/defualt.css");			  return false;		  });		  		  $("#red" ).on('click',function(){			  $("#color" ).attr("href", "css/colors/red.css");			  return false;		  });		  		   $("#see-green" ).on('click',function(){						  $("#color" ).attr("href", "css/colors/sea-green.css");			  return false;		  });		  		  $("#blue" ).on('click',function(){			  $("#color" ).attr("href", "css/colors/blue.css");			  return false;		  });		  		  $("#golden" ).on('click',function(){			  $("#color" ).attr("href", "css/colors/golden.css");			  return false;		  });		  		  $("#mustard-brown" ).on('click',function(){			  $("#color" ).attr("href", "css/colors/mustard-brown.css");			  return false;		  });		  		   $("#sea-green" ).on('click',function(){			  $("#color" ).attr("href", "css/colors/sea-green.css");			  return false;		  });			   /*picker buttton*/		  $(".picker_close").on('click',function(){			  	$("#choose_color").toggleClass("position");		   });		   $(".picker_close").on('click',function(){			  	$(".picker_close i").toggleClass("rotate-arrow");		   });		  })(jQuery);
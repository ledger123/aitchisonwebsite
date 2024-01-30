// JavaScript Document

	$( function() {
		
		$( "#dialog-message" ).dialog({
		  modal: true,
		  width: 320,
		  buttons: {
			Ok: function() {
			  $( this ).dialog( "close" );
			},
			
		  },
			open: function() {
				
				//$(".ui-dialog-titlebar-close").show();
				
				$('#dialog-message, .ui-widget-overlay').bind('click', function() {
					$('#dialog-message').dialog('close');
				});
				
				  $(".ui-widget-overlay").css({
					opacity: 0,
					filter: "Alpha(Opacity=0)",
					backgroundColor: "white"
				});
				
				setTimeout(function(){
					$('#dialog-message').dialog('close');
				},30000);
			},
			
		});
		
		// hiding OK button portion
		$('.ui-dialog-buttonset:contains("Ok")').hide();		
		$('.ui-dialog-buttonset:contains("Ok")').parent().hide();
		
		//hiding title bar
		$(".ui-dialog-titlebar").hide();
		
		//setting the dialog position
		$( "#dialog-message" ).dialog("option", "position", 'left');
   } );
   
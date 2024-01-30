// JavaScript Document

if (false && 'Notification' in window)
{
	function notifyUser()
	{
		setTimeout(function(){
			startNotification();
		},2000);
	}
	
	function startNotification()
	{
		//console.log('Warning! This page is protected by Https encryption.');
		
		if (Notification.permission === "granted") 
		{
			// If it's okay let's create a notification
			showNotification();
		} 
		else if (Notification.permission !== 'denied')
		{
			Notification.requestPermission(function (permission)
			{
				// If the user accepts, let's create a notification
				if (permission === "granted") {
					showNotification();
				}
			});
		}
	}
	
	function showNotification()
	{
		var title = 'Aitchison Swimmers win Silver and Bronze at Asian Biathle Triathle Championships';
		//var body = 'We have altered our teaching pedagogy and created a more vibrant, activity based learning environment with Cambridge classes. I am delighted with the positive early feedback from students and parents...';
		//var body1 = 'Aitchison College boys clinched one individual silver medal and 2 team bronze medals at the UIPM Biathle and Triathle Champions held in Burabay, Kazakhstan from 21-26 June, 2017. The...';
		var body1 = '';
		var newsLink ='https://aitchison.edu.pk/asian-biathle-triathle-championship-24062017.php';
		//alert("OK");
		var options = {
			body: body1,
			bottom: 100,
			icon: 'img/ac_logo120x120.png'
		};
        
		var notification = new Notification(title, options);
		
		notification.onclick = function(event) {
			event.preventDefault(); // prevent the browser from focusing the Notification's tab
			notification.close();
			window.open(newsLink, '_blank');
		}
		
		setTimeout(notification.close.bind(notification), 23000); 
		
		/*
		setTimeout(function(){
                //notification.close();
            },5000);*/
	}
	
	$('#notify').click(function() {
		setTimeout(function(){
			//notifyUser();
		},2000);
		  return false;
	});
	
}
else
{
	//alert('not happening');
}

//notifyUser();
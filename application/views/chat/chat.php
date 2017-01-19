<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Live Chat</title>
  
  
  
      <link rel="stylesheet" href="<?php echo base_url();?>assets/chat/css/style.css">

     <script>
            //this function can remove a array element.
            Array.remove = function(array, from, to) {
                var rest = array.slice((to || from) + 1 || array.length);
                array.length = from < 0 ? array.length + from : from;
                return array.push.apply(array, rest);
            };
       
            //this variable represents the total number of popups can be displayed according to the viewport width
            var total_popups = 0;
           
            //arrays of popups ids
            var popups = [];
       
            //this is used to close a popup
            // function close_popup(id)
            // {
            //     for(var iii = 0; iii < popups.length; iii++)
            //     {
            //         if(id == popups[iii])
            //         {
            //             Array.remove(popups, iii);
                       
            //             document.getElementById(id).style.display = "none";
                       
            //             calculate_popups();
                       
            //             return;
            //         }
            //     }  
            // }
       
            //displays the popups. Displays based on the maximum number of popups that can be displayed on the current viewport width
            function display_popups()
            {
                var right = 220;
               
                var iii = 0;
                for(iii; iii < total_popups; iii++)
                {
                    if(popups[iii] != undefined)
                    {
                        var element = document.getElementById(popups[iii]);
                        element.style.right = right + "px";
                        right = right + 320;
                        element.style.display = "block";
                    }
                }
               
                for(var jjj = iii; jjj < popups.length; jjj++)
                {
                    var element = document.getElementById(popups[jjj]);
                    element.style.display = "none";
                }
            }
           
            //creates markup for a new popup. Adds the id to popups array.
            function register_popup(id, name)
            {
               
                for(var iii = 0; iii < popups.length; iii++)
                {  
                    //already registered. Bring it to front.
                    if(id == popups[iii])
                    {
                        Array.remove(popups, iii);
                   
                        popups.unshift(id);
                       
                        calculate_popups();
                       
                       
                        return;
                    }
                }              

    //             (function() {

				// 	$('.live-chat header').on('click', function() {

				// 		$('.chat').slideToggle(300, 'swing');
				// 		$('.chat-message-counter').fadeToggle(300, 'swing');

				// 	});


				// 	$('.chat-close').on('click', function(e) {


				// 		$('.live-chat').fadeOut(300);
				// 		e.preventDefault();
				// 	});
				// 	$('.clearfix').click(function(){
				// 		$('.live-chat').fadeOut();
				// 	});
				// });
               
                // var element = '<div class="popup-box chat-popup" id="'+ id +'">';
                // element = element + '<div class="popup-head">';
                // element = element + '<div class="popup-head-left">'+ name +'</div>';
                // element = element + '<div class="popup-head-right"><a href="javascript:close_popup(\''+ id +'\');">&#10005;</a></div>';
                // element = element + '<div style="clear: both"></div></div><div class="popup-messages"></div></div>';

                var element = "<div class='live-chat'>";
                	element += "<header class='clearfix'>";		
					element += "<a href='#' class='chat-close'>x</a>";
					element += "<h4>"+name+"</h4>";
					element += "<span class='chat-message-counter'>3</span>";
					element += "</header>";
					element += "<div class='chat'>";
					element += "<div class='chat-history'>";
					element += "<div class='chat-message clearfix'>";
					element += "<img src='http://lorempixum.com/32/32/people' alt='' width='32' height='32'>";
					element += "<div class='chat-message-content clearfix'>";
					element += "<span class='chat-time'>13:35</span>";
					element += "<h5></h5>";
					element += "<p></p>";
					element += "</div>";
					element += "</div>";
					element += "<p class='chat-feedback'>Your partner is typing…</p>";
					element += "<form action='#' method='post'>";
					element += "<fieldset>";
					element += "<input type='text' placeholder='Type your message…' autofocus>";
					element += "<input type='hidden'>";
					element += "</fieldset>";
					element += "</form>";
					element += "</div> ";
					element += "</div> ";
				
				document.getElementsByTagName("body")[0].innerHTML = document.getElementsByTagName("body")[0].innerHTML + element; 
       
                popups.unshift(id);
                       
                calculate_popups();
               
            }
           
            //calculate the total number of popups suitable and then populate the toatal_popups variable.
            function calculate_popups()
            {
                var width = window.innerWidth;
                if(width < 540)
                {
                    total_popups = 0;
                }
                else
                {
                    width = width - 200;
                    //320 is width of a single popup box
                    total_popups = parseInt(width/320);
                }
               
                display_popups();
               
            }
           
            //recalculate when window is loaded and also when window is resized.
            window.addEventListener("resize", calculate_popups);
            window.addEventListener("load", calculate_popups);
           
        </script>
</head>

<body>
  <html lang="en">
<head>

	<meta charset="UTF-8">
	<title>Live Chat</title>

	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">

</head>
<body>
	        <div class="chat-sidebar">
            <div class="sidebar-name">
                <!-- Pass username and display name to register popup -->
                <a href="javascript:register_popup('narayan-prusty', 'Narayan Prusty');">
                    <img width="30" height="30" src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xap1/v/t1.0-1/p50x50/1510656_10203002897620130_521137935_n.jpg?oh=572eaca929315b26c58852d24bb73310&oe=54BEE7DA&__gda__=1418131725_c7fb34dd0f499751e94e77b1dd067f4c" />
                    <span>Narayan Prusty</span>
                </a>
            </div>
            <div class="sidebar-name">
                <a href="javascript:register_popup('qnimate', 'QNimate');">
                    <img width="30" height="30" src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xap1/v/t1.0-1/p50x50/1510656_10203002897620130_521137935_n.jpg?oh=572eaca929315b26c58852d24bb73310&oe=54BEE7DA&__gda__=1418131725_c7fb34dd0f499751e94e77b1dd067f4c" />
                    <span>QNimate</span>
                </a>
            </div>
            <div class="sidebar-name">
                <a href="javascript:register_popup('qscutter', 'QScutter');">
                    <img width="30" height="30" src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xap1/v/t1.0-1/p50x50/1510656_10203002897620130_521137935_n.jpg?oh=572eaca929315b26c58852d24bb73310&oe=54BEE7DA&__gda__=1418131725_c7fb34dd0f499751e94e77b1dd067f4c" />
                    <span>QScutter</span>
                </a>
            </div>
            <div class="sidebar-name">
                <a href="javascript:register_popup('qidea', 'QIdea');">
                    <img width="30" height="30" src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xap1/v/t1.0-1/p50x50/1510656_10203002897620130_521137935_n.jpg?oh=572eaca929315b26c58852d24bb73310&oe=54BEE7DA&__gda__=1418131725_c7fb34dd0f499751e94e77b1dd067f4c" />
                    <span>QIdea</span>
                </a>
            </div>
            <div class="sidebar-name">
                <a href="javascript:register_popup('qazy', 'QAzy');">
                    <img width="30" height="30" src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xap1/v/t1.0-1/p50x50/1510656_10203002897620130_521137935_n.jpg?oh=572eaca929315b26c58852d24bb73310&oe=54BEE7DA&__gda__=1418131725_c7fb34dd0f499751e94e77b1dd067f4c" />
                    <span>QAzy</span>
                </a>
            </div>
            <div class="sidebar-name">
                <a href="javascript:register_popup('qblock', 'QBlock');">
                    <img width="30" height="30" src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xap1/v/t1.0-1/p50x50/1510656_10203002897620130_521137935_n.jpg?oh=572eaca929315b26c58852d24bb73310&oe=54BEE7DA&__gda__=1418131725_c7fb34dd0f499751e94e77b1dd067f4c" />
                    <span>QBlock</span>
                </a>
            </div>
        </div>



	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
	
  
    <script src="<?php echo base_url();?>assets/chat/js/index.js"></script>
</body>
</html>

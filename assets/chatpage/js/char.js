var $chatHistoryList;
var $chatHistory = $('.chat-history');


	function getChatRoom() {
			var id_chat = $('.chatroom').val();
			$.ajax({
                
                'data': '',
                'method' : 'POST',
                'url' : "http://localhost:8888/pwTemuBarang/chat/loadChatroom?id_c="+id_chat,
                'success' : function(data){
                 $('.chat').html(data);
                 $('.chat').data("isenabled", "true");
                },
                'error' : function(err){
                  alert('ajax error \n' + err.responseText);
                }

              });
	}


	function sendMessage(name){
	scrolldown();
	var message = $('#message-to-send').val();
	var template = Handlebars.compile( $("#message-template").html());
        var context = { 
          messageOutput: message,
          time: getCurrentTime(),
          user: name
        };
    if(!$.trim(message))
		{
        $('#message-to-send').attr("value", "");
		}    
	else{
		// var postData = {"message":message, "timestamp":getCurrentTime(), "user":name}
		$.ajax({
                
                'data': '',
                'method' : 'POST',
                'url' : "http://localhost:8888/pwTemuBarang/chat/send?msg="+message+"&time="+getCurrentTime+"&user="+name,
                'success' : function(data){
                 $chatHistoryList.append(template(context));
                },
                'error' : function(err){
                  alert('ajax error \n' + err.responseText);
                }

              });
		scrolldown();
	    $('#message-to-send').attr("value", "");
	}
}

function getCurrentTime() {
	return new Date().toLocaleTimeString().
              replace(/([\d]+:[\d]{2})(:[\d]{2})(.*)/, "$1$3");
}

function scrolldown(){
	$chatHistory.scrollTop($chatHistory[0].scrollHeight);
}

$(document).ready(function () {
$chatHistoryList = $chatHistory.find('ul');
getChatRoom();
return false;
});
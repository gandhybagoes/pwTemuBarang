<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Chat Widget</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="<?php echo base_url('assets/chatpage/') ?>css/style.css">

  
</head>

<body>
<? $profile = $this->session->userdata('profile');?>
    <div class="container clearfix">
    <div class="people-list" id="people-list">
      <div class="search">
        <input type="text" placeholder="search" />
        <i class="fa fa-search"></i>
      </div>
      <ul class="list">
      <? 
      foreach($chatlist as $item) {?>
      <a href="#" class="chatroom" value="<?= $item['id_chatlist']?>">
        <li class="clearfix">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_01.jpg" alt="avatar" />
          <div class="about">
            <div class="name"><?= $item['nama_user']; ?></div>
            <div class="status">
              <i class="fa fa-circle online"></i> online
            </div>
          </div>
        </li>
        </a>
        <? } ?>
      </ul>
    </div>
    
<?= $chatroom; ?>
    
  </div> <!-- end container -->

<script id="message-template" type="text/x-handlebars-template">
  <li class="clearfix">
    <div class="message-data align-right">
      <span class="message-data-time" >{{time}}, Today</span> &nbsp; &nbsp;
      <span class="message-data-name" >{{user}}</span> <i class="fa fa-circle me"></i>
    </div>
    <div class="message other-message float-right">
      {{messageOutput}}
    </div>
  </li>
</script>

<script id="message-response-template" type="text/x-handlebars-template">
  <li>
    <div class="message-data">
      <span class="message-data-name"><i class="fa fa-circle online"></i> Vincent</span>
      <span class="message-data-time">{{time}}, Today</span>
    </div>
    <div class="message my-message">
      {{response}}
    </div>
  </li>
</script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/handlebars.js/3.0.0/handlebars.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/list.js/1.1.1/list.min.js'></script>
    <script type="text/javascript">
     var a;
     $('.chatroom').click(function(){
      $.getScript(" <?php echo base_url('assets/chatpage/js/char.js') ?>");
      return false;
     });

      $('#sendMessage').click(function() {
          sendMessage('<?= $profile['0']['nama_user']; ?>');
      return false;
      });

      $('#message-to-send').keyup(function(event) {
       if(event.key == 'Enter'){
          sendMessage('<?= $profile['0']['nama_user']; ?>');
        }
      return false;
      });
     

    </script>
    
    
    

</body>
</html>

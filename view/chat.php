<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/chat-style.css">
</head>
<body>


<script type="text/javascript">
var i = 0;

function oc_chatbox() {

  if (i == 0) {
  document.getElementById('contacts').style.visibility = 'hidden';
  document.getElementById('messenger').style.height = '20px';
  i = 1;
  }

  else {
  document.getElementById('contacts').style.visibility = 'visible';
  document.getElementById('messenger').style.height = '300px';
  i = 0;
  }
}

fvar last = null;
function new_chat(userid) {
  if(userid==null)
    userid = "user666";
  var new_right;
  var margin = 10;
  var messenger = window.last==null?document.getElementById('messenger'):window.last;  //Take the messenger or the last added chat
  new_right = document.body.clientWidth-messenger.offsetLeft;      //Compute the window size
  console.log(new_right);                                //Log the number
  new_right += margin;                                   //keep spaces between divs

  var newChat = document.createElement("div");           //DOM create DIV
  newChat.id = userid;
  newChat.className = "chatbox shadow";
  newChat.style.right = new_right+"px";
  newChat.innerHTML = '<p>'+userid+'</p><p><textarea></textarea></p>';
  window.last = newChat;  //Remember whichever is last
  document.body.appendChild(newChat);
} 
</script>
<div id="chatspace"></div>
<div id="messenger">
 <p><a href="#" onclick="oc_chatbox();">Collapse</a></p>
 <div id="contacts">
 <ul>
  <li><a href="#" onclick="new_chat('contact_a');">contact A</a></li>
 </ul>
 </div>
</div>
</body>
</html>
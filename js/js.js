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

function new_chat(userid) {
  var new_right;
  new_right = document.getElementById('messenger').style.right;
  //alert('old value: '+ new_right);
  new_right += 20;
  //alert('New value of right: '+ new_right);
  document.getElementById('chatspace').innerHTML = '<div id="'+userid+'" class="chatbox" style="right: '+new_right+'px;"></div>';
  //document.write('<div id="'+userid+'" class="chatbox" style="right: '+new_right+'px;"></div>');
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
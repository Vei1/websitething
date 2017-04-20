  <div id="img-bg">
  <div class="serversect" id="server">
  <div id="line"></div>

    <div class="span12">
      <h3>Server Info</h3>

      <div class="panel panel-default">
  <div class="panel-heading">
<?php
if (!$socket = @fsockopen("92.234.249.238", 27015, $errno, $errstr, 30))
{
  echo "Server is Offline!";
}
else 
{
  echo "Server is Online!";
  

  fclose($socket);
}

?></div>
          </div>
        <div class="panel  panel-info">
      <div class="panel-heading">Online: This Feature Has Not Yet Been Implemented</div>
    </div>
    <a href="steam://connect/92.234.249.238:27015" class="btn btn-info" role="button">Click To Join GMod Server</a>
    <a href="ts3server://92.234.249.238?port=9987" class="btn btn-info" role="button">Click To Join TeamSpeak Server</a>
  </div>
  </div>
  <div class="ToTop">
    <a href="#top" >Back To Top <i class="ion-chevron-up"></i></a>
  </div>
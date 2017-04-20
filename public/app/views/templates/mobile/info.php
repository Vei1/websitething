 <div id="top"></div>
    <div class="jumbotron">
      <div class="container">
        <h1>Server Info</h1>
        
   
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
      <div class="panel-heading">Online: This Feature Is Not Yet Been Implemented</div>
    </div>
        
      </div>
    </div>
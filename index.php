<!DOCTYPE html>

<html>
  <head>
    <title>VE6YMM APRS iGate Digipeater</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8"/>
    <meta name="description" content="VE6YMM APRS iGate Digipeater">
    <meta name="author" content="ve6ji">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/ve6mjl.css">
  </head>
  <body>
  <div class="header">
    <p class="center">VE6YMM Fort McMurray Amateur Radio Club</p>
    <p class="center">Stony Mountain APRS Digipeater & iGate</p>
    <p class="center"><a href="https://time.is/UTC" id="time_is_link" rel="nofollow" style="font-size:15px;color:408c99">Time in UTC:</a>
  <span id="UTC_za00" style="font-size:15px;"></span>
  <script src="//widget.time.is/t.js"></script>
  <script>
  time_is_widget.init({UTC_za00:{}});
  </script>
  </p>
  </div>
  <div class="menu">
    <p><button id="aprxrf" class="btn">APRX RF Log</button></p>
    <p><button id="aprxint" class="btn">APRX Interface Log</button></p>
    <p><button id="temp" class="btn">CPU Temp</button></p>
    <p><button id="drive" class="btn">Drive Info</button></p>
    <p><button id="mem" class="btn">Memory Info</button></p>
   </div>
  <div class="main">
  </div>
  </body>
<script>
  $(document).ready(function(){
    $("#aprxrf").click(function(){
      $.ajax({
        url : "scripts/aprx_rf.php",
        dataType: "text",
        success : function (data) {
            var lines = data.split('\n'),
                htmlLines = '<p>' + lines.join('</p><p>') + '</p>';
            $(".main").html(htmlLines);
        }
      });
    });
    $("#aprxint").click(function(){
      $.ajax({
        url : "scripts/aprx_log.php",
        dataType: "text",
        success : function (data) {
            var lines = data.split('\n'),
                htmlLines = '<p>' + lines.join('</p><p>') + '</p>';
            $(".main").html(htmlLines);
        }
      });
    });
    $("#temp").click(function(){
      $.ajax({
        url : "status/cpu_temp_avg.txt",
        dataType: "text",
        success : function (data) {
            var lines = data.split('\n'),
                htmlLines = '<p>' + lines.join('</p><p>') + '</p>';
            $(".main").html(htmlLines);
            
        }
      });
    });
    $("#drive").click(function(){
      $.ajax({
        url : "scripts/drives.php",
        dataType: "text",
        success : function (data) {
            var lines = data.split('\n'),
                htmlLines = '<p>' + lines.join('</p><p>') + '</p>';
            $(".main").html(htmlLines);
            
        }
      });
    });
    $("#mem").click(function(){
      $.ajax({
        url : "scripts/mem.php",
        dataType: "text",
        success : function (data) {
            var lines = data.split('\n'),
                htmlLines = '<p>' + lines.join('</p><p>') + '</p>';
            $(".main").html(htmlLines);
            
        }
      });
    });
    
  }); 

</script>
</html> 

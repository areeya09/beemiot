<h1> <center> Areeya Chanakan 62111760 </h1><br> <center>
  <head>
<style>
body {
  
  background-color: LightBlue;
}
</style>
</head>
<body>
</body>
</html>

<iframe src= "https://thingspeak.com/channels/1458434/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15" width="450" height="260" > </iframe>

         <p style="font-size:30px;font:bold;"> 
     <?php
        $api_url = 'https://api.thingspeak.com/channels/1458434/fields/1.json?results=1';
        $json_data = file_get_contents($api_url);
        $response_data = json_decode($json_data);
        $user_data = $response_data->feeds;
        $user_data = array_slice($user_data, 0);
        foreach ($user_data as $user) {
            echo "Humidity: ".$user->field1;
            echo " %";
         }
        ?>
     </p>
<br>
<iframe src= "https://thingspeak.com/channels/1458434/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15" width="450" height="260"> </iframe>
      
           <p style="font-size:30px;font:bold;"> 
     <?php
        $api_url = 'https://api.thingspeak.com/channels/1458434/fields/2.json?results=1';
        $json_data = file_get_contents($api_url);
        $response_data = json_decode($json_data);
        $user_data = $response_data->feeds;
        $user_data = array_slice($user_data, 0);
        foreach ($user_data as $user) {
             echo "Temperature: ".$user->field2;
             echo " C"; 
         }
        ?>
     </p>
  
<br>
<iframe src= "https://thingspeak.com/channels/1458434/maps/channel_show" width="450" height="260"> </iframe>
<body onload="JavaScript:timedRefresh(15000);">
</body>
</html>

  

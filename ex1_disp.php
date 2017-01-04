<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <div id="result">dghdfghdgh</div>
        
    </body>
                
        <script>
            
            if (typeof (EventSource) !== "undefined") {
                var source = new EventSource("updateDashboard.php");
                source.onmessage = function (event) {
                    
                    //document.getElementById("result").innerHTML += event.data + "<br>";
                   
                    
                    
                    jsObj = event.data;
                    //obj = jQuery.parseJSON( jsObj );
                    obj = JSON.parse(jsObj);
                    console.log(obj);
                    
                    
                };
            } 
            else 
            {
                document.getElementById("result").innerHTML = "Sorry, your browser does not support server-sent events...";
            }
            
        </script>
</html>

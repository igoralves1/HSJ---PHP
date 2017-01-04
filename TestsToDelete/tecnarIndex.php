<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <div id="result"></div>
        
    </body>
                
        <script>
            
            if (typeof (EventSource) !== "undefined") {
                var source = new EventSource("updateDashboard.php");
                source.onmessage = function (event) {
                    document.getElementById("result").innerHTML += event.data + "<br>";
                };
            } else 
            {
                document.getElementById("result").innerHTML = "Sorry, your browser does not support server-sent events...";
            }
            
        </script>
</html>

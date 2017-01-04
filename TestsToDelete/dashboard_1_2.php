<!DOCTYPE html>
<html>  
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="refresh" content="60">
        <title></title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <style>

            .square {
                float:left;
                position: relative;
                width: 100%;

                padding: 5% 5% 5% 5%; /* = width for a 1:1 aspect ratio */                

                overflow:hidden;
                border-style: groove;
                height:200px;
            }

            .content {
                position:absolute;
                height:80%; /* = 100% - 2*10% padding */
                width:90%; /* = 100% - 2*5% padding */
                padding: 5% 5%;
                border-style: groove;

            }

            .margin1{
                margin-top: 1.66%;

            }

        </style>
    </head>
    <body>
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-4">                    
                    <div class="square">
                        Room 1
                        <div>Time:             <span id="r1c3"></span></div>
                        <div>characteristic-1: 
                            <span id="r1c1" class=""></span>
                        </div>
                        <div>
                            characteristic-2: 
                            <svg width="10" height="10">
                            <rect id="r1Svg1" width="10" height="10" fill="" />
                            </svg>
                            <span id="r1c2"></span>
                        </div>                        
                    </div> 
                </div> 

                <div class="col-md-4">                     
                    <div class="square"> 
                        Room 2 
                        <div>Time:             <span id="r2c3"></span></div>
                        <div>
                            characteristic-1: 
                            <svg width="10" height="10">
                            <circle id="r2Svg1" cx="5" cy="5" r="5" fill="#ff0000" />
                            </svg>
                            <span id="r2c1"></span>
                       	</div>
                        <div>
                            characteristic-2: 
                            <svg width="10" height="10">
                            <circle id="r2Svg2" cx="5" cy="5" r="5" fill="" />
                            </svg>
                            <span id="r2c2"></span>
                        </div>
                    </div> 
                </div>                

                <div class="col-md-4">                     
                    <div class="square"> 
                        Room 3 
                        <div>Time:             <span id="r3c3"></span></div>
                        <div>
                            characteristic-1: 
                            <svg width="10" height="10">
                            <rect id="r3Svg1" width="10" height="10" fill="#ff0080" />
                            </svg>
                            <span id="r3c1"></span></div>
                        <div>characteristic-2: <span id="r3c2"></span>
                        </div>
                    </div>
                </div>               
            </div>

        </div>


        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <script>
            $(document).ready(function () {

                var jsObj;
                var arr;
                if (typeof (EventSource) !== "undefined") {
                    var source = new EventSource("updateDashboard_1.php");

                    source.onmessage = function (event) {

                        jsObj = event.data;
                        obj = jQuery.parseJSON(jsObj);
                        console.log(obj);

                        //Room-1
                        $("#r1c1").html(obj.room1.carc1);
                        $("#r1c1").removeClass();
                        $("#r1c1").addClass(obj.room1.r1c1sp1);
                        $("#r1c2").html(obj.room1.carc2);
                        $("#r1c3").html(obj.room1.time);
                        $('#r1Svg1').attr('fill', obj.room1.r1Svg1);

                        //Room-2
                        $("#r2c1").html(obj.room2.carc1);
                        $("#r2c2").html(obj.room2.carc2);
                        $("#r2c3").html(obj.room2.time);
                        $('#r2Svg2').attr('fill', obj.room2.r2Svg2);

                        //Room-3
                        $("#r3c1").html(obj.room3.carc1);
                        $("#r3c2").html(obj.room3.carc2);
                        $("#r3c3").html(obj.room3.time);

                    };
                } else {
                    //document.getElementById("result").innerHTML = "Sorry, your browser does not support server-sent events...";
                }
            });//End of $(document).ready(function
        </script>
    </body>
</html>

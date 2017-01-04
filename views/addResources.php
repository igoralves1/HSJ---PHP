<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="../assets/js/jquery-3.1.1.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="../assets/js/bootstrap.min.js"></script>
    </head>
    <body>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <form id="formTest" class="form-signin">
                        <h2 class="form-signin-heading">Gerer Ressources Humaines</h2>
                        <br>
                        <br> 
                        <div class="form-group">
                            <label for="sel_professionalType">Sélectionniez une Profession:</label>
                            <select class="form-control" id="sel_professionalType" name="profession">
                                <option value="0" selected="" disabled>Profession</option>                                
                                <option value="1">AIC</option>                                
                                <option value="2">Agent administratif</option>                                
                                <option value="3">Agent salubrité</option>                                
                                <option value="4">Chef d'équipe</option>                                
                                <option value="5">Chef d'unité</option>                                
                                <option value="6">Fellows</option>                                
                                <option value="7">Infirmiers</option>
                                <option value="8">Inhalothérapeutes</option>                                
                                <option value="9">Patrons</option>
                                <option value="10">Résidents</option>                                
                                <option value="11">PB</option>                                
                                <option value="12">Pharmaciens</option>                        
                            </select>
                        </div>

                        <input type="text" id="first_name" class="form-control" placeholder="Prénom" name="first_name" required>
                        <br>
                        <input type="text" id="last_name" class="form-control" placeholder="Nom" name="last_name" required>
                        <br>
                        <div id="div_sel_residentType" class="form-group"></div>
                        <br>  
                        <div id="div_message"class="alert alert-success" style="display: none;">

                        </div>
                        <br>  
                        <div class="row">
                            <div class="col-lg-6"><button id="btn_send" class="btn btn-lg btn-primary btn-block" type="submit" disabled="true">Envoyer</button></div>
                            <div class="col-lg-6"><button id="btn_goHome" class="btn btn-lg btn-primary btn-block" type="submit" >Home</button></div>
                        </div>


                    </form>
                </div>
                <div class="col-lg-4"></div>
            </div>
        </div>
        <script>
            $(function () {
                
                $.fn.serializeObject = function () {
                    var o = {};
                    var a = this.serializeArray();
                    $.each(a, function () {
                        if (o[this.name] !== undefined) {
                            if (!o[this.name].push) {
                                o[this.name] = [o[this.name]];
                            }
                            o[this.name].push(this.value || '');
                        } else {
                            o[this.name] = this.value || '';
                        }
                    });
                    return o;
                };

                function testBtn () {
                    //console.log($("#sel_residentType").length);
                    //alert($("#sel_residentType"));
                   var objectEvent1=$("#first_name");                   
                   var input1 = $.trim(objectEvent1.val());
                   var objectEvent2=$("#last_name");                   
                   var input2 = $.trim(objectEvent2.val());
                   var selecProf = $("#sel_professionalType").val(); 

                   var ResTypObj = $("#sel_residentType");
                   var RestType = true;
                   if(ResTypObj.length>0 && ResTypObj.val()==0){
                       RestType=false;
                   }

                   if(input1!=="" && input2!==""&& selecProf>0 && RestType){                        
                       $('#btn_send').prop('disabled', false);
                   }
                   else{
                       $('#btn_send').prop('disabled', true);
                   }
                }

                $("#div_sel_residentType").hide();

                $(document).on("change", "select", function () {
                    testBtn ();
                    if($(this).attr("id")=="sel_professionalType"){
                        var profId = $(this).val();
                        if (profId == 10) {
                                $('#btn_send').prop('disabled', true);
                                $("#div_sel_residentType").show("slow");

                                var selectElm = "<div id=\"div_selRes\"><label for=\"sel_residentType\">Sélectionniez le Type du Résident:</label><select name=\"residentType\" class=\"form-control\" id=\"sel_residentType\"><option value=\"0\" selected=\"\" disabled>Type Résident</option>";
                                var options = "";
                                $.get("../api/v1/get/menus/typeresident.json.php", function (dataset, status) {
                                    for (var index in dataset) {
                                        console.log(dataset);
                                        options = options + "<option value=\"" + dataset[index].id + "\">" + dataset[index].description + "</option>";
                                    }
                                }).done(function () {
                                    selectElm = selectElm + options + "</select></div>";
                                    $("#div_sel_residentType").html(selectElm);
                                });
                        } 
                        else {
                            $("#div_sel_residentType").hide("slow");
                            $("#div_selRes").remove();
                        }
                    }
                });

                $("#btn_send").on("click", function (e) {
                    e.preventDefault();
                    var str = JSON.stringify($('form').serializeObject());
                    var dt = {dt: str};

                    $.post("http://hsj_dev/api/v1/POST/manageResources.php", dt).done(function (data) {
                        //console.log(data);
                        if (data.id > 0) {
                            $('#first_name').val('');
                            $('#last_name').val('');
                            $('#sel_professionalType').val(0);
                            var p = "<strong>Success!</strong>Check your data <a href='" + data.URL + "' target='_blank'>HERE</a>.";
                            $('#div_message').html(p);
                            $('#div_message').show("fast");
                            setTimeout(function () {
                                $('#div_message').hide("slow");
                                $("#div_sel_residentType").hide("slow");
                                $("#div_selRes").remove();
                            }, 3000); //Wait 2,5 seconds
                        }
                    });
                    //return null;
                });

                $("input").on("keyup", function () {
                    testBtn();
                });

                $("#btn_goHome").on("click", function (e) {
                    e.preventDefault();
                    window.location = "http://hsj_dev/tvdlemh-frontend/public";
                });
                
            });//End of $(function(){
        </script> 
    </body>
</html>

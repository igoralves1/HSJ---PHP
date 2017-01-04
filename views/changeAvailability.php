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

                       
                        <div id="div_sel_ProfAvailiab" class="form-group"></div>
                        <br>  
                        <div id="div_TypeMed" class="form-group"></div>
                        <br> 
                        <div id="div_message"class="alert alert-success" style="display: none;"></div>
                        <br>  
                        <div class="row">
                            <div class="col-lg-6"><button id="btn_send" class="btn btn-lg btn-primary btn-block" type="submit" disabled="true">Envoyer</button></div>
                            <div class="col-lg-6"><button id="btn_goHome" class="btn btn-lg btn-primary btn-block" type="submit" >Home</button></div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4"><input id="tags" size="50"></div>
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

                $(document).on("change", 'select', function () {                 
                    
                    if($(this).attr("id")=="sel_professionalType"){
                        $("#div_tpMed").remove();
                                var profId = $(this).val();
                       
                                var tblProf=null;
                                var attrMult=null;
                                if(profId=="1"){
                                    tblProf="assistant";
                                }
                                else if(profId=="2"){
                                    tblProf="agentadmin";
                                }
                                else if(profId=="3"){
                                    tblProf="agentsalubrite";
                                    attrMult="multiple";
                                }
                                else if(profId=="4"){
                                    tblProf="chefeequipe";
                                    attrMult="multiple";
                                }
                                else if(profId=="5"){
                                    tblProf="chefeunite";
                                }
                                else if(profId=="6"){
                                    tblProf="fellow";
                                }
                                else if(profId=="7"){
                                    tblProf="nursing";
                                    attrMult="multiple";
                                }
                                else if(profId=="8"){
                                    tblProf="inhalotherapeute";
                                    attrMult="multiple";
                                }
                                else if(profId=="9"){
                                    tblProf="patron";
                                }
                                else if(profId=="10"){
                                    tblProf="resident";
                                    attrMult="multiple";
                                }
                                else if(profId=="11"){
                                    tblProf="prepose";
                                    attrMult="multiple";
                                }
                                else if(profId=="12"){
                                    tblProf="pharmacist";
                                    attrMult="multiple";
                                }
                       
                       
                                $('#btn_send').prop('disabled', true);
                                $("#div_sel_ProfAvailiab").show("slow");

                                var selectElm = "<div id=\"div_selProfDisponibite\"><label for=\"sel_residentType\">Sélectionniez le Professionnel disponible:</label><select " + attrMult +" name=\"profTypeDispon\" class=\"form-control\" id=\"sel_profDispte\"><option value=\"0\" selected=\"\" disabled>Professionnel</option>";
                                var options = "";
                               
                                var URL ="http://hsj_dev/api/v1/get/get_list.php?tbl="+tblProf+".json&fields=id,first_name,last_name&complement=WHERE%20status=%271%27";
                                $.get(URL, function (dataset, status) {
                                    //console.log(dataset);
                                    for (var index in dataset) {
                                        options = options + "<option value=\"" + dataset[index].id + "\">" + dataset[index].first_name +" " + dataset[index].last_name + "</option>";
                                    }
                                }).done(function () {                                    
                                    selectElm = selectElm + options + "</select></div>";
                                    $("#div_sel_ProfAvailiab").html(selectElm);
                                });
                                
                                
                                if(profId==6 || profId==9){
                                    
                                   
                                   var selectElm2 = "<div id=\"div_tpMed\"><label for=\"sel_typMed\">Sélectionniez le Professionnel disponible:</label><select name=\"profTypeMed\" class=\"form-control\" id=\"sel_typMed\"><option value=\"0\" selected=\"\" disabled>Équipe médicale</option>"; 
                                   var options2="";
                                   var URL ="http://hsj_dev/api/v1/get/get_list.php?tbl=type_med.json&fields=id,type";
                                   $.get(URL, function (dataset2, status) {
                                        console.log(dataset2);
                                        for (var index2 in dataset2) {
                                            options2 = options2 + "<option value=\"" + dataset2[index2].id + "\">" + dataset2[index2].type + "</option>";
                                        }
                                    }).done(function () {
                                        selectElm2 = selectElm2 + options2 + "</select></div>";
                                        $("#div_TypeMed").html(selectElm2);
                                    }); 
                                }
                    }//End of if($(this).attr("id")=="sel_professionalType"){
                    
                    else if($(this).attr("id")=="sel_profDispte"){
                        if(($("#sel_professionalType").val()==6 || $("#sel_professionalType").val()==9)){
                            console.log(($("#sel_typMed").val()==null));
                            if(($("#sel_typMed").val()==null)){
                                $('#btn_send').prop('disabled', true);
                            }
                            else{
                                $('#btn_send').prop('disabled', false);
                            }
                        }
                        else{
                            $('#btn_send').prop('disabled', false);
                        }
                    }
                    
                    else if($(this).attr("id")=="sel_typMed"){
                        if(($("#sel_profDispte").val()==null)){
                            $('#btn_send').prop('disabled', true);
                        }
                        else{
                            $('#btn_send').prop('disabled', false);
                        }
                    }
                    
                });//End of $(document).on("change", 'select', function () {


                $("#btn_send").on("click", function (e) {
                    e.preventDefault();
                    var str = JSON.stringify($('form').serializeObject());
                    var dt = {dt: str};

                    $.post("http://hsj_dev/api/v1/POST/manageProfesDisponibility.php", dt).done(function (data) {
                        
                        if (data.id > 0) {
                            $('#btn_send').prop('disabled', true);
                            $('#sel_professionalType').val(0);
                            var p = "<strong>Success!</strong>Check your data <a href='" + data.URL + "' target='_blank'>HERE</a>.";
                            $('#div_message').html(p);
                            $('#div_message').show("fast");
                            setTimeout(function () {
                                $('#div_message').hide("slow");
                                $("#div_sel_residentType").hide("slow");
                                $('#sel_professionalType').val(0);
                                $("#div_selProfDisponibite").remove();
                                $("#div_tpMed").remove();
                            }, 3000); //Wait 2,5 seconds
                        }
                    });
                    //return null;
                });               

                $("#btn_goHome").on("click", function (e) {
                    e.preventDefault();
                    window.location = "http://hsj_dev/tvdlemh-frontend/public";
                });
                
            });//End of $(function(){
        </script> 
    </body>
</html>

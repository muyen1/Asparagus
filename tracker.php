<?php
	include 'header.php';
?>
<?php 
/* Main page with two forms: Add New and Tracked Items */
require 'includes/dbh.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Form</title>
  <?php include 'css/css.html'; ?>

  <!-- becauase no header -->
  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
</head>


<body>
    
    <script>
            $(document).ready(function(){
                  $.ajax({
                    url: "foodData.inc.php",
                    dataType: 'json',
                    type: "GET",
                  success: function(data){

                    
                            for(let i =0; i < data['foods'].length; i++){

                              var foodname = data['foods'][i].foodname;
                              var food_id = data['foods'][i].foodID;
                            
                              var option = document.createElement("option");
                              option.text = food_id;
                              option.setAttribute("value", foodname );


                                document.getElementById("foodlist").appendChild(option);
                            }
                    

                    },
                error: function(jqXHR, textStatus, errorThrown) {
                            $("#p1").text(textStatus + " " + errorThrown
                                + jqXHR.responseText);
                        }

  	      	});

                  $.ajax({
                    url: "tracker_id.inc.php",
                    dataType:"json",
                    type:"GET",
                    success: function(data){

                      for(let i =0; i < data['tracked'].length; i++){

                        //if userID session is not set, dont display.

                        // var foodId = data['tracked'][i].foodID;
                        // for(let j=0; i<data['food'].length; j++){
                        //   if(foodId == data['food'][j].foodID){
                        //     var food  = data['food'][j].foodname;
                        //     break;
                        //   }
                        // }


                        //var entry = document.createElement("div");
                        //entry.style.border = "1px dotted black";

                        var p = document.createElement("p");
                        var text= document.createTextNode(data['tracked'][i].foodname +"/" +  data['tracked'][i].unit + ": total bought = " + data['tracked'][i].totalbought
                                                                +", total wasted = " + data['tracked'][i].totalwasted
                                                                +", consumption = " + data['tracked'][i].consumption
                                                                +", roc = " + data['tracked'][i].roc
                                                                +", safeamount = " + data['tracked'][i].safeamount
                                                                +", time1 = " + data['tracked'][i].time1
                                                                +", time2 = " + data['tracked'][i].time2);
                        p.appendChild(text);


                        document.getElementById("trackedList").appendChild(p);
                      }

                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                          $("#p1").text(textStatus + " " + errorThrown
                              + jqXHR.responseText);
                    }


                  });
              //} 
            });
          </script>
    

    
  <div class="form">
      
      <ul class="tab-group">
        <li class="tab"><a href="#tracked">Tracked Item</a></li>
        <li class="tab active"><a href="#add">Add New</a></li>
      </ul>
      
      <div class="tab-content">

         <div id="add">   
          <h1>Start Tracking Now!</h1>
    <form action="newFoodToTracked.inc.php" method="POST">
		<input list= "foodlist" name="searchedFood" placeholder="search for foods  in the database" id="searchedFood"/>

			  <datalist id="foodlist"></datalist>
			  
          </br>
          <form action="tracker.php" method="post" autocomplete="off">
        
          
          <div class="field-wrap">
            <label>
              Quantity<span class="req"></span>
            </label>
            <input type="text" required autocomplete="on" name="quant"/>
          </div>
          
          <button class="button button-block" name="add" />Track!</button>
          
    </form>

        </div>
          
        <div id="tracked">   
          <h1>Tracked Items</h1>
          
          <form action="includes/addNewFood.inc.php" method="post" autocomplete="off">
          <button type="submit"class="button button-block" name="add"> Add</button>
          <div class="field-wrap">
            
            <label>
              Food Name<span class="req"></span>
            </label>
            <input type="text" autocomplete="on" name="foodname" required/>
          </div>
          
          <div class="field-wrap">
            <label>
              Unit<span class="req"></span>
            </label>
            <input type="text" name="unit" required/>
    
            </br>
            </br>
            </br>

            
          </div>



          <button id="show" type="submit" class="button button-block" name="tracked" />check items</button>

          <div id="trackedList">
            <p>  Currently Tracking </p>


          </div>
          <button type="submit" class="button button-block" name="tracked" />Stop</button>
          
          </form>



        </div>  
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/tracker.js"></script>

</body>
</html>

<?php
	include 'footer.php';
?>
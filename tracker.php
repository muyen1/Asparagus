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
    

    
  <div class="form">
      
      <ul class="tab-group">
        <li class="tab"><a href="#tracked">Tracked Item</a></li>
        <li class="tab active"><a href="#add">Add New</a></li>
      </ul>
      
      <div class="tab-content">

         <div id="add">   
          <h1>Start Tracking Now!</h1>
		<input list= "foodlist" name="searchedFood" placeholder="search for foods  in the database" id="searchedFood"/>

			  <datalist id="foodlist">
        
        </datalist>

			<button type="submit" >start tracking</button>
		</form>
          </br>
          <form action="tracker.php" method="post" autocomplete="off">
        
            <div class="field-wrap">
            <label>
              Food Name<span class="req"></span>
            </label>
            <input type="text" required autocomplete="on" name="foodname"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Quantity<span class="req"></span>
            </label>
            <input type="text" required autocomplete="on" name="unit"/>
          </div>
          
          <button class="button button-block" name="add" />Track!</button>
          
          </form>

        </div>
          
        <div id="tracked">   
          <h1>Tracked Items</h1>
          
          <form action="tracker.php" method="post" autocomplete="off">
          <button type="submit"class="button button-block" name=""> Add</button>
          <div class="field-wrap">
            
            <label>
              Food Name<span class="req"></span>
            </label>
            <input type="text" autocomplete="on" name="foodname"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Quantity of Waste<span class="req"></span>
            </label>
            <input type="text" name="search" />
    
            </br>
            </br>
            </br>

            
          </div>
          <div>
          

          </div>

          <script>
            $(document).ready(function(){
                $.ajax({
			        url: "foodData.php",
    			    dataType: 'json',
				    type: "GET",
    			    success: function(data){

                        for(let i =0; i < data['foods'].length; i++){
                        
                          var option = document.createElement("option");
                          option.text = data['foods'][i].foodname;
              //nextOption.setAttribute("value", data['foods'][i].foodname );


                            document.getElementById("foodlist").appendChild(option);
                        }

		            },
				    error: function(jqXHR, textStatus, errorThrown) {
                        $("#p1").text(textStatus + " " + errorThrown
                            + jqXHR.responseText);
                    }

  		});
              
    //           $("#show").click(function(){
    //             e.preventDefault();
    //               $.ajax({
    //                 url: "foodDatabaseJson.php",
    //                 dataType: "json",
    //                 //data:
    //                 type: "GET",
    //                 success: function(data){

    //                   for(var index =0; index < data.item.length; index++){
    //                     var item = document.createElementById("div");
    //                     item.style.position("center");
    //                     item.style.backgroundColor("green");
				// 		item.style.border = "width style color|initial|inherit"  
    //                   //  var itemName = document.createTextNode(data.item.foodname.[index]);
    //                   var itemName = document.createTextNode("test");
    //                     item.appendChild(itemName);
    //                     //append/prepa
    //                     $("#trackedList").appendChild(item);
    //                   }

    //                 },
    //                 error: function(jqXHR, textStatus, errorThrown) {
    //                   $("#p1").text(textStatus + " " + errorThrown + jqXHR.responseText);
    //                 }
    //               });
    //           });
            });
          </script>


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
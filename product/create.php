<?php 
include "../conf/config.php";

$result = mysqli_query($conn,"SELECT * FROM brand ORDER BY id");

$brands = mysqli_fetch_array($result);

?>
<html>
<head>
  <title>Form Validation</title>
  <script type="text/javascript">
    var divs = new Array();
    divs[0] = "errname";
    divs[1] = "errqty";
    divs[2] = "errmodel";
    divs[3] = "errrelease";
    divs[4] = "errprice";
    divs[5] = "errcreate";
    function validate()
	{
      var inputs = new Array();
      inputs[0] = document.getElementById('brandname').value;
      inputs[1] = document.getElementById('quantity').value;
      inputs[2] = document.getElementById('model').value;
      inputs[3] = document.getElementById('release').value;
      inputs[4] = document.getElementById('price').value;
      inputs[5] = document.getElementById('create').value;
      var errors = new Array();
      errors[0] = "<span style='color:red'>Please enter your  Brandname!</span>";
      errors[1] = "<span style='color:red'>Please enter your Quantity!</span>";
      errors[2] = "<span style='color:red'>Please enter your model!</span>";
      errors[3] = "<span style='color:red'>Please enter your Release_Date!</span>";
      errors[4] = "<span style='color:red'>Please enter your Price!</span>";
      errors[5] = "<span style='color:red'>Please confirm your Create_Date!</span>";
      for (i in inputs)
      {
        var errMessage = errors[i];
        var div = divs[i];
        if (inputs[i] == "")
        	document.getElementById(div).innerHTML = errMessage;
        // else if (i==2)
        // {
        //   var atpos=inputs[i].indexOf("@");
        //   var dotpos=inputs[i].lastIndexOf(".");
        //   if (atpos<1 || dotpos<atpos+2 || dotpos+2>=inputs[i].length)
        // 	document.getElementById('errEmail').innerHTML = "<span style='color: red'>Enter a valid email address!</span>";
        //   else
        // 	document.getElementById(div).innerHTML = "OK!";
        // }
        // else if (i==5)
        // {
        //   var first = document.getElementById('password').value;
        //   var second = document.getElementById('confirm').value;
        //   if (second != first)
        // 	document.getElementById('errConfirm').innerHTML = "<span style='color: red'>Your passwords don't match!</span>";
        //   else
       	// 	document.getElementById(div).innerHTML = "OK!";
        // }
        else
        	document.getElementById(div).innerHTML = "OK!";
       }
     }
        function finalValidate()
        {
          var count = 0;
          for(i=0;i<6;i++)
          {
            var div = divs[i];
            if(document.getElementById(div).innerHTML == "OK!")
            count = count + 1;
          }
          if(count == 6)
          	document.getElementById("errFinal").innerHTML = "All the data you entered is correct!!!";
        }
   </script>
</head>
<body>
<div style="margin-left:100px;">
  <img src="img/img3.jpg" width=380 height=200>
  <img src="img/img5.jpg" width=380 height=200>
  <img src="img/img1.jpg" width=380 height=200>
  </div><br>
  
  <button><a href="product.php"> << Previous </a></button><br><br>
  <div style="margin-left:500px;">
    <form action="query/insert.php" method="POST">
    <table id="table1">
        <tr>
            <td>Brand Name:</td>
            <td>
              <select name="brandname" id="brandname" onkeyup="validate();" >
                 
                      <?php
                          while($brand = mysqli_fetch_array($result)){
                      ?>
                  <option value="<?php echo $brand['id']; ?>" >
                            <?php echo $brand['brand_name']?>
                  </option>
                      <?php
                      }
                      ?>
              </select>
            </td>
            <!-- <td><input type="text" name="brandname" id="brandname" onkeyup="validate();" /></td> -->
            <td><div id="errname"></div></td>
        </tr>
        <tr>
            <td>Quantity:</td>
            <td><input type="text" name="quantity" id="quantity" onkeyup="validate();"/></td>
            <td><div id="errqty"></div></td>
        </tr>
        <tr>
            <td>Model:</td>
            <td><input type="text" name="model" id="model" onkeyup="validate();"/></td>
            <td><div id="errmodel"></div></td>
        </tr>
        <tr>
            <td>Release_Date:</td>
            <td><input type="date"  name="release" id="release" onkeyup="validate();"/></td>
            <td><div id="errrelease"></div></td>
        </tr>
        <tr>
            <td>Price:</td>
            <td><input type="text" name="price" id="price" onkeyup="validate();"/></td>
            <td><div id="errprice"></div></td>
        </tr>
        <tr>
            <td>Create_Date:</td>
            <td><input type="date" name="create" id="create"  onkeyup="validate();"/></td>
            <td><div id="errcreate"></div></td>
      </tr>
      </table><br>
          <div style="margin-left:270px;">
            <input type="submit" name="submit" id="submit" value="Create" onclick="validate();finalValidate();"/>
            <div id="errFinal"></div>
          </div>
    </form>
  </div>  
</body>
</html>
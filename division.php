<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body 
{
  font-family:Arial; 
  /*background-image: url("img/baby.jpg");*/
  background-repeat: no-repeat, repeat;
  background-size: cover;
}
input[type=text], input[type=password]
{
    width: 50%;
    margin: 6px 0;
    border-radius: 5px;
    padding: 15px 18px;
    box-sizing: border-box;
}
button 
{
    background-color:dimgrey;
    color: white;
    padding: 14px 20px;
    border-radius: 5px;
    margin: 7px 0;
    width: 30%;
    font-weight: bold;
    font-size: 15px;
    text-align: center;
    float: right;
}

button:hover 
{
    background-color:darkslategray;
    cursor: pointer;
}
form
{
    width:35rem;
    margin: auto;
    color:whitesmoke;
    backdrop-filter: blur(16px) saturate(180%);
    -webkit-backdrop-filter: blur(16px) saturate(180%);
    background-color: rgba(11, 15, 13, 0.582);
    border-radius: 12px;
    border: 1px ;
    float:right ;
    text-align:left;
}
.mainContainer  
{
    padding: 10px;
}

  .register{
    color: white;
    text-align: center;
  }
  
  .register a{
    color: rgb(22, 146, 235);
  }
  
  .register a:link{
    text-decoration: none;
  }
  @media screen and (max-width: 600px) {
    form{
      width: 25rem;
    }
  }
  
  @media screen and (max-width: 400px) {
    form{
      width: 20rem;
    }
  }
   </style>
<title>Request page</title>
</head>
<body>
<form action="insert_div.php" method="POST">
<div class="mainContainer">

<label for="depID" >Select Department:</label>
  <select name="depID">
    <option disabled selected>-- Select Department </option>
    <?php
        include "connection.php";  // Using database connection file here
        $records = mysqli_query($con, "SELECT depID, depName From depertements");  // Use select query here 
        while($row = mysqli_fetch_array($records))
        {
            //echo "<option value='". $row['depID'] ."'>" .$row['depName'] ."</option>";  // displaying data in option menu
            echo "<option value='". $row['depID'] ."'>" /*.$row['depID'] ."|
            "*/. $row['depName'] ."</option>"; 
            //$divId=$row['depID'];
            //echo $divId;
           
        }   
    ?>  
  </select>

  <br><br>
  <label for="manID" >Select manager:</label>
  <select name="manID">
    <option disabled selected>-- Select manager </option>
    <?php
        include "connection.php";  // Using database connection file here
        $records = mysqli_query($con, "SELECT manID, name From manager");  // Use select query here 
        while($row = mysqli_fetch_array($records))
        {
            //echo "<option value='". $row['depID'] ."'>" .$row['depName'] ."</option>";  // displaying data in option menu
            echo "<option value='". $row['manID'] ."'>" /*.$row['depID'] ."|
            "*/. $row['name'] ."</option>"; 
            //$divId=$row['depID'];
            //echo $divId;
           
        }   
    ?>  
  </select>

<br><br>
<label for="divName">Enter division Name</label>
<input type="text" placeholder="Enter division Name" name="divName" required>
<br><br>  
        
<button type="submit"><i>SAVE</i></button>
</div>
</form>
</body>
</html>
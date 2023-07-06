<html>
<title>secretary login</title>
<head>
  <style>
  body{
    background-color: darkcyan;
    display:flex;
    justify-content: right;
    align-items: center;
    height: auto;
  }
  *{
    font-family: sans-serif;
    box-sizing: border-box;
  }
  form{
    width: 500px;
    border:2px solid #cccf;
    padding: 30px;
    background: lightslategrey;
    border-radius: 15px;
  }
  input{
    display: block;
    border:2px solid #ccc;
    width: 90%;
    padding: 10px;
    margin:6px auto;
    border-radius: 5px;
  }
  label{
    color: white;
    font-weight: bold;
    font-size: 18px;
    padding: 20px;
  }
  button{
    float:right;
    background-color: darkslategrey;
    padding: 10px 15px;
    color:white;
    border-radius: 5px;
    margin-right: 20px;
    font-weight: bold;
  }
  button.hover{
    opacity:0.5;
  }
  .error{
    background: pink;
    color: red;
    padding: 10px;
    width: 95%;
    border-radius: 5px;
    margin: 20px auto;


  }

    </style>
</head>

<body>
<form method="post" action="login_man_php.php">
       <br><br>
       <?php if(isset($_GET['error'])){?>
        <p class="error"><?php echo $_GET['error'];?></p>
       <?php } ?>
      
        <div class="mainContainer">
        <label for="email">email:</label>
  <input type="email" name="email" id="email" required>
  <label for="password">Password:</label>
  <input type="password" name="password" id="password" >
           <!-- <a href="index_pirate.php"> </a>-->
            <button type="submit" value="login">Enter</button>
        </div>

    </form>
</body>
</html>

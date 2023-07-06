<html>
<title>Login page</title>
<head>
  <style>
  body{
    background-color: darkslategrey;
    display:flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }
  *{
    font-family: sans-serif;
    box-sizing: border-box;
  }
  form{
    width: 600px;
    border:1px solid black;
    padding: 30px;
    background: rgb(26,33,22);
    border-radius: 15px;
  }
  input{
    display: block;
    border:1px solid #ccc;
    width: 90%;
    padding: 10px;
    margin:6px auto;
    border-radius: 5px;
  }
  label{
    color: white;
    font-size: 15px;
    font-weight: bold;
    padding: 20px;
  }
  button{
    float:right;
    background-color:blue ;
    padding: 10px 15px;
    color:black;
    border-radius: 5px;
    margin-right: 10px;
    font-weight: bold;
  }
  button.hover{
    opacity:1;
  }
  .error{
    background: pink;
    color: red;
    padding: 5px;
    width: 95%;
    border-radius: 5px;
    margin: 20px auto;


  }

    </style>
</head>

<body>
<form method="post" action="admin_php.php">
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

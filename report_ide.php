<html>
  <head>
     
  </head>
  <body style="margin:30px">
    <h2>list of mnager </h2>
      <br>
      <table>
    <thead>
      <tr >
        <th>manID</th>
        <th>name</th>
        <th>emil</th>
        <th>password</th>
        <th>status</th>
        <th>action</th>
      </tr>
    </thead>
     <tbody>
      <?php
      $serverName = "localhost";
      $userName = "root";
      $password = "";
      $dbName = "wasac";
      //create connection
      $con = mysqli_connect($serverName,$userName,$password,$dbName );
      //check connection 
      if($con->connect_error){
        die("connection failed:".$con->connect_error);
      }
      //read all row from database table
      $sql = "SELECT * FROM manager";
      $result = $con->query($sql);

      //read data of each row
      while($row = mysqli_fetch_array($result)){
        echo"<tr>
        <td>". $row["manID"] ."</td>
        <td>". $row["name"] ."</td>
        <td>". $row["email"] ."</td>
        <td>". $row["password"] ."</td>
        <td>" <?php 
        if(  $row['status'==1])
        {
          echo"accepted";}
          else if( $row['status'==2])
          {
            echo"pending";}
            else{
              echo"denied";}
            ?>"</td>
        <td>
        <a class='btn btn-primary btn-sm' href='update'>update</a>
        <a class='btn btn-primary btn-sm' href='delete'>delete</a>
        </td>
      </tr>";
      }
      ?>
     </tbody>
  </body>
</html>
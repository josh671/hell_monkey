<?php include('./includes/config.php'); ?> 
<?php include('./includes/header.php'); ?> 


<div id="wrapper">
<h1>Here are a list of my Comics</h1> 
<table> 
   <tr>
       <th>Comics</th> 
   </tr>
   
   <tr> 
        <td><p class="td_left">#1 50th Page Party</p></td> <td><p class="td_right"> Date Added</p></td> 
   </tr> 
        <td><p> chapter 1</p></td><td><p>4/4/2021</p></td>
        <?php //start php 
              //connection to database
                $sql = 'SELECT * FROM Chapters'; 
                $iConn = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myerror( __File__, __LINE__, mysqli_connect_error())); 
                $result = mysqli_query($iConn,$sql) or die(myerror( __File__, __LINE__, mysqli_connect_error())); 
              //start of database table 
              if(mysqli_num_rows($result) > 0){ 
                      echo '<table id="chapters_table">'; 
                                echo '<tr>';
                                echo '<th>Chapter Names and Numbers</th>'; 
                                echo '<th>Date Added</th>'; 
                                echo '</tr>';
                      //start of while loop 
                      while ($row = mysqli_fetch_assoc($result)){ 
                        //now to show contents of result 
                        echo '<tr>'; 
                                echo '<td><a href="chapter-view.php?id='.$row['chapID'].'" >'.$row['chapID'].'   '.$row['Description'].' </a>';'</td>'; 
                        echo '</tr>'; 
                  }
              }

        ?>
</table>

</div>

</div>











<!-- 
-create test database and try to echo into table 
-use appointments for reference 
-------------------------------
-first create disclaimer at top so you know the page 
        wrapper
        div for intro
        some p tags with statements or something

-set div for table 
-connect to sql database using select * from databaseName
-get $iconnect with the @mysqli_connect(DB_HOST, user, password , name ) or die(myerror(__FILE)); 





 -->



</body>
</html>
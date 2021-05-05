<?php include('template.php');?>


<body>

	<form method="POST" id="Formid" name="formnm" >
             <input type="hidden" id = "page" name="page"/>
        <div class="row m-b-2">
              
           <div class="col-sm-12">
              <div class="form-group col-sm-6">
                      
                  <h4 class="demo-sub-title">Who is your favourite author?</h4>

<input type="radio"  name="name"  id="name" value="Miguel de Cervantes" required="required"/>Miguel de Cervantes
<input type="radio"  name="name"  id="name" value="Charles Dickens" required="required"/>Charles Dickens
<input type="radio"  name="name"  id="name" value="J.R.R. Tolkien" required="required"/>J.R.R. Tolkien     
<input type="radio"  name="name"  id="name" value="Antoine de Saint-Exuper" required="required"/>Antoine de Saint-Exuper
                </div>  
                     
 
                 
          </div>  

         

      <center>  <!-- <button type="button" name="submit" class="btn btn-primary" value="Submit"></button>-->
      	<input type="submit" name="submit" value="submit">
      </center>
              
      </div>
         <button onclick="window.location='s.php' ">View Poll Results</button>
  </form>

</body>
</html>

<?php
  
  if(isset($_POST["submit"]))
  {
    $name=$_POST['name'];
    $sql = "SELECT * FROM opinions WHERE opinions_author_name='$name'";
    $sl2=$db->prepare($sql);
    $sl2->execute();
    $res2=$sl2->fetch(PDO::FETCH_ASSOC);

    $vote=$res2['opinions_vote'];
    //echo $vote; 
      $vote=$vote+1;
    //echo $name;
    //echo $vote;
    //die();
$statement = $db->prepare("UPDATE opinions SET opinions_vote='$vote' WHERE opinions_author_name='$name'");    

    $statement->execute();
    echo "<script>alert('Your response has been successfully recorded');</script>";
  //$result=$statement->fetch(PDO::FETCH_ASSOC);
  //print_r($result);
    
  }

  /*if(!empty($_POST)) {
      if($statement->rowCount() === 0) {
        echo "Your response has been successfully recorded";
      }
    }*/
?>

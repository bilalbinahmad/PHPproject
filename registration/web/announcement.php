
	<?php
$servername = "localhost";
$username = "root";
$password = "";
//////////////////////////connection/////////////////////////////
$dbname="my_db";
$conn = mysqli_connect($servername, $username, $password,$dbname);

 $sql = "SELECT id,announcement FROM myt_able1";
$result = $conn->query($sql);
  if ($result->num_rows > 0) {
//      output data of each row
     while($row = $result->fetch_assoc()) {
           $bilal[]=$row["announcement"];
          //echo"<br>";
	
        // echo "id: " . $row["id"]. " - announcement " . $row["announcement"]. "<br>";
              }
} else {
     echo "0 results";
 }	

 
 //    session_start();
	// $_SESSION["announcement"] = "$bilal";
	$title="announcement";
//$content="";
$title="announcement";
$content="";
$str1 = <<<END
 <div class="container">
  
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModal">add new announcement</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <form role="form" action="newann.php" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Announcement</h4>
        </div>
        
        <div class="modal-body">
            
            
              <textarea  rows="5" cols="69" colid="comment" name="announcement"  required=required placeholder="type any thing you want to share with your students"></textarea>
          
            
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default" >Upload</button>
        </div>
      </div>
      </form>
      
    </div>
  </div>
  
</div>
  		<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});

</script>
END;

include 'template.php';
//$conn->close();
?>


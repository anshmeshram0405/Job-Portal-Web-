<?php include 'header.php'?>

<div class="content" style="background-image:url(background.jpg); background-size:cover;">
<table class="table" style="color:white;">
  <thead>
    <tr>
    <br>
      <th scope="col">#</th>
      <th scope="col">Candidate Name</th>
      <th scope="col">Position</th>
      <th scope="col">Year Passout</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $sql="Select name, apply,year from candidates";
      $result=mysqli_query($conn,$sql);
      $i=0;
      if($result->num_rows>0){
        while($rows=$result->fetch_assoc()){
          echo'
        <tr>
          <th scope="rows">'.++$i.'</th>
          <td>'.$rows['name'].'</td>
          <td>'.$rows['apply'].'</td>
          <td>'.$rows['year'].'</td>
        </tr>';}
      }
      else{
        echo"";
      }
      ?>     
  </tbody>
</table>
</div>
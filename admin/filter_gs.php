<?php  
 //filter.php  
 if(isset($_POST["from_date"], $_POST["to_date"]))  
 {  
      $connect = mysqli_connect("localhost", "root", "", "pos");  
      $output = '';  
      $query = "  
           SELECT * FROM giant_slide  
           WHERE dat BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'  
      ";  
      $result = mysqli_query($connect, $query);  
      $output .= '    
          <table class="table table-bordered table-hover">
            <tr> 
              <th><center>Invoice No.</center></th>
              <th><center>Username</center></th>
              <th colspan="3"><center>Giant Slide</center></th>
              <th><center>Date</center></th>

            </tr>
            <tr>
              <th></th>
              <th></th>
              <th>K</th>
              <th>A</th>
              <th>D</th>
              <th></th>
            </tr>
                </tr>  
      ';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                          <td>'. $row["id"] .'</td>
                          <td>'. $row["username"] .'</td>  
                          <td>'. $row["gskid"] .'</td>  
                          <td>'. $row["gsdult"] .'</td>  
                          <td> '. $row["gsdisc"] .'</td>  
                          <td>'. $row["dat"] .'</td>
                     </tr>  
                ';  
           }  
      }  
      else  
      {  
           $output .= '  
                <tr>  
                     <td colspan="5">No Data Found</td>  
                </tr>  
           ';  
      }  
      $output .= '</table>';  
      echo $output;  
 }  
 ?>

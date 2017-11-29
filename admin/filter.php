<?php  
 //filter.php  
 if(isset($_POST["from_date"], $_POST["to_date"]))  
 {  
      $connect = mysqli_connect("localhost", "root", "", "pos");  
      $output = '';  
      $query = "  
           SELECT * FROM pool  
           WHERE date BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'  
      ";  
      $result = mysqli_query($connect, $query);  
      $output .= '    
          <table class="table table-bordered table-hover">
            <tr> 
              <th><center>Invoice No.</center></th>
              <th colspan="3"><center>ATV</center></th>
              <th><center>Total No. of Tickets</center></th>
              <th><center>Amount to Pay</center></th>
              <th><center>Username</center></th>
              <th><center>Date</center></th>

            </tr>
            <tr>
              <th></th>
              <th>K</th>
              <th>A</th>
              <th>D</th>
              <th></th>
              <th></th>
              <th></th>
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
                          <td>'. $row["pool_ID"] .'</td>  
                          <td>'. $row["Tguest_kids"] .'</td>  
                          <td>'. $row["Tguest_adult"] .'</td>  
                          <td> '. $row["Tguest_discount"] .'</td>  
                          <td>'. $row["total_guest"] .'</td>
                          <td>'. $row["payment"] .'</td> 
                          <td>'. $row["username"] .'</td> 
                          <td>'. $row["date"] .'</td>
                     </tr>  
                ';  
           }  
      }  
      else  
      {  
           $output .= '  
                <tr>  
                     <td colspan="5">No Order Found</td>  
                </tr>  
           ';  
      }  
      $output .= '</table>';  
      echo $output;  
 }  
 ?>

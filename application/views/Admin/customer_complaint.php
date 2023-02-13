<?php

   $this->load->view('Admin/layout/header');

?>

<!-- 
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
</head>
<body>
<br><br><br><br><br>
<h2 align="center">User Complaints</h2>

<div style="overflow-x:auto;">
  <br><br><br><br><br>
  <table>
    <tr>
    <th>Customer Name</th>
     
      <th>Product Name</th>
      <th>Price</th> 
      <th>Quantity</th>
      <th>Paid Amount</th>
      <th>Uploadede Image (damage)</th>
      <th>Complaint Description</th>
      <th>Response</th>
      
    </tr>
     <?php
      foreach ($complaint as $cpmlnt) {
      
      ?>
    <tr>
     
     
      <td><?php echo $cpmlnt->name?></td>
    
      
      <td><?php echo $cpmlnt->ps_name?></td>
      <td>₹<?php echo $cpmlnt->ps_price?></td>
       <td><?php echo $cpmlnt->quantity?></td>
       <td>₹<?php echo $cpmlnt->total?></td>
       <td><img src="<?php echo base_url('Asset/user/complaint/'.$cpmlnt->complaint_upload  )?>" style="height: 180px;width: 250px"></td>
    
      <td><?php echo $cpmlnt->Complaint?></td>
      <td><form method="post" action="<?php echo base_url('index.php/Nurserycontroller/response/'.$cpmlnt->complaint_id)?>">
        <input type="text" name="Response"><br><br>
        <input type="submit" name="">
      </form></td>

   
     
    </tr>
    <?php
  }
  ?>
  
   
  </table>
  <br><br><br><br><br><br><br><br>
</div>

</body>
</html>






 -->
 <div style="overflow-x:auto;">
 <!--  <div class="table-agile-info">
 <div class="panel panel-default"> -->
     <div class="panel-heading" style="width: 1290px" >
     Customer Complaint
    </div>
    <div>

      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}' style="background-color:white;color: black">
        <thead>
         <tr>
            <th>Customer Name</th>
     
      <th>Product Name</th>
      <th>Price</th> 
      <th>Quantity</th>
      <th>Paid Amount</th>
      <th>Uploadede Image (damage)</th>
      <th>Complaint Description</th>
      <th>Customer Response</th>
          </tr>
        </thead>
        <tbody>
    <?php
      foreach ($complaint as $cpmlnt) {
      
      ?>
    <tr>
     
     
      <td><?php echo $cpmlnt->name?></td>
    
      
      <td><?php echo $cpmlnt->ps_name?></td>
      <td>₹<?php echo $cpmlnt->ps_price?></td>
       <td><?php echo $cpmlnt->quantity?></td>
       <td>₹<?php echo $cpmlnt->total?></td>
       <td><img src="<?php echo base_url('Asset/user/complaint/'.$cpmlnt->complaint_upload  )?>" style="height: 180px;width: 250px"></td>
    
      <td><?php echo $cpmlnt->Complaint?></td>
      <td><?php echo $cpmlnt->complaint_response?></td>

   
     
    </tr>
    <?php
  }
  ?>
  
         
        </tbody>
      </table>
    </div>
  </div>












<?php

   $this->load->view('Admin/layout/footer');

?>

<?php 
include "login_check.php"; 
$user_name = $_SESSION['login_name'];
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<?php
include "connection.php";

if(isset($_GET['page']))
{
    $page = $_GET['page'];
}
else
    $page = 1;

define("RESULTS_PER_PAGE", 5);

$sql = "SELECT * FROM `wgt`";
$res = $db->query($sql);
$num = $res->num_rows;

if($num%RESULTS_PER_PAGE == 0)
    $total_page = $num/RESULTS_PER_PAGE;
else
    $total_page = intval($num/RESULTS_PER_PAGE)+1;





?>
<body>
 <div class="myDiv">
            <table>
                <thead>
                    <tr>
                        <th style = "color: white;  font-size: 20px;">Manage Products</th>
                        <th><button class="btn" type="button" id="deleteAcc">Delete</button></th>
                        <th><button><a href="insert.php">Add Product</span></a></button></th>
                        <th><button><a href="export.php">Export Data</span></a></button></th>

                        <th style = "color: white;  font-size: 15px;">&nbsp;&nbsp;&nbsp;Login as <?=$user_name?></th>
                        <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            
                        <a href = "logout.php"><input type="image" src = "image/logout.png" width="120"></a></th>                      
                    </tr>
                </thead>
            </table>

        </div>
<div class="table-wrapper">
    <table class="fl-table">
        
       
        

        <thead>
        <tr>
            <th><input type="checkbox" name="checkallproduct" id="checkAll"></th><!-- It must be hide from user-->
            <th>Product Name</th>
            <th>Product Image</th>
            <th>Price</th>
            <th>Title</th>
            <th>Description</th>
            <th>Date/Time</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
<?php

$limit = RESULTS_PER_PAGE*($page-1); 
$sql   = "SELECT * FROM `wgt` ORDER BY `id` DESC LIMIT $limit,".RESULTS_PER_PAGE;
$res   = $db->query($sql);
date_default_timezone_set("Asia/Calcutta");
while($row=$res->fetch_array()) {
print "
    <tbody>
        <tr>
            <td><input type=checkbox name=checkproduct id=checkItem></td>
            <td>$row[pname]</td>
            <td><IMG SRC = \"$row[image]\" WIDTH = 100></td>
            <td>$row[price]</td>
            <td>$row[title]</td>
            <td>$row[desc]</td>
            <td>".date("F d, Y h:i:s A", $row['timestamp'])."</td>
            <td><a href=edit.php?edit_id=$row[id]>Edit</a></td>
            <td><a href=delete.php?del_id=$row[id] onclick = \" return confirm('Are you sure!');\">Delete</a></td>
        </tr>
    <tbody>";
}

?>
</table>
</div>
<div class="table-wrapper">
<?php
if($page>1)
{
    $prev = $page-1;
    print "<a href=\"show2.php?page=$prev\">Prev</a> &nbsp &nbsp";
}

for($i=1; $i<=$total_page; $i++)
{
    if($page==$i)
        print "<a href=show2.php?page=$i><span style = \"color: white;  background: #4fc3a1; font-size: 30px;\">$i</span></a>&nbsp &nbsp";
    else
        print "<a href=show2.php?page=$i>$i</a>&nbsp &nbsp";
}
if($page<$total_page) 
{
    $next = $page+1;
     print "<a href=\"show2.php?page=$next\">Next</a> &nbsp &nbsp";
}


?>
</div>
<script type="text/javascript" src="jquery/jquery-3.5.1.js"></script>
<script type="text/javascript">
     $("#checkAll").click(function () {
     $('input:checkbox').not(this).prop('checked', this.checked);
 });

  $("#deleteAcc").on("click", function() {
  $("#checkItem input:checked").parent().remove();
});
</script>
</body>
</html>
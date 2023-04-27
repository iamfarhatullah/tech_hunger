<?php 
include("admin/include/connection.php");

$sql = "SELECT * FROM `tbl_categories`";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        $cat_ID = $row['cat_ID'];
        $cat_name = $row['cat_name'];
        echo '<li>
                <a class="btclr text-white dropdown-item" href="prodCategory.php?cid='.$cat_ID.'&cname='.$cat_name.'">'.$cat_name.'</a>
            </li>';
    }
}else{
    echo '<li>
                <a class="btclr text-white dropdown-item" href="#">No Results</a>
            </li>';
}
?>
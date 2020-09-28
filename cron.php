<?php


         $dbhost = 'localhost';
         $dbuser = 'admin_theressea';
         $dbpass = 'there$%^&2012FHdf';
$db_name= 'admin_cuthresaerchprocess';
         $conn = new mysqli($dbhost, $dbuser, $dbpass,$db_name);
         if(! $conn ) {
            die('Could not connect: ' . mysql_error());
         }
         echo 'Connected successfully';
         

$sql = 'select * from schedular';

$result=$conn->query($sql);

if ($result->num_rows > 0) {

while($row = $result->fetch_assoc()) {

$date = date_default_timezone_set('Asia/Kolkata');

$curr_time = date("m/d/Y H:i");
$curr_time1 = date("Y-m-d H:i:s");
$schedule_time=$row['publish_date'].' '.$row['publish_time'];

if($curr_time==$schedule_time)
{

$summary=mysqli_real_escape_string($conn,$row['full_desc']);

$sql2 = "insert into press (name,url,full_desc,meta_title,meta_keywords,meta_description,date,publish_date,author,type,image_url) values ('".$row['name']."','".$row['url']."','".$summary."','".$row['meta_title']."','".$row['meta_keywords']."','".$row['meta_description']."','".$curr_time1."','".$row['publish_date']."','".$row['author']."','".$row['news_type']."','".$row['img']."')";

$result2=$conn->query($sql2);

$sql3='delete from schedular where id='.$row['id'];

$result3=$conn->query($sql3);
}

}}

else {
    echo "0 results";
}

         mysql_close($conn);
      ?>
<?php
         $dbhost = 'localhost';
         $dbuser = 'admin_aeresrch';
         $dbpass = 'aEreasrch#$%1257';
$db_name= 'admin_aeresearch';
         $conn = new mysqli($dbhost, $dbuser, $dbpass,$db_name);
         if(! $conn ) {
            die('Could not connect: ' . mysql_error());
         }
         echo 'Connected successfully';
         

$sql = 'select * from schedular_msr';

$result=$conn->query($sql);

//get the last id from news
$sql_maxid = 'select id from press ORDER BY id DESC LIMIT 1;';
$lastmax=$conn->query($sql_maxid);
$lstidarray=$lastmax->fetch_assoc();
$lstid=$lstidarray['id'];
$lstid=$lstid+1;
//end last id here

if ($result->num_rows > 0) {

while($row = $result->fetch_assoc()) {

$date = date_default_timezone_set('Asia/Kolkata');

$curr_time = date("m/d/Y H:i");
$curr_time1 = date("Y-m-d H:i:s");
$schedule_time=$row['publish_date'].' '.$row['publish_time'];
//$curr_time="11/29/2019 18:05";
if($curr_time==$schedule_time){

$summary_withbuttons='';
$summary1='';
$summary=mysqli_real_escape_string($conn,$row['full_desc']);

$prurl=trim($row['url']).'-'.trim($lstid);


//create dynamic buttons

			$str_arr=explode("<p",$summary);
			
			 
		
			 
			
			if(count($str_arr) >3){
				
				
			 
				$summary1 = '<p'.$str_arr[1].'<p'.$str_arr[2].'<p'.$str_arr[3].'<p></p><p style="text-align: center;"><span class="dymicbttnp"><strong>Request Sample Copy of this Report @ </strong><a style="color: #337ab7;" class="" rel="nofollow" href="https://www.aeresearch.net/request-sample/'.$lstid.'" target="_blank">https://www.aeresearch.net/request-sample/'.$lstid.'</a></span></p>';
				
				$rquestcust='<p></p><p style="text-align: center;"> <span class="dymicbttnp"><strong>Request Customization on This Report @</strong> <a style="color: #337ab7;" class="" rel="nofollow" href="https://www.aeresearch.net/request-for-customization/'.$lstid.'"  target="_blank">https://www.aeresearch.net/request-for-customization/'.$lstid.'</a></span></p>';
			   
				$summary_withbuttons= str_replace('<p'.$str_arr[1].'<p'.$str_arr[2].'<p'.$str_arr[3],$summary1,$summary.$rquestcust);
				
			}else{
				$postion_of_link =  (int)ceil((count($str_arr)-1)/2);
				 
				 
				 
				 for($i=1;$i<count($str_arr);$i++){
					 if($postion_of_link==$i){
						 
						$summary1.='<p'.$str_arr[$i].'<p></p><p style="text-align: center;"> <span class="dymicbttnp"><strong>Request Sample Copy of this Report @ </strong><a style="color: #337ab7;"  class="" rel="nofollow" href="https://www.aeresearch.net/request-sample/'.$lstid.'" target="_blank">https://www.aeresearch.net/request-sample/'.$lstid.'</a></span></p>';
						 
						 
					 }else{
						 
						 
						 
						  $summary1.='<p'.$str_arr[$i];
						  
					 }
					 
				 }
				
				 //chnages link potions on saturday
				 $rquestcust_link='<p></p><p style="text-align: center;"><span class="dymicbttnp"> <strong>Request Customization on This Report @</strong> <a style="color: #337ab7;" class="" rel="nofollow" href="https://www.aeresearch.net/request-for-customization/'.$lstid.'"  target="_blank">https://www.aeresearch.net/request-for-customization/'.$lstid.'</a></span></p>';
				$summary_withbuttons=$summary1.$rquestcust_link;
				
				 
				 
			}
			
			//var_dump($summary_withbuttons);exit;

//create dynamic buttons end here

//edited by Nikhil--- elated Reports Start

$sql_related='select related_report from press where promotion_cat="'.$row['promotion_cat'].'" and type="'.$row['news_type'].'" order by id desc limit 1';
$last_related=$conn->query($sql_related);
$last_related_arr=$last_related->fetch_assoc();
$last_rel_id=substr($last_related_arr['related_report'],strrpos($last_related_arr['related_report'],',')+1);
$sql_related_rel='select id from press where promotion_cat="'.$row['promotion_cat'].'" and type="'.$row['news_type'].'" and id > '.$last_rel_id.' order by id asc limit 5';
$related_id=$conn->query($sql_related_rel);


if ($related_id->num_rows > 0) {
    // output data of each row
	$iii=1;
	$rel_rd_final='';
    while($related_id_arr=$related_id->fetch_assoc()) {
        $rel_rd_final=$rel_rd_final.''.$related_id_arr["id"];
		if($iii<$related_id->num_rows)
		{$rel_rd_final=$rel_rd_final.',';}
	$iii++;
    }
}
$rel_rd_final_arr=explode(',',$rel_rd_final);
if(!empty($rel_rd_final_arr))
{
	$arr_count=count($rel_rd_final_arr);
	if($arr_count<5)
	{
		$sql_related_rel_less_5='select id from press where promotion_cat="'.$row['promotion_cat'].'" and type="'.$row['news_type'].'" and id != '.$last_rel_id.' and id not in ('.$rel_rd_final.') order by id asc limit '.(5-$arr_count);
		$related_id_arr_less=$conn->query($sql_related_rel_less_5);
		if ($related_id_arr_less->num_rows > 0) 
		{
			$iiii=1;
			$rel_rd_final1='';
			while($related_id_arr1=$related_id_arr_less->fetch_assoc()) 
			{
				$rel_rd_final1=$rel_rd_final1.''.$related_id_arr1["id"];
				if($iiii<$related_id_arr_less->num_rows)
				{$rel_rd_final1=$rel_rd_final1.',';}
				$iiii++;
			}
			$rel_rd_final=$rel_rd_final.','.$rel_rd_final1;
			$rel_rd_final=trim($rel_rd_final,',');
		}
	}
}

//edited by Nikhil--- elated Reports end

 
$sql2 = "insert into press (name,url,full_desc,meta_title,meta_keywords,meta_description,date,publish_date,author,type,image_url,promotion_id,promotion_cat,msrpromotion_url,url_end_id,related_report,gmi_report,gmi_id,single_user_price,multi_user_price,corporate_user_price,enterprice_user_price) values ('".$row['name']."','".$prurl."','".$summary_withbuttons."','".$row['meta_title']."','".$row['meta_keywords']."','".$row['meta_description']."','".$curr_time1."','".$row['publish_date']."','".$row['author']."','".$row['news_type']."','".$row['img']."','".$row['promotion_id']."','".$row['promotion_cat']."','".$row['msrpromotion_url']."','".$lstid."','".$rel_rd_final."','".$row['gmi_report']."','".$row['gmi_id']."','".$row['single_user_price']."','".$row['multi_user_price']."','".$row['corporate_user_price']."','".$row['enterprice_user_price']."')";


if ($conn->query($sql2) === TRUE) {
   // $last_id = $conn->insert_id;
    echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
}


$sql3='delete from schedular_msr where id='.$row['id'];

$result3=$conn->query($sql3);

$lstid++;
}

}}

else {
    echo "0 results";
}

         mysql_close($conn);
      ?>
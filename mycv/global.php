<?php
class globaldb {

//add record in table
//first param = table name
//second param = insert array.
public function add_record($table,$insert_array){
  
    if(!empty($table) && is_array($insert_array) && count($insert_array) > 0){
	   
	    $str = " ( ";
		$set = "( ";
		$cnt = 1;
		foreach($insert_array as $key=>$val):
			if($cnt == 1){
			  $add='';
			} else{
			 $add = ',';
			}
			$str .= $add."'".$val."'";
			$set .= $add."".$key."";  
		$cnt++;
		endforeach;
		$str .= " ) ";
		$set .= ") ";
	    if(strlen($str) != 0){
		   $query = 'insert into '.$table.' '.$set.' values '.$str.'';
		 // echo $query;exit;
		   $check = mysql_query($query) or die(mysql_error());
		   $insert_id = mysql_insert_id();
		   if(!empty($insert_id)) {
		     return '00';
		   } else {
		     return '10';
		   }  
		}
	
	
	} else {
	
	  return '11';
	}
 
}

//function for update record in given table
public function upd_record($table,$upd_array,$cond_array){

	if(!empty($table) && is_array($upd_array) && count($cond_array) > 0){

    $sql = 'update '.$table.' set ';
	$str = '';
	$upd_cnt = 1;
	$where_str = ' where ';
	foreach($upd_array as $key=>$val):
	 if($upd_cnt == 1) {
	    $add = '';
	 } else{
	    $add = ',';
	 }
	
	 $str .= $add."`".$key."` = '".$val."' "; 
	 $upd_cnt++;
	endforeach;
	
	if(is_array($cond_array) && count($cond_array) > 0) {
	     $cond_count = 1;
	    foreach($cond_array as $key=>$val):
		  if($cond_count == 1) {
			$cond_add = '';
		 } else{
			$cond_add = ' and ';
		 }
		 
		$where_str .= $cond_add."`".$key."` = ".$val." ";
		$cond_count++;
		endforeach;
	}
	
	if((strlen($str) != 0 ) && (strlen($where_str) != 0) ) {
	
	   $ttl_str = $sql.$str.$where_str;
	   
	   $check = mysql_query($ttl_str) or die(mysql_error());  
	   return true; 
	} else {
	   return false;
	}
	
	
	
	}
}


//function for delte row from given table 
public function delete_record($table,$cond_array){

	if(is_array($cond_array) && count($cond_array) > 0) {
	     $cond_count = 1;
		 $sql = 'delete from '.$table.'';
	     $where_str = ' where ';
		foreach($cond_array as $key=>$val):
		  if($cond_count == 1) {
			$cond_add = '';
		 } else{
			$cond_add = ' and ';
		 }
		 
		$where_str .= $cond_add."`".$key."` = ".$val." ";
		$cond_count++;
		endforeach;
	    $final_sql = $sql.$where_str.' limit 1';
		//echo $final_sql;exit;
	   $demo = mysql_query($final_sql) or die(mysql_error());
	
	} else {
		return false;
	}

}



}


?>
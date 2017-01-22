<?php
header('Content-Type: application/json');


$postdata = file_get_contents("php://input");
$request = json_decode($postdata,true);
@$bio_id = $request['bio_id'];
@$db_name = $request['db_name'];
@$leg_bills = $request['leg_bill'];

$bioId = $_GET['id'];
$db_type = $_GET['db_type'];

if($bio_id != "" && $db_name== ""){
  $leg_committ_url = 'http://congress.api.sunlightfoundation.com/committees?member_ids='.$bio_id.'&apikey=eb6c342bbcc448fb96a33f3a8dca3b98';
  $str_json = file_get_contents($leg_committ_url);
  echo $str_json;

}
elseif($bioId != "" && $db_type!= ""){
  $leg_bill_url = 'http://congress.api.sunlightfoundation.com/bills?sponsor_id='.$bioId.'&apikey=eb6c342bbcc448fb96a33f3a8dca3b98';
  $str_json = file_get_contents($leg_bill_url);
  echo $str_json;

}

elseif($leg_bills != ""){
  $leg_bill_url = 'http://congress.api.sunlightfoundation.com/bills?sponsor_id='.$leg_bills.'&apikey=eb6c342bbcc448fb96a33f3a8dca3b98';
  $str_json = file_get_contents($leg_bill_url);
  echo $str_json;

}
elseif($db_name != "" && $db_name == "bill"){
  $bill_url = 'http://congress.api.sunlightfoundation.com/bills?history.active=true&apikey=eb6c342bbcc448fb96a33f3a8dca3b98&per_page=50';
  $str_json = file_get_contents($bill_url);
  echo $str_json;

}

elseif($db_name != "" && $db_name == "bill_new"){
  $bill_url = 'http://congress.api.sunlightfoundation.com/bills?history.active=false&apikey=eb6c342bbcc448fb96a33f3a8dca3b98&per_page=50';
  $str_json = file_get_contents($bill_url);
  echo $str_json;

}

elseif($db_name != "" && $db_name == "comm"){
  $comm_url = 'http://congress.api.sunlightfoundation.com/committees?apikey=eb6c342bbcc448fb96a33f3a8dca3b98&per_page=all';
  $str_json = file_get_contents($comm_url);
  echo $str_json;

}


else{
  $json_url  ='http://congress.api.sunlightfoundation.com/legislators?apikey=eb6c342bbcc448fb96a33f3a8dca3b98&per_page=all';
  $str_json = file_get_contents($json_url);
  echo $str_json;
}
?>

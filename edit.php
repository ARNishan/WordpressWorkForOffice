<?php
include'Database.php';
$db = new Database();

$id = $_GET['id'];
$val = $_GET['val'];
$tire = $_GET['tire'];
if ($tire == 1){
    $query = "UPDATE delivery_fee SET DeliveryFeeTier1=$val WHERE id=$id";
}
elseif ($tire == 2){
    $query = "UPDATE delivery_fee SET DeliveryFeeTier2=$val WHERE id=$id";
}
elseif ($tire == 3){
    $query = "UPDATE delivery_fee SET DeliveryFeeTier3=$val WHERE id=$id";
}
elseif ($tire == 4){
    $query = "UPDATE delivery_fee SET DeliveryFeeTier4=$val WHERE id=$id";
}
elseif ($tire == 5){
    $query = "UPDATE delivery_fee SET DeliveryFeeTier5='$val' WHERE id=$id";
}
$update = $db->update($query);


if ($update) {
	$data = "Data Updated Successfully!!";

}

return print_r($data);



?>

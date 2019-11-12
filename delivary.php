<?php
include'Database.php';

class Delivery{
public $dis;
public $price;
public $tier1;
public $tier2;
public $tier3;
public $tier4;
public $tier5;

    public function SetTierValue($data){
    	$this->tier1 = $data['DeliveryFeeTier1'];
    	$this->tier2 = $data['DeliveryFeeTier2'];
    	$this->tier3 = $data['DeliveryFeeTier3'];
    	$this->tier4 = $data['DeliveryFeeTier4'];
    	$this->tier5 = $data['DeliveryFeeTier5'];

    }
    public function SetTierValue60plus($data,$dist){
    	$tier4 =  $data['DeliveryFeeTier4'];
    	$tier5 = $data['DeliveryFeeTier5'];
    	$data1 = explode( '+', $tier4 );
    	$data2 = explode( '+', $tier5 );
    	$dif = $dist - 60;
    	$tier4Value = $data1[0] + ($data1[1] * $dif);
    	$tier5Value = $data2[0] + ($data2[1] * $dif);
    	$this->tier1 = $data['DeliveryFeeTier1'];
    	$this->tier2 = $data['DeliveryFeeTier2'];
    	$this->tier3 = $data['DeliveryFeeTier3'];
    	$this->tier4 = $tier4Value;
    	$this->tier5 = $tier5Value;



    }

	public function __construct($dist,$price)
	{
		$db = new Database();
	
	   if($dist >= 0 && $dist <= 5){
			$this->dis = $dist;
		    $this->price = $price;
		    $query = "SELECT * FROM delivery_fee WHERE start = 0 AND end = 5";
		    $data = $db->select($query);
		    $data = $data->fetch_assoc();
		    $this->SetTierValue($data);		
		}elseif ($dist > 5 && $dist <= 10) {
			$this->dis = $dist;
		    $this->price = $price;
		    $query = "SELECT * FROM delivery_fee WHERE start = 6 AND end = 10";
		    $data = $db->select($query);
		    $data = $data->fetch_assoc();
		    $this->SetTierValue($data);
			
		}elseif ($dist > 10 && $dist <= 15) {
			$this->dis = $dist;
		    $this->price = $price;
		    $query = "SELECT * FROM delivery_fee WHERE start = 11 AND end = 15";
		    $data = $db->select($query);
		    $data = $data->fetch_assoc();
		    $this->SetTierValue($data);
			
		}
		elseif ($dist > 15 && $dist <= 20) {
			$this->dis = $dist;
		    $this->price = $price;
		    $query = "SELECT * FROM delivery_fee WHERE start = 16 AND end = 20";
		    $data = $db->select($query);
		    $data = $data->fetch_assoc();
		    $this->SetTierValue($data);
			
		}elseif ($dist > 20 && $dist <= 25) {
			$this->dis = $dist;
		    $this->price = $price;
		    $query = "SELECT * FROM delivery_fee WHERE start = 21 AND end = 25";
		    $data = $db->select($query);
		    $data = $data->fetch_assoc();
		    $this->SetTierValue($data);
			
		}elseif ($dist > 25 && $dist <= 30) {
			$this->dis = $dist;
		    $this->price = $price;
		    $query = "SELECT * FROM delivery_fee WHERE start = 26 AND end = 30";
		    $data = $db->select($query);
		    $data = $data->fetch_assoc();
		    $this->SetTierValue($data);
			
		}elseif ($dist > 30 && $dist <= 35) {
			$this->dis = $dist;
		    $this->price = $price;
		    $query = "SELECT * FROM delivery_fee WHERE start = 31 AND end = 35";
		    $data = $db->select($query);
		    $data = $data->fetch_assoc();
		    $this->SetTierValue($data);
			
		}elseif ($dist > 35 && $dist <= 40) {
			$this->dis = $dist;
		    $this->price = $price;
		    $query = "SELECT * FROM delivery_fee WHERE start = 36 AND end = 40";
		    $data = $db->select($query);
		    $data = $data->fetch_assoc();
		    $this->SetTierValue($data);
			
		}elseif ($dist > 40 && $dist <= 45) {
			$this->dis = $dist;
		    $this->price = $price;
		    $query = "SELECT * FROM delivery_fee WHERE start = 41 AND end = 45";
		    $data = $db->select($query);
		    $data = $data->fetch_assoc();
		    $this->SetTierValue($data);
			
		}elseif ($dist > 45 && $dist <= 50) {
			$this->dis = $dist;
		    $this->price = $price;
		    $query = "SELECT * FROM delivery_fee WHERE start = 46 AND end = 50";
		    $data = $db->select($query);
		    $data = $data->fetch_assoc();
		    $this->SetTierValue($data);
			
		}elseif ($dist > 50 && $dist <= 55) {
			$this->dis = $dist;
		    $this->price = $price;
		    $query = "SELECT * FROM delivery_fee WHERE start = 51 AND end = 55";
		    $data = $db->select($query);
		    $data = $data->fetch_assoc();
		    $this->SetTierValue($data);
			
		}elseif ($dist > 55 && $dist <= 60) {
			$this->dis = $dist;
		    $this->price = $price;
		    $query = "SELECT * FROM delivery_fee WHERE start = 56 AND end = 60";
		    $data = $db->select($query);
		    $data = $data->fetch_assoc();
		    $this->SetTierValue($data);
			
		}elseif ($dist > 60){
			$this->dis = $dist;
		    $this->price = $price;
		    $query = "SELECT * FROM delivery_fee WHERE start = 61";
		    $data = $db->select($query);
		    $data = $data->fetch_assoc();
		    $this->SetTierValue60plus($data,$dist);
		
		}
	}

	public function DeliveryCount()
	{
			if($this->price < 99){
				return $this->tier1;
			}elseif($this->price > 99 && $this->price <= 169){
				return $this->tier2;
			}elseif($this->price > 169 && $this->price <= 499){
				return $this->tier3;
			}
			elseif($this->price > 499 && $this->price <= 999){
				return $this->tier4;
			}
			elseif($this->price > 1000){
				return $this->tier5;
			}
		
	 
	}
}

$data = new Delivery(223,1200);
$data = $data->DeliveryCount();
echo $data;
?>
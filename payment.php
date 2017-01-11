<?php include('header.php');?>
<?php require_once('includes/classes/connection.php');?>
<?php require_once('includes/classes/OrderMaster.php');?>
<?php require_once('includes/classes/OrderDetail.php');?>
<?php require_once('includes/classes/Billing.php');?>
<?php require_once('includes/classes/Shipping.php');?>
<?php
	$userid = "";
	if(!isset($_SESSION['uid'])){
			echo "<script>window.location='index.php';</script>";
			//echo "<script>alert({$_SESSION['uid']});</script>";
	}else{
		$userid = $_SESSION['uid'];
		
	}
	$chk=0;
	$sfname="";
	$slname="";
	$saddress="";
	$scity="";
	$sstate="";
	$scode="";
	$scountry="";
	$sphone="";
	$semail="";
	if(isset($_POST['shipping']) &&$_POST['shipping'] == 'on')$chk =1;
	else $chk = 0;
	if(isset($_POST['firstname'])){
	
			$bfname=$_POST['firstname'];
			$blname=$_POST['lastname'];
			$baddress=$_POST['address'];
			$bcity=$_POST['city'];
			$bstate=$_POST['state'];
			$bcode=$_POST['code'];
			$bcountry=$_POST['country'];
			$bphone=$_POST['phone'];
			$bemail=$_POST['email'];
		if($chk = 0){
			$sfname=$_POST['sfirstname'];
			$slname=$_POST['slastname'];
			$saddress=$_POST['saddress'];
			$scity=$_POST['scity'];
			$sstate=$_POST['sstate'];
			$scode=$_POST['scode'];
			$scountry=$_POST['scountry'];
			$sphone=$_POST['sphone'];
			$semail=$_POST['semail'];
		}else if($chk ==1){
			$sfname=$_POST['firstname'];
			$slname=$_POST['lastname'];
			$saddress=$_POST['address'];
			$scity=$_POST['city'];
			$sstate=$_POST['state'];
			$scode=$_POST['code'];
			$scountry=$_POST['country'];
			$sphone=$_POST['phon'];
			$semail=$_POST['email'];
		}
		$mop = $_POST['payment'];
		$totalPro=0;
		$gTotal=0;
		foreach($_SESSION['ct_cart'] as $item){
			$totalPro++;
			$gTotal +=($item['quantity'] * $item['price']);
		}
		$ord = new Order();
		//echo "<script>alert({$gTotal});</script>";
		$res =$ord->insertorder($userid,$totalPro,$gTotal);
		$queryOd="INSERT INTO orderdetails(oid,productid,quantity,price,discount,total) VALUES";
				foreach($_SESSION['ct_cart'] as $item){
					$pid= $item['id'];
					$qt= $item['quantity'];
					$pr= $item['price'];
					$tt = $qt * $pr;
					$queryOd .="({$res},{$pid},{$qt},{$pr},0,{$tt}),";
				}
		$queryOd = substr($queryOd,0,-1);
		$od = new OrderDetail();
		$resod= $od->insertOrderMain($queryOd);
		
		if(!$resod) echo "<script>alert('Error');</script>";
		else echo "<script>alert('Done');</script>";
		
		$bill = new Billing();
		$resbill = $bill->insertBilling($bfname,$blname,$bemail,$baddress,$bphone,$userid,$bcode,$bstate,$bcity,$bcountry,$res);
		$ship = new Shipping();
		if($chck = 1) $resship= $ship->insertShipping($bfname,$blname,$bemail,$baddress,$bphone,$userid,$bcode,$bstate,$bcity,$bcountry,$res);
		else $resship= $ship->insertShipping($sfname,$slname,$semail,$saddress,$sphone,$userid,$scode,$sstate,$scity,$scountry,$res);
		if($resship)echo "<script>alert('Your order has been placed.');</script>";
		else echo "<script>alert('Error');</script>";
		unset($_SESSION['ct_cart']);
	}
?>




<?php include('footer.php');?>	
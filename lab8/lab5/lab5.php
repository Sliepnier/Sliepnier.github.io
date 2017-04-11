<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lab5</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Itim|Pridi" rel="stylesheet">
	<?php 
	if(isset($_POST['birthday'])){
		$age = date_diff(date_create($_POST["birthday"]), date_create('today'))->y;
		if($age < 13){
			echo '<style>
		body{
			background-image: url(\'wpkid.jpg\');
			background-size: \'cover\';
		}
		p{
			font-family: \'Itim\', cursive;
			color: black;
		}
		input{
			font-family: \'Itim\', cursive;
		}
		select{
			font-family: \'Itim\', cursive;
		}
		div{
			font-family: \'Itim\', cursive;
			color: black;
		}
	</style>';
		}
		else if($_POST["gender"] = 'Male'){
			echo '<style>
		body{
			background-image: url(\'wpman.jpg\');
			background-size: \'cover\';
		}
		p{
			font-family: \'Pridi\', cursive;
			color: white;
		}
		input{
			font-family: \'Pridi\', cursive;
		}
		select{
			font-family: \'Pridi\', cursive;
		}
		div{
			font-family: \'Pridi\', cursive;
			color: white;
		}
	</style>';
		}
		else{
			echo '<style>
		body{
			background-image: url(\'wpwo.jpg\');
			background-size: \'cover\';
		}
		p{
			font-family: \'Itim\', cursive;
			color: black;
		}
		input{
			font-family: \'Itim\', cursive;
		}
		select{
			font-family: \'Itim\', cursive;
		}
		div{
			font-family: \'Itim\', cursive;
			color: black;
		}
	</style>';
		}

		}
		 ?>
	
</head>
<body>
	<form action="#" method="post">
		<p>First Name :</p>
		<input type="text" id="firstname" name="firstname"><br>
		<p>Last Name :</p>
		<input type="text" id="lastname" name="lastname"><br>
		<p>Birthday :</p>
		<input type="date" id="birthday" name="birthday"><br>
		<p>Gender :<br>
		<input type="radio" name="gender" value="Male" checked> Male
		<input type="radio" name="gender" value="Female"> Female </p>
		<p>Province :</p>
		<select name="province" id="province">
	      <option value="" selected>--------- เลือกจังหวัด ---------</option>
	      <option value="1">กรุงเทพมหานคร</option>
	      <option value="2">กระบี่ </option>
	      <option value="3">กาญจนบุรี </option>
	      <option value="4">กาฬสินธุ์ </option>
	      <option value="5">กำแพงเพชร </option>
	      <option value="6">ขอนแก่น</option>
	      <option value="7">จันทบุรี</option>
	      <option value="8">ฉะเชิงเทรา </option>
	      <option value="9">ชัยนาท </option>
	      <option value="10">ชัยภูมิ </option>
	      <option value="11">ชุมพร </option>
	      <option value="12">ชลบุรี </option>
	      <option value="13">เชียงใหม่ </option>
	      <option value="14">เชียงราย </option>
	      <option value="15">ตรัง </option>
	      <option value="16">ตราด </option>
	      <option value="17">ตาก </option>
	      <option value="18">นครนายก </option>
	      <option value="19">นครปฐม </option>
	      <option value="20">นครพนม </option>
	      <option value="21">นครราชสีมา </option>
	      <option value="22">นครศรีธรรมราช </option>
	      <option value="23">นครสวรรค์ </option>
	      <option value="24">นราธิวาส </option>
	      <option value="25">น่าน </option>
	      <option value="26">นนทบุรี </option>
	      <option value="27">บึงกาฬ</option>
	      <option value="28">บุรีรัมย์</option>
	      <option value="29">ประจวบคีรีขันธ์ </option>
	      <option value="30">ปทุมธานี </option>
	      <option value="31">ปราจีนบุรี </option>
	      <option value="32">ปัตตานี </option>
	      <option value="33">พะเยา </option>
	      <option value="34">พระนครศรีอยุธยา </option>
	      <option value="35">พังงา </option>
	      <option value="36">พิจิตร </option>
	      <option value="37">พิษณุโลก </option>
	      <option value="38">เพชรบุรี </option>
	      <option value="39">เพชรบูรณ์ </option>
	      <option value="40">แพร่ </option>
	      <option value="41">พัทลุง </option>
	      <option value="42">ภูเก็ต </option>
	      <option value="43">มหาสารคาม </option>
	      <option value="44">มุกดาหาร </option>
	      <option value="45">แม่ฮ่องสอน </option>
	      <option value="46">ยโสธร </option>
	      <option value="47">ยะลา </option>
	      <option value="48">ร้อยเอ็ด </option>
	      <option value="49">ระนอง </option>
	      <option value="50">ระยอง </option>
	      <option value="51">ราชบุรี</option>
	      <option value="52">ลพบุรี </option>
	      <option value="53">ลำปาง </option>
	      <option value="54">ลำพูน </option>
	      <option value="55">เลย </option>
	      <option value="56">ศรีสะเกษ</option>
	      <option value="57">สกลนคร</option>
	      <option value="58">สงขลา </option>
	      <option value="59">สมุทรสาคร </option>
	      <option value="60">สมุทรปราการ </option>
	      <option value="61">สมุทรสงคราม </option>
	      <option value="62">สระแก้ว </option>
	      <option value="63">สระบุรี </option>
	      <option value="64">สิงห์บุรี </option>
	      <option value="65">สุโขทัย </option>
	      <option value="66">สุพรรณบุรี </option>
	      <option value="67">สุราษฎร์ธานี </option>
	      <option value="68">สุรินทร์ </option>
	      <option value="69">สตูล </option>
	      <option value="70">หนองคาย </option>
	      <option value="71">หนองบัวลำภู </option>
	      <option value="72">อำนาจเจริญ </option>
	      <option value="73">อุดรธานี </option>
	      <option value="74">อุตรดิตถ์ </option>
	      <option value="75">อุทัยธานี </option>
	      <option value="76">อุบลราชธานี</option>
	      <option value="77">อ่างทอง </option>
	</select>	<br><br>
		<button type="button" id="cancel">Cancel</button><button type="submit" id="submit">Submit</button>
	</form><br>
	<div id="kumkwan"><?php if(isset($_POST["firstname"]) && isset($_POST["lastname"])){
		echo '<p>สวัสดี คุณ '.$_POST["firstname"].' '.$_POST["lastname"].'</p>';
	} ?><?php if(isset($_POST["province"])){
		echo '<img src= /sign/'.$_POST["province"].'.png width=\'100px\' height=\'100px\'>';
		}?>
		<p><?php
		if(isset($_POST["province"])){
			$objFopen = fopen('motto/'.$_POST["province"].'.txt', 'r');
			$file = fgets($objFopen, 4096);
			echo $file."<br>";
		}
		?></p></div>
</body>
</html>
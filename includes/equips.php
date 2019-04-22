<?php

$getAcc = mysql_query("SELECT `itemid`, `position` FROM `inventoryitems` WHERE `characterid` = '".$charid."' AND inventorytype = '-1' ORDER BY position DESC") or die (mysql_error());


while($gotAcc = mysql_fetch_array($getAcc)) {
	switch($gotAcc['position']) {
		case ($gotAcc['position'] == "-1" || $gotAcc['position'] == "-101"):$hat=$gotAcc['itemid'];break;
		case ($gotAcc['position'] == "-2" || $gotAcc['position'] == "-102"):$mask=$gotAcc['itemid'];break;
		case ($gotAcc['position'] == "-3" || $gotAcc['position'] == "-103"):$eyes=$gotAcc['itemid'];break;
		case ($gotAcc['position'] == "-4" || $gotAcc['position'] == "-104"):$ears=$gotAcc['itemid'];break;
		case ($gotAcc['position'] == "-5" || $gotAcc['position'] == "-105"):
			if(substr($gotAcc['itemid'], 0, 3) == 105) {
				$overAll = $gotAcc['itemid'];
			} else {
				$top = $gotAcc['itemid'];
			}
			if($gotAcc['position'] == "-105"){
				$overAll = "";
				$top = $gotAcc['itemid'];
			}
		break;
		case ($gotAcc['position'] == "-6" || $gotAcc['position'] == "-106"):$pants=$gotAcc['itemid'];break;
		case ($gotAcc['position'] == "-7" || $gotAcc['position'] == "-107"):$shoe=$gotAcc['itemid'];break;
		case ($gotAcc['position'] == "-8" || $gotAcc['position'] == "-108"):$glove=$gotAcc['itemid'];break;
		case ($gotAcc['position'] == "-9" || $gotAcc['position'] == "-109"):$cape=$gotAcc['itemid'];break;
		case ($gotAcc['position'] == "-10" || $gotAcc['position'] == "-110"):$shield=$gotAcc['itemid'];break;
		case ($gotAcc['position'] == "-11" || $gotAcc['position'] == "-111"):$wep = $gotAcc['itemid'];break;
		case ($gotAcc['position'] == "-112"):$ring1 = $gotAcc['itemid'];break;
		case ($gotAcc['position'] == "-113"):$ring2 = $gotAcc['itemid'];break;
		case ($gotAcc['position'] == "-115"):$ring3 = $gotAcc['itemid'];break;
		case ($gotAcc['position'] == "-116"):$ring4 = $gotAcc['itemid'];break;
		case ($gotAcc['position'] == "-17"):$necklace = $gotAcc['itemid'];break;
		case ($gotAcc['position'] == "-49"):$medal = $gotAcc['itemid'];break;
		case ($gotAcc['position'] == "-50"):$belt = $gotAcc['itemid'];break;
	}
}
$ai = 0;
if(!empty($hat)){
	$eq[$ai] = "<img src=\"GD/info_icons/Cap/0".$hat.".img/info.icon.png\" width=\"40\" alt=\"info.icon.png\" />";
}
if(!empty($mask)){
	$ai++;
	$eq[$ai] = "<img src=\"GD/info_icons/Accessory/0".$mask.".img/info.icon.png\" width=\"40\" alt=\"info.icon.png\" />";
}
if(!empty($eyes)){
	$ai++;
	$eq[$ai] = "<img src=\"GD/info_icons/Accessory/0".$eyes.".img/info.icon.png\" width=\"40\" alt=\"info.icon.png\" />";
}
if(!empty($ears)){
	$ai++;
	$eq[$ai] = "<img src=\"GD/info_icons/Accessory/0".$ears.".img/info.icon.png\" width=\"40\" alt=\"info.icon.png\" />";
}
if(!empty($overAll) || !empty($top)){
	$ai++;
	if(!empty($overAll)){
		$eq[$ai] = "<img src=\"GD/info_icons/Longcoat/0".$overAll.".img/info.icon.png\" width=\"40\" alt=\"info.icon.png\" />";
	} else {
		$eq[$ai] = "<img src=\"GD/info_icons/Coat/0".$top.".img/info.icon.png\" width=\"40\" alt=\"info.icon.png\" />";
	}
}
if(!empty($pants) && empty($overAll)){
	$ai++;
	$eq[$ai] = "<img src=\"GD/info_icons/Pants/0".$pants.".img/info.icon.png\" width=\"40\" alt=\"info.icon.png\" />";
}
if(!empty($shoe)){
	$ai++;
	$eq[$ai] = "<img src=\"GD/info_icons/Shoes/0".$shoe.".img/info.icon.png\" width=\"40\" alt=\"info.icon.png\" />";
}
if(!empty($glove)){
	$ai++;
	$eq[$ai] = "<img src=\"GD/info_icons/Glove/0".$glove.".img/info.icon.png\" width=\"40\" alt=\"info.icon.png\" />";
}
if(!empty($cape)){
	$ai++;
	$eq[$ai] = "<img src=\"GD/info_icons/Cape/0".$cape.".img/info.icon.png\" width=\"40\" alt=\"info.icon.png\" />";
}
if(!empty($shield)){
	$ai++;
	$eq[$ai] = "<img src=\"GD/info_icons/Shield/0".$shield.".img/info.icon.png\" width=\"40\" alt=\"info.icon.png\" />";
}
if(!empty($wep)){
	$ai++;
	$eq[$ai] = "<img src=\"GD/info_icons/Weapon/0".$wep.".img/info.icon.png\" width=\"40\" alt=\"info.icon.png\" />";
}
if(!empty($ring1)){
	$ai++;
	$eq[$ai] = "<img src=\"GD/info_icons/Ring/0".$ring1.".img/info.icon.png\" width=\"40\" alt=\"info.icon.png\" />";
}
if(!empty($ring2)){
	$ai++;
	$eq[$ai] = "<img src=\"GD/info_icons/Ring/0".$ring2.".img/info.icon.png\" width=\"40\" alt=\"info.icon.png\" />";
}
if(!empty($ring3)){
	$ai++;
	$eq[$ai] = "<img src=\"GD/info_icons/Ring/0".$ring3.".img/info.icon.png\" width=\"40\" alt=\"info.icon.png\" />";
}
if(!empty($ring4)){
	$ai++;
	$eq[$ai] = "<img src=\"GD/info_icons/Ring/0".$ring4.".img/info.icon.png\" width=\"40\" alt=\"info.icon.png\" />";
}
if(!empty($necklace)){
	$ai++;
	$eq[$ai] = "<img src=\"GD/info_icons/Accessory/0".$necklace.".img/info.icon.png\" width=\"40\" alt=\"info.icon.png\" />";
}
if(!empty($medal)){
	$ai++;
	$eq[$ai] = "<img src=\"GD/info_icons/Accessory/0".$medal.".img/info.icon.png\" width=\"40\" alt=\"info.icon.png\" />";
}
if(!empty($belt)){
	$ai++;
	$eq[$ai] = "<img src=\"GD/info_icons/Accessory/0".$belt.".img/info.icon.png\" width=\"40\" alt=\"info.icon.png\" />";
}
shuffle($eq);//$eq
?>
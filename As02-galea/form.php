<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Assignment 2</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>

</head>
<body id="main_body" >
	<?php 
		$first_name = "";
		$last_name = "";
		$area_code = "";
		$ph_mid = "";
		$ph_end = "";
		$street_addr = "";
		$street_addr2 = "";
		$city = "";
		$state = "";
		$zip_code = "";
		$valid = true;
		if (isset($_POST['submit'])) {
		  //do validation code here
		  if(!$_POST["country"]) {
			$country = "United States"; // set to USA if not entered
		  } else {
			$country = $_POST["country"];
		  }
		  if($_POST["first_name"] && strlen($_POST["first_name"]) > 2) {
			  $first_name = $_POST["first_name"];
		  } else {
			  $first_name = "";
			  $valid = false;
			  echo '<br/>Invalid first name.';
		  }
		  if($_POST["last_name"] && strlen($_POST["last_name"]) > 2) {
			  $last_name = $_POST["last_name"];
		  } else {
			  $last_name = "";
			  $valid = false;
			  echo '<br/>Invalid last name.';
		  }
		  if($_POST["area_code"] && strlen($_POST["area_code"]) == 3 && is_numeric($_POST["area_code"])) {
			  $area_code = $_POST["area_code"];
		  } else {
			  $area_code = "";
			  $valid = false;
			  echo '<br/>Invalid area code on phone number.';
		  }
		  if($_POST["ph_mid"] && strlen($_POST["ph_mid"]) == 3 && is_numeric($_POST["ph_mid"])) {
			  $ph_mid = $_POST["ph_mid"];
		  } else {
			  $ph_mid = "";
			  $valid = false;
			  echo '<br/>Invalid middle section on phone number.';
		  }
		  if($_POST["ph_end"] && strlen($_POST["ph_end"]) == 4 && is_numeric($_POST["ph_end"])) {
			  $ph_end = $_POST["ph_end"];
		  } else {
			  $ph_end = "";
			  $valid = false;
			  echo '<br/>Invalid end section on phone number.';
		  }
		  if($_POST["street_addr"] && strlen($_POST["street_addr"]) > 5) {
			  $street_addr = $_POST["street_addr"];
		  } else {
			  $street_addr = "";
			  $valid = false;
			  echo '<br/>Invalid street address.';
		  }
		  if($_POST["street_addr2"]) {
			  $street_addr2 = $_POST["street_addr2"];
		  } else {
			  $street_addr2 = "";
		  }
		  if($_POST["city"] && strlen($_POST["city"]) > 2) {
			  $city = $_POST["city"];
		  } else {
			  $city = "";
			  $valid = false;
			  echo '<br/>Invalid city.';
		  }
		  if($_POST["state"] && strlen($_POST["state"]) > 2) {
			  $state = $_POST["state"];
		  } else {
			  $state = "";
			  $valid = false;
			  echo '<br/>Invalid state.';
		  }
		  if($_POST["zip_code"] && strlen($_POST["zip_code"]) > 3) {
			  $zip_code = $_POST["zip_code"];
		  } else {
			  $zip_code = "";
			  $valid = false;
			  echo '<br/>Invalid zip code.';
		  }
		  if ($valid) {
			  print_r ($_POST);
			  die;
		  }
		}
	?>
	<img id="top" src="top.png" alt="">
	<div id="form_container">
	
		<h1><a>Assignment 2</a></h1>
		<form id="form_14288" class="appnitro"  method="post" action="form.php">
					<div class="form_description">
			<h2>Assignment 2</h2>
			<p>This is your form description. Click here to edit.</p>
		</div>						
			<ul >
			
					<li id="li_3" >
		<label class="description" for="element_3">Name </label>
		<span>
			<input id="first_name" name= "first_name" class="element text" maxlength="255" size="8" value="<?php print $first_name;?>"/>
			<label>First</label>
		</span>
		<span>
			<input id="last_name" name= "last_name" class="element text" maxlength="255" size="14" value="<?php print $last_name;?>"/>
			<label>Last</label>
		</span> 
		</li>		<li id="li_1" >
		<label class="description" for="element_1">Phone </label>
		<span>
			<input id="area_code" name="area_code" class="element text" size="3" maxlength="3" value="<?php print $area_code;?>" type="text"> -
			<label for="area_code">(###)</label>
		</span>
		<span>
			<input id="ph_mid" name="ph_mid" class="element text" size="3" maxlength="3" value="<?php print $ph_mid;?>" type="text"> -
			<label for="ph_mid">###</label>
		</span>
		<span>
	 		<input id="ph_end" name="ph_end" class="element text" size="4" maxlength="4" value="<?php print $ph_end;?>" type="text">
			<label for="ph_end">####</label>
		</span>
		 
		</li>		<li id="li_2" >
		<label class="description" for="element_2">Address </label>
		
		<div>
			<input id="street_addr" name="street_addr" class="element text large" value="<?php print $street_addr;?>" type="text">
			<label for="street_addr">Street Address</label>
		</div>
	
		<div>
			<input id="street_addr2" name="street_addr2" class="element text large" value="<?php print $street_addr2;?>" type="text">
			<label for="street_addr2">Address Line 2</label>
		</div>
	
		<div class="left">
			<input id="city" name="city" class="element text medium" value="<?php print $city;?>" type="text">
			<label for="city">City</label>
		</div>
	
		<div class="right">
			<input id="state" name="state" class="element text medium" value="<?php print $state;?>" type="text">
			<label for="state">State / Province / Region</label>
		</div>
	
		<div class="left">
			<input id="zip_code" name="zip_code" class="element text medium" maxlength="15" value="<?php print $zip_code;?>" type="text">
			<label for="zip_code">Postal / Zip Code</label>
		</div>
	
		<div class="right">
			<select class="element select medium" id="country" name="country"> 
			<option value="" selected="selected">Select a country</option>
			<?php
			$countries = array(
			"AF" => "Afghanistan",
			"AL" => "Albania",
			"DZ" => "Algeria",
			"AS" => "American Samoa",
			"AD" => "Andorra",
			"AO" => "Angola",
			"AI" => "Anguilla",
			"AQ" => "Antarctica",
			"AG" => "Antigua and Barbuda",
			"AR" => "Argentina",
			"AM" => "Armenia",
			"AW" => "Aruba",
			"AU" => "Australia",
			"AT" => "Austria",
			"AZ" => "Azerbaijan",
			"BS" => "Bahamas",
			"BH" => "Bahrain",
			"BD" => "Bangladesh",
			"BB" => "Barbados",
			"BY" => "Belarus",
			"BE" => "Belgium",
			"BZ" => "Belize",
			"BJ" => "Benin",
			"BM" => "Bermuda",
			"BT" => "Bhutan",
			"BO" => "Bolivia",
			"BA" => "Bosnia and Herzegovina",
			"BW" => "Botswana",
			"BV" => "Bouvet Island",
			"BR" => "Brazil",
			"IO" => "British Indian Ocean Territory",
			"BN" => "Brunei Darussalam",
			"BG" => "Bulgaria",
			"BF" => "Burkina Faso",
			"BI" => "Burundi",
			"KH" => "Cambodia",
			"CM" => "Cameroon",
			"CA" => "Canada",
			"CV" => "Cape Verde",
			"KY" => "Cayman Islands",
			"CF" => "Central African Republic",
			"TD" => "Chad",
			"CL" => "Chile",
			"CN" => "China",
			"CX" => "Christmas Island",
			"CC" => "Cocos (Keeling) Islands",
			"CO" => "Colombia",
			"KM" => "Comoros",
			"CG" => "Congo",
			"CD" => "Congo, the Democratic Republic of the",
			"CK" => "Cook Islands",
			"CR" => "Costa Rica",
			"CI" => "Cote D'Ivoire",
			"HR" => "Croatia",
			"CU" => "Cuba",
			"CY" => "Cyprus",
			"CZ" => "Czech Republic",
			"DK" => "Denmark",
			"DJ" => "Djibouti",
			"DM" => "Dominica",
			"DO" => "Dominican Republic",
			"EC" => "Ecuador",
			"EG" => "Egypt",
			"SV" => "El Salvador",
			"GQ" => "Equatorial Guinea",
			"ER" => "Eritrea",
			"EE" => "Estonia",
			"ET" => "Ethiopia",
			"FK" => "Falkland Islands (Malvinas)",
			"FO" => "Faroe Islands",
			"FJ" => "Fiji",
			"FI" => "Finland",
			"FR" => "France",
			"GF" => "French Guiana",
			"PF" => "French Polynesia",
			"TF" => "French Southern Territories",
			"GA" => "Gabon",
			"GM" => "Gambia",
			"GE" => "Georgia",
			"DE" => "Germany",
			"GH" => "Ghana",
			"GI" => "Gibraltar",
			"GR" => "Greece",
			"GL" => "Greenland",
			"GD" => "Grenada",
			"GP" => "Guadeloupe",
			"GU" => "Guam",
			"GT" => "Guatemala",
			"GN" => "Guinea",
			"GW" => "Guinea-Bissau",
			"GY" => "Guyana",
			"HT" => "Haiti",
			"HM" => "Heard Island and Mcdonald Islands",
			"VA" => "Holy See (Vatican City State)",
			"HN" => "Honduras",
			"HK" => "Hong Kong",
			"HU" => "Hungary",
			"IS" => "Iceland",
			"IN" => "India",
			"ID" => "Indonesia",
			"IR" => "Iran, Islamic Republic of",
			"IQ" => "Iraq",
			"IE" => "Ireland",
			"IL" => "Israel",
			"IT" => "Italy",
			"JM" => "Jamaica",
			"JP" => "Japan",
			"JO" => "Jordan",
			"KZ" => "Kazakhstan",
			"KE" => "Kenya",
			"KI" => "Kiribati",
			"KP" => "Korea, Democratic People's Republic of",
			"KR" => "Korea, Republic of",
			"KW" => "Kuwait",
			"KG" => "Kyrgyzstan",
			"LA" => "Lao People's Democratic Republic",
			"LV" => "Latvia",
			"LB" => "Lebanon",
			"LS" => "Lesotho",
			"LR" => "Liberia",
			"LY" => "Libyan Arab Jamahiriya",
			"LI" => "Liechtenstein",
			"LT" => "Lithuania",
			"LU" => "Luxembourg",
			"MO" => "Macao",
			"MK" => "Macedonia, the Former Yugoslav Republic of",
			"MG" => "Madagascar",
			"MW" => "Malawi",
			"MY" => "Malaysia",
			"MV" => "Maldives",
			"ML" => "Mali",
			"MT" => "Malta",
			"MH" => "Marshall Islands",
			"MQ" => "Martinique",
			"MR" => "Mauritania",
			"MU" => "Mauritius",
			"YT" => "Mayotte",
			"MX" => "Mexico",
			"FM" => "Micronesia, Federated States of",
			"MD" => "Moldova, Republic of",
			"MC" => "Monaco",
			"MN" => "Mongolia",
			"MS" => "Montserrat",
			"MA" => "Morocco",
			"MZ" => "Mozambique",
			"MM" => "Myanmar",
			"NA" => "Namibia",
			"NR" => "Nauru",
			"NP" => "Nepal",
			"NL" => "Netherlands",
			"AN" => "Netherlands Antilles",
			"NC" => "New Caledonia",
			"NZ" => "New Zealand",
			"NI" => "Nicaragua",
			"NE" => "Niger",
			"NG" => "Nigeria",
			"NU" => "Niue",
			"NF" => "Norfolk Island",
			"MP" => "Northern Mariana Islands",
			"NO" => "Norway",
			"OM" => "Oman",
			"PK" => "Pakistan",
			"PW" => "Palau",
			"PS" => "Palestinian Territory, Occupied",
			"PA" => "Panama",
			"PG" => "Papua New Guinea",
			"PY" => "Paraguay",
			"PE" => "Peru",
			"PH" => "Philippines",
			"PN" => "Pitcairn",
			"PL" => "Poland",
			"PT" => "Portugal",
			"PR" => "Puerto Rico",
			"QA" => "Qatar",
			"RE" => "Reunion",
			"RO" => "Romania",
			"RU" => "Russian Federation",
			"RW" => "Rwanda",
			"SH" => "Saint Helena",
			"KN" => "Saint Kitts and Nevis",
			"LC" => "Saint Lucia",
			"PM" => "Saint Pierre and Miquelon",
			"VC" => "Saint Vincent and the Grenadines",
			"WS" => "Samoa",
			"SM" => "San Marino",
			"ST" => "Sao Tome and Principe",
			"SA" => "Saudi Arabia",
			"SN" => "Senegal",
			"CS" => "Serbia and Montenegro",
			"SC" => "Seychelles",
			"SL" => "Sierra Leone",
			"SG" => "Singapore",
			"SK" => "Slovakia",
			"SI" => "Slovenia",
			"SB" => "Solomon Islands",
			"SO" => "Somalia",
			"ZA" => "South Africa",
			"GS" => "South Georgia and the South Sandwich Islands",
			"ES" => "Spain",
			"LK" => "Sri Lanka",
			"SD" => "Sudan",
			"SR" => "Suriname",
			"SJ" => "Svalbard and Jan Mayen",
			"SZ" => "Swaziland",
			"SE" => "Sweden",
			"CH" => "Switzerland",
			"SY" => "Syrian Arab Republic",
			"TW" => "Taiwan, Province of China",
			"TJ" => "Tajikistan",
			"TZ" => "Tanzania, United Republic of",
			"TH" => "Thailand",
			"TL" => "Timor-Leste",
			"TG" => "Togo",
			"TK" => "Tokelau",
			"TO" => "Tonga",
			"TT" => "Trinidad and Tobago",
			"TN" => "Tunisia",
			"TR" => "Turkey",
			"TM" => "Turkmenistan",
			"TC" => "Turks and Caicos Islands",
			"TV" => "Tuvalu",
			"UG" => "Uganda",
			"UA" => "Ukraine",
			"AE" => "United Arab Emirates",
			"GB" => "United Kingdom",
			"US" => "United States",
			"UM" => "United States Minor Outlying Islands",
			"UY" => "Uruguay",
			"UZ" => "Uzbekistan",
			"VU" => "Vanuatu",
			"VE" => "Venezuela",
			"VN" => "Vietnam",
			"VG" => "Virgin Islands, British",
			"VI" => "Virgin Islands, U.S.",
			"WF" => "Wallis and Futuna",
			"EH" => "Western Sahara",
			"YE" => "Yemen",
			"ZM" => "Zambia",
			"ZW" => "Zimbabwe"
			);

			//Examples of how to select the country that is selected, but also print out all countries
			foreach ($countries as $value) {
				if ($value == $country) {
					print '<option selected value="' . $value . '">' . $value . '</option>';
				} else {
					print '<option value="' . $value . '">' . $value . '</option>';
				}
			}
			?>

	
			</select>
		<label for="country">Country</label>
	</div> 
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="14288" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
		</li>
			</ul>
		</form>	
		<div id="footer">
			Generated by <a href="http://www.phpform.org">pForm</a>
		</div>
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
</html>


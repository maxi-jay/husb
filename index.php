<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php 
	define ('TITLE', 'HOME SERVICE');
	echo TITLE.' ::Simply the best' ;
	 ?> </title>

<!-- 	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/mystyle.css">
 -->

	<!-- <script type="text/javascript">
		
	</script>
	 -->


</head>
<body align="right">


	

		<?php 

// ARRAY differnt was to assign location in array
		// $STUDENTS = ['','',''];
		// $STUDENTS = array ("","","");
		// $STUDENTS = array (0=>"",
		// 				   1=>"",
		// 				   2=>"");
		// $STUDENTS[]="";
		// $STUDENTS[]="";
		// $STUDENTS[]="";

		$weather = array ("Rain","Sunshine","Snow","Hail","Sleet","Wind","Cloud");

		// var_dump($weather);
		// echo "<pre>";
		// print_r($weather);
		// echo "</pre>";

		// echo "<p style='color:red'>We've seen all kind of weather this month. At the begining of the month, we had $weather[2] and $weather[5]. Then came $weather[1] with a few $weather[6]s and some $weather[0]. At least we didn't get any $weather[3]' or $weather[4]</p><br>";

		// echo count($weather);

		// $cars = ['Volvo','GM','Fiat','Land rover','Ford'];
		// $total = count($cars);

		// for ($i=0; $i < $total; $i++) { 

		// 	echo "<p>".$cars[$i]."</p>";
		// 	# code...
		// }

		// $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");


		// 	$lists = count($countries);


		//  echo	"<select>";
		//  echo    "<option >Select Country</option>";
		//  	for ($i=0; $i < $lists; $i++){

		//   	echo "<option value=$i>$countries[$i]</option>";

		//  }
		//  echo	"</select><br><br>";

		$STUDENTS = array(['','',''],
						  ['','',''],
						  ['','','']);


		for ($i=0; $i < count($STUDENTS) ; $i++) { 
				for ($j=0; $j < count($STUDENTS[$i]); $j++) { 
						echo $STUDENTS[$i][$j];
				}
		}
		 

		$multiCity=array(
    array ('City', 'Country', 'Continent'),
    array ('Tokyo', 'Japan', 'Asia'),
    array ('Mexico City','Mexico', 'North America'),
    array ('New York City', 'USA', 'North America'),
    array ('Mumbai', 'India', 'Asia'),
    array ('Seoul', 'Korea', 'Asia'),
    array ('Shanghai', 'China', 'Asia'),
    array ('Lagos', 'Nigeria', 'Africa'),
    array ('Buenos Aires', 'Argentina', 'South America'),
    array ('Cairo', 'Egypt', 'Africa'),
    array ('London', 'UK','Europe')
);

		echo "<table border='1'>
				<tr>
					<th>City</th>
					<th>Country</th>
					<th>Continent</th>
				</tr>

		 	";
		// foreach ($multiCity as $multiCity) {
		// 	echo"<tr>
		// 			<td>$multiCity[0]</td>
		// 			<td>$multiCity[1]</td>
		// 			<td>$multiCity[2]</td>
					
		// 		</tr>";
		// 	# code...
		// }

		for ($i=0; $i < 11 ; $i++) { 
				echo "<tr>";
				for ($j=0; $j<3; $j++) { 
						echo "<td>".$multiCity[$i][$j]."</td>";
				}
				echo "<tr>";
		}

		echo"</table>"

		// 	function table(){
		// 	echo	"<table border='1'>";
		
		// 	echo	"<tr><th> S/N </th><th> Names </th></tr>";
		// 		for ($i=0; $i<=10; $i++){

		//  	echo "<tr><td> $i </td><td>ENGLISH</td></tr>";

		// }

		// echo "</table><br>";
		// }

		// echo table();


		// function greetings($timeofday){
		// 		echo "Good ".$timeofday;

		// }
		// $t='Afternoon';
		// greetings($t);


		// function user($gender=''){
		// 	if ($gender=='MALE') {
		// 		echo 'We have clippers for sale';
		// 		# code...
		// 	} else if ($gender=='FEMALE'){
		// 		echo 'We have bags and shoes for sale';
		// 		# code...
		// 	}else{
		// 		echo 'Can we meet you?';
		// 	}
			
		// }

		// user();




		// function calArea($l,$b){
		// 	area =$l*$b;
		// 	return area;
		// }

		// calArea(4,7)

		// function grade($score){

		// 	if ($score>70) {
		// 		# code...
		// 		return "<p style='color:blue'>A</p>";

		// 	} else if ($score>49 && $score <71){
		// 		# code...
		// 		return "<p style='color:blue'>B</p>";
		// 	}else{
		// 		return "<p style='color:red'>D</p>";
		// 	}
			
		// }

		//  echo grade(4);

		 // how to include a file into another file. 'require' can also used and teh difference between both is include displays other code but require doesn't. Also adding an _once  to the require/include make the file display once 
		 // include('footer.php');



		// echo	"<select>";
		// echo    "<option >Select year</option>";
		// 	for ($i=1990; $i<=2019; $i++){

		//  	echo "<option >$i</option>";

		// }
			
			
		// echo	"</select><br><br>";

		// $counter=0;
		// while ( $counter<= 100) {
		// 	echo "$counter <br>";
		// 	$counter=$counter+15;
		// 	# code...
			//another way to achieve result but a lil slower
			// if ($counter % 15 == 0) {
			// 	# code...
			// 	print($counter.'<br>');
			// }
			// $counter++;
	//	}



		?>	
		

	

<!-- <h3 style="align-content: center">SIGN UP </h3>
<input type="text" id="user" value="" placeholder="Username">
<input type="password" id="psd" value="" placeholder="Password">
<button type="button" class="btn btn-primary">Login</button>
 -->	

	<?php

		// $username = 'okkk';
		// $password = '';
		// if (strlen($username) >= 3 && $password !='') {
		// 	# code...
		// 	echo 'You are good to go';
		// } else {
		// 	# code...
		// 	echo 'Failed';
		// }
		

		// $age= 55;
		// $party='APG';
		// if ($age >= 70 || $party =='APC') {
		// 	# code...
		// 	echo 'You are eligible to contest';
		// } else {
		// 	# code...
		// 	echo 'Not eligible, kindly meet conditions for contesting';
		// }
		


		//  for ($i=0; $i<=10; $i++){

		//  	echo "$i <br>";

		// }

		



		// php comment 
		// always terminate in php (;)

		//echo "<h2>This is my page</h2>";

	// single quote does not interprete a variable whilc double comment does 
	//to concat aka join you use . rather than +   nate note 
	// constant are capital letter and you dont assign value to constant rather u define 

	#define ('MERCHANT','12333HTNM');

	#$school='Moat academy';

	#echo 'I am currently at'.$school.'with'.MERCHANT

	//$toy = 'kite';

	//echo $toy;

	//if ($toy !='') {echo $toy;
	//	# code...
	//}

	
	



	?>

<!-- 
		<script src="external.js" type="text/javascript"></script>
		<script src="js/jquery.js" type="text/javascript"></script>
		<script src="js/popper.min.js" type="text/javascript"></script>
		<script src="js/bootstrap.js" type="text/javascript"></script> -->
</body>
</html>
<?php
    $arr = array(
      "first"     => "text",
      "last"      => "text",
      "phone"     => "tel",
      "email"     => "email",
      "password"  => "password"
    );
	echo "<form action='#' method='post'>";
foreach($arr as $option => $type) {
	echo  "<label for='".$option."'>".$option."</label><br>
      <input type='".$type."' name='".$option."'><br>";
}
	echo "<br>
      <input type='submit' value='Submit'>
    </form>";
	
?>
<?php 

/**
* file:    as08.php
* author:  Anthony Galea (agalea@svsu.edu)
* date:    Sat Feb 13 2021
* description: this program implements the code
*   from Chapter 13 of the textbook, 
*   Fundamentals of Web Development
*/

error_reporting(0);

// Implement class Artist
class Artist {
	
	public static $artistCount = 0;
	
	private $firstName;
	private $lastName;
	private $birthDate;
	private $birthCity;
	private $deathDate;
	
	public function getFirstName() {
		return $this->firstName;
	}
	public function setFirstName($name) {
		$this->firstName = $name;
	}

	public function getLastName() {
		return $this->lastName;
	}
	public function setLastName($name) {
		$this->lastName = $name;
	}

	public function getBirthDate() {
		return $this->birthDate;
	}
	public function setBirthDate($date) {
		$this->birthDate = $date;
	}

	public function getBirthCity() {
		return $this->birthCity;
	}
	public function setBirthCity($city) {
		$this->birthCity = $city;
	}
	public function getDeathDate() {
		return $this->deathDate;
	}
	public function setDeathDate($date) {
		$this->deathDate = $date;
	}
	
	function __construct($firstName, 
	  $lastName, $city, $birth,$death=null) {
	  self::$artistCount++;
	  $this->firstName = $firstName;
	  $this->lastName  = $lastName;
	  $this->birthCity = $city;
	  $this->birthDate = $birth;
	  $this->deathDate = $death;
	}

	public function __toString() {
		return "First Name:\t" . $this->firstName . "\nLast Name:\t". $this->lastName . "\nBorn:\t" . $this->birthDate . " in " . $this->birthCity . "\nDied on:\t" . $this->deathDate;
	}
}

// Instantiate class Artist: 
// object "picasso"
$picasso = new Artist(
  "Pablo", 
  "Picasso", 
  "Malaga", 
  "October 25 1881",
  "April 8 1973"
); 

echo Artist::$artistCount . "<br>";


$picasso2 = new Artist(
  "Jim Bob", 
  "Picasso", 
  "Malaga", 
  "October 25 1881",
  "April 8 1973"
); 

echo Artist::$artistCount . "<br>";


// var_dump($picasso);

echo $picasso->__toString();

$picasso->setFirstName("Fred");

echo $picasso->__toString(); 

/*
$picasso->firstName = "Pablo";
$picasso->lastName  = "Picasso";
$picasso->birthCity = "Malaga";
$picasso->birthDate = "October 25 1881";
$picasso->deathDate = "April 8 1973";
*/

// Create function to print Artist objects
/*
function printArtist($artistObject) {
	echo $artistObject->firstName . " " 
	. $artistObject->lastName . " " 
	. $artistObject->birthCity . " " 
	. $artistObject->birthDate . " " 
	. $artistObject->deathDate ;
}
*/
// Actually print the "picasso" object
// printArtist ($picasso);

class Art {
	
	private $name;
	private $artist;
	private $createdYear;
	
    function __construct($name, 
	  $artist, $createdYear) {
	    $this->name = $name;
		$this->artist = $artist;
		$this->createdYear = $createdYear;
	  }
	public function __toString () {
		echo "Art name: " . $this->name;
	}
	public function getName() {
		return $this->name;
	}
	public function setName($name) {
		$this->name = $name;
	}
	
	public function getArtist() {
		return $this->artist;
	}
	public function setArtist($artist) {
		$this->artist = $artist;
	}

	public function getCreatedYear() {
		return $this->createdYear;
	}
	public function setCreatedYear($year) {
		$this->createdYear = $year;
	}
}

class Painting extends Art {
	
	public $medium;

	public function getMedium() {
		return $this->medium;
	}
	public function setMedium($medium) {
		$this->medium = $medium;
	}
	
}

class Sculpture extends Art {
	
	public $weight;

	public function getWeight() {
		return $this->weight;
	}
	public function setWeight($weight) {
		$this->weight = $weight;
	}
	
}
$guernica = new Painting ("guernica", $picasso, 1934);
$guernica->medium = "oil";

echo "<br><br>";

var_dump($guernica); 






















<?php 

/**
* file:    as08.php
* author:  Anthony Galea (agalea@svsu.edu)
* date:    Sat Feb 13 2021
* description: this program implements the code
*   from Chapter 13 of the textbook, 
*   Fundamentals of Web Development
*/

//error_reporting(0);

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

	public function __toString() {
		return "Art title:\t" . $this->name . "\nArtist:\t". $this->artist->__toString() . "\nYear created:\t" . $this->yearCreated;
	}


}

class Painting extends Art {
	
	public $medium;
	function __construct($name, 
	$artist, $createdYear, $medium) {
	  $this->name = $name;
	  $this->artist = $artist;
	  $this->createdYear = $createdYear;
	  $this->medium = $medium;
	}
	
	public function getMedium() {
		return $this->medium;
	}
	public function setMedium($medium) {
		$this->medium = $medium;
	}
	public function __toString() {
		return "Painting title:\t" . $this->name . "\nArtist:\t". $this->artist->__toString() . "\nYear created:\t" . $this->createdYear . "\nMedium:\t" . $this->medium;
	}
}

class Sculpture extends Art {
	
	public $weight;

	function __construct($name, 
	$artist, $createdYear, $weight) {
	  $this->name = $name;
	  $this->artist = $artist;
	  $this->createdYear = $createdYear;
	  $this->weight = $weight;
	}
	public function getWeight() {
		return $this->weight;
	}
	public function setWeight($weight) {
		$this->weight = $weight;
	}

	public function __toString() {
		return "Sculpture title:\t" . $this->name . "\nArtist:\t". $this->artist->__toString() . "\nYear created:\t" . $this->createdYear . "\nWeight:\t" . $this->weight;
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



$picasso2 = new Artist(
  "Jim Bob", 
  "Picasso", 
  "Malaga", 
  "October 25 1881",
  "April 8 1973"
); 



// var_dump($picasso);

echo $picasso->__toString();

$picasso->setFirstName("Fred");

echo $picasso->__toString(); 

$guernica = new Painting ("guernica", $picasso, 1934, "oil");

echo $guernica->__toString();
$thinker = new Sculpture ("The Thinker", $picasso2, 1903, 2545);

echo $thinker->__toString();

























<?php
// Get new instance of PDO object
$dbc = new PDO('mysql:host=127.0.0.1;dbname=codeup_pdo_test_db', 'mallory', 'malmal');

//Tell PDO to throw exceptions on error
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

// $query = 'CREATE TABLE national_parks (
//     id INT UNSIGNED NOT NULL AUTO_INCREMENT,
//     name VARCHAR(240) NOT NULL,
//     location VARCHAR(50) NOT NULL,
//     date_established DATE NOT NULL, 
//     area_in_acres INT NOT NULL, 
//     description VARCHAR(240) NOT NULL, 
// 	PRIMARY KEY (id)
// )';


// // // // Run query, if there are errors they will be thrown as PDOExceptions
//  $dbc->exec($query);


$national_parks = [
    ['name' => 'Acadia',   'location' => 'Maine', 'date_established' => '1919-02-26', 'area_in_acres' => '47389.67 ' , 'description' => 'Test' ],
    ['name' => 'American Samoa',   'location' => 'American Samoa', 'date_established' => '1988-10-31', 'area_in_acres' => '9000.00', 'description' => 'Test' ],
    ['name' => 'Arches',   'location' => 'Utah', 'date_established' => '1971-11-12', 'area_in_acres' => '76518.98 ', 'description' => 'Test'],
    ['name' => 'Badlands',   'location' => 'South Dakota', 'date_established' => '1978-11-10', 'area_in_acres' => '242755.94 ', 'description' => 'Test' ],
    ['name' => 'Big Bend',   'location' => 'Texas', 'date_established' => '1944-06-12', 'area_in_acres' => '172924.07 ', 'description' => 'Test'],
    ['name' => 'Crater Lake',   'location' => 'Oregon', 'date_established' => '1902-05-22', 'area_in_acres' => '183224.05 ', 'description' => 'Test' ],
    ['name' => 'Denali',   'location' => 'Alaska', 'date_established' => '1917-02-26', 'area_in_acres' => '4740911.72 ', 'description' => 'Test' ],
    ['name' => 'Dry Tortugas',   'location' => 'Florida', 'date_established' => '1992-10-26', 'area_in_acres' => '64701.22 ', 'description' => 'Test'],
    ['name' => 'Everglades',   'location' => 'Florida', 'date_established' => '1934-05-30', 'area_in_acres' => '1508537.90 ', 'description' => 'Test' ]
  
];

$stmt = $dbc->prepare("INSERT INTO national_parks(name, location, date_established, area_in_acres, description) VALUES (:name, :location, :date_established, :area_in_acres, :description)");


foreach ($national_parks as $national_park) {
	$stmt->bindValue(':name', $national_park['name'], PDO::PARAM_STR);
	$stmt->bindValue(':location', $national_park['location'], PDO::PARAM_STR);
	$stmt->bindValue(':date_established', $national_park['date_established'], PDO::PARAM_STR);
	$stmt->bindValue(':area_in_acres', $national_park['area_in_acres'], PDO::PARAM_INT);
	$stmt->bindValue(':description', $national_park['description'], PDO::PARAM_STR);
	
   
    $stmt->execute();

    echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
}



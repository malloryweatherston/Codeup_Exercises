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
//     area_in_acres FLOAT(20,2) NOT NULL, 
// 	PRIMARY KEY (id)
// )';


// // Run query, if there are errors they will be thrown as PDOExceptions
// $dbc->exec($query);


$national_parks = [
    ['name' => 'Acadia',   'location' => 'Maine', 'date_established' => '1919-02-26', 'area_in_acres' => '47,389.67 ' ],
    ['name' => 'American Samoa',   'location' => 'American Samoa', 'date_established' => '1988-10-31', 'area_in_acres' => '9,000.00' ],
    ['name' => 'Arches',   'location' => 'Utah', 'date_established' => '1971-11-12', 'area_in_acres' => '76,518.98 ' ],
    ['name' => 'Badlands',   'location' => 'South Dakota', 'date_established' => '1978-11-10', 'area_in_acres' => '242,755.94 ' ],
    ['name' => 'Big Bend',   'location' => 'Texas', 'date_established' => '1944-06-12', 'area_in_acres' => '172,924.07 ' ],
    ['name' => 'Congaree',   'location' => 'South Carolina', 'date_established' => '2003-11-10', 'area_in_acres' => '26,545.86 ' ],
    ['name' => 'Crater Lake',   'location' => 'Oregon', 'date_established' => '1902-05-22', 'area_in_acres' => '183,224.05 ' ],
    ['name' => 'Denali',   'location' => 'Alaska', 'date_established' => '1917-02-26', 'area_in_acres' => '4,740,911.72 ' ],
    ['name' => 'Dry Tortugas',   'location' => 'Florida', 'date_established' => '1992-10-26', 'area_in_acres' => '64,701.22 ' ],
    ['name' => 'Everglades',   'location' => 'Florida', 'date_established' => '1934-05-30', 'area_in_acres' => '1,508,537.90 ' ]
  
];

foreach ($national_parks as $national_park) {
    $query = "INSERT INTO national_parks(name, location, date_established, area_in_acres) VALUES ('{$national_park['name']}', '{$national_park['location']}', '{$national_park['date_established']}', '{$national_park['area_in_acres']}')";

    $dbc->exec($query);

    // echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;

}

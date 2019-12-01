<?php
function createCSV(){
  $file = "c:/xampp/htdocs/demo/last_ex/CSV.csv";

  //  Šia komandą naudojau MySql, kad įvesčiau duomenis į duomenų bazę iš CSV failo
  // CSV failas laiko 2019 spalio mėnesio įmonių duomenis
  'LOAD DATA INFILE 'c:/xampp/htdocs/demo/last_ex/CSV.csv'
        INTO TABLE csv
        FIELDS TERMINATED by \';\'
        LINES TERMINATED BY \'\n\'
        IGNORE 1 ROWS
        ('code', 'jarCode', 'name', 'municipality', 'ecoActCode', 'ecoActName', 'date', 'numInsured', 'debt', 'deferredDebt');
  ');
}
?>

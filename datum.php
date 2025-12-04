<?php

echo date("Y-m-d");
echo "<br>";

echo date("D j/n -y h:i a");
echo "<br>";

echo date("j.F -y");
echo "<br>";

echo date("j.F -y", 1500000);
echo "<br>";

echo "<hr>";
echo date("j.F -y", strtotime("2005-05-10"));
echo "<br>";

echo date("j.F -y", strtotime("last Friday of June"));
echo "<br>";

echo date("j.F -y", strtotime("last Friday of June", strtotime("2020-05-01")));
echo "<br>";

$tid=strtotime("Sista fredagen i juni");
var_dump($tid);
echo date("Y-m-d", $tid);

echo "<hr>";
$datum=new DateTime();
var_dump($datum);
echo $datum->format("j.F -y");
echo "<br>";

$datum=new DateTime("2020-05-10"); // Alltid År-månad-dag!
echo $datum->format("j.F -y");
echo "<br>";

$datum=new DateTime("last Friday of June");
echo $datum->format("j.F -y");
echo "<br>";

$datum=DateTime::createFromFormat("d/m/y", "04/05/06");
echo $datum->format("Y-m-d");
echo "<br>";

$datum=DateTime::createFromFormat("m/d/y", "04/05/06");
echo $datum->format("Y-m-d");
echo "<br>";

$datum=DateTime::createFromFormat("y/m/d", "04/05/06");
echo $datum->format("Y-m-d");
echo "<br>";

$datum=DateTime::createFromFormat("y z", "06 150");
echo $datum->format("Y-m-d");
echo "<br>";

echo "<hr>";
$datum1=new DateTimeImmutable();
$i=DateInterval::createFromDateString('1 year + 2 weeks');
var_dump($i);
$datum2=$datum1->add($i);
echo "Om " .$i->date_string . " är det " .$datum2->format("Y-m-d");
$dd=$datum1->diff($datum2);
echo "<br>Vilket är " . $dd->format("%a dagar");
var_dump($dd);

echo "<hr>";
$datum=new DateTime("last Friday of June");
echo $datum->format("j.F -y");
echo "<br>";

$nyttDatum=$datum->add(new DateInterval('P1Y14D'));
echo "Nytt datum: " .$nyttDatum->format('j.F -y');
echo "<br>";
echo "Tidigare datum: " .$datum->format('j.F -y');

echo "<hr>";
$datum=new DateTimeImmutable("last Friday of June");
echo $datum->format("j.F -y");
echo "<br>";

$nyttDatum=$datum->add(new DateInterval('P1Y14D'));
echo "Nytt datum: " .$nyttDatum->format('j.F -y');
echo "<br>";
echo "Tidigare datum: " .$datum->format('j.F -y');
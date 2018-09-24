<?php
$people = (int)readline();
$package = readline();
$total = 0;

if ($people <= 50) {
    $total = 2500;
    $hall = 'Small Hall';
} else if ($people <= 100) {
    $total = 5000;
    $hall = 'Terrace';
} else if ($people <= 120) {
    $total = 7500;
    $hall = 'Greet Hall';
} else {
    echo "We do not have an appropriate hall.";
    exit();
}

if ($package === 'Normal') {
    $total = ($total + 500) * 0.95;
} else if ($package === 'Gold') {
    $total = ($total + 750) * 0.9;
} else if ($package === 'Platinum') {
    $total = ($total + 1000) * 0.85;
}

$per_person = $total / $people;
$per_person = number_format($per_person,2,'.','');

echo "We can offer you the $hall\nThe price per person is $per_person\$";

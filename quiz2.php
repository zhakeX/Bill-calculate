<?php
echo "Quiz 01<br>";
// Initializing the multidimensional array with students' marks
$marks = [
    "Kamal" => [65, 70, 66],
    "Amali" => [68, 82, 75],
    "Rajeshan" => [84, 55, 73],
    "Joseph" => [47, 64, 78]
];

// Part (a): Calculate total marks of 3 terms for each student
$totalMarks = [];
foreach ($marks as $student => $terms) {
    $totalMarks[$student] = array_sum($terms);
}

// Display total marks for each student
foreach ($totalMarks as $student => $total) {
    echo "Total marks of {$student}: {$total}<br>";
}

echo "<br>Quiz 02<br>";
// Part (b): Calculate the average marks of the class for each term
$termSum = [0, 0, 0];
$NoOfStudents = count($marks);

foreach ($marks as $terms) {
    for ($i = 0; $i < 3; $i++) {
        $termSum[$i] += $terms[$i];
    }
}

for ($i = 0; $i < 3; $i++) {
    $average = $termSum[$i] / $NoOfStudents;
    $term = $i + 1;
    echo "Term {$term}: {$average} <br>";
}

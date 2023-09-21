<!DOCTYPE html>
<html style ="background: blue;">
<head>
    <title>Irene's Grades</title>
</head>

<body>
<?php
    $studentName = "Waweru Irene";
    $unit1 = 65;
    $unit2 = 70;
    $unit3 = 57;
    $unit4 = 71;

    $totalMarks = $unit1 + $unit2 + $unit3 + $unit4;

    $average = $totalMarks / 4;

    if ($average >= 70 && $average <= 100) {
        $grade = "A";
    } elseif ($average >= 60 && $average < 70) {
        $grade = "B";
    } elseif ($average >= 50 && $average < 60) {
        $grade = "C";
    } elseif ($average >= 40 && $average < 50) {
        $grade = "D";
    } else {
        $grade = "F";
    }
    echo "Student Name: $studentName<br>";
    echo "Total Marks: $totalMarks<br>";
    echo "Average Marks: $average<br>";
    echo "Grade: $grade<br>";

    if ($totalMarks >= 40) {
        echo "Student has passed the exam.";
    } else {
        echo "Student has not passed the exam.";
    }
?>

</body>
</html>
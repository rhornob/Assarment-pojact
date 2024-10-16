<?php
// Sample array of marks
$marks = [90, 99, 87, 78, 80]; // Example marks

// Calculate total marks
$total_mark = array_sum($marks);

// Calculate average marks
$average = $total_mark / count($marks);

// Determine the grade based on the average using switch-case
switch (true) {
    case ($average >= 80 && $average <= 100):
        $grade = 'A+';
        break;
    case ($average >= 70 && $average < 80):
        $grade = 'A';
        break;
    case ($average >= 60 && $average < 70):
        $grade = 'A-';
        break;
    case ($average >= 50 && $average < 60):
        $grade = 'B';
        break;
    case ($average >= 40 && $average < 50):
        $grade = 'C';
        break;
    case ($average >= 33 && $average < 40):
        $grade = 'D';
        break;
    default:
        $grade = 'F';
        break;
}

// Output the average and grade
echo "Average Marks: " . $average . "<br>";
echo "Grade: " . $grade;
?>

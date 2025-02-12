<?php
$weight = 70; 
$height = 1.75; 

$bmi = $weight / ($height * $height);


if ($bmi < 18.5) {
    $category = "Thiếu cân";
} elseif ($bmi < 24.9) {
    $category = "Bình thường";
} elseif ($bmi < 29.9) {
    $category = "Thừa cân";
} else {
    $category = "Béo phì";
}


echo "Chỉ số BMI: " . number_format($bmi, 2) . "\n";
echo "Xếp loại: $category";
?>

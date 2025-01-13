<?php
// اسم ملف العداد
$file = 'counter.txt';

// التحقق من وجود الملف، وإذا لم يكن موجودًا يتم إنشاؤه برقم ابتدائي
if (!file_exists($file)) {
    file_put_contents($file, data: 19873); // القيمة الابتدائية للعداد
}

// قراءة الرقم الحالي من الملف
$counter = (int)file_get_contents($file);

// زيادة الرقم بمقدار 1
$counter++;

// كتابة الرقم الجديد في الملف
file_put_contents($file, $counter);

// إرجاع الرقم الجديد
header('Content-Type: application/json');
echo json_encode(['counter' => $counter]);
?>
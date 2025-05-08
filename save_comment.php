<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $comment = $_POST['comment'];

    // فتح ملف التعليقات وإضافة التعليق الجديد
    $file = fopen("comments.txt", "a");
    if ($file) {
        // إضافة التعليق إلى الملف بتنسيق HTML
        fwrite($file, "<strong>" . htmlspecialchars($name) . ":</strong><p>" . htmlspecialchars($comment) . "</p><hr>\n");
        fclose($file);
        echo "تم إضافة التعليق بنجاح!";
    } else {
        echo "حدث خطأ أثناء إضافة التعليق!";
    }
}
?>

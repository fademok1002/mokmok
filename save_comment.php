
<?php
// التحقق إذا تم إرسال البيانات عبر POST
if (isset($_POST['name']) && isset($_POST['comment'])) {
    $name = htmlspecialchars($_POST['name']);
    $comment = htmlspecialchars($_POST['comment']);

    // فتح أو إنشاء الملف النصي
    $file = fopen("comments.txt", "a");

    // إضافة التعليق إلى الملف النصي مع اسم المرسل
    fwrite($file, "<strong>" . $name . ":</strong><p>" . $comment . "</p><hr>\n");

    // غلق الملف بعد الكتابة
    fclose($file);
}
?>

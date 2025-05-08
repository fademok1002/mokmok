<?php
// قراءة محتوى ملف التعليقات
if (file_exists("comments.txt")) {
    $comments = file_get_contents("comments.txt");
    echo $comments;
} else {
    echo "لا توجد تعليقات بعد.";
}
?>

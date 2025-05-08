
<?php
// التحقق إذا كان الملف موجودًا
if (file_exists('comments.txt')) {
    // قراءة محتويات الملف النصي
    $comments = file_get_contents('comments.txt');
    echo $comments;
} else {
    echo "لا توجد تعليقات بعد.";
}
?>

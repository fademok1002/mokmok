
<?php
function getVisitorIP() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        // عنوان IP عند الاتصال من شبكة مشتركة
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        // عنوان IP عند الاتصال عبر بروكسي
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        // عنوان IP العادي
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

$visitorIP = getVisitorIP();
echo "عنوان IP الزائر هو: " . $visitorIP;
?>

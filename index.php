<?php
$str1 = "<p> ✿   Hi, <em>Php!</em> ✿    </p>";
$str1 = trim($str1, " ");
$str1 = strip_tags($str1);
$str1 = htmlspecialchars($str1);
echo $str1;
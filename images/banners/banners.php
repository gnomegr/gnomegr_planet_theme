<?php
if ($_GET['page'] == "1") {
$files = glob("*.*");
        for ($i=0; $i<count($files); $i++)
        {
                $num = $files[$i];
                echo '<img src="'.$num.'" alt="" width="180" height="60">'."&nbsp;&nbsp;";
        }

}
elseif ($_GET['page'] == "2") {
$files = glob("*.*");
        for ($i=0; $i<count($files); $i++)
        {
                $path = "images/banners/";
                $num = $files[$i];
                echo '<img src="'.$path.''.$num.'" alt="" width="180" height="60">'."&nbsp;&nbsp;";
        }

}
else {
$files = glob("*.*");
        for ($i=0; $i<count($files); $i++)
        {
                $path = "images/banners/";
                $num = $files[$i];
                echo '<img src="'.$path.''.$num.'" alt="" width="180" height="60">'."&nbsp;&nbsp;";
                echo '<img src="'.$num.'" alt="" width="180" height="60">'."&nbsp;&nbsp;";
        }

}
?>


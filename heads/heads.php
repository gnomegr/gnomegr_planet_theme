<?php
if ($_GET['page'] == "1") {
$files = glob("*.*");
        for ($i=0; $i<count($files); $i++)
        {
                $num = $files[$i];
                echo '<img src="'.$num.'" alt="">'."&nbsp;&nbsp;";
        }

}
elseif ($_GET['page'] == "2") {
$files = glob("*.*");
        for ($i=0; $i<count($files); $i++)
        {
                $path = "heads/";
                $num = $files[$i];
                echo '<img src="'.$path.''.$num.'" alt="">'."&nbsp;&nbsp;";
        }

}
else {
$files = glob("*.*");
        for ($i=0; $i<count($files); $i++)
        {
                $path = "heads/";
                $num = $files[$i];
                echo '<img src="'.$path.''.$num.'" alt="">'."&nbsp;&nbsp;";
                echo '<img src="'.$num.'" alt="">'."&nbsp;&nbsp;";
        }

}
?>


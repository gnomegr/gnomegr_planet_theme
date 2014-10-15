<?
//----------The configuration section-----------//
$title		=	"Τα κεφάλια των συντελεστών!";	//title of image gallery//
$sub_title	=	"από τον Πλανήτη GNOME.gr"; 	//Optional sub title//

//----------The reading dir section-----------//

	$dir=".";

	$handle=opendir($dir);

	$i=0;

	while ( $file = readdir($handle) ) 
	{
		if (eregi(".png$",$file))
		{
			$folder[$i]=$file;
			$i=$i+1;
		}
 	};

	$photos = $i;
	closedir($handle);
	sort($folder);

//----------The header section-----------//

print "<html>\n";
print "<head>\n";
print "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />  \n";
print " <style type=\"text/css\">\n    <!--\n    a:active {}\n    a:hover {color: #0099FF}\n    a:link {}\n    a:visited {}\n    -->\n";
print " </style>\n";

print "<title>$title</title></head>\n";
print "<body bgcolor=\"#eee\" text=\"#FFFFFF\" link=\"#FFFFFF\" vlink=\"#FFFFFF\" alink=\"#FFFFFF\">\n\n";
print "<div align=\"center\">\n";
print "<font size=\"+2\" color=\"#0099FF\">\n";
print "<b>$title</b></font><br>\n\n";
print "<font size=\"-2\" color=\"#000\">\n";
print "<b>$sub_title</b></font><p>\n\n";

//----------The main section-----------//

for ($count=0; $count < $photos; $count++) 
{
	print "    <img src=\"$folder[$count]\">"; 
}

print "<p>\n\n";
//----------The end :)-----------//

print "</body>\n";
print "</html>";

?>

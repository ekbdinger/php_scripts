<?php

/*
 * the strlen() function counts the number of characters in a string
 *
*/

$email = 'test@email.com';

$email_len = strlen($email);  
/* If I had quotes around this than would just literally print the text, that's what I had originally */

echo " <strong> ";
echo $email_len;
echo "</strong><br /> <br />";
echo "This is how many characters are in the string $email using the <strong> strlen()</strong> function";
echo "<br />";
echo "<br />";



/*
 *
 * strip_tags() removes PHP and HTML from a string
*/

$junktext = '<strong>this is some text </strong>';
echo $junktext;
echo "<br />";
echo "<br />";
$cleantext = strip_tags($junktext);
echo $cleantext;
echo "<br /> <br />";


// This worked
// you can even specify just certain HTML tags to remove, so this is pretty useful. I could even use this for our little URL problem.  

/*
 * trying out the str_replace() function
 *
*/

$old_url = 'href="/pressflow/node/10029"';


$new_url = str_replace("pressflow", "d7pf", $old_url);
echo $new_url;

// so this works


?>

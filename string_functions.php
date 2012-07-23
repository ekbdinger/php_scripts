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





?>
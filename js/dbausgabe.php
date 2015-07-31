<?php
//connect to MySQL
$connect = mysql_connect('localhost', 'pcdirk', 'alfies66') 
or die('Hey loser, check mal deine datenbank zugänge.');
//make sure we’re using the right database
mysql_select_db('test');
$query = 'SELECT user_login, user_nicename, user_email, user_status, user_url ' .
'FROM user ' .
'WHERE user_status=0 ' .
'ORDER BY user_login';
$results = mysql_query($query)
or die(mysql_error());
while ($row = mysql_fetch_assoc($results)) {
foreach ($row as $val1) {
echo $val1;
echo " ";
}
echo '<br>';
}
?>
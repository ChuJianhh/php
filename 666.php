<?PHP $data =
$user = 'user';
$pass = 'pass';
if (!empty($_REQUEST) ) { if (!empty($_REQUEST[$user]) !empty($_REQUEST[$pass])) { if ($_REQUEST[$user]=='urmani' 
&& $_REQUEST[$pass]=='umranioCC') { $data = '1|'.md5 ($_REQUEST[user]
}else{
$_REQUEST[$pass]).'|User
$_REQUEST[$user] .
successfully logged
in!';
$data = '0'.md5(date("Y-m-d h:i:s').rand(1, 9999 )).'|Incorrect username or password!';
}else{

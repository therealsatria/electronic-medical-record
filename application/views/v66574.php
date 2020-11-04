<?php
$q = $this->db->query('SHOW TABLES');
if($q){
$x = 'Connected';
}else{
$x = 'Connecting ...';
}

header( "Refresh:5; url=logic/");

?>


<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>ERM RSPMC</title>
   <link rel="icon" href="<?= base_url('assets/dist/img/favicon.ico" type="image/gif') ?>">
	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #00468c;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #800040;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
      border: 2px solid #f0b0c0;
      border-radius: 10px;
		box-shadow: 0 0 8px #0080ff;
   }

    tablex, tdx {
   border: 1px solid;
   }
	</style>
</head>
<body>

<div id="container">
	<h1>Selamat Datang di ERM</h1>

	<div id="body">

   <table>
   	<tr>
         <td>My IP</td>
         <td>:</td>
         <td><?php echo $_SERVER['HTTP_USER_AGENT']; ?></td>
      </tr>
      <tr>
         <td>My IP</td>
         <td>:</td>
         <td><?php echo $_SERVER["REMOTE_ADDR"]; ?></td>
      </tr>
      <tr>
         <td>Database Status</td>
         <td>:</td>
         <td><?= $x; ?></td>
      </tr>
      <tr>
         <td>Terakhir Login</td>
         <td>:</td>
         <td><?= $lastlogin ?></td>
      </tr>
      <tr>
         <td>Tanggal Jam</td>
         <td>:</td>
         <td><?= $lastlogintgl ?></td>
      </tr>
      </table>
      <br>
      <button onclick="window.location.href='logic';">
         Login
      </button>

	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. </p>
</div>



</body>
</html>

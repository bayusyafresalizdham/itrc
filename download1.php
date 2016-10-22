<?php
    include_once 'Database.php';
    $db = new Database();
    $res = $db->query("select * from download where id='2'");
    while($row = $res->fetch_assoc()){
      $name= $row['name'];
    }
    header('Content-Description: File Transfer');
    header('Content-Type: application/force-download');
    header("Content-Disposition: attachment; filename=\"" . basename($name) . "\";");
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($name));
    ob_clean();
    flush();
    readfile("".$name);
    exit;
	echo "<script>document.location = 'index.php'</script>"
?>

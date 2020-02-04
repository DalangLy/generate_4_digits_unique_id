<?php
//error_reporting(E_ALL);
//var_dump($_SERVER);
$post_data = $_POST['data'];
if (!empty($post_data)) {
    //$dir = '/Users/oxygen/Downloads/';
    $dir = '';//current directory
    //$file = uniqid().getmypid();
    $file = 'unique_id_list';
    $filename = $dir.$file.'.json';
    $handle = fopen($filename, "w");
    fwrite($handle, $post_data);
    fclose($handle);
    echo $file;
}
?>
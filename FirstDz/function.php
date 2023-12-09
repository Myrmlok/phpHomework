<?php
function _p( $data) {
    echo"<pre>";
    echo (is_array($data)?print_r($data):$data);
    echo"</pre>";
}
function foo(&$data,$is_array=true) {
    $data["Login"]="Dima";
    return $data;
}
?>
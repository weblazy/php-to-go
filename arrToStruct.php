<?php
include_once 'arr.php';
$arr = getArr();
$content = 'package arr

type (' . "\n";
foreach ($arr as $key => $value) {
    $content = $content . ucfirst($key) . "Request" . " struct {\n";
    foreach ($value as $field => $value2) {
        if ($field != "verify") {
            $content = $content . ucfirst($field) . " string `json:\"$field\"`\n";
        }
    }
    $content = $content . "}\n";
    $content = $content . ucfirst($key) . "Response" . " struct {\n";
    $content = $content . "}\n";
}
$content = $content . ")";
file_put_contents("struct.go", $content);

$shell = "goimports -l -w *.go";
exec($shell, $result, $status);
if ($status) {
    echo "shell命令{$shell}执行失败";
} else {
    echo "shell命令{$shell}成功执行, 结果如下:\n";
    print_r($result);
}
// file_put_contents("struct.go", $content, FILE_APPEND);

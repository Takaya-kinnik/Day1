<?php
$firstName = $_GET["first_name"];
$lastName = $_GET["last_name"];

$random = rand(0, 6);
$result;
switch ($random) {
    case 0:
        $result = "大吉";
        break;
    case 1:
        $result = "吉";
        break;
    case 2:
        $result = "中吉";
        break;
    case 3:
        $result = "小吉";
        break;
    case 4:
        $result = "末吉";
        break;
    case 5:
        $result = "凶";
        break;
    case 6:
        $result = "大凶";
        break;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>占い結果</title>

</head>
<body>
    <?php
        echo $firstName . $lastName . "さん";
        echo "<br/>";
        echo "あなたの今日の運勢は" . $result . "です。";
    ?>
</body>
</html>
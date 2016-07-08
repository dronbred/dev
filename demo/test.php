<?

//$arr = ["name" => "John",
//        "login"=> "dronbred",
//        "age" => 25
//];
//
//foreach ($arr as $key => $valenok){
//    echo "$key : $valenok <br>";
//}

$nums = [1,2,3,4,6];
print_r($nums);
foreach ($nums as &$znach)
    echo "<br>";
    $znach *=10;
print_r($nums);


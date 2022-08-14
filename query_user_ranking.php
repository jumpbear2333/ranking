<?php

include_once "common.php";

$dataList = json_decode(file_get_contents(RANKING_LIST),true);


if (!isset($argv[1])){
    foreach ($dataList as $key=>&$value){
        $value[USER_RANKING]=$key;
    }
    print_ranking($dataList);
    exit();
}

$name = $argv[1];


//self result
$userResult = [];
//-10~10 user result
$otherUserList = [];


for ($index=0;$index<count($dataList);$index++){
    if ($dataList[$index][USER_NAME]==$name){
        for ($i=-10;$i<10;$i++){
            if ($i==0){
                $userResult = $dataList[$index];
                $userResult[USER_RANKING] = $index;
            }
            $dataList[$index+$i][USER_RANKING] = $index+$i;
            $otherUserList[] = $dataList[$index+$i];
        }
        break;
    }
}

//echo ranking list
echo "Your score: ".$userResult[USER_SCORE]."\n";
echo "Your ranking: ".$userResult[USER_RANKING]."\n";
print_ranking($otherUserList,$userResult[USER_NAME]);

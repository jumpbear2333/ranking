<?php

include_once "common.php";

function main(){

    //result record
    $result = [];

    //record name List
    $nameUniqueList = [];

    for ($index = 0;$index<100000;$index++){

        //generate user score
        $randomScore = rand(1,10000);

        //generate user name
        $username = generate_name($nameUniqueList);

        //generate random time
        $time = randomDate();

        //result record
        $result []= [
            USER_NAME=>$username,
            USER_SCORE=>(string)$randomScore,
            USER_DATA_UPDATE_TIME=>$time
        ];
    }

    // record score into file
    file_put_contents(USER_DATA_FILE,json_encode($result));
}


function generate_name($nameUniqueList) {
    $chars = USER_NAME_RANGE;
    $name = '';
    while (true){
        for ( $i = 0; $i < 10; $i++ ) {
            $name .= $chars[mt_rand(0, strlen($chars) - 1)];
        }
        if (!isset($nameUniqueList[$name])){
            break;
        }else{
            $name = '';
        }
    }

    return $name;
}

function randomDate(){

    // 1 day = 86400 in time()
    $day = ONE_DAY_IN_TIME;

    $start = strtotime(date("Y-m-d",time()));

    $end = $start+ $day;

    $timestamp = rand($start, $end);

    return date("Y-m-d H:i:s", $timestamp);

}

main();




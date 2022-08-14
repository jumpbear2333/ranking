<?php

include_once "common.php";

$dataList = json_decode(file_get_contents(USER_DATA_FILE),true);

//sort by score,time
$sort = array_column($dataList, USER_SCORE);
$sort2 = array_column($dataList, USER_DATA_UPDATE_TIME);
array_multisort($sort,SORT_DESC,$sort2,SORT_ASC,$dataList);

file_put_contents(RANKING_LIST,json_encode($dataList));

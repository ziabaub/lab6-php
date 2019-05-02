<?php
/**
 * Created by PhpStorm.
 * User: ziadelsarrih
 * Date: 2019-04-27
 * Time: 13:01
 */


/**
 * @param $arr
 * @return string
 * handle the $_post
 */
function init($arr){
     if (checkInput($arr)){
         return getValueByString($arr);
     }else{
         return "fill all checkboxes";
     }
}
/**
 * @param $arr
 * @return bool
 * this function to check
 * if the content are empty
 */
function checkInput($arr)
{
    $count = 1;
    foreach ($arr as $value => $arrayValue) {
        $count++;
    }
   return($count==7);

}


/**
 * @param $arr
 * @return string
 * this function split the original array by ',' and it's return
 * the value like string it work by reference
 */

function getValueByString($arr)
{
    $stringValue = "";
    foreach ($arr as $value) {
        $stringValue = $stringValue . $value . ",";
    }
    return $stringValue;

}
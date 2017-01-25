<?php
/**
 * Created by PhpStorm.
 * User: comol
 * Date: 11/09/2016
 * Time: 11:09 AM
 */
require_once ("../includes/initialize.php");


include_layout_template('header.php');

$user =User::find_by_id(1);

echo $user->first_name . '<br/>';

echo $user->full_name();

echo "<br/>";

$user_set=User::find_all();

foreach($user_set as $user){

    echo $user->first_name;
}
echo "<hr/>";

include_layout_template('footer.php');


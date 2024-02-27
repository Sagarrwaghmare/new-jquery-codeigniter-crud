<?php

function user_container($id,$name,$email,$date_cr,$date_up){
    echo "<tr >
    <td>$id</td>
    <td>$name</td>
    <td>$email</td>
    <td>$date_cr</td>
    <td>$date_up</td>
    <td>
        <a class='btn btn-outline-success' href='".base_url('user/update_user_demo/')."$id'>Update</a>
        <a class='btn btn-outline-danger disabled' href='".base_url('user/delete_user/')."$id'>Delete</a>
    </td>
    </tr>";
}
function dateChanger($str){
    $months = ['Jan','Feb','March','April','May','June','July','Aug','Sept','Oct','Nov','Dec'];
    list($year,$month,$day) = explode('-',$str);
    return $day." ".$months[$month - 1]." ".$year;
}

?>
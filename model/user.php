<?php
function checkusers($user, $pass)
{
    $sql = "SELECT * FROM users WHERE user= ' " . $user . " ' AND pass=' " . $pass . " '";
    return get_one($sql);
}

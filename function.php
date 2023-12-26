<?php
 
 function is_admin()
 {
    if(isset($_SESSION['admin_id']))
    {
        return true;
    }
    return false;
 }

?>
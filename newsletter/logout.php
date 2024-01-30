<?php
session_start();
unset( $_SESSION['n_userNames'] );
unset( $_SESSION['n_user_id'] );
unset( $_SESSION['n_userTitle'] );
unset( $_SESSION['n_isUserAdmin'] );
unset( $_SESSION['n_GroupName'] );
unset( $_SESSION['n_UserGroupId'] );
unset( $_SESSION['n_UserPicture'] );

session_destroy();

header("Location: login.php");

?>
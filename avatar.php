<?php

require_once("../wp-load.php");
    $user_id = get_current_user_id();

$imgTagAva = apply_filters( 'bp_group_request_user_avatar', bp_core_fetch_avatar( array( 'item_id' => $user_id, 'type' => 'full', 'alt' => sprintf( __( 'Profile picture of %s', 'buddypress' ), bp_core_get_user_displayname( $user_id ) ) ) ) );

$name = bp_core_get_user_displayname( $user_id );

echo $imgTagAva;

echo "<p class='name'><b>Olá $name!</b></p>";


?>


<style>
.avatar {border-radius:1000px !important; margin-left:-66px; width:120px; height:120px; border:3px solid silver; z-index:999; position:fixed; top: 30px;}

.name {width:100% !important; position:fixed; margin:0px; left:-3px; font-weight:900px !important; text-align:center; padding:0px; top:165px; z-index:999; color:black !important; font-size:1.1em;}

</style>

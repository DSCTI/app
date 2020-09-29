<?php

require_once("../wp-load.php");

$user_id = $_GET["id"];

$imgTagAva = apply_filters( 'bp_group_request_user_avatar', bp_core_fetch_avatar( array( 'item_id' => $user_id, 'type' => 'full', 'alt' => sprintf( __( 'Profile picture of %s', 'buddypress' ), bp_core_get_user_displayname( $user_id ) ) ) ) );

$name = bp_core_get_user_displayname( $user_id );

if($user_id != null) {
echo $imgTagAva;
}

?>

<style>

.avatar {border-radius:1000px !important; width:120px; height:120px; border:3px solid silver; z-index:999; }

</style>

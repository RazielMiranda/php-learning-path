<?php 
function MyUserRoles() {
	if( is_user_logged_in() ) {
	 	$user = wp_get_current_user();
		 $roles = array($user->roles);
		
		 return $roles; 
	 
	} else {
		 return array();
	 
	}
}
$myControl = MyUserRole();
if ($myControl['0'] == 'subscriber') {
    echo "<style> #block-this-element { display: none !important; }";
}else{
    echo "<style> ##block-this-element { display: show !important; }";
}

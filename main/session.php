<?php
function sessionStart($lifetime,$path,$domain,$httpOnly,$secure){
session_set_cookie_params($lifetime,$path,$domain,$httpOnly,$secure);
session_start();
}
sessionStart(0,'/','localhost',1,0);

?>
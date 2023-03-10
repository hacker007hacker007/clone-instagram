<?php 
include "lib/includes/session.class.php";
session::start();
print("_session\n");
print_r($_SESSION);

if (isset($_GET['clear'])) {
    print("cleaning..\n");
    Session::unset();
}

if (isset($_SESSION['a'])) {
    printf("a already exits.... value: ".Session::get('a'). "\n");
} else {
    Session::set('a', time());
    printf("assigning the value.... value: $_SESSION[a] \n");
}
if (isset($_GET['destory'])) {
    printf("destroy...\n");
    Session::destroy();
}






?>




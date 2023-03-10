<?php

include "lib/load.php";

?>

<!-- this is head -->
<?php convert("head"); ?>
<!-- <body> -->

<!--this head-->
<?php convert("header"); ?>

<!-- <main> -->

<!-- signup -->
<?php convert("signuptemp");?>
<!-- </main> -->
<pre>
<!-- <footer> -->
<?php convert("footer");

print_r($_SERVER);
print_r($_SERVER['PHP_SELF']);

?>
</pre>
<!-- </footer> -->


<script src="/amma/assets/dist/js/bootstrap.bundle.min.js"></script>


<!-- </body> -->

</html>
<?php
include "header.php";

session_start();

?>
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?php echo"Hoşgeldin ".$_SESSION["user"]."".$_SESSION["userid"]; ?>
</h1>
                </div>
            </div>

            <!-- ... Your content goes here ... -->
            
        </div>
    </div>
<?php
include "footer.php";
 ?>

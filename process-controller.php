<?php
    require_once './data-controller.php';
    
    if(isset($_POST['langId'])) {
        $langId              =           $_POST['langId'];

        $dController         =           new DataController();

        $frameworks          =           $dController->frameworkListing($langId);

        echo json_encode($frameworks);
    }

    elseif(isset($_POST['langId'])) {
        $framId              =           $_POST['langId'];

        $dController         =           new DataController();
        
        $version             =           $dController->versionListing(langId);

        echo json_encode($version);

    }
?>
<?php
    include_once './db-config.php';

    class DataController {
        //  ------------ [ Language Listing ] ------------------------
            public function getLanguages() {
                $data            =           array();
                $db              =           new DBController();
                $conn            =           $db->connect();

                $sql             =           "SELECT * FROM office";
                $result          =           $conn->query($sql);
                if($result->num_rows > 0) {
                    $data        =           mysqli_fetch_all($result, MYSQLI_ASSOC);
                }
              
               $db->close($conn);
               return $data;
            }

        //  ------------- [ Framework Listing ] -----------------------
            public function frameworkListing($languageId) {
                $data           =            array();

                $db             =            new DBController();
                $conn           =            $db->connect();

                $sql            =            "SELECT * FROM employees WHERE division = '$languageId'";
                $result         =            $conn->query($sql);

                if($result->num_rows > 0) {
                    $data       =            mysqli_fetch_all($result, MYSQLI_ASSOC);
                }

                $db->close($conn);
                return $data;
            }

        // --------------- [ Version Listing ] -------------------------
            public function versionListing($languageId) {
                $data           =           array();

                $db             =           new DBController();
                $conn           =           $db->connect();
                $sql            =           "SELECT * FROM employees WHERE division = '$languageId'";
                $result         =           $conn->query($sql);

                if($result->num_rows > 0) {
                    $data       =           mysqli_fetch_all($result, MYSQLI_ASSOC);
                }

                $db->close($conn);
                return $data;
            }
    }

?>
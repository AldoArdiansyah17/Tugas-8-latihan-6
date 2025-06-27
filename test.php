<?php
function testHomePage() {
    $output = file_get_contents("http://localhost:8081");
    if (strpos($output, "Halo dari aplikasi PHP sederhana!") !== false) {
        echo "TEST PASSED\n";
        return true;
    } else {
        echo "TEST FAILED\n";
        return false;
    }
}

testHomePage();
?>

<?php
include("../db.php");
if (isset($_GET['id'])) {
    $id = (int) $_GET['id']; // safety
    $select = "SELECT * FROM session_tb WHERE id = $id";
    $result = $con->query($select);
    $row = $result->fetch_assoc();
    if($row['role']==1){
        echo "<script>
            alert('Admin user cannot be deleted');
            window.location.href = 'index.php';
        </script>";
        exit();
    }
    $sql = "DELETE FROM session_tb WHERE id = $id";
    $res = $con->query($sql);

    if ($res) {
        echo "<script>
            alert('User deleted successfully');
            window.location.href = 'index.php';
        </script>";
    } else {
        echo "Delete failed: " . $con->error;
    }
}
?>

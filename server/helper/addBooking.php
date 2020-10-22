<?php
    require_once "common.php";
    $dao = new InterviewDAO();

    $result = $dao->createBooking('Gflhrz9j2G', 1, $_POST['radio_timeslot']);

    header("Location: ../../../../test/guugle-main/guugle/main_page/profile.php");

    // Add error message here if booking already exists
    return $result;
?>
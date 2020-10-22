<?php
    require_once "common.php";
    $dao = new InterviewDAO();

    $bookingArray = $dao->getBookings();
    $result = array("bookings" => array());

    foreach($bookingArray as $booking){
        $result["bookings"][] = array(
            "user_id" => $booking->getUserId(),
            "interviewer_id" => $booking->getInterviewerId(),
            "timeslots" => $booking->getTimeslots()
        );
    }

    echo json_encode($result);
?>
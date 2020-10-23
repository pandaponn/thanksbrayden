<?php
    session_start();
    $id = $_SESSION['id'];
    require_once "common.php";

    //define("POST_LIMIT", 12); 

    $dao = new UserDAO();

    // if (isset($_GET['higherThanID']) && $_GET['higherThanID'] > 0) {
    //     $postArray = $dao->getHigherThanID($_GET['higherThanID'], POST_LIMIT);
    // } else {
    //     $postArray = $dao->getAllPosts(POST_LIMIT);
    // }

    $userArray = $dao->getUsers($id);

    $result = array("user" => array() );

    foreach ($userArray as $user) {
        $result["user"][] = array(
            "id" => $user->getId(),
            "dname" => $user->getDname(),
            "fname" => $user->getFname(),
            "lname" => $user->getLname(),
            "email" => $user->getEmail(),
            "photoURL" => $user->getPhotoURL(),
            "job" => $user->getJob(),
            "company" => $user->getCompany(),
            "industry" => $user->getIndustry(),
            "specialization" => $user->getSpecialization(),
        );
    }

    echo json_encode($result); 
?>
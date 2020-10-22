<?php
    class InterviewDAO{

        // public function createPost($title, $username) {
        //     $conn = new ConnectionManager();
        //     $pdo = $conn->getConnection();

        //     $sql = "INSERT INTO `post` (`title`, `username`, `likes`) VALUES (:title, :username, 0)";

        //     $stmt = $pdo->prepare($sql);
        //     $stmt->bindParam(':title', $title, PDO::PARAM_STR);
        //     $stmt->bindParam(':username', $username, PDO::PARAM_STR);

        //     $isOk = $stmt->execute();

        //     $lastID = $pdo->lastInsertId();
        
        //     $stmt = null;
        //     $pdo = null;
        
        //     return $lastID;
        // }

        // public function addLike($id) {
        //     $conn = new ConnectionManager();
        //     $pdo = $conn->getConnection();

        //     $sql = "UPDATE `post` SET `likes` = `likes` + 1 WHERE `id` = :id";

        //     $stmt = $pdo->prepare($sql);
        //     $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        //     $isOk = $stmt->execute();

        //     $stmt = null;
        //     $pdo = null;

        //     return $isOk;
        // }

        public function getInterviewers($limit) {
            $conn = new ConnectionManager();
            $pdo = $conn->getConnection();
            
            $sql = "SELECT * FROM `interviewers` ORDER BY `id` DESC LIMIT :lim";

            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':lim', $limit, PDO::PARAM_INT);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();

            $result = [];
            while($row = $stmt->fetch()){
                $result[] = new interviewer($row["id"],$row["fname"], $row["lname"], $row["job"], $row["company"], $row["years"], $row["industry"], $row["about"], $row["email"], $row["experience"], $row["education"], $row["img"], $row["timeslots"]);
            }

            $stmt = null;
            $pdo = null;

            return $result;
        }

        

        public function createBooking($user_id, $interviewer_id, $timeslots){
            $conn = new ConnectionManager();
            $pdo = $conn->getConnection();

            $sql = "INSERT INTO `interviews` (`user_id`, `interviewer_id`, `timeslots`) VALUES (:user_id, :interviewer_id, :timeslots)";

            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':user_id', $user_id, PDO::PARAM_STR);
            $stmt->bindParam(':interviewer_id', $interviewer_id, PDO::PARAM_INT);
            $stmt->bindParam(':timeslots', $timeslots, PDO::PARAM_STR);

            $isOk = $stmt->execute();
            $stmt = null;
            $pdo = null;
            return $isOk;
        }
        
        public function deleteBooking($user_id, $interviewer_id, $timeslots){
            $conn = new ConnectionManager();
            $pdo = $conn->getConnection();

            $sql = "DELETE FROM `interviewers` WHERE `user_id` = :user_id AND `interviewer_id` = :interviewer_id AND `timeslots` = :timeslots";
        
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':user_id', $user_id, PDO::PARAM_STR);
            $stmt->bindParam(':interviewer_id', $interviewer_id, PDO::PARAM_INT);
            $stmt->bindParam(':timeslots', $timeslots, PDO::PARAM_STR);

            $isOk = $stmt->execute();
            $stmt = null;
            $pdo = null;
            return $isOk;
        }

        public function getBookings(){
            $conn = new ConnectionManager();
            $pdo = $conn->getConnection();
            
            $sql = "SELECT * FROM `interviews`";

            $stmt = $pdo->prepare($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();

            $result = [];
            while($row = $stmt->fetch()){
                $result[] = new booking($row["user_id"],$row["interviewer_id"], $row["timeslots"]);
            }

            $stmt = null;
            $pdo = null;

            return $result;
        }

    }
?>
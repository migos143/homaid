<?php
    include('../Database.php');
    class users{
        public function register($Firstname,$Lastname,$Username,$Password,$picture,$validId, $role){
            return $this->doRegister($Firstname,$Lastname,$Username,$Password,$picture,$validId, $role);
        }

        public function login($username, $password){
            return $this->dologin($username, $password);
        }

        private function doRegister($Firstname,$Lastname,$Username,$Password,$picture,$validId, $role){
            try {
                $db = new Database();
                if($db->getStatus()){
                    $stmt = $db->getCon()->prepare($this->registerQuery());
                    $stmt->execute(array($Firstname, $Lastname, $Username, md5($Password), $picture, $validId, $role));
                    $result = $stmt->fetch();
                    $db->closeConnection();
                    
                    if(!$result){
                        return 200;
                    }else{
                        return 400;
                    }

                }else{
                    return "NoDatabaseConnection";
                }
            } catch (PDOException $th) {
                return $th;
            }
        }

        private function dologin($username, $password){
            try {
                $db = new Database();
                if($db->getStatus()){
                    $stmt = $db->getCon()->prepare($this->loginQuery());
                    $stmt->execute(array($username, md5($password)));
                    $role = null;

                    while($row = $stmt->fetch()){
                        $role = $row['role'];
                        $_SESSION['id'] = $row['user_id'];
                    }

                    if($role == 1){
                        return 1;
                    }else if($role == 2){
                        return 2;
                    }else if($role == 3){
                        return 3;
                    }else{
                        return 400;
                    }

                }else{
                    return "NoDatabaseConnection";
                }
            } catch (PDOException $th) {
                return $th;
            }
        }

        private function registerQuery(){
            return "INSERT INTO `users` (`firstname`, `lastname`, `username`, `password`, `picture`, `validId`, `role`) VALUES (?,?,?,?,?,?,?)";
        }

        private function loginQuery(){
            return "SELECT * FROM users WHERE `username` = ? AND `password` = ?";
        }
    }
?>
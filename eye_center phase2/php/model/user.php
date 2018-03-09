<?php

include_once 'database.php';
include_once 'crud.php';

class user extends database implements crud {

    //$data = array($type, $name, $mail, $address_id,$mobile, $DOB, $gender, $salary,$password);
    public function create(array $data) {
        $sql = "INSERT INTO user( `name`, `bithdate`, `ismale`, `address_id`, `type_id`, `status`) VALUES ('$data[1]','$data[5]','$data[6]','$data[3]','$data[0]','1')";
        $result = $this->booleanQuery($sql);

        $sql = "SELECT max(`id`), `name` FROM `user` WHERE `id`= (SELECT max(`id`) FROM `user` WHERE 1)";
        $result = $this->dataQuery($sql);
        if (!empty($result)) {
            foreach ($result as $value) {
                $username = $value['name'] . $value['max(`id`)'];
                $userid = $value['max(`id`)'];
                $password = $data[8];
                $sql = "INSERT INTO `user_login`( `username`, `password`, `userid`) VALUES ('$username','$password','$userid')";
                $result = $this->booleanQuery($sql);
                $sql = "INSERT INTO `email`(`user_id`, `email`) VALUES ('$userid','$data[2]')";
                $result = $this->booleanQuery($sql);
                $sql = "INSERT INTO `salary`(`value`, `userid`, `rebate`) VALUES ('$data[7]','$userid','0')";
                $result = $this->booleanQuery($sql);
                $sql = "INSERT INTO `telephone`( `user_id`, `telephone`) VALUES ('$userid','$data[4]')";
                $result = $this->booleanQuery($sql);
            }
        }
        return $result;
    }

    public function delete(array $data) {
        $sql = "DELETE FROM `user` WHERE `id`='$data[0]'";
        $result = $this->booleanQuery($sql);
        return $result;
    }

    public function read(array $data) {
        //userID
        $sql = "SELECT * FROM `user`  INNER JOIN `user_type`on user.type_id = user_type.id AND user.id='$data[0]'";
        $result = $this->dataQuery($sql);
        return $result;
    }

    public function update(array $data) {

        //$data = array($type, $name, $mail, $address_id,$mobile, $DOB, $gender, $salary,$password,$userid);
        $sql = "UPDATE `user` SET     `name`='$data[1]',`bithdate`='$data[5]',`ismale`='$data[6]',`address_id`='$data[3]' WHERE `id`='$data[9]'";
        $result = $this->booleanQuery($sql);
        $sql = "UPDATE `salary` SET `value`='$data[7]' WHERE `userid`='$data[9]'";
        $result = $this->booleanQuery($sql);
        $sql = "UPDATE `telephone` SET `telephone`='$data[4]' WHERE `user_id`='$data[9]'";
        $result = $this->booleanQuery($sql);
        $sql = "UPDATE `email` SET `email`='$data[2]' WHERE `user_id`='$data[9]'";
        $result = $this->booleanQuery($sql);
        return $result;
    }

    public function search($searchBy, $value) {
        $sql = "SELECT user.*, email.email, user_type.type, telephone.telephone FROM (((user INNER JOIN email ON user.id = email.user_id AND user.$searchBy LIKE '%$value%') INNER JOIN user_type ON user.type_id = user_type.id) INNER JOIN telephone ON user.id = telephone.user_id)";
        $result = $this->dataQuery($sql);
        return $result;
    }

    public function readAllInfo() {
        $sql = "SELECT user.*, email.email, user_type.type, telephone.telephone, salary.value FROM ((((user INNER JOIN email ON user.id = email.user_id) INNER JOIN user_type ON user.type_id = user_type.id) INNER JOIN telephone ON user.id = telephone.user_id) INNER JOIN salary on user.id = salary.userid)";
        $result = $this->dataQuery($sql);
        return $result;
    }

    public function read_all_user_info($userID) {
        $sql = "SELECT * FROM `user`, `email`, `telephone`, `salary` WHERE user.id='$userID' AND email.user_id='$userID' AND telephone.user_id='$userID' AND salary.userid='$userID'";
        $result = $this->dataQuery($sql);
        return $result;
    }

//put your code here
}

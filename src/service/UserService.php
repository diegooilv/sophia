<?php
class UserService
{
    private UserModel $userModel;

    public function __construct(){
        $this->userModel = new UserModel();
    }

    public function getUserByUsername($username){
        $user = $this->userModel->findByUsername($username);
        return $user;
    }
}
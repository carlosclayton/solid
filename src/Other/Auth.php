<?php

class Auth
{
    function authenticate($user, $password)
    {
        if ($user == 'carlos' and $password == '123456') {
            return true;
        }
        return false;
    }
}

class AuthApi extends Auth{
    function authenticate($user, $password)
    {
        if ($user == 'carlos' and $password == '123456') {
            return [
                'status' => 'ok'
            ];
        }
        return [
            'status' => 'fail'
        ];
    }
}

$auth1 = new Auth;
$auth2 = new AuthApi;


$a1 = $auth1->authenticate('carlos', '123456');
$a2 = $auth2->authenticate('carlos', '123456');

if($a2){
    echo 'logado';
}else{
    echo 'não logado';
}
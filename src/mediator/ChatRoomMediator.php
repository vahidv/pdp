<?php
/**
 * Created by PhpStorm.
 * User: genom
 * Date: 4/20/19
 * Time: 10:42 AM
 */

namespace src\mediator;


interface ChatRoomMediator
{
    public function showMessage(User $user, string $message);
}
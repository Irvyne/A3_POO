<?php
/**
 * Created by Thibaud BARDIN (Irvyne)
 * This code is under the MIT License (https://github.com/Irvyne/license/blob/master/MIT.md)
 */

class Article
{
    private $user;

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        if ($user instanceof User)
            $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    public function getUserId()
    {
        return $this->user->getId();
    }
}


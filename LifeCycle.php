<?php
/**
 * Created by Thibaud BARDIN (Irvyne)
 * This code is under the MIT License (https://github.com/Irvyne/license/blob/master/MIT.md)
 */

class LifeCycle
{
    private $test;

    public function __construct()
    {
        echo "Construct <br>";
        $this->test = 'efezfzefzef';
        mkdir(__DIR__.'/upload', 0777);
    }

    public function __get($key)
    {
        echo "Get <br>";
        $method = 'get'.ucfirst($key);
        if (method_exists($this, $method)):
            echo "method exists";
            return $this->$method();
        else:
            echo "method undefined";
            throw new LogicException($method.' is not defined');
        endif;
        var_dump($key);
    }

    public function __set($key, $value)
    {
        echo "Set <br>";
        var_dump($key, $value);
    }

    public function __destruct()
    {
        echo "Destruct <br>";
        rmdir(__DIR__.'/upload');
    }

    /**
     * @return string
     */
    public function getTest()
    {
        return $this->test;
    }
}

$lifeCycle = new LifeCycle();
echo $lifeCycle->a.'<br>';
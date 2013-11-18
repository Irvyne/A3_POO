<?php
class ArticleTest
{
    private $id;

    private $status;

    const FETCH_ASSOC = 1;

    const FETCH_OBJ = 2;

    function getArticleFromTheExcerpt() {
        return "abc";
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        if (is_int($id))
            $this->id = $id;
        else
            throw new LogicException();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        if (is_string($status))
            $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }
}

$article = new Article();
$article->getArticleFromTheExcerpt();

$article->setId("5");

1 == "1";
1 === "1";
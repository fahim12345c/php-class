<?php
class Book{
    private int $isbn;
    private string $title;
    private string $author;
    private int $available;
    public  function __construct(int $isbn,string $title,string $author,int $available=0)
    {
        $this->isbn=$isbn;
        $this->title=$title;
        $this->author=$author;
        $this->available=$available;
    }

    Public function getCopy():bool{
        if($this->available<1)
        {
            return false;
        }
        $this->available--;
        return true;
    }
    public function addCopy(int $num)
    {
        $this->available+=$num;
    }

    public function get_tile():string
    {
        return $this->title;
    }
    public function get_author():string
    {
        return $this->author;
    }
    public function get_isbn():int
    {
        return $this->isbn;
    }

    public function get_available():int
    {
        return $this->available;
    }
    public function set_isbn(int $isbn)
    {
        $this->isbn=$isbn;
    }
    public function set_title(string $title)
    {
        $this->title=$title;
    }
    public function set_author(string $author)
    {
         $this->author=$author;
    }

}
?>
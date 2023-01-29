<?php

class Collection {

    protected array $items;

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function sum($key) 
    {
        return array_sum(array_column($this->items, $key));
    }
}


class VideoCollection extends Collection {

    public function lenght() 
    {
        return $this->sum('length');
    }
}

class Video {

    public $title;
    public $length;

    public function __construct($title, $length)
    {
        $this->title = $title;
        $this->length = $length;
    }

}

$videos = new VideoCollection([
    new Video('title 1', 100),
    new Video('title 2', 200),
    new Video('title 3', 300),
]);

echo $videos->lenght();
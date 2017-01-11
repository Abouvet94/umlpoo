<?php

namespace Ipssi\GoodNews;

class LeFigaro implements \Iterator
{
    private $data = array();

    public function __construct()
    {
        $this->data = array(
            array(
                'title' => 'Lorem Ipsum 1 Le Figaro',
                'content' => 'Content Lorem Ipsum 1 Le Figaro',
            ),
            array(
                'title' => 'Lorem Ipsum 2 Le Figaro',
                'content' => 'Content Lorem Ipsum 2 Le Figaro',
            ),
        );
    }

    public function current()
    {
        return \current($this->data);
    }

    public function key()
    {
        return \key($this->data);
    }

    public function next()
    {
        return \next($this->data);
    }

    public function rewind()
    {
        \reset($this->data);
    }

    public function valid()
    {
        return $this->key() !== null;
    }

}

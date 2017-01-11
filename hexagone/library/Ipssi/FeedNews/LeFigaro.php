<?php

namespace Ipssi\FeedNews;

/**
 * Description of LeFigaro
 *
 * @author dev
 */
class LeFigaro
{
    public function findAll()
    {
        return array(
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
}

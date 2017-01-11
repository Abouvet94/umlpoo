<?php

namespace Ipssi\FeedNews;

/**
 * Description of LeMonde
 *
 * @author dev
 */
class LeMonde
{
    public function getAll()
    {
        $data[] = array(
            'title'=> 'lorem ipsum 1 Le monde',
            'content' => 'Un faux contenu',
        );

        $data[] = array(
            'title'=> 'lorem ipsum 2 Le monde',
            'content' => 'Un faux contenu',
        );

        return $data;
    }
}

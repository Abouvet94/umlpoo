<?php

/**
 * Description of Template
 *
 * @author dev
 */
class Template
{
    private $filename;

    public function __construct($filename)
    {
        $this->setFilename($filename);
    }

    public function getFilename()
    {
        return $this->filename;
    }

    public function setFilename($filename)
    {
        if (!file_exists($filename)) {
            throw new Exception("$filename not found");
        }

        $this->filename = (string) $filename;
        return $this;
    }

    public function render(array $data)
    {
        //foreach ($data as $var => $value) {
        //    $$var = $value;
        //}

        
        // ob == output buffering

        ob_start();
        extract($data);
        include $this->filename;
        return ob_get_clean();
    }
}

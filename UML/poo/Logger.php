<?php

class Logger
{
    private $filename;
 
    public function __construct($filename)
    {
        $this->filename = (string) $filename;
    }

    public function write(Exception $e)
    {
        $tab = str_repeat(" ", 2);

        $message  = date('d-m-Y h:i:s') . $tab;
        $message .= $e->getMessage() .  $tab;
        $message .= $e->getCode() . $tab;
        $message .= $e->getLine() . $tab;
        $message .= $e->getFile();
        $message .= PHP_EOL;

        file_put_contents($this->filename, $message, FILE_APPEND);
    }

    public function read()
    {
        $rows = file($this->filename);
        $result = array();

        foreach ($rows as $row) {
            $part = explode("  ", $row);
            $result[] = array(
                'datetime' => $part[0],
                'message'  => $part[1],
                'code'     => $part[2],
                'line'     => $part[3],
                'file'     => $part[4],
            );
        }

        return $result;
    }
}

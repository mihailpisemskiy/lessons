<?php


class Form
{
    public function open($action = "index.php", $method = "POST")
    {
        return "<form action=\"{$action}\" method=\"{$method}\">";
    }

    public function input($type = "text", $placeholder = null, $name = '')
    {
        return "<input type=\"{$type}\" placeholder=\"{$placeholder}\" name=\"{$name}\">";
    }

    public function submit($value)
    {
        return 
    }
}
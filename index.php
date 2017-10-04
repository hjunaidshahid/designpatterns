<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});


writeln('setup singleton design pattern');

function writeln($line_in)
{
    echo $line_in.'</br>';
}
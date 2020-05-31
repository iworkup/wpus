<?php

function get_file_timestamp($path)
{

    $path = get_template_directory() . $path;
    return filemtime($path);

}
<?php

function create_img_title($title, $ext)
{
    // put together img array
    $img = array(
        'title' => substr( md5( $title . '.' . $ext.strtotime('now') ), 0, 7 ),
        'ext'   => $ext,
        'name'  => substr( md5( $title . '.' . $ext.strtotime('now') ), 0, 7 ) . '.' . $ext
    );
    return $img;
}
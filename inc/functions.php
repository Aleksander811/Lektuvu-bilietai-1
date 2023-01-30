<?php

function saveMessage($data){
    $file = 'data/messages.txt';
    $content = file_get_contents($file);
    $formData = implode(',',$data);
    $content .=$formData."/n";
    file_put_contents($file,$content);
}

function getData(){
    $messages = file_get_contents('data/messages.txt');
    $messages = explode('/n',$messages);
    return $messages;
}
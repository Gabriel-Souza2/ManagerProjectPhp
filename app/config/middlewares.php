<?php


$app->middleware('before', function(){
    session_start();
});
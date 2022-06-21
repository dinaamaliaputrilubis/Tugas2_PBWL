<?php

class Log_model
{
    public function index() {
        session_destroy();
        header("location:app/views/login");
    }

}
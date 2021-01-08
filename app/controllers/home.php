<?php

Class Home extends Controller
{
    function index()
    {
        $DB = new Database();
        $data['result'] = $DB->read("select * from category");
        $data['page_title'] = "Home";

        $this->view("minim/index",$data);
    }
}
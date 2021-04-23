<?php

class Home 
{

    public function showHome($params){

        $myView = new View('home');
        $myView->render();

    }


}


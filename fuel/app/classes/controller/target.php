<?php

class Controller_Target extends Controller_Base{

    public function action_index(){

        $this->template->content = Presenter::forge('target/input');
    }
}
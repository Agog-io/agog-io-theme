<?php

Abstract class LayoutPart{

    protected $name;

    public abstract function getContent();
    
    public function render(){
           
        $html = $this->ActionStart().$this->getContent().$this->ActionEnd();
        return $this->ActionFilter($html);
    }

    public function ActionStart(){
        return do_action($this->name."_theme_part_start");
    }

    public function ActionFilter($html){
        
        return $html;
    }
    
    public function ActionEnd(){
        return do_action($this->name."_theme_part_end");

    }

}
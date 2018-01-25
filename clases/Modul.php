<?php

class Modul
{
    public $title;
    public $content;
    public $class;
    public $img;

    public function render()
    {
        if ($this->class) {
            echo "<div class='{$this->class}'>";
        }
        if ($this->class == "main") {
            echo "<h1>{$this->title}</h1>";
        } else {
            echo "<h2>{$this->title}</h2>";
        }
        if ($this->content) {
            echo "<p>{$this->content}</p>";
        }
        echo "</div>";
        if ($this->img) {
            echo "<img src='{$this->img}' alt=''>";
        }
    }
}


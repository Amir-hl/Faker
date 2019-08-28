<?php

require_once 'index.php';
class Faker
{
    public $input;
    public $input2;

    public function getInput2()
    {
        return $this->input2;
    }

    public function setInput2($input2)
    {
        $this->input2 = $input2;
    }

    public function getInput()
    {
        return $this->input;
    }

    public function setInput($input)
    {
        $this->input = $input;
    }

    public function show()
    {

        if ($this->input == "name") {
            for ($i=1;$i<=$this->input2;$i++){
                echo $_GET[$i] . "<br/>";
            }
        }
        elseif ($this->input == "address") {
            for ($i=1;$i<=$this->input2;$i++){
                echo $_GET[$i] . "<br/>";
            }
        }
        elseif ($this->input == "email") {
            for ($i=1;$i<=$this->input2;$i++){
                echo $_GET[$i] . "<br/>";
            }
        }
        elseif ($this->input == "text") {
            for ($i=1;$i<=$this->input2;$i++){
                echo $_GET[$i] . "<br/>";
            }
        }
        elseif ($this->input == "city") {
            for ($i=1;$i<=$this->input2;$i++){
                echo $_GET[$i] . "<br/>";
            }
        }

    }
}

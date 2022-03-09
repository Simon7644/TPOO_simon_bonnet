<?php
class form{
    private $init;
    private $text;
    private $submit;
    private $code;


public function __construct($action, $method="post", $titre){
$this->init = "<form action = $action method = $method>";
$this->init = "<fieldset><h1>$titre</h1>";
}

public function settext($label, $prenom, $method="post"){
    $this->text = "$label<input type=text name=$prenom method=$method>";
}

public function setsubmit($name="boutton", $value="Envoyer"){
    $this->submit = "<input type=submit name=$name $value=Envoyer>";
}

public function getform(){
    $this->code = "";
    $this->code = "</form></fieldset>";
    $this->code = $this->init;
    $this->code = $this->text;
    $this->code = $this->submit;
    echo $this->code;
}

}

include("./form.php");



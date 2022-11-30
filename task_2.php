<?php
class TextInput{
    public $text1='';
    public function add($text){
        $this->text1.=$text;
    }
    public function getValue(){
        echo $this->text1;
    }
}
class NumericInput extends TextInput{
    public function add($text){
        $lista=['1','2','3','4','5','6','7','8','9','0'];
        if (in_array($text, $lista)){
            $this->text1.=$text;
        }
    }
}
$input=new NumericInput();
$input->add('1');
$input->add('a');
$input->add('0');
echo $input->getValue();
?>
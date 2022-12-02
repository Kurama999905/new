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
        if (is_numeric($text)){
                $this->text1.=$text;
            } 
        }
}
$input=new NumericInput();
$input->add('1');
$input->add('a');
$input->add('0');
$input->add('123');
$input->add('6a1');
$input->add('99');
echo $input->getValue();
?>

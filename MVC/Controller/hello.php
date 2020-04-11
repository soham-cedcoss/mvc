<?php
include("./Model/model.php");
class hello
{
    public $obj;
    public function __construct()
    {
        $this->obj= new model();
    }
    public function disp()
    {
        $name="enter name";
        $msg="Please";
        if (isset($_POST['btnsub'])) {
            if (!empty($_POST['name'])) {
                $name=$_POST['name'];
                $msg=$this->obj->message();
            } else {
                $name="don't submit empty field!!";
            }
        }
        include("./View/view.php");
    }
}

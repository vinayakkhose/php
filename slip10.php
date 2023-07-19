<?php
class employee
{
    public $code,$name,$designation;
    function accept_employee($code,$name,$designation)
    {
        $this->code=$code;
        $this->name=$name;
        $this->designation=$designation;
    }  
}
class emp_account extends employee
{
    public $acc_no,$jod;
    function accept_acc($acc_no,$jod)
    {
        $this->acc_no=$acc_no;
        $this->jod=$jod;   
    }
}
class emp_sal extends emp_account
{
    public $basic_pay,$earning,$deduction;
    function accept_sal($basic_pay,$earning,$deduction)
    {
        $this->basic_pay=$basic_pay;
        $this->earning=$earning;
        $this->deduction=$deduction;  
    }
    function disp()
    {
        echo"<br>emp_code=".$this->code;
        echo"<br>emp_name=".$this->name;
        echo"<br>designation=".$this->designation;
        echo"<br>acc_no=".$this->acc_no;
        echo"<br>join_date=".$this->jod;
        echo"<br>basic pay=".$this->basic_pay;
        echo"<br>earning=".$this->earning;
        echo"<br>deduction=".$this->deduction;
        echo"<br>totol_sal=".($this->basic_pay+$this->earning)-$this->deduction;

    }
}
$ob=new emp_sal();
$ob->accept_employee(101,"sacin","manager");
$ob->accept_acc(501,"15-5-2022");
$ob->accept_sal(50000,20000,5000);
$ob->disp();
?>
<?PHP 
$date=$_POST["date"];

$summ=$_POST["summ"];

$years=$_POST["years"];

$addMoney=$_POST["addMoney"];

$summAdd=$_POST["summAdd"];
$percent = 0.1;
$daysn=date("t",strtotime($date))-date("j",strtotime($date));

//Было очень сложно!

if($addMoney=="Yes"){
    for($i=0;$i<=$years;$i++){
        if($i==1){
            $summn=$summ+($summ+$summAdd)*365*($percent/365);
        }
        else{
            $summn=$summn+($summn+$summAdd)*365*($percent/365);
        }
    }

}else{
    for($i=0;$i<=$years;$i++){
        if($i==1){
            $summn=$summ+($summ)*365*($percent/365);
        }
        else{
            $summn=$summn+($summn)*365*($percent/365);
        }
    }

}
$result=$summn;
echo("Результат: ".$result);
?>
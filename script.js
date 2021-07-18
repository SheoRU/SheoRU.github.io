$(document).on('submit', '#formCalc', function (e) {
    e.preventDefault();

    $.ajax({
        type: "post",
        url: "calc.php",
        processData: false,
        contentType: false,
        data: new FormData($('#formCalc')[0]),
        response: 'text',
        success: function(data){
            $("#result").html(data);
        }
    });
});
function range(){
    var val=$('.range').val();
    var inp1=document.getElementById("firstNumber");
    inp1.value=val;
    firstNumber.innerHTML=val;
    val=(val*100)/2999000;
    $('.range').css({'background':'-webkit-linear-gradient(left, #89ac38 0%, #89ac38 '+val+'%, #000 '+val+'%, #000 100% )'});
}
function secondRange(){
    var val=$('.secondRange').val();
    var inp2=document.getElementById("secondNumber");
    inp2.value=val;
    val=(val*100)/2999000;
    $('.secondRange').css({'background':'-webkit-linear-gradient(left, #89ac38 0%, #89ac38 '+val+'%, #000 '+val+'%, #000 100% )'});
}
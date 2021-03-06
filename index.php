<HTML>
    <head>
        <title>Тестовое задание</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
            <script type="text/javascript" src="script.js"></script>
            <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
            <link rel="stylesheet" href="style/styles.css">
        <script>
            $( function() {
                 $( "#datepicker" ).datepicker({
                    dateFormat: "dd-mm-yy"
                 });
            });
        </script>
    </head>
    <body>
        <div id="container">
            <div id="logo">
                <img src="style/logo2.png">
            </div>
            <div id="contact">
                <p>8–800–100–5005<br>+7 (3452) 522–000</p>
            </div>
            <div id="menu">
                <button onclick="window.location.href='/';" class="dropbtn">Кредитные карты</button>
                <button onclick="window.location.href='/';" class="dropbtn">Вклады</button>
                <button onclick="window.location.href='/';" class="dropbtn">Дебетовая карта</button>
                <button onclick="window.location.href='/';" class="dropbtn">Страхование</button>
                <button onclick="window.location.href='/';" class="dropbtn">Друзья</button>
                <button onclick="window.location.href='/';" id="lastBtn" class="dropbtn">Интернет-банк</button>
            </div>
		<div id=body style="height:2000px;">
            <ul class="breadcrumb">
            <li><a href="/">Главная</a></li>
            <li><a href="/">Вклады</a></li>
            <li>Калькулятор</li>
            </ul>
            <div id="calc">
                <span style="font-size: 50px; margin-left:150px;color:#ec5216;">Калькулятор</span>
                <div id=calcForm>
                    <form id="formCalc" method="POST" action="/calc.php">
                        <table>
                            <tr>
                                <td><p class="formItem">Дата оформления вклада</p></td>
                                <td> <input type="text" required  id="datepicker" value="" name="date"></td>
                            </tr>
                            <tr>
                                <td><p class="formItem">Сумма вклада</p></td>
                                <td><input type="number" id="firstNumber" value="10000" name="summ"></td>
                                <td><input type="range" min="1000" max="3000000" name="firsRange" class="range" step="1000" oninput="range()">
                                <br><span class="legend">1 тыс. руб.</span>
                                <span class="legend" style="float: right">3 000 000</span></td>
                            </tr>
                            <tr>
                                <td><p class="formItem">Срок вклада</p></td>
                                <td>
                                    <select name="years">
                                        <option value="1">1 год</option>
                                        <option value="2">2 года</option>
                                        <option value="3">3 года</option>
                                        <option value="4">4 года</option>
                                        <option value="5">5 лет</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><p class="formItem">Пополнение вклада</p></td>
                                <td><span><input type="radio" checked name="addMoney" value="Net">Нет</span>
                                <span><input type="radio" name="addMoney" value="Yes">Да</е></td>
                                
                            </tr>
                            <tr>
                                <td><p class="formItem">Сумма пополнения вклада</p></td>
                                <td><input type="number" id="secondNumber" value="10000" name="summAdd"></td>
                                <td><input type="range" min="1000" max="3000000" class="secondRange" step="1000" oninput="secondRange()">
                                <br><span class="legend">1 тыс. руб.</span>
                                <span class="legend" style="float: right;">3 000 000</span</td>
                            </tr>
                        </table>
                        
                        <input id="submitBtn" type="submit" value="Рассчитать">
                        <p id="result">Результат:</p>
                    </form>

                </div>
            </div>
		</div>

		<div id=footer>
			<a href="/" class="footerText">Кредитные карты</a>
            <a href="/" class="footerText">Вклады</a>
            <a href="/" class="footerText">Дебетовая карта</a>
            <a href="/" class="footerText">Страхование</a>
            <a href="/" class="footerText">Друзья</a>
            <a href="/" class="footerText">Интернет-банк</a>
		</div>
    </div>
    </body>
</HTML>
<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
?>
<!DOCTYPE html>
<html ng-app="calcbtc">

<head>
  <meta charset="utf-8">
  <title>Calculadora Bitcoin</title>
    <link rel="icon" href="https://foxbit.exchange/assets/exchange_logos/foxbit_favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body ng-controller="mbCtrl">

  <div id="pagewrap">

    <div class="header">
      <h1>Calculadora Bitcoin </h1>
    </div>

    <div id="currencytable" class="block">

      <h3>Exchanges Brasileiras</h3>

      <table border="1">
        <tr>
          <th>
            Logo
          </th>
          <th>
            Volume
          </th>
          <th>
            Maior Valor
          </th>
          <th>
            Menor Valor
          </th>
        </tr>
        <tr>
          <td class="logofox">
            <img data-switch-view="offerbook" src="http://www.foxbit.com.br/img/logo.svg" style="
              height: 30px;
              margin-top: -10px;
              margin-bottom: -10px;">
          </td>

          <td>
            {{foxbit.vol}}
          </td>
          <td>
            {{foxbit.high}}
          </td>
          <td>
            {{foxbit.low}}
          </td>
        </tr>
        <tr>
          <td class="logofox">
            <img data-switch-view="offerbook" src="https://foxbit.exchange/assets/exchange_logos/foxbit_toolbar_logo.png" style="
              height: 30px;
              margin-top: -10px;
              margin-bottom: -10px;">
          </td>

          <td>
            {{btctoyou.ticker.vol}}
          </td>
          <td>
            {{btctoyou.ticker.high}}
          </td>
          <td>
            {{btctoyou.ticker.low}}
          </td>
        </tr>


      </table>
    </div>

    <div>

      <div class="priceRef">
        <label class="textcalc">Preço do Bitcoin em BRL : {{btctoyou}}</label>
        <input class="inputcalc" type="text" name="brlrefname" value="" ng-model="brlref" ng-required="number">
      </div>

      <div class="valueRef">
        <label class="textcalc">Valor BRL : </label>
        <input class="inputcalc" type="text" name="brlname" value="" ng-model="brl" ng-required="number">
        <label class="textcalc">Valor Bitcoin : </label>
        <input class="inputcalc" type="text" name="btcname" value="" ng-model="bitcoin" required="number">
      </div>
    </div>

    <div class="">
      <table>
        <tr>
          <td>
            <span class="labelPrice"> BRL : </span>
          </td>
          <td>
            <span class="price"> {{ brlref * bitcoin | number : 2}} </span>
          </td>
        </tr>
        <tr>
          <td>
            <span class="labelPrice">Bitcoin :</span>
          </td>
          <td>
            <span class="price"> {{ brl / brlref | number : 8 }} </span>
          </td>
        </tr>
      </table>
    </div>

    <div class="footer">
      <p>Esta página é mantida por Saulo Campos sobre licensa <a href="http://www.gnu.org/licenses/gpl-3.0.en.html">GPL</a> </p>
      <p>
        Repositório : <a href="https://github.com/saulocamposi/calculadorabitcoin">https://github.com/saulocamposi/calculadorabitcoin</a>
      </p>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js" charset="utf-8"></script>
  <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="valuep.js"></script>
  <script src="values_jquery.js"></script>

</body>

</html>

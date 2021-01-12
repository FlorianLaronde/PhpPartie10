<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 10 TP 1</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/index.css">
</head>
<body>


    <div class="container">
        <!-- Formulaire -->
        <form action="index.php" method="POST">
            <fieldset>
                <legend class="text-center"> <strong>Formulaire d'inscription futur apprenant</strong></legend>

                <div class="rows d-flex mb-3">
                    <!-- Nom -->
                    <div class="form-floating col-lg-4">
                        <label for="name">Nom :</label>
                        <input class="form-control bg-info text-light p-2" type="text" name="name" id="name" value="<?= $_POST['name'] ?? ''; ?>" 
                        pattern="[A-Z]{1}[a-zA-ZÀ-ÿ]{2,20}\D" title="Pas de chiffres ou caractères spéciaux !" autofocus required>
                    </div>
                    <!-- Message d'erreur variable name -->
                    <span>  <?= $errorList['name'] ?? ''; ?>  </span>


                    <!-- Prénom -->
                    <div class="form-group col-lg-4">
                        <label for="firstName">Prénom :</label>
                        <input class="form-control bg-info text-light p-2" type="text" name="firstName" id="firstName" value="<?= $_POST['firstName'] ?? ''; ?>"
                         title="Pas de chiffres ou caractères spéciaux !" >
                    </div>
                    <!-- Message d'erreur variable firstName -->
                    <span>  <?= $errorList['firstName'] ?? ''; ?>  </span>


                    <!-- Date de naissance -->
                    <div class="form-group-6">
                        <label for="birthDay">Date de naissance :</label>
                        <input class="form-control bg-info text-light p-2" type="date" id="birthDay" name="birthDay" value="<?= $_POST['birthDay'] ?? ''; ?>"
                            min="1900-01-01" max="2020-12-12" required>
                    </div>
                </div>

                <div class="rows d-flex mb-3">
                    <!-- Pays de naissance -->
                    <div class="form-group col-lg-6">
                        <select class="form-control bg-info text-light p-1" name="country" value="<?= $_POST['nationality'] ?? ''; ?>" required>
                            <option value="France" selected="selected">France </option>

                            <option value="Afghanistan">Afghanistan </option>
                            <option value="Afrique_Centrale">Afrique_Centrale </option>
                            <option value="Afrique_du_sud">Afrique_du_Sud </option>
                            <option value="Albanie">Albanie </option>
                            <option value="Algerie">Algerie </option>
                            <option value="Allemagne">Allemagne </option>
                            <option value="Andorre">Andorre </option>
                            <option value="Angola">Angola </option>
                            <option value="Anguilla">Anguilla </option>
                            <option value="Arabie_Saoudite">Arabie_Saoudite </option>
                            <option value="Argentine">Argentine </option>
                            <option value="Armenie">Armenie </option>
                            <option value="Australie">Australie </option>
                            <option value="Autriche">Autriche </option>
                            <option value="Azerbaidjan">Azerbaidjan </option>

                            <option value="Bahamas">Bahamas </option>
                            <option value="Bangladesh">Bangladesh </option>
                            <option value="Barbade">Barbade </option>
                            <option value="Bahrein">Bahrein </option>
                            <option value="Belgique">Belgique </option>
                            <option value="Belize">Belize </option>
                            <option value="Benin">Benin </option>
                            <option value="Bermudes">Bermudes </option>
                            <option value="Bielorussie">Bielorussie </option>
                            <option value="Bolivie">Bolivie </option>
                            <option value="Botswana">Botswana </option>
                            <option value="Bhoutan">Bhoutan </option>
                            <option value="Boznie_Herzegovine">Boznie_Herzegovine </option>
                            <option value="Bresil">Bresil </option>
                            <option value="Brunei">Brunei </option>
                            <option value="Bulgarie">Bulgarie </option>
                            <option value="Burkina_Faso">Burkina_Faso </option>
                            <option value="Burundi">Burundi </option>

                            <option value="Caiman">Caiman </option>
                            <option value="Cambodge">Cambodge </option>
                            <option value="Cameroun">Cameroun </option>
                            <option value="Canada">Canada </option>
                            <option value="Canaries">Canaries </option>
                            <option value="Cap_vert">Cap_Vert </option>
                            <option value="Chili">Chili </option>
                            <option value="Chine">Chine </option>
                            <option value="Chypre">Chypre </option>
                            <option value="Colombie">Colombie </option>
                            <option value="Comores">Colombie </option>
                            <option value="Congo">Congo </option>
                            <option value="Congo_democratique">Congo_democratique </option>
                            <option value="Cook">Cook </option>
                            <option value="Coree_du_Nord">Coree_du_Nord </option>
                            <option value="Coree_du_Sud">Coree_du_Sud </option>
                            <option value="Costa_Rica">Costa_Rica </option>
                            <option value="Cote_d_Ivoire">Côte_d_Ivoire </option>
                            <option value="Croatie">Croatie </option>
                            <option value="Cuba">Cuba </option>

                            <option value="Danemark">Danemark </option>
                            <option value="Djibouti">Djibouti </option>
                            <option value="Dominique">Dominique </option>

                            <option value="Egypte">Egypte </option>
                            <option value="Emirats_Arabes_Unis">Emirats_Arabes_Unis </option>
                            <option value="Equateur">Equateur </option>
                            <option value="Erythree">Erythree </option>
                            <option value="Espagne">Espagne </option>
                            <option value="Estonie">Estonie </option>
                            <option value="Etats_Unis">Etats_Unis </option>
                            <option value="Ethiopie">Ethiopie </option>

                            <option value="Falkland">Falkland </option>
                            <option value="Feroe">Feroe </option>
                            <option value="Fidji">Fidji </option>
                            <option value="Finlande">Finlande </option>
                            <option value="France">France </option>

                            <option value="Gabon">Gabon </option>
                            <option value="Gambie">Gambie </option>
                            <option value="Georgie">Georgie </option>
                            <option value="Ghana">Ghana </option>
                            <option value="Gibraltar">Gibraltar </option>
                            <option value="Grece">Grece </option>
                            <option value="Grenade">Grenade </option>
                            <option value="Groenland">Groenland </option>
                            <option value="Guadeloupe">Guadeloupe </option>
                            <option value="Guam">Guam </option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Guernesey">Guernesey </option>
                            <option value="Guinee">Guinee </option>
                            <option value="Guinee_Bissau">Guinee_Bissau </option>
                            <option value="Guinee equatoriale">Guinee_Equatoriale </option>
                            <option value="Guyana">Guyana </option>
                            <option value="Guyane_Francaise ">Guyane_Francaise </option>

                            <option value="Haiti">Haiti </option>
                            <option value="Hawaii">Hawaii </option>
                            <option value="Honduras">Honduras </option>
                            <option value="Hong_Kong">Hong_Kong </option>
                            <option value="Hongrie">Hongrie </option>

                            <option value="Inde">Inde </option>
                            <option value="Indonesie">Indonesie </option>
                            <option value="Iran">Iran </option>
                            <option value="Iraq">Iraq </option>
                            <option value="Irlande">Irlande </option>
                            <option value="Islande">Islande </option>
                            <option value="Israel">Israel </option>
                            <option value="Italie">Italie </option>

                            <option value="Jamaique">Jamaique </option>
                            <option value="Jan Mayen">Jan Mayen </option>
                            <option value="Japon">Japon </option>
                            <option value="Jersey">Jersey </option>
                            <option value="Jordanie">Jordanie </option>

                            <option value="Kazakhstan">Kazakhstan </option>
                            <option value="Kenya">Kenya </option>
                            <option value="Kirghizstan">Kirghizistan </option>
                            <option value="Kiribati">Kiribati </option>
                            <option value="Koweit">Koweit </option>

                            <option value="Laos">Laos </option>
                            <option value="Lesotho">Lesotho </option>
                            <option value="Lettonie">Lettonie </option>
                            <option value="Liban">Liban </option>
                            <option value="Liberia">Liberia </option>
                            <option value="Liechtenstein">Liechtenstein </option>
                            <option value="Lituanie">Lituanie </option>
                            <option value="Luxembourg">Luxembourg </option>
                            <option value="Lybie">Lybie </option>

                            <option value="Macao">Macao </option>
                            <option value="Macedoine">Macedoine </option>
                            <option value="Madagascar">Madagascar </option>
                            <option value="Madère">Madère </option>
                            <option value="Malaisie">Malaisie </option>
                            <option value="Malawi">Malawi </option>
                            <option value="Maldives">Maldives </option>
                            <option value="Mali">Mali </option>
                            <option value="Malte">Malte </option>
                            <option value="Man">Man </option>
                            <option value="Mariannes du Nord">Mariannes du Nord </option>
                            <option value="Maroc">Maroc </option>
                            <option value="Marshall">Marshall </option>
                            <option value="Martinique">Martinique </option>
                            <option value="Maurice">Maurice </option>
                            <option value="Mauritanie">Mauritanie </option>
                            <option value="Mayotte">Mayotte </option>
                            <option value="Mexique">Mexique </option>
                            <option value="Micronesie">Micronesie </option>
                            <option value="Midway">Midway </option>
                            <option value="Moldavie">Moldavie </option>
                            <option value="Monaco">Monaco </option>
                            <option value="Mongolie">Mongolie </option>
                            <option value="Montserrat">Montserrat </option>
                            <option value="Mozambique">Mozambique </option>

                            <option value="Namibie">Namibie </option>
                            <option value="Nauru">Nauru </option>
                            <option value="Nepal">Nepal </option>
                            <option value="Nicaragua">Nicaragua </option>
                            <option value="Niger">Niger </option>
                            <option value="Nigeria">Nigeria </option>
                            <option value="Niue">Niue </option>
                            <option value="Norfolk">Norfolk </option>
                            <option value="Norvege">Norvege </option>
                            <option value="Nouvelle_Caledonie">Nouvelle_Caledonie </option>
                            <option value="Nouvelle_Zelande">Nouvelle_Zelande </option>

                            <option value="Oman">Oman </option>
                            <option value="Ouganda">Ouganda </option>
                            <option value="Ouzbekistan">Ouzbekistan </option>

                            <option value="Pakistan">Pakistan </option>
                            <option value="Palau">Palau </option>
                            <option value="Palestine">Palestine </option>
                            <option value="Panama">Panama </option>
                            <option value="Papouasie_Nouvelle_Guinee">Papouasie_Nouvelle_Guinee </option>
                            <option value="Paraguay">Paraguay </option>
                            <option value="Pays_Bas">Pays_Bas </option>
                            <option value="Perou">Perou </option>
                            <option value="Philippines">Philippines </option>
                            <option value="Pologne">Pologne </option>
                            <option value="Polynesie">Polynesie </option>
                            <option value="Porto_Rico">Porto_Rico </option>
                            <option value="Portugal">Portugal </option>

                            <option value="Qatar">Qatar </option>

                            <option value="Republique_Dominicaine">Republique_Dominicaine </option>
                            <option value="Republique_Tcheque">Republique_Tcheque </option>
                            <option value="Reunion">Reunion </option>
                            <option value="Roumanie">Roumanie </option>
                            <option value="Royaume_Uni">Royaume_Uni </option>
                            <option value="Russie">Russie </option>
                            <option value="Rwanda">Rwanda </option>

                            <option value="Sahara Occidental">Sahara Occidental </option>
                            <option value="Sainte_Lucie">Sainte_Lucie </option>
                            <option value="Saint_Marin">Saint_Marin </option>
                            <option value="Salomon">Salomon </option>
                            <option value="Salvador">Salvador </option>
                            <option value="Samoa_Occidentales">Samoa_Occidentales</option>
                            <option value="Samoa_Americaine">Samoa_Americaine </option>
                            <option value="Sao_Tome_et_Principe">Sao_Tome_et_Principe </option>
                            <option value="Senegal">Senegal </option>
                            <option value="Seychelles">Seychelles </option>
                            <option value="Sierra Leone">Sierra Leone </option>
                            <option value="Singapour">Singapour </option>
                            <option value="Slovaquie">Slovaquie </option>
                            <option value="Slovenie">Slovenie</option>
                            <option value="Somalie">Somalie </option>
                            <option value="Soudan">Soudan </option>
                            <option value="Sri_Lanka">Sri_Lanka </option>
                            <option value="Suede">Suede </option>
                            <option value="Suisse">Suisse </option>
                            <option value="Surinam">Surinam </option>
                            <option value="Swaziland">Swaziland </option>
                            <option value="Syrie">Syrie </option>

                            <option value="Tadjikistan">Tadjikistan </option>
                            <option value="Taiwan">Taiwan </option>
                            <option value="Tonga">Tonga </option>
                            <option value="Tanzanie">Tanzanie </option>
                            <option value="Tchad">Tchad </option>
                            <option value="Thailande">Thailande </option>
                            <option value="Tibet">Tibet </option>
                            <option value="Timor_Oriental">Timor_Oriental </option>
                            <option value="Togo">Togo </option>
                            <option value="Trinite_et_Tobago">Trinite_et_Tobago </option>
                            <option value="Tristan da cunha">Tristan de cuncha </option>
                            <option value="Tunisie">Tunisie </option>
                            <option value="Turkmenistan">Turmenistan </option>
                            <option value="Turquie">Turquie </option>

                            <option value="Ukraine">Ukraine </option>
                            <option value="Uruguay">Uruguay </option>

                            <option value="Vanuatu">Vanuatu </option>
                            <option value="Vatican">Vatican </option>
                            <option value="Venezuela">Venezuela </option>
                            <option value="Vierges_Americaines">Vierges_Americaines </option>
                            <option value="Vierges_Britanniques">Vierges_Britanniques </option>
                            <option value="Vietnam">Vietnam </option>

                            <option value="Wake">Wake </option>
                            <option value="Wallis et Futuma">Wallis et Futuma </option>

                            <option value="Yemen">Yemen </option>
                            <option value="Yougoslavie">Yougoslavie </option>

                            <option value="Zambie">Zambie </option>
                            <option value="Zimbabwe">Zimbabwe </option>

                        </select>
                    </div>


                    <!-- Nationalité -->
                    <div class="form-group col-lg-6">
                        <select class="form-control bg-info text-light p-1" name="nationality"  value="<?= $_POST['nationality'] ?? ''; ?>" required>
                            <option value="Française (France)" selected="selected">Française (France) </option> 
                            <option value="AFG">Afghane (Afghanistan)</option>
                            <option value="ALB">Albanaise (Albanie)</option>
                            <option value="DZA">Algérienne (Algérie)</option>
                            <option value="DEU">Allemande (Allemagne)</option>
                            <option value="USA">Americaine (États-Unis)</option>
                            <option value="AND">Andorrane (Andorre)</option>
                            <option value="AGO">Angolaise (Angola)</option>
                            <option value="ATG">Antiguaise-et-Barbudienne (Antigua-et-Barbuda)</option>
                            <option value="ARG">Argentine (Argentine)</option>
                            <option value="ARM">Armenienne (Arménie)</option>
                            <option value="AUS">Australienne (Australie)</option>
                            <option value="AUT">Autrichienne (Autriche)</option>
                            <option value="AZE">Azerbaïdjanaise (Azerbaïdjan)</option>
                            <option value="BHS">Bahamienne (Bahamas)</option>
                            <option value="BHR">Bahreinienne (Bahreïn)</option>
                            <option value="BGD">Bangladaise (Bangladesh)</option>
                            <option value="BRB">Barbadienne (Barbade)</option>
                            <option value="BEL">Belge (Belgique)</option>
                            <option value="BLZ">Belizienne (Belize)</option>
                            <option value="BEN">Béninoise (Bénin)</option>
                            <option value="BTN">Bhoutanaise (Bhoutan)</option>
                            <option value="BLR">Biélorusse (Biélorussie)</option>
                            <option value="MMR">Birmane (Birmanie)</option>
                            <option value="GNB">Bissau-Guinéenne (Guinée-Bissau)</option>
                            <option value="BOL">Bolivienne (Bolivie)</option>
                            <option value="BIH">Bosnienne (Bosnie-Herzégovine)</option>
                            <option value="BWA">Botswanaise (Botswana)</option>
                            <option value="BRA">Brésilienne (Brésil)</option>
                            <option value="GBR">Britannique (Royaume-Uni)</option>
                            <option value="BRN">Brunéienne (Brunéi)</option>
                            <option value="BGR">Bulgare (Bulgarie)</option>
                            <option value="BFA">Burkinabée (Burkina)</option>
                            <option value="BDI">Burundaise (Burundi)</option>
                            <option value="KHM">Cambodgienne (Cambodge)</option>
                            <option value="CMR">Camerounaise (Cameroun)</option>
                            <option value="CAN">Canadienne (Canada)</option>
                            <option value="CPV">Cap-verdienne (Cap-Vert)</option>
                            <option value="CAF">Centrafricaine (Centrafrique)</option>
                            <option value="CHL">Chilienne (Chili)</option>
                            <option value="CHN">Chinoise (Chine)</option>
                            <option value="CYP">Chypriote (Chypre)</option>
                            <option value="COL">Colombienne (Colombie)</option>
                            <option value="COM">Comorienne (Comores)</option>
                            <option value="COG">Congolaise (Congo-Brazzaville)</option>
                            <option value="COD">Congolaise (Congo-Kinshasa)</option>
                            <option value="COK">Cookienne (Îles Cook)</option>
                            <option value="CRI">Costaricaine (Costa Rica)</option>
                            <option value="HRV">Croate (Croatie)</option>
                            <option value="CUB">Cubaine (Cuba)</option>
                            <option value="DNK">Danoise (Danemark)</option>
                            <option value="DJI">Djiboutienne (Djibouti)</option>
                            <option value="DOM">Dominicaine (République dominicaine)</option>
                            <option value="DMA">Dominiquaise (Dominique)</option>
                            <option value="EGY">Égyptienne (Égypte)</option>
                            <option value="ARE">Émirienne (Émirats arabes unis)</option>
                            <option value="GNQ">Équato-guineenne (Guinée équatoriale)</option>
                            <option value="ECU">Équatorienne (Équateur)</option>
                            <option value="ERI">Érythréenne (Érythrée)</option>
                            <option value="ESP">Espagnole (Espagne)</option>
                            <option value="TLS">Est-timoraise (Timor-Leste)</option>
                            <option value="EST">Estonienne (Estonie)</option>
                            <option value="ETH">Éthiopienne (Éthiopie)</option>
                            <option value="FJI">Fidjienne (Fidji)</option>
                            <option value="FIN">Finlandaise (Finlande)</option>
                            <option value="FRA">Française (France)</option>
                            <option value="GAB">Gabonaise (Gabon)</option>
                            <option value="GMB">Gambienne (Gambie)</option>
                            <option value="GEO">Georgienne (Géorgie)</option>
                            <option value="GHA">Ghanéenne (Ghana)</option>
                            <option value="GRD">Grenadienne (Grenade)</option>
                            <option value="GTM">Guatémaltèque (Guatemala)</option>
                            <option value="GIN">Guinéenne (Guinée)</option>
                            <option value="GUY">Guyanienne (Guyana)</option>
                            <option value="HTI">Haïtienne (Haïti)</option>
                            <option value="GRC">Hellénique (Grèce)</option>
                            <option value="HND">Hondurienne (Honduras)</option>
                            <option value="HUN">Hongroise (Hongrie)</option>
                            <option value="IND">Indienne (Inde)</option>
                            <option value="IDN">Indonésienne (Indonésie)</option>
                            <option value="IRQ">Irakienne (Iraq)</option>
                            <option value="IRN">Iranienne (Iran)</option>
                            <option value="IRL">Irlandaise (Irlande)</option>
                            <option value="ISL">Islandaise (Islande)</option>
                            <option value="ISR">Israélienne (Israël)</option>
                            <option value="ITA">Italienne (Italie)</option>
                            <option value="CIV">Ivoirienne (Côte d'Ivoire)</option>
                            <option value="JAM">Jamaïcaine (Jamaïque)</option>
                            <option value="JPN">Japonaise (Japon)</option>
                            <option value="JOR">Jordanienne (Jordanie)</option>
                            <option value="KAZ">Kazakhstanaise (Kazakhstan)</option>
                            <option value="KEN">Kenyane (Kenya)</option>
                            <option value="KGZ">Kirghize (Kirghizistan)</option>
                            <option value="KIR">Kiribatienne (Kiribati)</option>
                            <option value="KNA">Kittitienne et Névicienne (Saint-Christophe-et-Niévès)</option>
                            <option value="KWT">Koweïtienne (Koweït)</option>
                            <option value="LAO">Laotienne (Laos)</option>
                            <option value="LSO">Lesothane (Lesotho)</option>
                            <option value="LVA">Lettone (Lettonie)</option>
                            <option value="LBN">Libanaise (Liban)</option>
                            <option value="LBR">Libérienne (Libéria)</option>
                            <option value="LBY">Libyenne (Libye)</option>
                            <option value="LIE">Liechtensteinoise (Liechtenstein)</option>
                            <option value="LTU">Lituanienne (Lituanie)</option>
                            <option value="LUX">Luxembourgeoise (Luxembourg)</option>
                            <option value="MKD">Macédonienne (Macédoine)</option>
                            <option value="MYS">Malaisienne (Malaisie)</option>
                            <option value="MWI">Malawienne (Malawi)</option>
                            <option value="MDV">Maldivienne (Maldives)</option>
                            <option value="MDG">Malgache (Madagascar)</option>
                            <option value="MLI">Maliennes (Mali)</option>
                            <option value="MLT">Maltaise (Malte)</option>
                            <option value="MAR">Marocaine (Maroc)</option>
                            <option value="MHL">Marshallaise (Îles Marshall)</option>
                            <option value="MUS">Mauricienne (Maurice)</option>
                            <option value="MRT">Mauritanienne (Mauritanie)</option>
                            <option value="MEX">Mexicaine (Mexique)</option>
                            <option value="FSM">Micronésienne (Micronésie)</option>
                            <option value="MDA">Moldave (Moldovie)</option>
                            <option value="MCO">Monegasque (Monaco)</option>
                            <option value="MNG">Mongole (Mongolie)</option>
                            <option value="MNE">Monténégrine (Monténégro)</option>
                            <option value="MOZ">Mozambicaine (Mozambique)</option>
                            <option value="NAM">Namibienne (Namibie)</option>
                            <option value="NRU">Nauruane (Nauru)</option>
                            <option value="NLD">Néerlandaise (Pays-Bas)</option>
                            <option value="NZL">Néo-Zélandaise (Nouvelle-Zélande)</option>
                            <option value="NPL">Népalaise (Népal)</option>
                            <option value="NIC">Nicaraguayenne (Nicaragua)</option>
                            <option value="NGA">Nigériane (Nigéria)</option>
                            <option value="NER">Nigérienne (Niger)</option>
                            <option value="NIU">Niuéenne (Niue)</option>
                            <option value="PRK">Nord-coréenne (Corée du Nord)</option>
                            <option value="NOR">Norvégienne (Norvège)</option>
                            <option value="OMN">Omanaise (Oman)</option>
                            <option value="UGA">Ougandaise (Ouganda)</option>
                            <option value="UZB">Ouzbéke (Ouzbékistan)</option>
                            <option value="PAK">Pakistanaise (Pakistan)</option>
                            <option value="PLW">Palaosienne (Palaos)</option>
                            <option value="PSE">Palestinienne (Palestine)</option>
                            <option value="PAN">Panaméenne (Panama)</option>
                            <option value="PNG">Papouane-Néo-Guinéenne (Papouasie-Nouvelle-Guinée)</option>
                            <option value="PRY">Paraguayenne (Paraguay)</option>
                            <option value="PER">Péruvienne (Pérou)</option>
                            <option value="PHL">Philippine (Philippines)</option>
                            <option value="POL">Polonaise (Pologne)</option>
                            <option value="PRT">Portugaise (Portugal)</option>
                            <option value="QAT">Qatarienne (Qatar)</option>
                            <option value="ROU">Roumaine (Roumanie)</option>
                            <option value="RUS">Russe (Russie)</option>
                            <option value="RWA">Rwandaise (Rwanda)</option>
                            <option value="LCA">Saint-Lucienne (Sainte-Lucie)</option>
                            <option value="SMR">Saint-Marinaise (Saint-Marin)</option>
                            <option value="VCT">Saint-Vincentaise et Grenadine (Saint-Vincent-et-les Grenadines)</option>
                            <option value="SLB">Salomonaise (Îles Salomon)</option>
                            <option value="SLV">Salvadorienne (Salvador)</option>
                            <option value="WSM">Samoane (Samoa)</option>
                            <option value="STP">Santoméenne (Sao Tomé-et-Principe)</option>
                            <option value="SAU">Saoudienne (Arabie saoudite)</option>
                            <option value="SEN">Sénégalaise (Sénégal)</option>
                            <option value="SRB">Serbe (Serbie)</option>
                            <option value="SYC">Seychelloise (Seychelles)</option>
                            <option value="SLE">Sierra-Léonaise (Sierra Leone)</option>
                            <option value="SGP">Singapourienne (Singapour)</option>
                            <option value="SVK">Slovaque (Slovaquie)</option>
                            <option value="SVN">Slovène (Slovénie)</option>
                            <option value="SOM">Somalienne (Somalie)</option>
                            <option value="SDN">Soudanaise (Soudan)</option>
                            <option value="LKA">Sri-Lankaise (Sri Lanka)</option>
                            <option value="ZAF">Sud-Africaine (Afrique du Sud)</option>
                            <option value="KOR">Sud-Coréenne (Corée du Sud)</option>
                            <option value="SSD">Sud-Soudanaise (Soudan du Sud)</option>
                            <option value="SWE">Suédoise (Suède)</option>
                            <option value="CHE">Suisse (Suisse)</option>
                            <option value="SUR">Surinamaise (Suriname)</option>
                            <option value="SWZ">Swazie (Swaziland)</option>
                            <option value="SYR">Syrienne (Syrie)</option>
                            <option value="TJK">Tadjike (Tadjikistan)</option>
                            <option value="TZA">Tanzanienne (Tanzanie)</option>
                            <option value="TCD">Tchadienne (Tchad)</option>
                            <option value="CZE">Tchèque (Tchéquie)</option>
                            <option value="THA">Thaïlandaise (Thaïlande)</option>
                            <option value="TGO">Togolaise (Togo)</option>
                            <option value="TON">Tonguienne (Tonga)</option>
                            <option value="TTO">Trinidadienne (Trinité-et-Tobago)</option>
                            <option value="TUN">Tunisienne (Tunisie)</option>
                            <option value="TKM">Turkmène (Turkménistan)</option>
                            <option value="TUR">Turque (Turquie)</option>
                            <option value="TUV">Tuvaluane (Tuvalu)</option>
                            <option value="UKR">Ukrainienne (Ukraine)</option>
                            <option value="URY">Uruguayenne (Uruguay)</option>
                            <option value="VUT">Vanuatuane (Vanuatu)</option>
                            <option value="VAT">Vaticane (Vatican)</option>
                            <option value="VEN">Vénézuélienne (Venezuela)</option>
                            <option value="VNM">Vietnamienne (Viêt Nam)</option>
                            <option value="YEM">Yéménite (Yémen)</option>
                            <option value="ZMB">Zambienne (Zambie)</option>
                            <option value="ZWE">Zimbabwéenne (Zimbabwe)</option>
                        </select>
                    </div>
                </div>


                <!-- Adresse / Code postal / Ville -->
                <div class="rows d-flex mb-3">
                    <div class="form-group col-lg-4">
                        <label for="adress">Adresse :</label>
                        <input class="form-control bg-info text-light p-2" type="text" name="adress" id="adress" value="<?= $_POST['adress'] ?? ''; ?>"
                        pattern="[0-9]{1,4}\s[a-z]{3,10}\s[A-Z]{1}[a-z]{3,18}" title="Il manque des espaces ou une majuscule, Pas de caractères spéciaux !" required>
                    </div>
                    <!-- Message d'erreur variable adress -->
                    <span>  <?= $errorList['adress'] ?? ''; ?>  </span>


                    <div class="form-group col-lg-4">
                        <label for="codePostal">Code Postal :</label>
                        <input class="form-control bg-info text-light p-2" type="text" name="codePostal" id="codePostal" value="<?= $_POST['codePostal'] ?? ''; ?>"
                        pattern="[0-9]{5,5}" title="Un nombre de 5 chiffres uniquement !" required>
                    </div>
                    <!-- Message d'erreur variable codePostal -->
                    <span>  <?= $errorList['codePostal'] ?? ''; ?>  </span>


                    <div class="form-group col-lg-4">
                        <label for="city">Ville :</label>
                        <input class="form-control bg-info text-light p-2" type="text" name="city" id="city" value="<?= $_POST['city'] ?? ''; ?>"
                        pattern="[A-Z]{1}[a-zA-ZÀ-ÿ]{2,20}\D" title="Pas de chiffres ou caractères spéciaux !" required>
                    </div>
                    <!-- Message d'erreur variable city -->
                    <span>  <?= $errorList['city'] ?? ''; ?>  </span>
                </div>

                <div class="rows d-flex mb-3">
                    <!-- Mail -->
                    <div class="form-group col-lg-6">
                        <label for="email">Mail :</label>
                        <input class="form-control bg-info text-light p-2" type="email" name="email" id="email" value="<?= $_POST['email'] ?? ''; ?>"
                        pattern="[a-zA-Z0-9.-]+[@]{1}[a-zA-Z0-9.-]+[.]{1}[a-z]{2,10}" title="Vérifiez si l'adresse Mail est bien orthographié !" required>
                    </div>
                    <!-- Message d'erreur variable email -->
                    <span>  <?= $errorList['email'] ?? ''; ?>  </span>


                    <!-- Numéro de téléphone -->
                    <div class="form-group col-lg-6">
                        <label for="phone">Numéro de téléphone :</label>
                        <input class="form-control bg-info text-light p-2" type="tel" id="phone" name="phone" value="<?= $_POST['phone'] ?? ''; ?>"
                        pattern="(?:(?:\+|00)33[\s.-]{0,3}(?:\(0\)[\s.-]{0,3})?|0)[1-9](?:(?:[\s.-]?\d{2}){4}|\d{2}(?:[\s.-]?\d{3}){2})"
                        title="Nombre de 10 chiffres uniquement !" required>
                    </div>
                    <!-- Message d'erreur variable phone -->
                    <span>  <?= $errorList['phone'] ?? ''; ?>  </span>
                </div>


                <!-- Diplôme -->
                <div class="form-group mb-3">
                    <label for="degree">Diplôme(s):</label>
                    <select class="form-control bg-info text-light p1" name="degree" id="degree" required>
                        <option value="">--Diplôme(s) obtenu(s)--</option>
                        <option value="SANS">Sans</option>
                        <option value="BAC">BAC</option>
                        <option value="BAC +2">BAC +2 (BTS, DUT ...)</option>
                        <option value="BAC +3 ou plus">BAC +3 ou plus (Licence, Master ...)</option>
                    </select>
                </div>


                <div class="rows d-flex mb-3">
                    <!-- Numéro pôle emploi -->
                    <div class="form-group col-lg-6">
                        <label for="poleEmploiNumber">Numéro Pôle Emploi :</label>
                        <input class="form-control bg-info text-light p-2" type="text" name="poleEmploiNumber" id="poleEmploiNumber" value="<?= $_POST['poleEmploiNumber'] ?? ''; ?>"
                        pattern="[0-9A-Z]{8,12}" title="Votre numéro Pôle emploi doit comporter entre 8 et 12 caractères et aucunes minuscules !">
                    </div>
                    <!-- Message d'erreur variable poleEmploiNumber -->
                    <span>  <?= $errorList['poleEmploiNumber'] ?? ''; ?>  </span>


                    <!-- Nombre de badge -->
                    <div class="form-group col-lg-6">
                        <label for="badge">Nombre de badge :</label>
                        <input class="form-control bg-info text-light p-2" type="number"  min="0" max="9" name="badge" id="badge" value="<?= $_POST['badge'] ?? ''; ?>"
                        title="Un chiffre de 0 à 9 uniquement !">
                    </div>
                </div>


                <!-- Liens codecademy -->
                <div class="form-group mb-3">
                    <label for="link">Liens codecademy  :</label>
                    <input class="form-control bg-info text-light p-2" type="url" name="link" id="link" value="<?= $_POST['link'] ?? ''; ?>"
                    pattern="[\w-.]+@([\w-]+.)+.[\w-]{2,5}"
                    title="Veuillez entrer un lien valide !">
                </div>
                <!-- Message d'erreur variable link -->
                <span>  <?= $errorList['link'] ?? ''; ?>  </span>


                <!-- Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ? -->
                <div class="form-group">
                    <label for="question1">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ? :</label>
                    <textarea class="form-control bg-info text-light p-2" id="question1" name="question1" rows="5" cols="20" value="<?= $_POST['question1'] ?? ''; ?>"
                    title="Pas de caractères spéciaux !" minlength="5" maxlength="500"></textarea>
                </div>


                <!-- Racontez-nous un de vos "hacks" (pas forcément technique ou informatique) -->
                <div class="form-group">
                    <label for="hackStory">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</label>
                    <textarea class="form-control bg-info text-light p-2" id="hackStory" name="hackStory" rows="5" cols="20" value="<?= $_POST['hackStory'] ?? ''; ?>"
                    title="Pas de caractères spéciaux !" minlength="5" maxlength="500" ></textarea>
                </div>


                <!-- Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ? -->
                <div class="form-group">
                    <label for="question2">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label>
                    <textarea class="form-control bg-info text-light p-2" name="question2" id="question2" rows="5" cols="20" value="<?= $_POST['question2'] ?? ''; ?>"
                    title="Pas de caractères spéciaux !" minlength="5" maxlength="500" ></textarea>
                </div>

            </fieldset>
            
                <div class="">
                    <button type="submit" class="btn btn-info btn-lg">Envoyer</button>
                    <button type="reset" class="btn btn-warning btn-lg">Annuler</button>
                </div>
                
        </form>
    </div>

        
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
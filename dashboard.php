<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styleTry.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Dashboard</title>
    

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load Charts and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Draw the pie chart for Sarah's pizza when Charts is loaded.
      google.charts.setOnLoadCallback(drawSarahChart);

      // Draw the pie chart for the Anthony's pizza when Charts is loaded.
      google.charts.setOnLoadCallback(drawAnthonyChart);

      // Callback that draws the pie chart for Sarah's pizza.
      function drawSarahChart() {

        // Create the data table for Sarah's pizza.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Mushrooms', 1],
          ['Onions', 1],
          ['Olives', 2],
          ['Zucchini', 2],
          ['Pepperoni', 1]
        ]);

        // Set options for Sarah's pie chart.
        var options = {title:'Expertise sur les transactions mensuellement',
                       width:500,
                       height:300};

        // Instantiate and draw the chart for Sarah's pizza.
        var chart = new google.visualization.PieChart(document.getElementById('Sarah_chart_div'));
        chart.draw(data, options);
      }

      // Callback that draws the pie chart for Anthony's pizza.
      function drawAnthonyChart() {

        // Create the data table for Anthony's pizza.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Janvier', 2],
          ['Février', 2],
          ['Mars', 2],
          ['Avril', 0],
          ['Mai', 3],
          ['Juin', 4],
          ['Juillet',3],
          ['Août', 2],
          ['Septembre',3],
          ['Octobre',6],
          ['Novembre',5],
          ['Décembre',2]
        ]);

        // Set options for Anthony's pie chart.
        var options = {title:'Transactions mensuelles',
                       width:500,
                       height:300};

        // Instantiate and draw the chart for Anthony's pizza.
        var chart = new google.visualization.PieChart(document.getElementById('Anthony_chart_div'));
        chart.draw(data, options);
      }

    </script>
    

    <!---------------------------------------------------------------------------------------------------------------------->



<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
    google.charts.load('current', {packages: ['corechart', 'line']});
    google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {

      var data = new google.visualization.DataTable();
      data.addColumn('number', 'X');
      data.addColumn('number', 'Agents');

      data.addRows([
        [0, 0],   [1, 10],  [2, 23],  [3, 17],  [4, 18],  [5, 9], [6,1], [7,3], [8,1], [9,8], [10,5], [11,3], [12,7]

      ]);

      var options = {
        hAxis: {
          title: 'Mois'
        },
        vAxis: {
          title: 'Quantité'
        }
      };

      var chart = new google.visualization.LineChart(document.getElementById('chart_div'));

      chart.draw(data, options);
    }
    </script>

    <style>
        *{
            margin:0px;
            padding:0px;
            box-sizing:border-box;
        }
    </style>

</head>

<body style="height:100vh;srcoll-behavior:smooth;" onload="myFunction()">
    
    <div class="container-dashboard">

        <div class="div-menu">

            <div class="logo-menu">
                <img src="logo/bovaza-sans-fond.png">
                <i class="fa-solid fa-bars icon-menu"></i>
            </div>

            <div class="btnAdm">
                <div class="div-icon-user">
                    <!--<i class="fa-solid fa-user icon-user"></i>-->
                    <img src="logo/photo-profil.png">
            </div>

                <ul>
                    <li>Admin</li>
                </ul>
                <div class="div-icon-bottom"><i class="fa-solid fa-chevron-up icon-bottom"></i></div>
            </div>

        </div>

        <div class="div-dashboard">

            <div class="menu-dashboard">
                <ul class="menuDad">
                    <div class="btn-tableauBord"><i class="fa-sharp fa-solid fa-house"></i><li class="delete-btn">Tableau de bord</li></div>
                    <div class="btn-ticket"><i class="fa-solid fa-list"></i><li class="delete-btn">Tickets</li></div>
                    <!--<div class="btn-monitoring"><i class="fa-brands fa-watchman-monitoring"></i><li>Monitoring</li></div>-->
                    <div class="btn-utilisateur"><i class="fa-solid fa-user"></i><li class="delete-btn">Gestion des Utilisateurs</li></div>

                    <div class="btn-rapport"><i class="fa-solid fa-scroll"></i><li class="delete-btn">Rapports Financiers
                        <ul class="subMenu-rapport">
                            <!--<li class="btn-dataille">Cumul Détaillé</li>-->
                            <li>Rapport Comptable</li>
                            <li>Résumé Accumulé</li>
                            <li>Résultats par Loterie</li>
                            <li>Tickets Gagnants</li>
                            <li>Paris Gagnants</li>
                            <li>Liste des Ventes</li>
                            <li>Suivi des Ventes</li>
                        </ul>
                    </li><i class="fa-solid fa-chevron-right right icon-rapport delete-btn"></i></div>
                    
                    <div class="btn-paiement"><i class="fa-solid fa-money-bill-wave"></i><li class="delete-btn">Paiements<br>
                        <ul class="subMenu-paiement">
                            <li>Gestion des Paiements</li>
                            <li>Activité des Paiements</li>
                        </ul>
                    </li><i class="fa-solid fa-chevron-right right icon-paiement delete-btn"></i></div>
                    
                    <div class="btn-gestion"><i class="fa-sharp fa-solid fa-circle-nodes"></i><li class="delete-btn">Gestion des Produits<br>
                        <ul class="subMenu-gestion">
                            <li>Prix des Produits</li>
                        </ul>
                    </li><i class="fa-solid fa-chevron-right right icon-gestion delete-btn"></i></div>

                    <div class="btn-agent"><i class="fa-solid fa-bag-shopping"></i><li class="delete-btn">Agents
                        <ul class="subMenu-agent">
                            <li>Ajouter des Agents</li>
                            <li>Afficher des Agents</li>
                        </ul>
                    </li><i class="fa-solid fa-chevron-right right icon-agent delete-btn"></i></div>

                    <div class="btn-resultat"><i class="fa-solid fa-square-poll-vertical"></i><li class="delete-btn">Résultats<br>
                        <ul class="subMenu-resultat">
                            <li>Afficher les Résultats</li>
                        </ul>
                    </li><i class="fa-solid fa-chevron-right right icon-resultat delete-btn"></i></div>

                    <div class="btn-comptePrepaye"><i class="fa-solid fa-comment-dollar"></i><li class="delete-btn">Compte Prépayé<br>
                        <ul class="subMenu-comptePrepaye">
                            <li>Gérer Compte Prépayé</li>
                            <li>Transactions</li>
                        </ul>
                        </li><i class="fa-solid fa-chevron-right right icon-comptePrepaye delete-btn"></i>
                    </div>

                </ul>
            </div>

            <div class="panel-dashboard">
                
                <div class="panel-tableauBord">

                    <div class="text-panel">
                        <h3>TABLEAU DE BORD</h3><br>
                        <hr>
                    </div><br><br>

                    <div class="balance">

                        <div class="paye">

                            <div class="balance-paye">

                                <div class="text-balance-paye">
                                    <div class="balance-montant">$45004.00</div>
                                    <div class="balance-text">BALANCE TOTALE</div>
                                </div>

                                <div class="div-iconPaye">
                                    <i class="fa-sharp fa-solid fa-comments-dollar"></i>
                                </div>

                                <!--<div class="status-paye">
                                    <p>Statut</p>
                                    <p>En profit</p>
                                </div><br>-->

                                <!--<div class="div-btnVoir-paye">
                                    <a href="#">Voir</a>
                                    <i class="fa-solid fa-eye"></i>
                                </div>-->

                            </div>

                        </div>


                        <div class="ticket">

                        <div class="balance-paye">

                            <div class="text-balance-paye">
                                <div class="balance-montant">2335.99</div>
                                <div  class="balance-text">Compte Prépayé</div> 
                            </div>

                            <div class="div-iconPaye">
                                <i class="fa-regular fa-money-bill-1"></i>
                            </div>

                            <!--<div class="status-paye">
                                <p>Statut</p>
                                <p>Off</p>
                            </div><br>

                            <div class="div-btnVoir-paye">
                                <a href="#">Voir</a>
                                <i class="fa-solid fa-eye"></i>
                            </div>-->

                        </div>

                        </div>


                        


                        <div class="prepaye">

                            <div class="balance-paye">

                                <div class="text-balance-paye">
                                    <div class="balance-montant">205.75</div>
                                    <div class="balance-text">Profit</div> 
                                </div><br>

                                <div class="div-iconPaye">
                                    <i class="fa-solid fa-money-bill-trend-up"></i>
                                </div>
                                <!--<div class="status-paye">
                                    <p>Statut</p>
                                    <p>Off</p>
                                </div><br>

                                <div class="div-btnVoir-paye">
                                    <a href="#">Voir</a>
                                    <i class="fa-solid fa-eye"></i>
                                </div>-->

                            </div>

                        </div>


                    </div><br><br><br><br>


                    <div class="div-graph">

                            <div id="Anthony_chart_div"></div>
                            <div id="chart_div"></div>

                    </div><br><br><br><br>


                    <div class="monitoring-banque">

                        <!--<div class="text-monitoring">
                            <h2>Monitoring de la Banque</h2>
                        </div><br>-->

                        <div class="all-transaction">

                            <div class="transaction-journaliere">
                                <i class="fa-solid fa-dollar-sign"></i><br>
                                <h4>TRANSACTION JOURNAL.</h4><br>
                                <h4>$200</h4>
                            </div>

                            <div class="balance-journaliere">
                                <i class="fa-solid fa-hand-holding-dollar"></i><br>
                                <h4>BALANCE JOURNAL.</h4><br>
                                <h4>$50</h4>
                            </div>

                            <div class="ticket-vendu">
                                <i class="fa-solid fa-stamp"></i><br>
                                <h4>TICKETS VENDU</h4><br>
                                <h4>15</h4>
                            </div>

                            <div class="agent">
                                <i class="fa-solid fa-users"></i><br>
                                <h4>AGENTS</h4><br>
                                <h4>5</h4>
                            </div>

                        </div><br><br><br><br>

                        <div class="div-tableau-agent">

                            <!--<div class="total-agent">
                                <h3>Total Agent: &nbsp; &nbsp;3</h3>
                            </div><br>-->

                            <div class="tableau-agent">
                                <table>
                                    <tr>
                                        <th>Entreprise</th>
                                        <th>Adresse</th>
                                        <th>Nom d'utilisateur</th>
                                        <th>Tickets</th>
                                        <th>Ventes Tot.</th>
                                        <th>Prix</th>
                                        <th>Nette</th>
                                    </tr>

                                    <tr>
                                        <td>Style Plus Lotto</td>
                                        <td>Jacmel</td>
                                        <td>sp303</td>
                                        <td>0</td>
                                        <td>0.00</td>
                                        <td>0.00</td>
                                        <td>0.00</td>
                                    </tr>

                                    <tr>
                                        <td>Style Plus Lotto</td>
                                        <td>Jacmel</td>
                                        <td>sp303</td>
                                        <td>0</td>
                                        <td>0.00</td>
                                        <td>0.00</td>
                                        <td>0.00</td>
                                    </tr>

                                    <tr>
                                        <td>Style Plus Lotto</td>
                                        <td>Jacmel</td>
                                        <td>sp303</td>
                                        <td>0</td>
                                        <td>0.00</td>
                                        <td>0.00</td>
                                        <td>0.00</td>
                                    </tr>

                                    <tfoot>
                                        <tr>
                                            <th>Balance</th>
                                        </tr>
                                        
                                        <tr>
                                            <td>0.00</td>
                                        </tr>
                                    </tfoot>

                                </table>
                            </div>

                        </div><br>

                    </div>


                </div>




            <!------------------------------------------------------------PANEL-TICKET----------------------------------------------------------------->

                <div class="panel-ticket">

                        <div class="centraliser">
                           
                            <h3 class="texto-panelTicket-form">RECHERCHE TICKET</h3>

                            <form>

                                <div class="div-compteId">
                                    <label for="IdCompteId">Compte</label>
                                    <input type="text" id="idCompteId" class="IdCompteId" placeholder="Entrez le Nom du Client">
                                </div><br>

                                <div class="div-date">
                                    <label for="IdTransaction">Date de la Transaction</label>
                                    <input type="date" id="IdTransaction" class="IdDate">
                                </div><br>


                                <div class="div-ticketNumeroId">
                                    <label for="numeroTicketId">Date de la Transaction</label>
                                    <input type="text" id="numeroTicketId" class="numeroTicketId" placeholder="Entrez le Numéro de Ticket">
                                </div><br>


                                <div class="div-typeTicketId">
                                    <label>Type de Ticket</label>
                                    <select>
                                        <option>Tous les Tickets</option>
                                        <option value="attente">Tickets En Attente</option>
                                        <option value="gagnant">Tickets Gagnants</option>
                                        <option value="perdant">Tickets Perdants</option>
                                        <option value="annule">Tickets Annulés</option>
                                    </select>
                                </div><br>

                                <div class="div-buttonRechercher">
                                    <button type="submit" class="btnRechercher">RECHERCHER</button>
                                </div>

                            </form>

                                   
                        </div>

                </div>












            <!------------------------------------------------------------DONE PANEL-TICKET------------------------------------------------------------->












        <!--------------------------------------------------------------GESTION DES UTILISATEURS--------------------------------------------------------->

                <div class="panel-utilisateur">

                    <div class="text-panelTicket">
                            <h3>GESTION DES UTILISATEURS</h3>
                        </div><br>

                        <div class="div-formTicket">

                            <form class="formTicket">
                                <div class="div-typeCompteCompte">

                                    <!--<div class="div-typeCompte">
                                        <label for="typeCompte">Type Compte</label>
                                        <input type="text" id="typeCompte" Placeholder="Nom de l'Agent">
                                    </div>-->

                                    <div class="div-compte">
                                        <label for="compte">Entrez le Numéro de l'Agent</label>

                                    <div class="div-btnSearch"> 
                                        <input type="text" id="compte" Placeholder="Numéro de l'Agent">
                                        <button class="btnSearch"><i class="fa-solid fa-magnifying-glass"></i></button>
                                    </div>

                                    
                                    </div>



                                </div>
                            </form>

                    </div>

                </div>

         <!----------------------------------------------------------------DONE GESTION DES UTILISATEURS-------------------------------------------------->       



         <!-----------------------------------------------------------PANEL RAPPORT------------------------------------------------------------------------>
               
                <div class=" panel-utilisateur panel-RapportFinancier">



                </div>




         <!----------------------------------------------------------------DONE RAPPORT FINANCIER-------------------------------------------------->   

                <div class="panel-paiement"></div>
                <div class="panel-gestionProduit"></div>
                <div class="panel-agent"></div>
                <div class="panel-resultat"></div>
                <div class="panel-comptePrepaye"></div>
                

            </div>
        </div>

    </div>

</body>

<script>
    /*let panelTicket = document.querySelector('.panel-ticket');
    let panelTableauBord = document.querySelector('.panel-tableauBord');
    let panelUtilisateur = document.querySelector('.panel-utilisateur');

    function myFunction() {
        panelTableauBord.style="display:block";
        panelTicket.style="display:none";
        panelUtilisateur.style="display:none";
    }*/
</script>

<script src="appWork00.js"></script>

</html>
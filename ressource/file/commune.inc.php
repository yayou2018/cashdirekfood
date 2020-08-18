<script type="text/javascript">  
    function selectdepartement() {
          var select = document.getElementById( "departement" );
          index = select.selectedIndex;
          if(select.options[ index ].value==="Nord"){ 
              var objDiv = document.getElementById('commune'); 
              objDiv.innerHTML =" \n\
                      <select name='communes' id='communes' class='form-control'   >\n\
                      <option value='Acul-du-Nord'>Acul-du-Nord</option>\n\
                      <option value='Plaine-du-Nord'>Plaine-du-Nord</option>\n\
                      <option value='Milot'>Milot</option>\n\
                      <option value='Borgne'>Borgne</option>\n\
                      <option value='Port-Margot'>Port-Margot</option>\n\
                      <option value='Cap-Haitien'>Cap-Haitien</option>\n\
                      <option value='Limonade'>Limonade</option>\n\
                      <option value='Quartier-Morin'>Quartier-Morin</option>\n\
                      <option value='Grande-Riviere-du-Nord'>Grande-Riviere-du-Nord</option>\n\
                      <option value='Bahon'>Bahon</option>\n\
                      <option value='Limbe'>Limbe</option> \n\
                      <option value='Bas-Limbe'>Bas-Limbe</option> \n\
                      <option value='Plaisance'>Plaisance</option> \n\
                      <option value='Pilate'>Pilate</option> \n\
                      <option value='Saint-Raphael'>Saint-Raphael</option>  \n\
                      <option value='Dondon'>Dondon</option>  \n\
                      <option value='Ranquitte'>Ranquitte</option>  \n\
                      <option value='Pignon'>Pignon</option>  \n\
                      <option value='La Victoire'>La Victoire</option>  \n\
                      </select>";
          }else if(select.options[ index ].value==="Sud"){
              var objDiv = document.getElementById('commune'); 
              objDiv.innerHTML =" \n\
                      <select name='communes' id='communes' class='form-control'>\n\
                      <option value='Aquin'>Aquin</option>\n\
                      <option value='Cavaillon'>Cavaillon</option>\n\
                        <option value='Saint-Louis-du-Sud'>Saint-Louis-du-Sud</option>\n\
                       <option value='Cayes'>Cayes</option>\n\
                        <option value='Camp-Perrin'>Camp-Perrin</option>\n\
                        <option value='Cornillon'>Cornillon</option>\n\
                        <option value='Chantal'>Chantal</option>\n\
                        <option value='Maniche'>Maniche</option>\n\
                        <option value='Ile-a-Vache'>Ile-a-Vache</option>\n\
                        <option value='Torbeck'>Torbeck</option>\n\
                        <option value='Chardonnieres'>Chardonnieres</option>\n\
                        <option value='Les Anglais'>Les Anglais</option>\n\
                        <option value='Tiburon'>Tiburon</option>\n\
                        <option value='Port-a-Piment'>Port-a-Piment</option>\n\
                        <option value='Roche-a-Bateau'>Roche-a-Bateau</option>\n\
                        <option value='Port-Salut'>Port-Salut</option>\n\
                        <option value='Arniquet'>Arniquet</option>\n\
                        <option value='Saint-Jean-du-Sud'>Saint-Jean-du-Sud</option>\n\
                      </select>";
          }else if(select.options[ index ].value==="Centre"){
              var objDiv = document.getElementById('commune'); 
              objDiv.innerHTML =" \n\
                      <select name='communes' id='communes' class='form-control'>\n\
                        <option value='Cerca-la-Source'>Cerca-la-Source</option>\n\
                        <option value='Thomassique'>Thomassique</option>\n\
                         <option value='Hinche'>Hinche</option>\n\
                        <option value='Cerca-Carvajal'>Cerca-Carvajal</option>\n\
                        <option value='Maissade'>Maissade</option>\n\
                        <option value='Thomonde'>Thomonde</option>\n\
                        <option value='Lascahobas'>Lascahobas</option>\n\
                        <option value='Belladere'>Belladere</option>\n\
                        <option value='Anse-Rouge'>Anse-Rouge</option>\n\
                        <option value='Savanette'>Savanette</option>\n\
                        <option value='Mirebalais'>Mirebalais</option>\n\
                        <option value='Saut-dEau'>Saut-dEau</option>\n\
                        <option value='Boucan-Carre'>Boucan-Carre</option>\n\
                      </select>";
          }else if(select.options[ index ].value==="Ouest"){
              var objDiv = document.getElementById('commune'); 
              objDiv.innerHTML =" <select name='communes' id='communes' class='form-control'>\n\
                 <option value='Arcahaie'>Arcahaie</option>\n\
                    <option value='Cabaret'>Cabaret</option>\n\
                    <option value='Croix-des-Bouquets'>Croix-des-Bouquets</option>\n\
                    <option value='Ganthier'>Ganthier</option>\n\
                    <option value='Thomazeau'>Thomazeau</option>\n\
                    <option value='Cornillon'>Cornillon</option>\n\
                    <option value='Fonds-Verrettes'>Fonds-Verrettes</option>\n\
                    <option value='Anse-a-Galets'>Anse-a-Galets</option>\n\
                    <option value='Pointe-a-Raquette'>Pointe-a-Raquette</option>\n\
                    <option value='Leogane'>Leogane</option>\n\
                    <option value='Petit-Goave'>Petit-Goave</option>\n\
                    <option value='Grand-Goave'>Grand-Goave</option>\n\
                    <option value='Port-au-Prince'>Port-au-Prince</option>\n\
                    <option value='Carrefour'>Carrefour</option>\n\
                    <option value='Delmas'>Delmas</option>\n\
                    <option value='Petion-ville'>Petion-ville</option>\n\
                    <option value=''>Port-au-Prince</option>\n\
                    <option value='Kenscoff'>Kenscoff</option>\n\
                    <option value='Cite Soleil'>Cite Soleil</option>\n\
                    <option value='Gressier'>Gressier</option>\n\
                    <option value='Tabarre'>Tabarre</option>\n\
                </select>";
          }else if(select.options[ index ].value==="Sud-Est"){
              var objDiv = document.getElementById('commune'); 
              objDiv.innerHTML =" <select name='communes' id='communes' class='form-control'>\n\
                 <option value='Bainet'>Bainet</option>\n\
                    <option value='Thiotte'>Thiotte</option>\n\
                    <option value='Grand-Gosier'>Grand-Gosier</option>\n\
                    <option value='Jacmel'>Jacmel</option>\n\
                    <option value='Cotes-de-Fer'>Cotes-de-Fer</option>\n\
                    <option value='Vallee-de-Jacmel'>Vallee-de-Jacmel</option>\n\
                    <option value='Belle-Anse'>Belle-Anse</option>\n\
                    <option value='Anse-a-Pitres'>Anse-a-Pitres</option>\n\
                    <option value='Cayes-Jacmel'>Cayes-Jacmel</option>\n\
                    <option value='Marigot'>Marigot</option>\n\
                </select>";
          }else if(select.options[ index ].value==="Artibonite"){
              var objDiv = document.getElementById('commune'); 
              objDiv.innerHTML =" <select name='communes' id='communes' class='form-control'>\n\
                    <option value='Dessalines'>Dessalines</option>\n\
                    <option value='Desdunes'>Desdunes</option>\n\
                    <option value='Grande-Saline'>Grande-Saline</option>\n\
                    <option value='Petite-Riviere-de-lArtibonite'>Petite-Riviere-de-lArtibonite</option>\n\
                    <option value='Gonaives'>Gonaives</option>\n\
                    <option value='Ennery'>Ennery</option>\n\
                    <option value='Estere'>Estere</option>\n\
                    <option value='Gros-Morne'>Gros-Morne</option>\n\
                    <option value='Anse-Rouge'>Anse-Rouge</option>\n\
                    <option value='Terre-Neuve'>Terre-Neuve</option>\n\
                    <option value='Marmelade'>Marmelade</option>\n\
                    <option value='Saint-Michel-de-lAttalaye'>Saint-Michel-de-lAttalaye</option>\n\
                    <option value='Saint-Marc'>Saint-Marc</option>\n\
                    <option value='Verrettes'>Verrettes</option>\n\
                    <option value='La Chapelle'>La Chapelle</option>\n\
                    </select>";
          }else if(select.options[ index ].value==="Nord-Est"){
              var objDiv = document.getElementById('commune'); 
              objDiv.innerHTML =" <select name='communes' id='communes' class='form-control'>\n\
                    <option value='Fort-Liberte'>Fort-Liberte</option>\n\
                        <option value='Perches'>Perches</option>\n\
                        <option value='Ferrier'>Ferrier</option>\n\
                        <option value='Ouanaminthe'>Ouanaminthe</option>\n\
                        <option value='Capotille'>Capotille</option>\n\
                        <option value='Mont-Organise'>Mont-Organise</option>\n\
                        <option value='Trou-du-Nord'>Trou-du-Nord</option>\n\
                        <option value='Caracol'>Caracol</option>\n\
                        <option value='Sainte-Suzanne'>Sainte-Suzanne</option>\n\
                        <option value='Terrier-Rouge'>Terrier-Rouge</option>\n\
                        <option value='Vallieres'>Vallieres</option> \n\
                        <option value='Carice'>Carice</option> \n\
                        <option value='Mombin-Crochu'>Mombin-Crochu</option> \n\
                    </select>";
          }else if(select.options[ index ].value==="Nord-Ouest"){
              var objDiv = document.getElementById('commune'); 
              objDiv.innerHTML =" <select name='communes' id='communes' class='form-control'>\n\
                    <option value='Mole-Saint-Nicolas'>Mole-Saint-Nicolas</option>\n\
                    <option value='Baie-de-Henne'>Baie-de-Henne</option>\n\
                    <option value='Bombardopolis'>Bombardopolis</option>\n\
                    <option value='Jean-Rabel'>Jean-Rabel</option>\n\
                    <option value='Port-de-Paix'>Port-de-Paix</option>\n\
                    <option value='Bassin-Bleu'>Bassin-Bleu</option>\n\
                    <option value='Chansolme'>Chansolme</option>\n\
                    <option value='La Tortue'>La Tortue</option>\n\
                    <option value='Saint-Louis-du-Nord'>Saint-Louis-du-Nord</option>\n\
                    <option value='Anse-a-Foleur'>Anse-a-Foleur</option>\n\
                    </select>";
          }else if(select.options[ index ].value==="Nippes"){
              var objDiv = document.getElementById('commune'); 
              objDiv.innerHTML =" <select name='communes' id='communes' class='form-control'>\n\
                    <option value='Miragoane'>Miragoane</option>\n\
                    <option value='Petite-Riviere-de-Nippes'>Petite-Riviere-de-Nippes</option>\n\
                    <option value='Fonds-des-Negres'>Fonds-des-Negres</option>\n\
                    <option value='Paillant'>Paillant</option>\n\
                    <option value='Anse-à-Veau'>Anse-à-Veau</option>\n\
                    <option value='L'Asile'>L'Asile</option>\n\
                    <option value='Petit-Trou-de-Nippes'>Petit-Trou-de-Nippes</option>\n\
                    <option value='Plaisance-du-Sud'>Plaisance-du-Sud</option>\n\
                    <option value='Arnaud'>Arnaud</option>\n\
                    <option value='Barraderes'>Barraderes</option>\n\
                    <option value='Grand-Boucan'>Grand-Boucan</option>\n\
                    </select>";
          }else if(select.options[ index ].value==="Grand-Anse"){
              var objDiv = document.getElementById('commune'); 
              objDiv.innerHTML =" <select name='communes' id='communes' class='form-control'>\n\
                    <option value='Anse-dAinault'>Anse-dAinault</option>\n\
                    <option value='Dame-Marie'>Dame-Marie</option>\n\
                    <option value='Les Irois'>Les Irois</option>\n\
                    <option value='Corail'>Corail</option>\n\
                    <option value='Roseaux'>Roseaux</option>\n\
                    <option value='Beaumont'>Beaumont</option>\n\
                    <option value='Pestel'>Pestel</option>\n\
                    <option value='Belladere'>Belladere</option>\n\
                    <option value='Jeremie'>Jeremie</option>\n\
                    <option value='Abricots'>Abricots</option>\n\
                    <option value='Trou-Bonbon'>Trou-Bonbon</option>\n\
                    <option value='Moron'>Moron</option>\n\
                    <option value='Chambellan'>Chambellan</option>\n\
                    </select>";
          }
          
      }
</script>

<?php require_once('head.php');?>

    
  <body>
    <div id="page">
        <?php require_once('header.php');?>
                 

        <div style="margin-top: 100px;"></div>
   
        <div class="container-fluid">  
        <h3 class="headtext"> Tpsc-group1 </h3>
         <hr>

          <!--PAGE CONTENT GOES HERE-->
          <div class="row">
        <div class="col-sm-8 col-md-8">
          
    <ul class="timeline">
        <li>
          <?php
                  $ch = curl_init();
                  curl_setopt ($ch, CURLOPT_URL, 'http://www.kpias.com/webservices/content?api_key=160e64f13691a2f59d34492dc238f98e&page=tpscg1&section_id=50');
                  curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
                  $response=curl_exec($ch);
                  curl_close ($ch);
                  $result= json_decode($response);
                  
                  foreach ($result as $section)
                  {

                   ?>
          <div class="timeline-badge info"><i class="fa fa-check-square"></i></div>
          <div class="timeline-panel" title="click me">
            <div class="timeline-heading">
             
             <!-- <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>-->
             <p class="pstyle"> <span class ="lifont"><?php echo $section->section_title?></span> <?php echo $section->section_content?></p>
             <ul class ="lidisc">
             	<li>GROUP – I</li>
              <li>GROUP – II</li>
              <li>GROUP – III</li>
              <li>GROUP – IV</li>

             </ul>
             <br>
             

            

            </div>

            


          </div>
          <?php } ?>
        </li>
        
        
        <li>
          <?php
                  $ch = curl_init();
                  curl_setopt ($ch, CURLOPT_URL, 'http://www.kpias.com/webservices/content?api_key=160e64f13691a2f59d34492dc238f98e&page=tpscg1&section_id=51');
                  curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
                  $response=curl_exec($ch);
                  curl_close ($ch);
                  $result= json_decode($response);
                  
                  foreach ($result as $section)
                  {

                   ?>
          <div class="timeline-badge danger"><i class="fa fa-cubes"></i></div>
          <div class="timeline-panel" title="click me">
          
          <div class="timeline-heading">
            <h4 class="timeline-title"><b><?php echo $section->section_title?></b></h4>
              <h4 class="timeline-title">Exam Pattern</h4>
           <!--    <h4 class="timeline-title">Prelims Examination (Screening Test)</h4> -->
              <p class="pstyle"><?php echo $section->section_content?>.</p>
             
             
              <table class="table2">
                  <tbody>
                  <tr>
                    <td><b>Prelims</b></td>
                    <td>150 Marks</td>
                    <td>150 Questions-objective Type</td>
                    <td>Duration-2:30 Hrs</td>
                    
                    
                  </tr>
                  <tr>
                    <td> <b>Mains</b></td>
                    <td> 900 Marks</td>
                    <td>6 Papers-150 Marks each</td>
                    <td>  Duration – 03:00 Hrs</td>
                   
                  </tr>
                  <tr>
                    <td><b> Interview</b></td>
                    <td>  100 Marks</td>
                    <td></td>
                    <td></td>
                   
                    

                  </tr>
                  
                    
                  </tbody>

              </table>

              <h4 class="timeline-title"><b>Note:</b> Group – 1 Prelims is only Eligibility Test</h4>
              <p class="pstyle"><span class ="lifont">The eligibility test on General English for 150 Marks.</span> The other 6 papers of Main examination will be tested for those candidates who will qualify in this English Paper only. And the marks obtained in English paper will not be considered for final merit. </p>

               

                
          
            </div>
            
          
          
          </div>
          <?php } ?>
        </li>
        
        <li>
          <?php
                  $ch = curl_init();
                  curl_setopt ($ch, CURLOPT_URL, 'http://www.kpias.com/webservices/content?api_key=160e64f13691a2f59d34492dc238f98e&page=tpscg1&section_id=52');
                  curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
                  $response=curl_exec($ch);
                  curl_close ($ch);
                  $result= json_decode($response);
                  
                  foreach ($result as $section)
                  {

                   ?>
          <div class="timeline-badge "><i class="fa fa-book"></i></div>
          <div class="timeline-panel" title="click me">
          
          <div class="timeline-heading">
              <h4 class="timeline-title"><b><?php echo $section->section_title?></b></h4>
              <h4 class="timeline-title">Paper-I – General Essay</h4>
              <p class="pstyle"><?php echo $section->section_content?> </p>

             <h4 class="timeline-title">Section-I</h4>
              <ul class ="lidisc">
              <li>General Studies & Mental Ability</li>
              <li>Issues of Economic Growth and Justice</li>
              </ul>
              <br>
             
              <h4 class="timeline-title">Section-II</h4>
              <ul class ="lidisc">
              <li>Dynamics of Indian Politics</li>
                <li>Historical and Cultural Heritage of India.</li>
              </ul>
              <!-- <h4 class="timeline-title">Paper-II </h4>
              <ul class ="lidisc">
              <li>History & Cultural heritage of India with emphasis on 20th century history of India.</li>
              <li>Social history of Andhra Pradesh i.e. the history of various social and cultural movements in Andhra Pradesh</li>
              <li>General overview of the Indian Constitution</li>

              </ul> -->
              <h4 class="timeline-title">Section-III </h4>
              <ul class ="lidisc">
              <li>Developments in Science and Technology.</li>
              <li>Education and Human Resource Development.</li>
              
              </ul>
              <h4 class="timeline-title">Paper-II – History, Culture and Geography</h4>
              <ul class ="lidisc">
              <li>Early Indian Civilizations-Indus and Vedic; Emergence of Religious Movements in the sixth century BC – Jainism and Buddhism; Indo- Greek Art and Architecture – Gandhara, Mathura and Amaravathi Schools; Social and Cultural condition under the Mauryan, Satavahanas and Guptas .</li>
              <li>Advent of Islam and its impact on Indian Society – Nature and significance of Bhakti and Sufi Movements; Contribution of Kakatiya, and Vijayanagara rulers to Language, Literature, Art and Architecture: the contribution of Delhi Sultans and Mughals to Language , Literature, Art, Architecture and Fine Arts, Monuments; Emergence of Composite Culture in the Deccan and India.</li>
              <li>The Establishment of British Colonial Rule in India: Carnatic Wars , Battle of Plassey, Anglo Mysore, Anglo-Maratha and Anglo-Sikh Wars; Economic Impact of British Colonial Rule: Land Revenue Settlements in British India; -Commercialization of Agriculture; Rise of Landless Agrarian Labour; Famines and Poverty;De-industrialization; Decline of Traditional Crafts; Drain of Wealth; Growth of Trade and Commerce- Economic Transformation of India; Railroads, Transport and Communication Network- Telegraph and Postal Services.</li>
              <li>Three Phases of Indian Freedom Struggle, 1885-1947. The rise and growth of All India Kisan Sabha, Workers and Tribal movements; Issue of Gender and Women’s movement; Growth of Socialist and Communist Movements; Growth of Communal-ism; Independence and Partition of India</li>
              </ul>
              <br>
              <h4 class="timeline-title">History and Cultural Heritage of Telangana</h4>
              <ul class ="lidisc">
                <li>History and culture of Ancient Telangana – Satavahanas, Ikshvakus and Vishnukundins; Rise and growth of Jainism and Buddhism; Socio-Cultural – Conditions- Language, Literature, Art and Architecture.</li>
                <li>Medeival Telangana and the emergence of composite culture – Kakatiyas and Velama kingdoms and their contribution to Socio- Cultural Development, Literature, Music, Dance, Art and Architecture; Qutub Shahis and their contribution to Telugu literature, art and architecture. Protest Movements against Kakatiyas and Qutub Shahis- Sammakka Sarakka and Sarvaipapanna</li>
                <li>The Establishment of Asaf Jahi Dynasty – Salar Jung Reforms and Modernization of Telangana ; Socio- Economic development under the Nizams – Land Tenures and Social System, Jagirdars, Deshmukhs etc.and Vetti- British Paramountcy and Nizam- Revolt of 1857 in Hyderabad and the role of Turre Baz Khan; Socio- Economic Development during the rule of the sixth and seventh Nizams – Growth of Railways, Transport and Communication System, Establishment of Industries, Educational Institutions – Monuments of Asaf Jahi period. 10</li>
                
              </ul>
              <br>
              <h4 class="timeline-title">Geography of India and Telangana</h4>
              <ul class ="lidisc">
                <li>India – Physical setting, Physiography, Drainage, Climate- Mechanism of Monsoon, effect of Elnino and La Nino, Rainfall variability- Floods and Drought, Soils, Vegetation and WildlifeDegradation and Conservation Measures. Major Minerals and Energy Resources- distribution and conservation, Energy Crisis – role of non-conventional energy resources. Marine Resources – Economic significance, EEZ. Water resources – availability, problems of inter – state Water sharing, Conservation Measures.</li>
                <li>Agriculture and Irrigation – Major Food and Non-Food crops, Agro Climatic Regions, Green Revolution, recent trends in Agriculture; Major Irrigation Projects and Command Area Development; Industries- Major Industries – Iron and Steel, Cotton Textiles, Cement, Sugar, Automobile, IT, & Food Processing Industries, Localisation Factors, Industrial Corridors & Economic Development; Transportation: Means of Transportation, Role of Road and Rail Network in Economic Development, Highways and Express Highways; Major Ports – changing trends and direction of India’s Trade – role of WTO; Strategic location of India in the Indian Ocean; Population – distribution, growth, Demographic characteristics, Demographic dividend and transition, HDI, Population problems and Policies. Urbanisation process- Spatial pattern, growth of Megacities, problems of Urban Growth and Policies, concept of Smart Cities.</li>
                <li>Geographical extent of Hyderabad State and present Telangana State Physical setting, Relief, Climate, Rivers, Soils, Forest cover and Wild life-distribution, depletion and conservation. Minerals and Energy resources – Coal, Iron and Limestone distribution. Thermal and Hydro Power Projects – Problems and Prospects</li>
                <li>Agriculture- Rainfed/Dry land Agriculture, Drought prone areas and Mitigation Measures. Sources of Irrigation: Canals, Tanks and Wells, Depletion of Ground Water and its conservation- Mission Kakatiya. Industries – Cement, Sugar, Pharma, Electronic, Tourism, IT, ITIR, SEZs. Handicrafts and Household Industries and their problems. Road and Rail Network distribution and role in Economic Development. Population – distribution, growth, density, demographic characteristics (sex ratio, age, literacy, etc.,) Tribal Population – distribution, problems of Tribal areas and policies for Tribal Area Development.</li>
              </ul>


              <h4 class="timeline-title">Paper-III</h4>
              <ul class ="lidisc">
              <li>Indian Society, Structure, Issues and Social Movements, Indian Constitution</li>
              
              </ul>

              <h4 class="timeline-title">Paper- IV</h4>
              <ul class ="lidisc">
              <li>Indian Economy and development, Telangana Economy, Development and Environment problems</li>
              
              </ul>

              <h4 class="timeline-title">Paper-V</h4>
              <ul class ="lidisc">
              <li>Science&Technology and Data Interpretation</li>
              
              </ul>

              <h4 class="timeline-title">Paper-VI</h4>
              <ul class ="lidisc">
              <li>The Role and impact of Science and Technology, Modern trends in Application of Knowledge of Science and Data Interpretation and Problem Solving.</li>
              
              </ul>




            </div>
            <div class="timeline-body">
              <p title="click" class="pstyle" >
              <!-- <ul style="list-style-position:outside; list-style-type: disc;">
                <li>Candidates will have the option to answer all the question papers, except the Qualifying Language papers, Paper-A & Paper-B, in any of the languages included in the Eighth Schedule to the Constitution of India or in English. For the Language medium/literature of languages, the scripts to be used by the candidates will be as under:</li>
                <li>Candidates exercising the option to answer the papers in any one of the languages included in the Eighth Schedule to the Constitution may, if they so desire, give English version within brackets of only the description of the technical terms, if any, in addition to the version in the language opted by them. (Candidates should, however, note that if they misuse the above rule, a deduction will be made on this account from the total marks otherwise accruing to them and in extreme cases, their script(s) will not be valued for being in an unauthorized medium).</li>
                <li>The question papers other than language papers will be set both in Hindi and English.</li>
                
              </ul> -->
              
              </p>
            </div>
          
          
          </div>
          <?php } ?>
        </li>
        
        
        
        
        
        
       <!--===============================================================
       =============================== body panel
          <li>
          <div class="timeline-badge info"><i class="fa fa-check-square"></i></div>
          <div class="timeline-panel" title="click me">
            <div class="timeline-heading">
              <h4 class="timeline-title"> 3.Educational qualification:</h4>

             top body
            </div>
            <div class="timeline-body">
                  inner body 
            </div>
          </div>
        </li> ===============================
        =====================================================================-->


        
         <li>
          <?php
                  $ch = curl_init();
                  curl_setopt ($ch, CURLOPT_URL, 'http://www.kpias.com/webservices/content?api_key=160e64f13691a2f59d34492dc238f98e&page=tpscg1&section_id=53');
                  curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
                  $response=curl_exec($ch);
                  curl_close ($ch);
                  $result= json_decode($response);
                  
                  foreach ($result as $section)
                  {

                   ?>
         <div class="timeline-badge info"><i class="fa fa-eye"></i></div>
          <div class="timeline-panel" title="click me">
          
            <div class="timeline-heading">
              <h4 class="timeline-title"><b><?php echo $section->section_title?></b></h4>
              

<?php echo $section->section_content?>


            </div>
            
           
          </div>
          <?php } ?>
        </li>
        
    </ul>

     </div>
     
     <!-- 2nd part -->
     
     <div class="col-sm-4 col-md-4">
     
     				
                                <!-- Carousel
                                ================================================== -->
                                <?php require_once('latest-news.php');?>
                               
     </div>  <!-- 2nd end -->   
      </div> <!-- row div -->    
        
        </div>
      <?php require_once('footer.php');?>
   </div>
    <?php require_once('rightpanel.php');?>     
    <?php require_once('footscripts.php');?>
 
    <script> 
    
    $('#myCarousel').carousel({
    	interval:   4000
	});
    
    </script>
    
  </body>
</html>
<?php require_once('head.php');?>

    
  <body>
    <div id="page">
        <?php require_once('header.php');?>
                 

        <div style="margin-top: 100px;"></div>
   
        <div class="container-fluid">  
        <h3 class="headtext"> Appsc-group1 </h3>
         <hr>

          <!--PAGE CONTENT GOES HERE-->
          <div class="row">
        <div class="col-sm-8 col-md-8">
          
    <ul class="timeline">
        <li>
          <?php
                  $ch = curl_init();
                  curl_setopt ($ch, CURLOPT_URL, 'http://www.kpias.com/webservices/content?api_key=160e64f13691a2f59d34492dc238f98e&page=appscg1&section_id=32');
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
             <p class="pstyle"> <span class ="lifont"><?php echo $section->section_title?></span> conducts recruitment examination every year for filling the vacant posts in the various departments. It conducts recruitment examination in following groups:</p>
             
             	<?php echo $section->section_content?>

         

            </div>

            <!-- <div class="timeline-body">
             
              <p title="click" class="pstyle">
              
              </p>
            </div> -->


          </div>
          <?php } ?>
        </li>
        
        
        <li>
          <?php
                  $ch = curl_init();
                  curl_setopt ($ch, CURLOPT_URL, 'http://www.kpias.com/webservices/content?api_key=160e64f13691a2f59d34492dc238f98e&page=appscg1&section_id=33');
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
              <h4 class="timeline-title"><?php echo $section->section_title?></h4>
              <h4 class="timeline-title">Prelims Examination (Screening Test)</h4>
              <p class="pstyle"><?php echo $section->section_content?></p>
             
             
              <table class="table2">
                  <tbody>
                  <tr>
                    <td><b>Subjects</b></td>
                    <td>General Studies & Mental Ability</td>
                    
                  </tr>
                  <tr>
                    <td> <b>Type</b></td>
                    <td>Objective Type</td>
                  </tr>
                  <tr>
                    <td><b> Marks</b></td>
                    <td>150 Marks</td>
                  </tr>
                  <tr>
                    <td><b> Duration</b></td>
                    <td>2:30 hrs</td>
                  </tr>
                    
                  </tbody>

              </table>

              <h4 class="timeline-title">Mains Examination</h4>
              <p class="pstyle">Candidates who qualified in preliminary examination will go to second stage i.e Main examination which contains five papers in conventional type & is of degree standard syllabus. The General English paper is of qualifying one and its marks are not counted for final ranking. All the question papers except General English may be answered either in English or Telugu or Urdu chosen by the candidate. Minimum qualifying marks will be given for reservation candidates as per the rules. </p>

               <table class="table2">
                  <tbody>
                  <tr>
                    <td><b>Compulsary Subject</b></td>
                    <td>General English</td>
                    
                  </tr>
                  <tr>
                    <td> <b>Subjects</b></td>
                    <td>General Studies & Mental Ability</td>
                  </tr>
                  <tr>
                    <td><b> Type</b></td>
                    <td>Objective Type</td>
                  </tr>
                  <tr>
                    <td><b> Marks</b></td>
                    <td>150 Marks (Each Paper)</td>
                  </tr>
                  <tr>
                    <td><b> Duration</b></td>
                    <td>03:00 hrs (Each Paper)</td>
                  </tr>
                    
                  </tbody>

              </table>

                
          
            </div>
            <!-- <div class="timeline-body">
              <p title="click" class="pstyle">
              		       
              
              
              </p>
            </div> -->
          
          
          </div>
          <?php } ?>
        </li>
        
        <li>
          <?php
                  $ch = curl_init();
                  curl_setopt ($ch, CURLOPT_URL, 'http://www.kpias.com/webservices/content?api_key=160e64f13691a2f59d34492dc238f98e&page=appscg1&section_id=34');
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
              <h4 class="timeline-title"><?php echo $section->section_title?></h4>
              <h4 class="timeline-title">Prelims :</h4>
             
              <ul class ="lidisc">
              <li>General Studies & Mental Ability</li>
              </ul>
              <br>
             <h4 class="timeline-title">Mains  :</h4>
              <h4 class="timeline-title">Paper-I </h4>
              <ul class ="lidisc">
              <li>General Essay</li>
              </ul>
              <h4 class="timeline-title">Paper-II </h4>
              <ul class ="lidisc">
              <li>History & Cultural heritage of India with emphasis on 20th century history of India.</li>
              <li>Social history of Andhra Pradesh i.e. the history of various social and cultural movements in Andhra Pradesh</li>
              <li>General overview of the Indian Constitution</li>

              </ul>
              <h4 class="timeline-title">Paper-III </h4>
              <ul class ="lidisc">
              <li>Planning in India & Indian Economy</li>
              <li>Land Reforms and social changes in Andhra Pradesh after independence</li>
              <li>Andhra Pradesh’s Economy, present status its strengths and weaknesses</li>
              </ul>
              <h4 class="timeline-title">Paper-IV</h4>
              <ul class ="lidisc">
              <li>The role and impact of Science & Technology in the development of India with emphasis on the applied aspects</li>
              <li>General awareness with the modern trends in life sciences.</li>
              <li>Development and environmental problems</li>
              </ul>
              <h4 class="timeline-title">Paper-V</h4>
              <ul class ="lidisc">
              <li>Data appreciation and interpretation</li>
              <li>The candidates will be asked to draw their own conclusion from the data presented in the tabular form in graphical or otherwise</li>
              <li>Problem solving – duly structured situation will be presented to the candidates and they will be asked to suggest their own solutions to the problem arising out of situation. Alternatively, they may be called upon to prove the understanding of the situation by answering certain searching questions based on the situation</li>
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
        
        <li>
          <?php
                  $ch = curl_init();
                  curl_setopt ($ch, CURLOPT_URL, 'http://www.kpias.com/webservices/content?api_key=160e64f13691a2f59d34492dc238f98e&page=appscg1&section_id=35');
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
              <h4 class="timeline-title"><?php echo $section->section_title?></h4>
              <ol class ="linum">
              <li>Nationality : A Candidate must be an Indian Citizen.</li>
              <li>Age : For all the Posts in Group-I Notification, Candidate’s age limit is given below.</li>
              </ol>
             <br>
             <table class="table2">
                  <tbody>
                    <thead>
                    <tr>
                      <th> Post Code </th>
                      <th>Name of the Post</th>
                      <th>Age Limit-In between (Years)</th>

                    </tr>
                    </thead>
                  <tr>
                    <th class="thnum">1</th>
                    <td> Deputy Collectors in A.P. Civil Service</td>
                    <td>Between 18-34 Years</td>
                    
                  </tr>
                  <tr>
                    <th class="thnum">2</th>
                    <td> Commercial Tax Officers in A.P. Commercial Taxes Service.</td>
                    <td>Between 18-34 Years</td>
                  </tr>
                  <tr>
                    <th class="thnum">3</th>
                    <td>Deputy Supdt. of Police (Civil) Cat-2 in A.P.Police Service</td>
                    <td>Between 21-28 Years</td>
                  </tr>
                  <tr>
                    <th class="thnum">4</th>
                    <td>Deputy Supdt. of Jails (MEN) in A.P. Jail Service</td>
                    <td>  Between 18-28 Years</td>
                  </tr>
                  <tr>
                    <th class="thnum">5</th>
                    <td> Divisional Fire Officers in Fire & Emergency Services</td>
                    <td>Between 21-26 Years</td>
                  </tr>
                  <tr>
                    <th class="thnum">6</th>
                    <td> District Registrar in A.P. Registration and Stamps Service</td>
                    <td>Between 18-34 Years</td>
                  </tr>
                  <tr>
                    <th class="thnum">7</th>
                    <td> District Tribal Welfare Officer in A.P.Tribal Welfare Service</td>
                    <td>Between 18-34 Years</td>
                  </tr>
                  <tr>
                    <th class="thnum">8</th>
                    <td> District Employment Officer in Employment Service</td>
                    <td>Between 18-34 Years</td>
                  </tr>
                  <tr>
                    <th class="thnum">9</th>
                    <td> Asst. Treasury Officer/Asst. Accounts Officer in A.P. Treasury & Accounts Service.</td>
                    <td>Between 18-34 Years</td>
                  </tr>
                  <tr>
                    <th class="thnum">10</th>
                    <td>  Deputy Registrar in A.P. Cooperative Service</td>
                    <td>Between 18-34 Years</td>
                  </tr>
                    
                  </tbody>

              </table>




            </div>
            <div class="timeline-body">
              <p title="click" class="pstyle">
             <!-- <ul style="list-style-position:outside; list-style-type: disc;">
             <li>Post independence consolidation and reorganization within the country.</li>
             <li>History of the world will include events from 18th century such as industrial revolution, world wars, redraw of national boundaries, colonization, decolonization, political philosophies like communism, capitalism, socialism etc. and their forms and effect on the society.</li>
             <li>Salient features of Indian Society, Diversity of India.</li>
             </ul> -->
             
              </p>
            </div>
          
          
          </div>
          <?php } ?>
        </li>
        
        
        <li>
          <?php
                  $ch = curl_init();
                  curl_setopt ($ch, CURLOPT_URL, 'http://www.kpias.com/webservices/content?api_key=160e64f13691a2f59d34492dc238f98e&page=appscg1&section_id=36');
                  curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
                  $response=curl_exec($ch);
                  curl_close ($ch);
                  $result= json_decode($response);
                  
                  foreach ($result as $section)
                  {

                   ?>
          <div class="timeline-badge "><i class="fa fa-institution"></i></div>
          <div class="timeline-panel" title="click me">
          
            <div class="timeline-heading">
              <h4 class="timeline-title"><?php echo $section->section_title?></h4>
              <ul class ="lidisc">
                <?php echo $section->section_content?>              
              </ul>
             
            </div>
            <div class="timeline-body">
                  <!-- <p title="click" class="pstyle">
                     <ul style="list-style-position:outside; list-style-type: disc;">
                         <li>Comparison of the Indian constitutional scheme with that of other countries.</li>
                         <li>Parliament and State Legislatures :structure, functioning, conduct of business, powers & privileges and issues arising out of these.</li>
                         <li>tructure, organization and functioning of the Executive and the Judiciary Ministries and Departments of the Government; pressure groups and formal/informal associations and their role in the Polity.</li>
                     </ul>
                  
                  </p> -->
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
                  curl_setopt ($ch, CURLOPT_URL, 'http://www.kpias.com/webservices/content?api_key=160e64f13691a2f59d34492dc238f98e&page=appscg1&section_id=37');
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
              <h4 class="timeline-title"><?php echo $section->section_title?></h4>
                <?php echo $section->section_content?>
               </div>
            <div class="timeline-body">
                  <!-- inner body -->
            </div>
          </div>
          <?php } ?>
        </li>

        

        <li>
          <?php
                  $ch = curl_init();
                  curl_setopt ($ch, CURLOPT_URL, 'http://www.kpias.com/webservices/content?api_key=160e64f13691a2f59d34492dc238f98e&page=appscg1&section_id=38');
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
              <h4 class="timeline-title"><?php echo $section->section_title?></h4>
              <ul class ="lidisc">
                <?php echo $section->section_content?>
              
              </ul>
             
            
            </div>
            <div class="timeline-body">
                  <!-- inner body -->
            </div>
          </div>
          <?php } ?>
        </li>
        
        <li>
          <?php
                  $ch = curl_init();
                  curl_setopt ($ch, CURLOPT_URL, 'http://www.kpias.com/webservices/content?api_key=160e64f13691a2f59d34492dc238f98e&page=appscg1&section_id=39');
                  curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
                  $response=curl_exec($ch);
                  curl_close ($ch);
                  $result= json_decode($response);
                  
                  foreach ($result as $section)
                  {

                   ?>
          <div class="timeline-badge danger"><i class="fa fa-check-square"></i></div>
          <div class="timeline-panel" title="click me">
            <div class="timeline-heading">
              <!-- <h4 class="timeline-title"> 3.Educational qualification:</h4> -->
               <p class="pstyle"><span class="lifont">The standards of</span> the minimum acuteness of vision which will be used for guidance in the examination of a candidate are as follows:</p>
               <h4 class="timeline-title"><?php echo $section->section_title?></h4>
               <table class="table2">
                  <tbody>
                    <thead>
                    <tr>
                      <th> Vision </th>
                      <th> Right Eye </th>
                      <th> Left Eye </th>

                    </tr>
                    </thead>

                  <tr>
                    <!-- <th class="thnum">1</th> -->
                    <td>Distant Vision</td>
                    <td> V-6/6</td>
                    <td>V-6/6</td>
                  </tr>
                  <tr>
                    <!-- <th class="thnum">1</th> -->
                    <td>NearVision</td>
                    <td>  Reads 0.6</td>
                    <td>  Reads 0.6</td>
                  </tr>

                  <tr>
                    <td>After correction with glasses not below 6/24</td>
                    <td></td>
                    <td></td>

                  </tr>
                  </tbody>
                </table>


                <h4 class="timeline-title">Standard Eye II</h4>
               <table class="table2">
                  <tbody>
                    <thead>
                    <tr>
                      <th> Vision </th>
                      <th> Better Eye </th>
                      <th> Worse Eye </th>

                    </tr>
                    </thead>

                  <tr>
                    <!-- <th class="thnum">1</th> -->
                    <td>Distant Vision</td>
                    <td> V-6/6</td>
                    <td>Not below V-6/6</td>
                  </tr>
                  <tr>
                    <!-- <th class="thnum">1</th> -->
                    <td>NearVision</td>
                    <td>  Reads 0.6</td>
                    <td>  Reads 0.6</td>
                  </tr>

                  <tr>
                    <td>After correction with glasses not below 6/24</td>
                    <td></td>
                    <td></td>

                  </tr>
                  </tbody>
                </table>

                <h4 class="timeline-title">Note :</h4>
                <ul class ="lidisc">
                <li>No maximum age limit for SCs, STs, MBCs/DCs, BCs (Other than BCCs & BCMs), BCCs, BCMs and Destitute Widows of all castes.</li>
                <li>Age relaxation of 5 years will be applicable to persons affected by the ban orders.</li>
                <li>Candidates not belonging to SCs, STs, MBC/DCs, BCs (Other than BCCs & BCMs), BCCs and BCMs (i.e. others) who have put in five years of service in the State/Central Government are not eligible to apply even though they are within the age limit.</li>

                </ul>
            </div>
            <div class="timeline-body">
                 <!--  inner body --> 
            </div>
          </div>
          <?php } ?>
        </li>


        <li>
          <?php
                  $ch = curl_init();
                  curl_setopt ($ch, CURLOPT_URL, 'http://www.kpias.com/webservices/content?api_key=160e64f13691a2f59d34492dc238f98e&page=appscg1&section_id=40');
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
              <h4 class="timeline-title"><?php echo $section->section_title?></h4>
              <ul class ="lidisc">
                <li>Deputy Collectors in A.P. Civil Service.</li>
                <li>Commercial Tax Officers in A.P. Commercial Taxes Service.</li>
                <li>Deputy Supdt. of Police (Civil) Cat-2.</li>
                <li>Deputy Supdt. of Jails (MEN) in A.P. Jail Service</li>
                <li>Divisional Fire Officers in Fire & Emergency Services.</li>
                <li>District Registrar in A.P. Registration and Stamps Service.</li>
                <li>District Tribal Welfare Officer in A.P.</li>
                <li>Tribal Welfare Service.</li>
                <li>District Employment Officer in Employment Service.</li>
              </ul>

            
            </div>
            <!-- <div class="timeline-body">
                  
            </div> -->
          </div>
          <?php } ?>
        </li>
        
         <li>
          <?php
                  $ch = curl_init();
                  curl_setopt ($ch, CURLOPT_URL, 'http://www.kpias.com/webservices/content?api_key=160e64f13691a2f59d34492dc238f98e&page=appscg1&section_id=41');
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
              <h4 class="timeline-title"> <?php echo $section->section_title?></h4>
              <ul class ="lidisc">
               <?php echo $section->section_content?>
              </ul>

            
             
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
        <?php require_once('bubble.php');?>
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
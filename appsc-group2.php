<?php require_once('head.php');?>

    
  <body>
    <div id="page">
        <?php require_once('header.php');?>
                 

        <div style="margin-top: 100px;"></div>
   
        <div class="container-fluid">  
        <h3 class="headtext"> Appsc-group2 </h3>
         <hr>

          <!--PAGE CONTENT GOES HERE-->
          <div class="row">
        <div class="col-sm-8 col-md-8">
          
    <ul class="timeline">
        <li>
          <?php
                  $ch = curl_init();
                  curl_setopt ($ch, CURLOPT_URL, 'http://www.kpias.com/webservices/content?api_key=160e64f13691a2f59d34492dc238f98e&page=appscg2&section_id=42');
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
               <h4 class="timeline-title">APPSC Group-II Exam is Conducted in 2 Stages</h4>
              <ul class ="lidisc">
              <li>Main’s Examination (Conventional Type)</li>
              <li>Interview/Oral Test</li>
              </ul>
              <br>
              <h4 class="timeline-title">Exam Pattern</h4>
              <h4 class="timeline-title">Main’s Examination</h4>
              <p class="pstyle">
                <?php echo $section->section_content?>
              </p>
              <table class="table2">
                  <tbody>
                  <tr>
                    <td><b>Compulsory Subject</b></td>
                    <td>General English</td>
                    
                  </tr>
                  <tr>
                    <td> <b>Type</b></td>
                    <td>Paper – I,II,III</td>
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

            </div>
            
          </div>
          <?php } ?>
        </li>
        
        
        <li>
          <?php
                  $ch = curl_init();
                  curl_setopt ($ch, CURLOPT_URL, 'http://www.kpias.com/webservices/content?api_key=160e64f13691a2f59d34492dc238f98e&page=appscg2&section_id=43');
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
            
             <p class="pstyle"> 
              <?php echo $section->section_content?>
             
             </p>
             <h4 class="timeline-title">Exam Syllabus</h4>
             <h4 class="timeline-title"> Paper-I</h4>
             <h4 class="timeline-title">General Studies:</h4>
             <ul class ="lidisc">
              <li>General Science</li>
              <li>Current Events of National and International Importance.</li>
              <li>History of India and Indian National Movement. India and World Geography.</li>
              <li>General Mental Ability.</li>

             </ul>
           
            
             

            </div>
            
          </div>
          <?php } ?>
        </li>
        
        <li>
          <?php
                  $ch = curl_init();
                  curl_setopt ($ch, CURLOPT_URL, 'http://www.kpias.com/webservices/content?api_key=160e64f13691a2f59d34492dc238f98e&page=appscg2&section_id=44');
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
              <h4 class="timeline-title"> Social & Cultural History of Andhra Pradesh:</h4>
            
         
              
                <?php echo $section->section_content?>
             

              <h4 class="timeline-title">General Overview of the Indian Constitution:</h4>
              <ul class="lidisc">
                <li>Salient features of the Indian Constitution – Preamble, Fundamental Duties, Fundamental Rights, Directive Principles of State Policy and their relationship.</li>
                <li>Distinctive features of Indian Federation – Distribution of Legislative Powers between the Union and the State; Relative roles of Legislature, Executive and Judiciary 17</li>
                <li>Community development experiment-3 tier model of Panchayat Raj-73rd and 74th amendments and their implementation.</li>
                <li>Welfare Mechanism in India: Provisions for Scheduled Castes, Tribes and Minorities,Reservations for SC, ST and Backward Classes,Prevention of SC and ST Atrocities Act,National and State SC&ST Commission, Women’s Commission,National and States Minorities Commission and Human Rights Commission.</li>
              </ul>

            </div>
          
          </div>
          <?php } ?>
        </li>
        
        <li>
          <?php
                  $ch = curl_init();
                  curl_setopt ($ch, CURLOPT_URL, 'http://www.kpias.com/webservices/content?api_key=160e64f13691a2f59d34492dc238f98e&page=appscg2&section_id=45');
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
              <h4 class="timeline-title">Planning in India & Indian Economy:</h4>
              
                <?php echo $section->section_content?>
              
              <br>

               <p class="pstyle">Contemporary Problems and Developments in Rural Society with Special Reference to Andhra Pradesh:</p>
              <ul class="lidisc">
                <li>National Income & Main sectors of Economy, GDP (Gross Domestic Product), Per capita income and HDI (Human Development Index) as measures of development. Relative contribution of agriculture to income and employment in the recent four decades of AP.</li>
                <li>Five year plans of AP – Outlays, Finance in public sector plan and resource allocation pattern in the recent five year plan.</li>
                <li>Need for and aims of land reforms in AP – Structure of land holdings in A.P Forest,sown and irrigated area in AP.Cropping pattern.Sources of Agricultural finance in AP – Agricultural subsidies.</li>
                <li>Growth and structure of Industries in Andhra Pradesh , factories, small and tiny sectors, their comparison , growth , weaknesses and problems – Institutional and non-institutional – growth and structure of cooperatives in Andhra Pradesh – Share of cooperatives in total credits – adequacy and problems.</li>
              </ul>

             
            </div>
           
          </div>
          <?php } ?>
        </li>
        
        
        <li>
          <?php
                  $ch = curl_init();
                  curl_setopt ($ch, CURLOPT_URL, 'http://www.kpias.com/webservices/content?api_key=160e64f13691a2f59d34492dc238f98e&page=appscg2&section_id=46');
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
               <?php echo $section->section_content?>
               
               <table class="table2">
                  <tbody>
                    <thead>
                    <tr>
                      <th> S.No Executive Posts </th>
                      <th>Name of the Post</th>
                      <th>Age Limit</th>

                    </tr>
                    </thead>
                  <tr>
                    <th class="thnum">1</th>
                    <td>  Asst.Commercial Tax Officer in A.P. Commercial Taxes Sub-Service </td>
                    <td>Between 18-34 Years</td>
                    
                  </tr>
                  <tr>
                    <th class="thnum">2</th>
                    <td>Assistant Labour Officer in A.P Labour & Employment Sub-Service </td>
                    <td>Between 18-34 Years</td>
                  </tr>
                  <tr>
                    <th class="thnum">3</th>
                    <td> Executive Officer Grade-I in A.P. Endowments Sub-Service </td>
                    <td>Between 18-34 Years</td>
                  </tr>
                  <tr>
                    <th class="thnum">4</th>
                    <td>Assistant Development Officer in A.P. Handlooms and Textiles Sub-Service </td>
                    <td>Between 18-34 Years</td>
                  </tr>

                  <tr>
                      <th>Non Executive  Posts </th>
                      <th></th>
                      <th></th>
                  </tr>
                  <tr>
                    <th class="thnum">5</th>
                    <td>Assistant Section Officer in A.P. Secretariat Sub-Service </td>
                    <td>Between 18-34 Years</td>
                  </tr>
                  <tr>
                    <th class="thnum">6</th>
                    <td> Assistant Section Officer (Finance Dept.) in A.P. Secretariat Sub-Service</td>
                    <td>Between 18-34 Years</td>
                  </tr>
                  <tr>
                    <th class="thnum">7</th>
                    <td> Senior Accountant in A.P Treasuries&Accounts Sub-Service</td>
                    <td>Between 18-34 Years</td>
                  </tr>
                  <tr>
                    <th class="thnum">8</th>
                    <td>Senior Auditor in A.P. State Audit Subordinate Service</td>
                    <td>Between 18-34 Years</td>
                  </tr>
                  <tr>
                    <th class="thnum">9</th>
                    <td> Junior Assistants in APPSC</td>
                    <td>Between 18-34 Years</td>
                  </tr>
                  
                </tbody>
              </table>

             
            </div>
            
           
          </div>
          <?php } ?>
        </li>
        
        
         <li>
          <?php
                  $ch = curl_init();
                  curl_setopt ($ch, CURLOPT_URL, 'http://www.kpias.com/webservices/content?api_key=160e64f13691a2f59d34492dc238f98e&page=appscg2&section_id=47');
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
                  <!-- <p title="click" class="pstyle">
                     <ul style="list-style-position:outside; list-style-type: disc;">
                         <li>Major crops cropping patterns in various parts of the country, different types of irrigation and irrigation systems storage, transport and marketing of agricultural produce and issues and related constraints; e-technology in the aid of farmers</li>
                         <li>Issues related to direct and indirect farm subsidies and minimum support prices; Public Distribution System objectives, functioning, limitations, revamping; issues of buffer stocks and food security; Technology missions; economics of animal rearing.</li>
                         <li>Food processing and related industries in India? scope and significance, location, upstream and downstream requirements, supply chain management.</li>
                     </ul>
                  
                  </p> -->
            </div>
           
          </div>
          <?php } ?>
        </li>
        
        
         <li>
          <?php
                  $ch = curl_init();
                  curl_setopt ($ch, CURLOPT_URL, 'http://www.kpias.com/webservices/content?api_key=160e64f13691a2f59d34492dc238f98e&page=appscg2&section_id=48');
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
                <p title="click" class="pstyle">
                  <?php echo $section->section_content?>
                </p>

                <table class="table2">
                  <tbody>
                    <thead>
                    <tr>
                      <th> PC.No  </th>
                      <th>Name of the Post and Service</th>
                      <th>Educational Qualifications</th>

                    </tr>
                    </thead>
                  <tr>
                    <th class="thnum">1</th>
                    <td>Asst. Commercial Tax Officer in A.P. Commercial Taxes Sub-Service</td>
                    <td>A Bachelor’s Degree from any recognized University in India established or incorporated by or under
                        Central Act, Provincial Act, a State Act or an
                        Institution recognized by the U.G.C. or an equivalent
                        qualification.</td>
                    
                  </tr>
                  <tr>
                    <th class="thnum">2</th>
                    <td>Assistant Labour Officer in A.P. Labour & Employment Sub-Service</td>
                    <td>A Bachelor’s Degree from any recognized University
                        in India established or incorporated by or under
                        Central Act, Provincial Act, a State Act or an
                        Institution recognized by the U.G.C. or an equivalent
                        qualification</td>
                  </tr>
                  <tr>
                    <th class="thnum">3</th>
                    <td>Executive Officer Grade-II in A.P. Endowments Sub-Service</td>
                    <td>A Bachelor’s Degree from any recognized University
                        in India established or incorporated by or under
                        Central Act, Provincial Act, a State Act or an
                        Institution recognized by the U.G.C. or an equivalent
                        qualification.</td>
                  </tr>
                  <tr>
                    <th class="thnum">4</th>
                    <td> Assistant Development Officer in A.P. Handlooms and Textiles Sub Service</td>
                    <td>Must posses a Diploma in Textile Technology or a
                        Diploma in Handloom Technology issued by the A.P.
                        State Board of Technical Education or an equivalent
                        qualification.</td>
                  </tr>

                </tbody>
              </table>
              
             
            </div>
            
           
          </div>
          <?php } ?>
        </li>

        <li>
          <?php
                  $ch = curl_init();
                  curl_setopt ($ch, CURLOPT_URL, 'http://www.kpias.com/webservices/content?api_key=160e64f13691a2f59d34492dc238f98e&page=appscg2&section_id=49');
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
            <h4 class="timeline-title"> Executive Posts </h4>
             <?php echo $section->section_content?>
            
             
             <br>
             <h4 class="timeline-title">Non-Executive Posts</h4>

             <ul class ="lidisc">
              <li>Assistant Section Officer (Law Dept.)</li>
              <li>Assistant Auditor</li>
              <li>Typist-cum-Assistant in A.P. Secretariat Service</li>
              <li>Typist-cum-Assistant in A.P. Legislature Sub-Service</li>
              <li>Typist-cum-Assistant (Fin. & Plg. Fin. Dept.)</li>
              <li>Typist-cum-Assistant (Law Dept.)</li>
              <li>Assistant-cum-Typist (Heads of Dept.) in A.P. Ministerial Service.</li>
              <li>Senior Accountant</li>
              <li>Auditor in A.P. Pay & Accounts</li>
              <li>Senior Accountant</li>
              <li>Senior Auditor</li>
              <li> Assistant Section Officer in Secretariat Sub-Service</li>
              <li>Assistant Section Officer in A.P. Legislature</li>
              <li>Assistant Section Officer (Fin. & Plg. Fin. Dept.)</li>
              <li>Junior Assistant (Heads of Departments) in A.P.Ministerial Sevice</li>
              <li>Junior Accountant (Directorate)</li>
              <li>Junior Accountant (Directorate) in A.P. Govt. Life Insurance Sub-Service</li>

             
             </ul>

            </div>

            <!-- <div class="timeline-body">
             
              <p title="click" class="pstyle">
              
              </p>
            </div> -->


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
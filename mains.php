<?php require_once('head.php');?>

    
  <body>
    <div id="page">
        <?php require_once('header.php');?>
                 

        <div style="margin-top: 100px;"></div>
   
        <div class="container-fluid">  
        <h3 class="headtext"> Mains </h3>
         <hr>

          <!--PAGE CONTENT GOES HERE-->
          <div class="row">
        <div class="col-sm-8 col-md-8">
          
    <ul class="timeline">
      <li>
        <?php
                  $ch = curl_init();
                  curl_setopt ($ch, CURLOPT_URL, 'http://www.kpias.com/webservices/content?api_key=160e64f13691a2f59d34492dc238f98e&page=mains&section_id=18');
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
             <!-- <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>-->
             <?php echo $section->section_content?>
             
          </div>
        <?php } ?>
      </li>
        
        
        <li>
          <?php
                  $ch = curl_init();
                  curl_setopt ($ch, CURLOPT_URL, 'http://www.kpias.com/webservices/content?api_key=160e64f13691a2f59d34492dc238f98e&page=mains&section_id=19');
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
            
             <?php echo $section->section_content?>
          
          </div>
          <?php } ?>
        </li>
        
        <li>
          <?php
                  $ch = curl_init();
                  curl_setopt ($ch, CURLOPT_URL, 'http://www.kpias.com/webservices/content?api_key=160e64f13691a2f59d34492dc238f98e&page=mains&section_id=20');
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
              <?php echo $section->section_content?>        
          </div>
          <?php } ?>
        </li>
        
        <li>
          <?php
                  $ch = curl_init();
                  curl_setopt ($ch, CURLOPT_URL, 'http://www.kpias.com/webservices/content?api_key=160e64f13691a2f59d34492dc238f98e&page=mains&section_id=21');
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
          <?php echo $section->section_content?>
          </div>
          <?php } ?>
        </li>
        
        
        <li>
          <?php
                  $ch = curl_init();
                  curl_setopt ($ch, CURLOPT_URL, 'http://www.kpias.com/webservices/content?api_key=160e64f13691a2f59d34492dc238f98e&page=mains&section_id=22');
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
              
             <p class="pstyle"> 
             <h5><?php echo $section->section_title?></h5>
                 <ul style="list-style-position:outside; list-style-type: disc;">
                     <li>Indian Constitution:historical underpinnings, evolution, features, amendments, significant provisions and basic structure.</li>
                     <li>Functions and responsibilities of the Union and the States, issues and challenges pertaining to the federal structure, devolution of powers and finances up to local levels and challenges therein.</li>
                     <li>Separation of powers between various organs dispute redressal mechanisms and institutions.</li>
                 </ul>
             
             </p>
            </div>
            <div class="timeline-body">
                  <p title="click" class="pstyle">
                     <ul style="list-style-position:outside; list-style-type: disc;">
                         <li>Comparison of the Indian constitutional scheme with that of other countries.</li>
                         <li>Parliament and State Legislatures :structure, functioning, conduct of business, powers & privileges and issues arising out of these.</li>
                         <li>tructure, organization and functioning of the Executive and the Judiciary Ministries and Departments of the Government; pressure groups and formal/informal associations and their role in the Polity.</li>
                     </ul>
                  
                  </p>
            </div>
           
          </div>
          <?php } ?>
        </li>
        
        
         <li>
          <?php
                  $ch = curl_init();
                  curl_setopt ($ch, CURLOPT_URL, 'http://www.kpias.com/webservices/content?api_key=160e64f13691a2f59d34492dc238f98e&page=mains&section_id=23');
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
              
             <p class="pstyle"> 
             <h5><?php echo $section->section_title?></h5>
                 <ul style="list-style-position:outside; list-style-type: disc;">
                     <li>Indian Economy and issues relating to planning, mobilization of resources, growth, development and employment.</li>
                     <li>Inclusive growth and issues arising from it.</li>
                     <li>Government Budgeting.</li>
                 </ul>
             
             </p>
            </div>
            <div class="timeline-body">
                  <p title="click" class="pstyle">
                     <ul style="list-style-position:outside; list-style-type: disc;">
                         <li>Major crops cropping patterns in various parts of the country, different types of irrigation and irrigation systems storage, transport and marketing of agricultural produce and issues and related constraints; e-technology in the aid of farmers</li>
                         <li>Issues related to direct and indirect farm subsidies and minimum support prices; Public Distribution System objectives, functioning, limitations, revamping; issues of buffer stocks and food security; Technology missions; economics of animal rearing.</li>
                         <li>Food processing and related industries in India? scope and significance, location, upstream and downstream requirements, supply chain management.</li>
                     </ul>
                  
                  </p>
            </div>
           
          </div>
          <?php } ?>
        </li>
        
        
         <li>
          <?php
                  $ch = curl_init();
                  curl_setopt ($ch, CURLOPT_URL, 'http://www.kpias.com/webservices/content?api_key=160e64f13691a2f59d34492dc238f98e&page=mains&section_id=24');
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
              
             <p class="pstyle"> 
             <h5><?php echo $section->section_title?></h5>
             <p>This paper will include questions to test the candidate’s attitude and approach to issues relating to integrity, probity in public life and his problem solving approach to various issues and conflicts faced by him in dealing with society.</p>
             <p>Questions may utilize the case study approach to determine these aspects. The following broad areas will be covered.</p>
                 <ul style="list-style-position:outside; list-style-type: disc;">
                     <li>Ethics and Human Interface: Essence, determinants and consequences of Ethics in human actions; dimensions of ethics; ethics in private and public relationships. Human Values – lessons from the lives and teachings of great leaders, reformers and administrators; role of family, society and educational institutions in inculcating values.</li>
                     <li>Attitude: content, structure, function; its influence and relation with thought and behavior; moral and political attitudes; social influence and persuasion.</li>
                     <li>Aptitude and foundational values for Civil Service , integrity, impartiality and non partisanship, objectivity, dedication to public service, empathy, tolerance and compassion towards the weaker sections.</li>
                 </ul>
             
             </p>
            </div>
            <div class="timeline-body">
                  <p title="click" class="pstyle">
                     <ul style="list-style-position:outside; list-style-type: disc;">
                         <li>Emotional intelligence concepts, and their utilities and application in administration and governance.</li>
                         <li>Contributions of moral thinkers and philosophers from India and world.</li>
                         <li>Public/Civil service values and Ethics in Public administration: Status and problems; ethical concerns and dilemmas in government and private institutions; laws, rules, regulations and conscience as sources of ethical guidance; accountability and ethical governance; strengthening of ethical and moral values in governance; ethical issues in international relations and funding; corporate governance.</li>
                     </ul>
                  
                  </p>
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
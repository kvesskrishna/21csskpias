<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>


				<ul class="nav nav-list">
					<li <?php if ($page=="dashboard") echo "class='active'";?>>
						<a href="home.php">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>

						<b class="arrow"></b>
					</li>
					<li <?php if ($page=="latestEvents") echo "class='active'";?>>
						<a href="latestEvents.php">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Latest Events </span>
						</a>

						<b class="arrow"></b>
					</li>
					<li <?php if ($page=="topCourses") echo "class='active'";?>>
						<a href="topCourses.php">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Top Courses </span>
						</a>

						<b class="arrow"></b>
					</li>
						<li <?php if ($page=="visionmission") echo "class='active'";?>>
						<a href="visionMission.php">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Mission &amp; Vision </span>
						</a>

						<b class="arrow"></b>
					</li>
					<li <?php if ($page=="ourwinners") echo "class='active'";?>>
						<a href="ourWinners.php">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Our Winners </span>
						</a>

						<b class="arrow"></b>
					</li>
		<!-- ABOUT --> 
			<li <?php if (($page=="whykpias")||($page=="methodology")||($page=="kpiasmedia")||($page=="examoverview")||($page=="prelims")||($page=="mains")||($page=="personalitytest")||($page=="whyinterias")||($page=="coachingschedule")||($page=="coursesoffered")) echo "class='active'";?>>
						<a href="content.php?page=whykpias" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> About </span>
							<b class="arrow fa fa-angle-down"></b>
						</a>
						<b class="arrow"></b>
				<ul class="submenu">
					<!-- ABOUT > KPIAS  --> 
					<li <?php if (($page=="whykpias")||($page=="methodology")||($page=="kpiasmedia")) echo "class='active'";?>>
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> KPIAS </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>
						<!-- ABOUT > KPIAS > Why KPIAS --> 
						<ul class="submenu">
							<li <?php if ($page=="whykpias") echo "class='active'";?>>
								<a href="content.php?page=whykpias">
									<i class="menu-icon fa fa-caret-right"></i>
									Why KPIAS
								</a>

								<b class="arrow"></b>
							</li>
							<!-- ABOUT > KPIAS > Methodology --> 
							<li <?php if ($page=="methodology") echo "class='active'";?>>
								<a href="content.php?page=methodology">
									<i class="menu-icon fa fa-caret-right"></i>
									Methodology &amp; Concept
								</a>

								<b class="arrow"></b>
							</li>
							<!-- ABOUT > KPIAS > KPIAS in media --> 
							<li <?php if ($page=="kpiasmedia") echo "class='active'";?>>
								<a href="content.php?page=kpiasmedia">
									<i class="menu-icon fa fa-caret-right"></i>
									KPIAS in Media
								</a>

								<b class="arrow"></b>
							</li>

							
						</ul>
					</li>
					<!-- ABOUT > IAS --> 
					<li <?php if (($page=="examoverview")||($page=="prelims")||($page=="mains")||($page=="personalitytest")) echo "class='active'";?>>
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> IAS </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>
						<!-- ABOUT > IAS > Why KPIAS --> 
						<ul class="submenu">
							<li <?php if ($page=="examoverview") echo "class='active'";?>>
								<a href="content.php?page=examoverview">
									<i class="menu-icon fa fa-caret-right"></i>
									Exam Overview
								</a>

								<b class="arrow"></b>
							</li>
							<!-- ABOUT > IAS > Methodology --> 
							<li <?php if ($page=="prelims") echo "class='active'";?>>
								<a href="content.php?page=prelims">
									<i class="menu-icon fa fa-caret-right"></i>
									Prelims
								</a>

								<b class="arrow"></b>
							</li>
							<!-- ABOUT > IAS > KPIAS in media --> 
							<li <?php if ($page=="mains") echo "class='active'";?>>
								<a href="content.php?page=mains">
									<i class="menu-icon fa fa-caret-right"></i>
									Mains
								</a>

								<b class="arrow"></b>
							</li>
							<li <?php if ($page=="personalitytest") echo "class='active'";?>>
								<a href="content.php?page=personalitytest">
									<i class="menu-icon fa fa-caret-right"></i>
									Personality Test
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					<!-- ABOUT > INTER WITH IAS --> 
					<li <?php if (($page=="whyinterias")||($page=="coachingschedule")||($page=="coursesoffered")) echo "class='active'";?>>
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> Inter with IAS </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>
						<!-- ABOUT > IAS > Why KPIAS --> 
						<ul class="submenu">
							<li <?php if ($page=="whyinterias") echo "class='active'";?>>
								<a href="content.php?page=whyinterias">
									<i class="menu-icon fa fa-caret-right"></i>
									Why Inter with IAS
								</a>

								<b class="arrow"></b>
							</li>
							<!-- ABOUT > IAS > Methodology --> 
							<li <?php if ($page=="coachingschedule") echo "class='active'";?>>
								<a href="content.php?page=coachingschedule">
									<i class="menu-icon fa fa-caret-right"></i>
									Coaching Schedule
								</a>

								<b class="arrow"></b>
							</li>
							<!-- ABOUT > IAS > KPIAS in media --> 
							<li <?php if ($page=="coursesoffered") echo "class='active'";?>>
								<a href="content.php?page=coursesoffered">
									<i class="menu-icon fa fa-caret-right"></i>
									Courses Offered
								</a>

								<b class="arrow"></b>
							</li>
							
						</ul>
					</li>							
				</ul>
			</li>
<li <?php if ( ($page=="appscg1")||($page=="appscg2")||($page=="tpscg1")||($page=="tpscg2")||($page=="beginnerscourse")||($page=="bachelorscourse")||($page=="crackerscourse")||($page=="regularclasses")||($page=="onlineclasses")||($page=="optionalsoffered") ) echo "class='active'";?>>
						<a href="content.php?page=appscg1" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> Courses </span>
							<b class="arrow fa fa-angle-down"></b>
						</a>
						<b class="arrow"></b>
				<ul class="submenu">
					<!-- Courses > State services  --> 
					<li <?php if (($page=="appscg1")||($page=="appscg2")||($page=="tpscg1")||($page=="tpscg2")) echo "class='active'";?>>
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> State Services </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>
						<!-- COURSES > STATE > APPSC G1 --> 
						<ul class="submenu">
							<li <?php if ($page=="appscg1") echo "class='active'";?>>
								<a href="content.php?page=appscg1">
									<i class="menu-icon fa fa-caret-right"></i>
									APPSC Group1
								</a>

								<b class="arrow"></b>
							</li>
							<!-- COURSES > STATE > APPSC G2 --> 
							<li <?php if ($page=="appscg2") echo "class='active'";?>>
								<a href="content.php?page=appscg2">
									<i class="menu-icon fa fa-caret-right"></i>
									APPSC Group2
								</a>

								<b class="arrow"></b>
							</li>
							<!-- COURSES > STATE > TPSC G1 --> 
							<li <?php if ($page=="tpscg1") echo "class='active'";?>>
								<a href="content.php?page=tpscg1">
									<i class="menu-icon fa fa-caret-right"></i>
									TPSC Group1
								</a>

								<b class="arrow"></b>
							</li>
							<!-- COURSES > STATE > TPSC G2 --> 
							<li <?php if ($page=="tpscg2") echo "class='active'";?>>
								<a href="content.php?page=tpscg2">
									<i class="menu-icon fa fa-caret-right"></i>
									TPSC Group2
								</a>

								<b class="arrow"></b>
							</li>

							
						</ul>
					</li>
					<!-- Courses > Civil Services --> 
					<li <?php if (($page=="beginnerscourse")||($page=="bachelorscourse")||($page=="crackerscourse")) echo "class='active'";?>>
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> Civil Services </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>
						<!-- Courses > Civil Services > beginners course--> 
						<ul class="submenu">
							<li <?php if ($page=="beginnerscourse") echo "class='active'";?>>
								<a href="content.php?page=beginnerscourse">
									<i class="menu-icon fa fa-caret-right"></i>
									Beginners course
								</a>

								<b class="arrow"></b>
							</li>
						<!-- Courses > Civil Services > bachelors course--> 
							<li <?php if ($page=="bachelorscourse") echo "class='active'";?>>
								<a href="content.php?page=bachelorscourse">
									<i class="menu-icon fa fa-caret-right"></i>
									Bachelors Course
								</a>

								<b class="arrow"></b>
							</li>
							<!-- Courses > Civil Services > crackwers course--> 
							<li <?php if ($page=="crackerscourse") echo "class='active'";?>>
								<a href="content.php?page=crackerscourse">
									<i class="menu-icon fa fa-caret-right"></i>
									Crackers Course
								</a>

								<b class="arrow"></b>
							</li>
							
						</ul>
					</li>
					<!-- Courses > Other --> 
					<li <?php if (($page=="regularclasses")||($page=="onlineclasses")||($page=="optionalsoffered")) echo "class='active'";?>>
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> Inter with IAS </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>
						<!-- Courses > Other > regular classes --> 
						<ul class="submenu">
							<li <?php if ($page=="regularclasses") echo "class='active'";?>>
								<a href="content.php?page=regularclasses">
									<i class="menu-icon fa fa-caret-right"></i>
									Regular Classes
								</a>

								<b class="arrow"></b>
							</li>
							<!-- Courses > Other > online classes --> 
							<li <?php if ($page=="onlineclasses") echo "class='active'";?>>
								<a href="content.php?page=onlineclasses">
									<i class="menu-icon fa fa-caret-right"></i>
									Online Classes
								</a>

								<b class="arrow"></b>
							</li>
							<!-- Courses > Other > optionals offers --> 
							<li <?php if ($page=="optionalsoffered") echo "class='active'";?>>
								<a href="content.php?page=optionalsoffered">
									<i class="menu-icon fa fa-caret-right"></i>
									Optionals Offered
								</a>

								<b class="arrow"></b>
							</li>
							
						</ul>
					</li>							
				</ul>
			</li>
			<!-- Gallery --> 
			<li <?php if ($page=="videogallery") echo "class='active'";?>>
						<a href="videogallery.php">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text">Video Gallery </span>
						</a>

						<b class="arrow"></b>
					</li>
			<li <?php if ($page=="imagegallery") echo "class='active'";?>>
						<a href="imagegallery.php">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text">Image Gallery </span>
						</a>

						<b class="arrow"></b>
					</li>
			<li <?php if ($page=="currentaffairs") echo "class='active'";?>>
						<a href="studentzone.php?cat=currentaffairs">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text">Current Affairs </span>
						</a>

						<b class="arrow"></b>
					</li>
				<li <?php if ($page=="yojna") echo "class='active'";?>>
						<a href="studentzone.php?cat=yojna">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text">Yojna/Kurukshetra </span>
						</a>

						<b class="arrow"></b>
					</li>
					<li <?php if ($page=="dailyquiz") echo "class='active'";?>>
						<a href="studentzone.php?cat=dailyquiz">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text">Daily Quiz </span>
						</a>

						<b class="arrow"></b>
					</li>
					<li <?php if ($page=="editorial") echo "class='active'";?>>
						<a href="studentzone.php?cat=editorial">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text">Editorial </span>
						</a>

						<b class="arrow"></b>
					</li>
	</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>
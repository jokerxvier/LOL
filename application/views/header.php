<div class="header">
	<div class="tophead">
		<div class="inner">
				<?php 
					$attributes = array('class'=>'logo');
					echo anchor('','LOL - Lights On Location',$attributes); ?>
				<div class="accountmenu">
					<ul>
						<li>
                        	<?php
								$attributes = array('class'=>'btn login');
								echo anchor('','',$attributes);
							?>                            
							<div class="logindrop">                           
							<a href="#" class="socwid"><img src="library/images/lgn-btn-fb.jpg" alt=""/></a>
							<a href="#" class="socwid" style="margin-bottom:10px"><img src="library/images/lgn-btn-google.png" alt=""/></a>
							<img src="library/images/lgn-btn-or.png" class="loginor" alt=""/>
						<?php
							echo form_open('');
							$attributes = array('name'=>'email','class'=>'text emailadds');
							echo '<p>'.form_input($attributes).'</p>';
							$attributes = array('type'=>'password','name'=>'password','class'=>'text pass');
							echo '<p>'.form_input($attributes).'</p>';
							echo '<p class="submitfield">';
							$attributes = array('class'=>'submit btn');
							echo form_submit($attributes);
							echo '</p>';							
						?>                        
						<p class="rememberselect">
									<!--<input id="remember" type="checkbox" name="remember" value="1">Remember me | -->
									<a style="float:none; background-color: #fff; color:#000" href="#">Forgot Password&nbsp; |</a><a style="float:none; background-color: #fff; color:#000" href="#">New User</a>									</p>
						<?php echo form_close(); ?>
					</div>
						</li>
						<li>	<a href="#" class="btn listyourproperty">List Your Property</a></li>
					</ul>
				</div>
				<div class="clear"></div>
		</div>
	</div>
<!--end tophead-->
	<div class="search">
		<div class="inner">
			<div class="formsearch">
				<div class="price" id="priceslide"></div>
                <?php
					$options = array('state'=>'State');					
					echo form_dropdown('sampleselect',$options,'', 'class="city selectbox"');
					$options = array('proptype'=>'Property Type');
					echo form_dropdown('sampleselect',$options,'','class="property-type selectbox"');
				?> 							
				<a href="#" class="btn mediumview-btn">Medium View</a>
				<a href="#" class="btn pictureview-btn">Medium View</a>
               </div>
			
			<div class="advancesearchoption">
		<div class="inner">
			<div >
				<a href="#">Rates</a>
				<a href="#">Size</a>
				<a href="#">Omit Feature</a>
			<a href="#" class="btn advancesearchbtn">Advanced search</a>			</div>
		</div>
	</div>
		</div>
	</div>
<!--end search-->
	<div class="advance-search">
		<div class="inner">
			

			<div class="menusearch">
				<ul>
					<li class="propertycol"> 
						<h4>Property Type</h4>
						<p>
						<input type="checkbox" name="house" class="house" id="house" value="house"  />
						<label>House</label>
						</p>
						<p>
						<input type="checkbox" name="condo" value="condo" id="condo"/>
						<label>Condo</label>
						</p>
						<p>
						<input type="checkbox" name="townhouse" value="townhouse"  id="townhouse" />
						<label>townhouse</label>
						</p>
						<p>
						<input type="checkbox" name="multi-family" value="multi-family"  id="multi-family"/>
						<label>multi-family</label>
						</p>
						<p>
						<input type="checkbox" name="land" value="land" id="land" />
						<label>Land</label>
						</p>
						<p>
						<input type="checkbox" name="school" value="school" id="school"/>
						<label>School</label>
						</p>
							<p>
						<input type="checkbox" name="others01" id="others01" value="others01" />
						<label>Others</label>
						</p>
					</li>
					<li class="include-onlycol">
						<h4>Include Only*</h4>
						<p>
						<input type="checkbox" name="newlisting" value="newlisting" id="newlisting"/>
						<label>New listings</label>
						</p>
						<p>
						<input type="checkbox" name="openhouse" value="openhouse" id="openhouse"/>
						<label>Open house</label>
						<select name="sampleselect" class="thisweekend selectdef">
						<option value="">This Weekend</option>       
						</select>
						</p>
						<p>
						<input type="checkbox" name="newconstruction" value="newconstruction"  id="newconstruction"/>
						<label>New construction</label>
						</p>
						<p>
						<input type="checkbox" name="hasview"  value="hasview" id="hasview"/>
						<label>Has View</label>
						</p>
						<p>
						<input type="checkbox" name="fixerupper" value="fixerupper" id="fixerupper" />
						<label>Fixer-upper</label>
						</p>
						<p>
						<input type="checkbox" name="waterfront01" value="waterfront01" id="waterfront01"/>
						<label>Waterfront</label>
						</p>
							<p>
						<input type="checkbox" name="others" value="others" id="others" />
						<label>Others</label>
						</p>
					</li>
					<li class="includecol">
						<h4>Include</h4>
						<p>
                        <?php
							$data = array(
											'name'=>'vrentals',
											'value'=>'vacation rentals',
											'id'=>'mls-listed-homes'
									);
							echo form_checkbox($data);
						?>						
						<label>Vacation Rentals</label>
						</p>
						<p>
						<input type="checkbox" name="mls-listed-foreclosures"  value="mls-listed-foreclosures" id="mls-listed-foreclosures"/>
						<label>Film Shoot Rentals</label>
						</p>
						<p>
						<input type="checkbox" name="For-sale-by-ownerhomes" value="For-sale-by-ownerhomes" id="For-sale-by-ownerhomes"/>
						<label>Location Shooting</label>
						</p>
						<p>
						<input type="checkbox" name="forclosed" value="forclosed" id="forclosed" />
						<label>Studio Shoots</label>
						</p>
						
					</li>
					<li class="homefactscol">
						<h4>Home Facts</h4>
						<p>
							<label>Baths</label>
							<select name="sampleselect" class="selectdef">
							<option value="">2+</option>       
						</select>
						</p>
						<p>
							<label>Square feet:</label>
							<select name="sampleselect" class="selectdef">
							<option value="">No min</option>       
							</select>
							<span class="t">to</span>
							<select name="sampleselect" class="selectdef">
							<option value="">No max</option>       
							</select>
						</p>
							<p>
							<label>Lot Size</label>
							<select name="sampleselect" class="selectdef">
							<option value="">No min</option>       
							</select>
								<span class="t">to</span>
							<select name="sampleselect" class="selectdef">
							<option value="">No max</option>       
							</select>
						</p>
						<p>
							<label>Parking:</label>
							<select name="sampleselect" class="selectdef">
							<option value="">No min</option>       
							</select>
								<span class="t">to</span>
							<input type="checkbox" name="hasgeorge" id="hasgeorge" value="hasgeorge" />
							<label class="hasg"><small>Has Garage</small></label>
						</p>
					
						
						<p>
							<label>Year built:</label>
							<select name="sampleselect" class="selectdef">
							<option value="">No min</option>       
							</select>
								<span class="t">to</span>
							<select name="sampleselect" class="selectdef">
							<option value="">No max</option>       
							</select>
						</p>
						<p>
							<label>Max HOA:</label>
							<select name="sampleselect" class="selectdef">
							<option value="">No max</option>       
							</select>	
						</p>
						<p>
							<label>Remarks:</label>
							<input type="text" class="text"/>
							<span class="learntext">learn more</span>						</p>
					</li>
				</ul>
				<div class="applyfiltersec">
					<h4>Listing Facts</h4>
					<div class="listfacts">
						<p>
							<label>Days on Redfin:</label>
							<select name="sampleselect" class="selectdef">
							<option value="">No max</option>       
							</select>
						</p>
						<p>
							<label>Price reduced:</label>
							<select name="sampleselect" class="selectdef">
							<option value="">Last 7 days</option>       
							</select>
						</p>
							<p>
							<label>Status:</label>
							<select name="sampleselect" class="selectdef">
							<option value="">Active</option>       
							</select>
						</p>
							<p>
							<label>Exclude short sales</label>
							<input type="checkbox" name="exclude"  value="exclude" id="exclude"/>
						</p>
					</div>
					<div class="btnset">
						<a href="#" class="btn resetsearch">Reset Search Options</a>
						<a href="#" class="btn applyfilter-btn">Apply Filter</a>					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
	</div>
  <!--end advance-search-->
</div><!--end header-->
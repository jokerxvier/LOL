<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
  <head>
	<title>Testing Grounds | <?php echo $pagename; ?></title>
	
<!-- Css Library - Put Your Css Library here -->


<link rel="shortcut icon" href="favicon.png" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="library/css/screen.css" />
	<link rel="stylesheet" type="text/css" href="library/js/combox/jquery.selectBox.css" />
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,900,700,600,300italic' rel="stylesheet" type='text/css' />
</head>

<body<?php if (is_home()) {?> id="home"<?php } ?>>
<div class="header">
	<div class="tophead">
		<div class="inner">
				<a href="#" class="logo">LOL - Lights On Location</a>
				<div class="accountmenu">
					<ul>
						<li><a href="#" class="btn login"></a>
							<div class="logindrop">
							<a href="#" class="socwid"><img src="library/images/lgn-btn-fb.jpg" alt=""/></a>
							<a href="#" class="socwid" style="margin-bottom:10px"><img src="library/images/lgn-btn-google.png" alt=""/></a>
						<img src="library/images/lgn-btn-or.png"  class="loginor"alt=""/>
						<form action="#">
							<p><input type="text" value="" name="email" class="text emailadds" ></p>
						<p>
							<input type="password" value="" name="password" class="text pass" >
						</p>
						<p class="submitfield">
<input class="submit btn" type="submit" value="">
</p>
						<p class="rememberselect">
									<!--<input id="remember" type="checkbox" name="remember" value="1">Remember me | -->
									<a style="float:none; background-color: #fff; color:#000" href="#">Forgot Password&nbsp; |</a><a style="float:none; background-color: #fff; color:#000" href="#">New User</a>
									</p>
						</form>
					</div>
						</li>
						<li>	<a href="#" class="btn listyourproperty">List Your Property</a></li>
					</ul>
				
				</div>
				<div class="clear"></div>
		</div>
	</div><!--end tophead-->
	<div class="search">
		<div class="inner">
			<div class="formsearch">
				<div class="price" id="priceslide"></div>
				<select name="sampleselect" class="state selectbox">
					<option value="">State</option>       
				</select>
				<select name="sampleselect" class="city selectbox">
					<option value="">State</option>       
				</select>
				<select name="sampleselect" class="property-type selectbox">
					<option value="">Property Type</option>       
				</select>
				<a href="#" class="btn mediumview-btn">Medium View</a>
				<a href="#" class="btn pictureview-btn">Medium View</a>
			</div>
			
			<div class="advancesearchoption">
		<div class="inner">
			<div >
				<a href="#">Rates</a>
				<a href="#">Size</a>
				<a href="#">Omit Feature</a>
			<a href="#" class="btn advancesearchbtn">Advanced search</a>
			</div>
		</div>
	</div>
		</div>
	</div><!--end search-->
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
						<input type="checkbox" name="mls-listed-homes"  value="mls-listed-homes" id="mls-listed-homes"/>
						<label>MLS-listed homes</label>
						</p>
						<p>
						<input type="checkbox" name="mls-listed-foreclosures"  value="mls-listed-foreclosures" id="mls-listed-foreclosures"/>
						<label>MLS-listed foreclosures</label>
						</p>
						<p>
						<input type="checkbox" name="For-sale-by-ownerhomes" value="For-sale-by-ownerhomes" id="For-sale-by-ownerhomes"/>
						<label>For-sale-by-owner homes</label>
						</p>
						<p>
						<input type="checkbox" name="forclosed" value="forclosed" id="forclosed" />
						<label>Foreclosed homes</label>
						</p>
						<p>
						<input type="checkbox" name="fixerupper" id="salerecord" value="salerecord"/>
						<label>Sale records</label>
						<select name="sampleselect" class="last3months selectdef">
						<option value="">Last 3 months</option>       
						</select>
						</p>
						<p>
						<input type="checkbox" name="waterfront" id="waterfront" value="waterfront"/>
						<label>Waterfront</label>
						</p>
							<p>
						<input type="checkbox" name="schools" value="schools"  id="schools"/>
						<label>Schools</label>
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
							<span class="learntext">learn more</span>
						</p>
					
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
						<a href="#" class="btn applyfilter-btn">Apply Filter</a>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
	</div><!--end advance-search-->
</div><!--end header-->
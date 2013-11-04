<div class="body">
	<div class="inner">
	<div class="content">
			<div class="listcontent">
				<div class="entry">
					<div class="illustrate">
						<img src="library/images/sample01.jpg" alt=""/>					</div>
					<div class="desc">
						<h2>Hollywood CA</h2>
						<span>#124993</span>
						<div class="rate">
                        	<?php
								$attributes = array('class'=>'rated');
								for ($i = 1; $i <= 5; $i++)
								{
										echo anchor('','star',$attributes);										
								}
							?>
							</div>
						<div class="hourly">
							<p>
								<?php echo anchor('','Hourly: $100 - $300'); ?> |
								<?php echo anchor('','Daily: $800 - $1000'); ?>							
                            </p>
                        </div>
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore... </p>
						<div class="tags">
							<a href="#">Bar area (2)</a>
							<a href="#">Swimming Pool (5)</a>
							<a href="#">Parking (5)</a>
							<a href="#">Kitchen (6)</a>
							<a href="#">Library (1)</a>						</div>
						<a href="#" class="btn moredetails">More Details</a>					</div>
				</div>
				
				<div class="entry">
					<div class="illustrate">
						<img src="library/images/sample01.jpg" alt=""/>					</div>
					<div class="desc">
						<h2>Hollywood CA</h2>
						<span>#124993</span>
						<div class="rate">
                        		<?php
									$attributes = array('class'=>'rated');
									for ($i = 1; $i <= 5; $i++)
									{
											echo anchor('','star',$attributes);										
									}
								?>
                         </div>
						<div class="hourly">
							<p>
								<?php echo anchor('','Hourly: $100 - $300'); ?> |
								<?php echo anchor('','Daily: $800 - $1000'); ?>							
                            </p>
						</div> 
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore... </p>
						<div class="tags">
							<a href="#">Bar area (2)</a>
							<a href="#">Swimming Pool (5)</a>
							<a href="#">Parking (5)</a>
							<a href="#">Kitchen (6)</a>
							<a href="#">Library (1)</a>						
                        </div>
						<a href="#" class="btn moredetails">More Details</a>					
                     </div>
				</div>
			</div>
			<div class="pagination">
				<a href="#" class="bac">&nbsp;</a>
				<a href="#" class="prev">&nbsp;</a>
				<a href="#" class="active">1</a>
				<a href="#">2</a>
				<a href="#">3</a>
				<a href="#">4</a>
				<a href="#">5</a>
				<a href="#" class="next">&nbsp;</a>
				<a href="#" class="forward">&nbsp;</a>			</div>
		</div><!--end content-->
		<div class="sidebar">
			<div class="widget">
				<div class="searchwid">
                	<?php
						echo form_open('');
						$attributes = array('class'=>'text');
						echo form_input($attributes);
						$attributes = array('class'=>'btn searchbtn');
						echo form_submit($attributes);
						echo form_close();
					?>					
				</div>
			</div>
			
			<div class="widget">
				<div class="module">
						<div class="mdlinkcon ">
                        	<?php
								$attributes = array('class'=>'titleclick active');
								echo anchor('','Features',$attributes);
							?>							
							<div class="box" style="display:block">
								<div class="tags">
									<?php echo anchor('','Vivamus eleif'); ?>
									<?php echo anchor('','Vivamus non'); ?>
								</div>
							</div>
                            <?php
								$attributes = array('class'=>'view','style'=>'display:block');
								echo anchor('','See More',$attributes);
							?>					
							<div class="box">
								<div class="tags">
									<?php echo anchor('','Vivamus eleif'); ?>
									<?php echo anchor('','Vivamus non'); ?>
                                 </div>
							</div>
						</div>
				</div>
			</div>
			
			<div class="widget">
				<div class="module">
						<div class="mdlinkcon">
                        	<?php
								$attributes = array('class'=>'titleclick');
								echo anchor('','Favorites (6)',$attributes);
							?>							
							<div class="box">
								<div class="tags">
									<?php echo anchor('','Vivamus eleif'); ?>
									<?php echo anchor('','Vivamus non'); ?>
                                </div>
							</div>
						</div>
				</div>
			</div>
			
			<div class="widget">
				<div class="module">
						<div class="mdlinkcon">
							<?php								
								echo anchor('','Famous Properties',$attributes);
							?>                          
							<div class="box">
								<div class="tags">
									<?php echo anchor('','Vivamus eleif'); ?>
									<?php echo anchor('','Vivamus non'); ?>
                                </div>
							</div>
						</div>
				</div>
			</div>
			
			<div class="widget">
				<div class="module">
						<div class="mdlinkcon">
                        	<?php
								echo anchor('','New Listing',$attributes);
							?>							
							<div class="box">
								<div class="tags">
                                	<?php echo anchor('','Vivamus eleif'); ?>
									<?php echo anchor('','Vivamus non'); ?>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div><!--end sidebar-->
		</div>
</div><!--end body-->



        
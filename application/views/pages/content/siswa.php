  <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-9 main-chart">
                  <center><h3>Temu Barang</h3></center>
                  	<!--<div class="row mtbox">
                    
                  	<! Heading Page Siswa 
                  	</div>--> 

                    <!-- SEARCH FIELD -->
                      <div class="featurette">
                         <div class="featurette-inner text-center">
                               <div class="input-group input-group-lg">
                                  <input type="search" placeholder="search" class="form-control">
                                  <span class="input-group-btn">
                                  <button class="btn btn-danger" type="button">Search</button>
                                  </span>
                               </div>
                               <!-- /input-group -->
                            <!-- /.max-width on this form -->

                         </div>
                         <!-- /.featurette-inner (display:table-cell) -->

                      </div>
                      <!-- /.featurette (display:table) -->
                                        
                      
                      <div class="row mt">
                      <?php foreach($user as $u){ ?>
                      <!-- SERVER STATUS PANELS -->
                      	<div class="col-md-4 col-sm-4 mb">
                      		<div class="white-panel pn donut-chart">
                      			<div class="white-header">
                              
						  			           <h5><?php echo $u['nama_barang'] ?></h5>
                      			</div>
              								<div class="row">
                                  <div class="col-sm-6 col-xs-6 goleft">
                                    <p><?php echo $u['lokasi_barang'] ?></p>
                                  </div>
                                <div class="col-sm-6 col-xs-6"></div>
                              </div>
                              <div class="centered">
                                <img src="<?php echo base_url(); ?>assets/img/<?php echo $u['foto_barang'] ?>" width="120">
                              </div>      
	                      	</div><! --/grey-panel -->
                      	</div><!-- /col-md-4-->
                      	<?php } ?>
                    </div>
                    <!-- /row -->
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  
                  <div class="col-lg-3 ds">
                    <!--COMPLETED ACTIONS DONUTS CHART-->

                       <!-- USERS ONLINE SECTION -->
						<h3>TEAM MEMBERS</h3>
                      <!-- First Member -->
                      <div class="desc">
                      	<div class="thumb">
                      		<img class="img-circle" src="<?php echo base_url(); ?>assets/img/ui-sherman.jpg" width="35px" height="35px" align="">
                      	</div>
                      	<div class="details">
                      		<p><a href="#">Pak Emil</a><br/>
                      		   <muted>Online</muted>
                      		</p>
                      	</div>
                      </div>
                      <!-- Second Member -->
                      <div class="desc">
                      	<div class="thumb">
                      		<img class="img-circle" src="<?php echo base_url(); ?>assets/img/ui-zac.jpg" width="35px" height="35px" align="">
                      	</div>
                      	<div class="details">
                      		<p><a href="#">Pak Suko</a><br/>
                             <muted>Online</muted>
                      		</p>
                      	</div>
                      </div>

                        <!-- CALENDAR-->
                        <div id="calendar" class="mb">
                            <div class="panel green-panel no-margin">
                                <div class="panel-body">
                                    <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                                        <div class="arrow"></div>
                                        <h3 class="popover-title" style="disadding: none;"></h3>
                                        <div id="date-popover-content" class="popover-content"></div>
                                    </div>
                                    <div id="my-calendar"></div>
                                </div>
                            </div>
                        </div><!-- / calendar -->
                      
                  </div><!-- /col-lg-3 -->
              </div><! --/row -->
          </section>
      </section>

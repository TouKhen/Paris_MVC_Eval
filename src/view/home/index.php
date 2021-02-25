	<section id="feature_news_section" class="feature_news_section">
		<div class="container">
			<div class="row">
				
			</div>
			<!-- Row -->
		</div>
		<!-- container -->
	</section>
	<!-- Feature News Section -->

	<section id="category_section" class="category_section">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="category_section mobile">
						<div class="article_title header_purple">
							<h2>
								<a href="category.html" target="_self">Mobile</a>
							</h2>
						</div>
						<!----article_title------>
						<div class="category_article_wrapper">
							<div class="row">
								<?php foreach($this->post as $key => $item) :
								if($item->category_name == 'mobile'):
								 	if($key === 0): ?>
										<div class="col-md-6">
											<div class="top_article_img">
												<a href="<?= URL; ?>category/show/<?= $item->id; ?>" target="_self"><img class="img-responsive img-thumbnail" src="<?= $item->image ?>" alt="feature-top">
												</a>
											</div>
											<!----top_article_img------>
										</div>
										<div class="col-md-6">
											<span class="tag purple"><?= $item->category_name ?></span>
											
											<div class="category_article_title">
												<h2>
													<a href="<?= URL; ?>category/show/<?= $item->id; ?>" target="_self"><?= $item->header ?></a>
												</h2>
											</div>
											<!----category_article_title------>
											<div class="category_article_date">
												<a href="#"><?= $item->timestamp ?></a>, by: <a href="#"><?= $item->firstname . ' ' . $item->lastname?></a>
											</div>
											<!----category_article_date------>
											<?php if(strlen($item->content) > 10):  ?>
												<div class="category_article_content"><?= substr($item->content, 0, 100) . '...';  ?></div>
											<?php endif;  ?>
											<!----category_article_content------>
											<div class="media_social">
												<span><a href="#"><i class="fa fa-share-alt"></i>424 </a> Shares</span>
												<span><i class="fa fa-comments-o"></i><a href="#">4</a> Comments</span>
											</div>
											<!----media_social------>
										</div>
							 	<?php else: ?>
									<div class="col-md-6">
										<div class="media">
											<div class="media-left">
												<a href="#"><img class="img-responsive img-thumbnail media-object" src="<?= $item->image ?>" alt="Generic placeholder image"></a>
											</div>
											<div class="media-body">
												<span class="tag purple">Mobile</span>
												
												<h3 class="media-heading">
													<a href="<?= URL; ?>category/show/<?= $item->id; ?>" target="_self"><?= $item->header ?></a>
												</h3>
												<span class="media-date"><a href="#"><?= $item->timestamp ?></a>,  by: <a href="#"><?= $item->firstname . ' ' . $item->lastname?></a></span>
												
												<div class="media_social">
													<span><a href="#"><i class="fa fa-share-alt"></i>424</a> Shares</span>
													<span><a href="#"><i class="fa fa-comments-o"></i>4</a> Comments</span>
												</div>
											</div>
										</div><!-- Media -->
									</div><!-- Col-md-6 -->
									<?php endif; ?>
								<?php endif; ?>
							<?php endforeach; ?>
							</div>
						</div><!-- Category Article Wrapper -->
					 	<p class="divider"><a href="#">More News&nbsp;&raquo;</a></p>
				 	</div><!-- Mobile News Section -->
					
					<div class="category_section tablet">
						<div class="article_title header_pink">
							<h2>
								<a href="category.html" target="_self">Tablet</a>
							</h2>
						</div>
						<!----article_title------>
						<div class="category_article_wrapper">
							<div class="row">
								<?php foreach($this->post as $key => $item) :
									if($item->category_name == 'tablet'):
										if($key === 0): ?>
											<div class="col-md-6">
												<div class="top_article_img">
													<a href="<?= URL; ?>category/show/<?= $item->id; ?>" target="_self"><img class="img-responsive img-thumbnail" src="<?= $item->image ?>" alt="feature-top">
													</a>
												</div>
												<!----top_article_img------>
											</div>
											<div class="col-md-6">
												<span class="tag pink"><?= $item->category_name ?></span>
												
												<div class="category_article_title">
													<h2>
														<a href="<?= URL; ?>category/show/<?= $item->id; ?>" target="_self"><?= $item->header ?></a>
													</h2>
												</div>
												<!----category_article_title------>
												<div class="category_article_date">
													<a href="#"><?= $item->timestamp ?></a>, by: <a href="#"><?= $item->firstname . ' ' . $item->lastname?></a>
												</div>
												<!----category_article_date------>
												<?php if(strlen($item->content) > 10):  ?>
													<div class="category_article_content"><?= substr($item->content, 0, 100) . '...';  ?></div>
												<?php endif;  ?>
												<!----category_article_content------>
												<div class="media_social">
													<span><a href="#"><i class="fa fa-share-alt"></i>424 </a> Shares</span>
													<span><i class="fa fa-comments-o"></i><a href="#">4</a> Comments</span>
												</div>
												<!----media_social------>
											</div>
										<?php else: ?>
											<div class="col-md-6">
												<div class="media">
													<div class="media-left">
														<a href="#"><img class="img-responsive img-thumbnail media-object" src="<?= $item->image ?>" alt="Generic placeholder image"></a>
													</div>
													<div class="media-body">
														<span class="tag pink">Tablet</span>
														
														<h3 class="media-heading">
															<a href="<?= URL; ?>category/show/<?= $item->id; ?>" target="_self"><?= $item->header ?></a>
														</h3>
														<span class="media-date"><a href="#"><?= $item->timestamp ?></a>,  by: <a href="#"><?= $item->firstname . ' ' . $item->lastname?></a></span>
														
														<div class="media_social">
															<span><a href="#"><i class="fa fa-share-alt"></i>424</a> Shares</span>
															<span><a href="#"><i class="fa fa-comments-o"></i>4</a> Comments</span>
														</div>
													</div>
												</div><!-- Media -->
											</div><!-- Col-md-6 -->
										<?php endif; ?>
									<?php endif; ?>
								<?php endforeach; ?>
							</div>
						</div><!-- Category Article Wrapper -->
						<p class="divider"><a href="#">More News&nbsp;&raquo;</a></p>
					</div><!-- Tablet News Section -->
					
					<div class="category_section gadget">
						<div class="article_title header_black">
							<h2>
								<a href="category.html" target="_self">Gadget</a>
							</h2>
						</div>
						<!----article_title------>
						<div class="category_article_wrapper">
							<div class="row">
								<?php foreach($this->post as $key => $item) :
									if($item->category_name == 'gadget'):
										if($key === 0): ?>
											<div class="col-md-6">
												<div class="top_article_img">
													<a href="<?= URL; ?>category/show/<?= $item->id; ?>" target="_self"><img class="img-responsive img-thumbnail" src="<?= $item->image ?>" alt="feature-top">
													</a>
												</div>
												<!----top_article_img------>
											</div>
											<div class="col-md-6">
												<span class="tag black"><?= $item->category_name ?></span>
												
												<div class="category_article_title">
													<h2>
														<a href="<?= URL; ?>category/show/<?= $item->id; ?>" target="_self"><?= $item->header ?></a>
													</h2>
												</div>
												<!----category_article_title------>
												<div class="category_article_date">
													<a href="#"><?= $item->timestamp ?></a>, by: <a href="#"><?= $item->firstname . ' ' . $item->lastname?></a>
												</div>
												<!----category_article_date------>
												<?php if(strlen($item->content) > 10):  ?>
													<div class="category_article_content"><?= substr($item->content, 0, 100) . '...';  ?></div>
												<?php endif;  ?>
												<!----category_article_content------>
												<div class="media_social">
													<span><a href="#"><i class="fa fa-share-alt"></i>424 </a> Shares</span>
													<span><i class="fa fa-comments-o"></i><a href="#">4</a> Comments</span>
												</div>
												<!----media_social------>
											</div>
										<?php else: ?>
											<div class="col-md-6">
												<div class="media">
													<div class="media-left">
														<a href="#"><img class="img-responsive img-thumbnail media-object" src="<?= $item->image ?>" alt="Generic placeholder image"></a>
													</div>
													<div class="media-body">
														<span class="tag black">Gadgets</span>
														
														<h3 class="media-heading">
															<a href="<?= URL; ?>category/show/<?= $item->id; ?>" target="_self"><?= $item->header ?></a>
														</h3>
														<span class="media-date"><a href="#"><?= $item->timestamp ?></a>,  by: <a href="#"><?= $item->firstname . ' ' . $item->lastname?></a></span>
														
														<div class="media_social">
															<span><a href="#"><i class="fa fa-share-alt"></i>424</a> Shares</span>
															<span><a href="#"><i class="fa fa-comments-o"></i>4</a> Comments</span>
														</div>
													</div>
												</div><!-- Media -->
											</div><!-- Col-md-6 -->
										<?php endif; ?>
									<?php endif; ?>
								<?php endforeach; ?>
							</div>
						</div><!-- Category Article Wrapper -->
						<p class="divider"><a href="#">More News&nbsp;&raquo;</a></p>
					</div><!-- Gadget News Section -->
					
					<div class="category_section camera">
						<div class="article_title header_orange">
							<h2>
								<a href="category.html" target="_self">Camera</a>
							</h2>
						</div>
						<!----article_title------>
						<div class="category_article_wrapper">
							<div class="row">
								<?php foreach($this->post as $key => $item) :
									if($item->category_name == 'camera'):
										if($key === 0): ?>
											<div class="col-md-6">
												<div class="top_article_img">
													<a href="<?= URL; ?>category/show/<?= $item->id; ?>" target="_self"><img class="img-responsive img-thumbnail" src="<?= $item->image ?>" alt="feature-top">
													</a>
												</div>
												<!----top_article_img------>
											</div>
											<div class="col-md-6">
												<span class="tag orange"><?= $item->category_name ?></span>
												
												<div class="category_article_title">
													<h2>
														<a href="<?= URL; ?>category/show/<?= $item->id; ?>" target="_self"><?= $item->header ?></a>
													</h2>
												</div>
												<!----category_article_title------>
												<div class="category_article_date">
													<a href="#"><?= $item->timestamp ?></a>, by: <a href="#"><?= $item->firstname . ' ' . $item->lastname?></a>
												</div>
												<!----category_article_date------>
												<?php if(strlen($item->content) > 10):  ?>
													<div class="category_article_content"><?= substr($item->content, 0, 100) . '...';  ?></div>
												<?php endif;  ?>
												<!----category_article_content------>
												<div class="media_social">
													<span><a href="#"><i class="fa fa-share-alt"></i>424 </a> Shares</span>
													<span><i class="fa fa-comments-o"></i><a href="#">4</a> Comments</span>
												</div>
												<!----media_social------>
											</div>
										<?php else: ?>
											<div class="col-md-6">
												<div class="media">
													<div class="media-left">
														<a href="#"><img class="img-responsive img-thumbnail media-object" src="<?= $item->image ?>" alt="Generic placeholder image"></a>
													</div>
													<div class="media-body">
														<span class="tag orange">Camera</span>
														
														<h3 class="media-heading">
															<a href="<?= URL; ?>category/show/<?= $item->id; ?>" target="_self"><?= $item->header ?></a>
														</h3>
														<span class="media-date"><a href="#"><?= $item->timestamp ?></a>,  by: <a href="#"><?= $item->firstname . ' ' . $item->lastname?></a></span>
														
														<div class="media_social">
															<span><a href="#"><i class="fa fa-share-alt"></i>424</a> Shares</span>
															<span><a href="#"><i class="fa fa-comments-o"></i>4</a> Comments</span>
														</div>
													</div>
												</div><!-- Media -->
											</div><!-- Col-md-6 -->
										<?php endif; ?>
									<?php endif; ?>
								<?php endforeach; ?>
							</div>
						</div><!-- Category Article Wrapper -->
						<p class="divider"><a href="#">More News&nbsp;&raquo;</a></p>
					</div><!-- Camera News Section -->
					
					<div class="category_section design">
						<div class="article_title header_blue">
							<h2>
								<a href="category.html" target="_self">Design</a>
							</h2>
						</div>
						<!----article_title------>
						<div class="category_article_wrapper">
							<div class="row">
								<?php foreach($this->post as $key => $item) :
									if($item->category_name == 'design'):
										if($key === 0): ?>
											<div class="col-md-6">
												<div class="top_article_img">
													<a href="<?= URL; ?>category/show/<?= $item->id; ?>" target="_self"><img class="img-responsive img-thumbnail" src="<?= $item->image ?>" alt="feature-top">
													</a>
												</div>
												<!----top_article_img------>
											</div>
											<div class="col-md-6">
												<span class="tag blue"><?= $item->category_name ?></span>
												
												<div class="category_article_title">
													<h2>
														<a href="<?= URL; ?>category/show/<?= $item->id; ?>" target="_self"><?= $item->header ?></a>
													</h2>
												</div>
												<!----category_article_title------>
												<div class="category_article_date">
													<a href="#"><?= $item->timestamp ?></a>, by: <a href="#"><?= $item->firstname . ' ' . $item->lastname?></a>
												</div>
												<!----category_article_date------>
												<?php if(strlen($item->content) > 10):  ?>
													<div class="category_article_content"><?= substr($item->content, 0, 100) . '...';  ?></div>
												<?php endif;  ?>
												<!----category_article_content------>
												<div class="media_social">
													<span><a href="#"><i class="fa fa-share-alt"></i>424 </a> Shares</span>
													<span><i class="fa fa-comments-o"></i><a href="#">4</a> Comments</span>
												</div>
												<!----media_social------>
											</div>
										<?php else: ?>
											<div class="col-md-6">
												<div class="media">
													<div class="media-left">
														<a href="#"><img class="img-responsive img-thumbnail media-object" src="<?= $item->image ?>" alt="Generic placeholder image"></a>
													</div>
													<div class="media-body">
														<span class="tag blue">Design</span>
														
														<h3 class="media-heading">
															<a href="<?= URL; ?>category/show/<?= $item->id; ?>" target="_self"><?= $item->header ?></a>
														</h3>
														<span class="media-date"><a href="#"><?= $item->timestamp ?></a>,  by: <a href="#"><?= $item->firstname . ' ' . $item->lastname?></a></span>
														
														<div class="media_social">
															<span><a href="#"><i class="fa fa-share-alt"></i>424</a> Shares</span>
															<span><a href="#"><i class="fa fa-comments-o"></i>4</a> Comments</span>
														</div>
													</div>
												</div><!-- Media -->
											</div><!-- Col-md-6 -->
										<?php endif; ?>
									<?php endif; ?>
								<?php endforeach; ?>
							</div>
						</div><!-- Category Article Wrapper -->
						<p class="divider"><a href="#">More News&nbsp;&raquo;</a></p>
					</div><!-- Design News Section -->
				</div><!-- Col-md-8 -->
				
				<!-- Left Section -->
				<div class="col-md-4">
					<div class="widget">
						<div class="widget_title widget_black">
							<h2><a href="#">Popular News</a></h2>
						</div>
						<div class="media">
							<div class="media-left">
								<a href="#"><img class="media-object" src="<?= URL ?>public/assets/img/pop_right1.jpg" alt="Generic placeholder image"></a>
							</div>
							<div class="media-body">
								<h3 class="media-heading">
									<a href="<?= URL; ?>category/show/<?= $item->id; ?>" target="_self">Canon launches photo centric 00214 Model supper shutter camera</a>
								</h3> <span class="media-date"><a href="#">10Aug- 2015</a>,  by: <a href="#">Eric joan</a></span>
								
								<div class="widget_article_social">
									<span>
											<a href="<?= URL; ?>category/show/<?= $item->id; ?>" target="_self"> <i class="fa fa-share-alt"></i>424</a> Shares
									</span>
									<span>
											<a href="<?= URL; ?>category/show/<?= $item->id; ?>" target="_self"><i class="fa fa-comments-o"></i>4</a> Comments
									</span>
								</div>
							</div>
						</div>
						<div class="media">
							<div class="media-left">
								<a href="#"><img class="media-object" src="<?= URL ?>public/assets/img/pop_right2.jpg" alt="Generic placeholder image"></a>
							</div>
							<div class="media-body">
								<h3 class="media-heading">
									<a href="<?= URL; ?>category/show/<?= $item->id; ?>" target="_self">Samsung galaxy note are the supper mobile of all products.</a>
								</h3>
								<span class="media-date"><a href="#">10Aug- 2015</a>,  by: <a href="#">Eric joan</a></span>
								
								<div class="widget_article_social">
									<span>
											<a href="<?= URL; ?>category/show/<?= $item->id; ?>" target="_self"> <i class="fa fa-share-alt"></i>424</a> Shares
									</span>
									<span>
											<a href="<?= URL; ?>category/show/<?= $item->id; ?>" target="_self"><i class="fa fa-comments-o"></i>4</a> Comments
									</span>
								</div>
							</div>
						</div>
						<div class="media">
							<div class="media-left">
								<a href="#"><img class="media-object" src="<?= URL ?>public/assets/img/pop_right3.jpg" alt="Generic placeholder image"></a>
							</div>
							<div class="media-body">
								<h3 class="media-heading">
									<a href="<?= URL; ?>category/show/<?= $item->id; ?>" target="_self">Apple launches photo-centric wrist watch for Android</a>
								</h3>
								<span class="media-date"><a href="#">10Aug- 2015</a>,  by: <a href="#">Eric joan</a></span>
								
								<div class="widget_article_social">
									<span>
											<a href="<?= URL; ?>category/show/<?= $item->id; ?>" target="_self"> <i class="fa fa-share-alt"></i>424</a> Shares
									</span>
									<span>
											<a href="<?= URL; ?>category/show/<?= $item->id; ?>" target="_self"><i class="fa fa-comments-o"></i>4</a> Comments
									</span>
								</div>
							</div>
						</div>
						<div class="media">
							<div class="media-left">
								<a href="#"><img class="media-object" src="<?= URL ?>public/assets/img/pop_right4.jpg" alt="Generic placeholder image"></a>
							</div>
							<div class="media-body">
								<h3 class="media-heading">
									<a href="<?= URL; ?>category/show/<?= $item->id; ?>" target="_self">Kodak Hi-Speed shutter double shot camera comming soon</a>
								</h3>
								<span class="media-date"><a href="#">10Aug- 2015</a>,  by: <a href="#">Eric joan</a></span>
								
								<div class="widget_article_social">
									<span>
											<a href="<?= URL; ?>category/show/<?= $item->id; ?>" target="_self"><i class="fa fa-share-alt"></i>424</a> Shares
									</span>
									<span>
											<a href="<?= URL; ?>category/show/<?= $item->id; ?>" target="_self"><i class="fa fa-comments-o"></i>4</a> Comments
									</span>
								</div>
							</div>
						</div>
						<p class="widget_divider"><a href="#" target="_self">More News&nbsp;&raquo;</a></p>
					</div>
					<!-- Popular News -->
					
					<div class="widget m30">
						<div class="widget_title widget_black">
							<h2><a href="#">Most Commented</a></h2>
						</div>
						<div class="media">
							<div class="media-left">
								<a href="#"><img class="media-object" src="<?= URL ?>public/assets/img/pop_right1.jpg" alt="Generic placeholder image"></a>
							</div>
							<div class="media-body">
								<h3 class="media-heading">
									<a href="<?= URL; ?>category/show/<?= $item->id; ?>" target="_self">Yasaki camera launches new generic hi-speed shutter camera.</a>
								</h3>
								
								<div class="media_social">
									<span><i class="fa fa-comments-o"></i><a href="#">4</a> Comments</span>
								</div>
							</div>
						</div>
						<div class="media">
							<div class="media-left">
								<a href="#"><img class="media-object" src="<?= URL ?>public/assets/img/pop_right2.jpg" alt="Generic placeholder image"></a>
							</div>
							<div class="media-body">
								<h3 class="media-heading">
									<a href="<?= URL; ?>category/show/<?= $item->id; ?>" target="_self">Samsung is the best mobile in the android market.</a>
								</h3>
								
								<div class="media_social">
									<span><i class="fa fa-comments-o"></i><a href="#">4</a> Comments</span>
								</div>
							</div>
						</div>
						<div class="media">
							<div class="media-left">
								<a href="#"><img class="media-object" src="<?= URL ?>public/assets/img/pop_right3.jpg" alt="Generic placeholder image"></a>
							</div>
							<div class="media-body">
								<h3 class="media-heading">
									<a href="<?= URL; ?>category/show/<?= $item->id; ?>" target="_self">Apple launches photo-centric wrist watch for Android</a>
								</h3>
								
								<div class="media_social">
									<span><i class="fa fa-comments-o"></i><a href="#">4</a> Comments</span>
								</div>
							</div>
						</div>
						<div class="media">
							<div class="media-left">
								<a href="#"><img class="media-object" src="<?= URL ?>public/assets/img/pop_right4.jpg" alt="Generic placeholder image"></a>
							</div>
							<div class="media-body">
								<h3 class="media-heading">
									<a href="<?= URL; ?>category/show/<?= $item->id; ?>" target="_self">DSLR is the most old camera at this time readmore about new products</a>
								</h3>
								
								<div class="media_social">
									<span><i class="fa fa-comments-o"></i><a href="#">4</a> Comments</span>
								</div>
							</div>
						</div>
						<p class="widget_divider"><a href="#" target="_self">More News&nbsp;&nbsp;&raquo; </a></p>
					</div>
					<!-- Most Commented News -->
					
					<div class="widget m30">
						<div class="widget_title widget_black">
							<h2><a href="#">Editor Corner</a></h2>
						</div>
						<div class="widget_body"><img class="img-responsive left" src="<?= URL ?>public/assets/img/editor.jpg" alt="Generic placeholder image">
							
							<p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C
								users after installed base benefits. Dramatically visualize customer directed convergence without</p>
							
							<p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C
								users after installed base benefits. Dramatically visualize customer directed convergence without
								revolutionary ROI.</p>
							<button class="btn pink">Read more</button>
						</div>
					</div>
					<!-- Editor News -->
					
					<div class="widget hidden-xs m30">
						<img class="img-responsive add_img" src="<?= URL ?>public/assets/img/right_add7.jpg" alt="add_one">
						<img class="img-responsive add_img" src="<?= URL ?>public/assets/img/right_add7.jpg" alt="add_one">
						<img class="img-responsive add_img" src="<?= URL ?>public/assets/img/right_add7.jpg" alt="add_one">
						<img class="img-responsive add_img" src="<?= URL ?>public/assets/img/right_add7.jpg" alt="add_one">
					</div>
					<!--Advertisement -->
				</div>
				<!-- Right Section -->
			</div>
			<!-- Row -->
		</div>
		<!-- Container -->
	</section>
	<!-- Category News Section -->
	
	<section id="video_section" class="video_section">
		<div class="container">
			<div class="well">
				<div class="row">
					<div class="col-md-6">
						<div class="embed-responsive embed-responsive-4by3">
							<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/MJ-jbFdUPns" allowfullscreen></iframe>
						</div>
						<!-- embed-responsive -->
					</div>
					<!-- col-md-6 -->
					
					<div class="col-md-3">
						<div class="embed-responsive embed-responsive-4by3">
							<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/h5Jni-vy_5M"></iframe>
						</div>
						<!-- embed-responsive -->
						
						<div class="embed-responsive embed-responsive-4by3 m16">
							<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/wQ5Gj0UB_R8"></iframe>
						</div>
						<!-- embed-responsive -->
					</div>
					<!-- col-md-3 -->
					
					<div class="col-md-3">
						<div class="embed-responsive embed-responsive-4by3">
							<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/UPvJXBI_3V4"></iframe>
						</div>
						<!-- embed-responsive -->
						
						<div class="embed-responsive embed-responsive-4by3 m16">
							<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/DTCtj5Wz6BM"></iframe>
						</div>
						<!-- embed-responsive -->
					</div>
					<!-- col-md-3 -->
				</div>
				<!-- row -->
			</div>
			<!-- well -->
		</div>
		<!-- Container -->
	</section>
	<!-- Video News Section -->
</div>
<!-- #content-wrapper -->
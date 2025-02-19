<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php echo phrase('aksara_installer'); ?></title>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="msapplication-navbutton-color" content="#007bff" />
		<meta name="theme-color" content="#007bff" />
		<meta name="apple-mobile-web-app-status-bar-style" content="#007bff" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="viewport" content="user-scalable=no, width=device-width, height=device-height, initial-scale=1, maximum-scale=1" />
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" type="text/css" />
		<link rel="stylesheet" href="assets/materialdesignicons/css/materialdesignicons.min.css" type="text/css" />
	</head>
	<style type="text/css">
		html,
		body
		{
			height: 100%;
			min-height: 100%
		}
	</style>
	<body class="bg-light">
		<div class="container-fluid h-100">
			<div class="row h-100 align-items-center">
				<div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2 pt-3 pb-3">
					<div class="card shadow border-0 rounded-4 overflow-hidden">
						<div class="card-body pt-0 pe-3 pb-0 ps-3">
							<div class="row">
								<div class="col-md-4 bg-light border-right pt-3 d-none d-md-block">
									<div class="sticky-top" style="top:15px">
										<a href="//www.aksaracms.com" class="text-primary text-decoration-none" target="_blank">
											<h4 class="font-weight-bold mb-3">
												<b>
													Aksara
												</b>
												<small class="text-sm text-secondary">Installer</small>
											</h4>
										</a>
										<hr class="row" />
										<p class="step requirement">
											<b>
												<?php echo phrase('checking_requirements'); ?>
											</b>
										</p>
										<hr class="row" />
										<p class="step database">
											<b>
												<?php echo phrase('database_configuration'); ?>
											</b>
										</p>
										<hr class="row" />
										<p class="step security">
											<b>
												<?php echo phrase('security_configuration'); ?>
											</b>
										</p>
										<hr class="row" />
										<p class="step system">
											<b>
												<?php echo phrase('system_configuration'); ?>
											</b>
										</p>
										<hr class="row" />
										<p class="step final">
											<b>
												<?php echo phrase('finalizing'); ?>
											</b>
										</p>
									</div>
								</div>
								<div class="col-md-8 pt-3 pb-3">
									<div class="d-md-none text-center">
										<a href="//www.aksaracms.com" class="text-primary text-decoration-none" target="_blank">
											<h4 class="font-weight-bold mb-3">
												Aksara <small class="text-sm font-weight-light">Installer</small>
											</h4>
										</a>
										<hr class="row" />
									</div>
									<div class="sticky-top step-content" style="top:15px">
										<form action="<?php echo site_url('requirement'); ?>" method="POST" class="--validate-form">
											<div class="row">
												<div class="col-7">
													<h4>
														<?php echo phrase('hello_there'); ?>
													</h4>
												</div>
												<div class="col-5">
													<select name="language" class="form-select form-select-sm" placeholder="<?php echo phrase('choose_language'); ?>">
														<option value="en"<?php echo (isset($_SESSION['language']) && $_SESSION['language'] == 'en' ? ' selected' : null); ?>>English</option>
														<option value="id"<?php echo (isset($_SESSION['language']) && $_SESSION['language'] == 'id' ? ' selected' : null); ?>>Indonesia</option>
													</select>
												</div>
											</div>
											<p>
												<?php echo phrase('thank_you_for_choosing_aksara'); ?>
											</p>
											<hr class="row" />
											<p>
												<?php echo phrase('before_we_start_the_installation_please_take_a_moment_to_read_this_few_notes'); ?>
												<?php echo phrase('you_could_check_the_agreement_box_and_skip_reading_as_usual'); ?>
											</p>
											<ol>
												<li>
													<p>
														<?php echo phrase('article_1'); ?>
													</p>
												</li>
												<li>
													<p>
														<?php echo phrase('article_2'); ?>
													</p>
												</li>
												<li>
													<p>
														<?php echo phrase('article_3'); ?>
													</p>
												</li>
											</ol>
											<p>
												<?php echo phrase('three_notes_should_be_enough'); ?> <?php echo phrase('i_look_forward_to_your_support'); ?>
											</p>
											<p class="mb-0">
												<?php echo phrase('the_fool'); ?>,
											</p>
											<p>
												<a href="//abydahana.github.io" class="text-primary text-decoration-none" target="_blank">
													<b>
														Aby Dahana
													</b>
												</a>
											</p>
											<hr class="row" />
											<div class="--validation-callback"></div>
											<div class="row align-items-center">
												<div class="col-md-6">
													<label>
														<input type="checkbox" name="agree" value="1" />
														<?php echo phrase('pretend_to_agree'); ?>
													</label>
												</div>
												<div class="col-md-6">
													<div class="d-grid">
														<input type="hidden" name="_token" value="<?php echo sha1(time()); ?>" />
														<button type="submit" class="btn btn-primary" disabled>
															<i class="mdi mdi-check"></i>
															<?php echo phrase('start_installation'); ?>
														</button>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="assets/jquery/jquery.min.js"></script>
		<script type="text/javascript" src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
		
		<script type="text/javascript">
			$(document).ready(function()
			{
				$('body').on('change', 'select[name=language]', function(e)
				{
					window.location.href			= '?language=' + $(this).val()
				}),
				
				$('body').on('click change', 'input[name=agree]', function(e)
				{
					if($(this).is(':checked'))
					{
						$(this).closest('form').find('button[type=submit]').prop('disabled', false)
					}
					else
					{
						$(this).closest('form').find('button[type=submit]').prop('disabled', true)
					}
				}),
				
				$('body').on('click change', 'input[name=request_config]', function(e)
				{
					if($(this).is(':checked'))
					{
						$('.using_ftp').slideUp()
					}
					else
					{
						$('.using_ftp').slideDown()
					}
				}),
				
				$('body').on('click touch', '.--xhr', function(e)
				{
					e.preventDefault(),
					$.ajax
					({
						url: $(this).attr('href'),
						context: this,
						beforeSend: function()
						{
							$('.failure').remove()
						}
					})
					.done(function(response)
					{
						if(response.status == 301)
						{
							window.location.href	= response.url;
							
							return;
						}
						else if(response.status !== 200)
						{
							$('.--validation-callback').html('<div class="alert alert-warning failure"><b><?php echo phrase('whoops'); ?></b> ' + response.message + '</div>'),
							$('html, body').animate
							({
								scrollTop: $('.failure').offset().top - 60
							}, 500)
						}
						
						$('.step' + response.active).addClass('text-warning'),
						$(response.passed).removeClass('text-warning').addClass('text-success'),
						$('.step-content').html(response.html)
					})
					.fail(function(response, status, error)
					{
						$(this).find('button[type=submit]').prop('disabled', false),
						$('.--validation-callback').html('<div class="alert alert-danger failure"><b><?php echo phrase('whoops'); ?></b> ' + error + '</div>'),
						$('html, body').animate
						({
							scrollTop: $('.failure').offset().top - 60
						}, 500)
					})
				}),
				
				$('body').on('submit', '.--validate-form', function(e)
				{
					e.preventDefault(),
					$.ajax
					({
						url: $(this).attr('action'),
						method: $(this).attr('method'),
						data: new FormData(this),
						contentType: false,
						processData: false,
						context: this,
						beforeSend: function()
						{
							$('.failure').remove(),
							$('.--validation-callback').removeClass('alert alert-warning pr-3 pl-3').html(''),
							$(this).find('button[type=submit]').prop('disabled', true).addClass('disabled').find('i.mdi').removeClass('mdi-check').addClass('mdi-loading mdi-spin')
						},
						complete: function(progress)
						{
							/* animate the submit button */
							$(this).find('button[type=submit]:not(.btn-link)').prop('disabled', false).removeClass('disabled').find('i.mdi').removeClass('mdi-loading mdi-spin').addClass('mdi-check')
						},
					})
					.done(function(response)
					{
						if(response.status === 200)
						{
							$('.step' + response.active).addClass('text-warning'),
							$(response.passed).removeClass('text-warning').addClass('text-success'),
							$('.step-content').html(response.html),
							$('html, body').animate
							({
								scrollTop: 0
							}, 500)
						}
						else if(response.status === 400)
						{
							var num					= 0;
							
							$('.--validation-callback').addClass('alert alert-warning pr-3 pl-3'),
							$.each(response.validation, function(key, val)
							{
								$('<p class="' + (num ? 'mb-1 border-top' : 'mb-1') + '">' + val + '</p>').appendTo('.--validation-callback');
								
								num++;
							})
						}
						else
						{
							$('.--validation-callback').html('<div class="alert alert-warning failure"><b><?php echo phrase('whoops'); ?></b> ' + response.message + '</div>'),
							$('html, body').animate
							({
								scrollTop: $('.failure').offset().top - 60
							}, 500)
						}
					})
					.fail(function(response, status, error)
					{
						$(this).find('button[type=submit]').prop('disabled', false),
						$('.--validation-callback').html('<div class="alert alert-warning failure"><b><?php echo phrase('whoops'); ?></b> ' + error + '</div>'),
						$('html, body').animate
						({
							scrollTop: $('.failure').offset().top - 60
						}, 500)
					})
				})
			})
		</script>
	</body>
</html>
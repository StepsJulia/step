<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php echo CHtml::encode($this->pageTitle); ?></title>
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css">
	</head>
	<body>
		<div id="wrapper">
			<div id="page">
				<div id="header">
					<div class="container">
						<div class="logo">
							<a href="#">
								<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.svg" alt="<?php echo CHtml::encode(Yii::app()->name); ?>" width="138" height="82">
							</a>
						</div>
						<nav id="nav">
							<a class="nav-opener" href="#">
								<span>Open</span>
							</a>
							<div id="mainmenu" class="nav-drop">
								<?php $this->widget('zii.widgets.CMenu',array(
									'items'=>array(
										array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
										array('label'=>'Contact', 'url'=>array('/site/contact')),
										array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
										array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
									),
								)); ?>
							</div><!-- mainmenu -->
						</nav>
					</div>
				</div><!-- header -->
				<main id="main">
					<?php echo $content; ?>
				</main>
				<footer id="footer">
					<aside class="footer-container">
						<div class="container">
							<div class="footer-columns">
								<div class="contact-column">
									<div class="logo">
										<a href="#">
											<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.svg" alt="<?php echo CHtml::encode(Yii::app()->name); ?>" width="138" height="82">
										</a>
									</div>
									<ul class="contact-menu">
										<li>
											<span class="icon">
												<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/chat.svg" alt="image-description" width="34" height="34">
											</span>
											<a href="#">Live Chat</a>
										</li>
										<li>
											<span class="icon">
												<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/tel.svg" alt="image-description" width="23" height="30">
											</span>
												<a href="tel:000000000000">+00 000 00 00000</a>
											</li>
										<li>
											<span class="icon">
												<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/mail.svg" alt="image-description" width="39" height="24">
											</span>
											<a href="mailto:support@pandats.com">support@pandats.com</a>
										</li>
									</ul>
								</div>
								<div class="menu-column">
									<div class="column">
										<h3>Market Analysis</h3>
										<ul class="footer-menu">
											<li><a href="#">Market News</a></li>
											<li><a href="#">Economic Calender</a></li>
											<li><a href="#">Strategy Calculator</a></li>
										</ul>
									</div>
									<div class="column">
										<h3>Products</h3>
										<ul class="footer-menu">
											<li><a href="#">Forex</a></li>
											<li><a href="#">Shares</a></li>
											<li><a href="#">Indices</a></li>
											<li><a href="#">Comodities</a></li>
										</ul>
									</div>
									<div class="column">
										<h3>Education</h3>
										<ul class="footer-menu">
											<li><a href="#">Videos</a></li>
											<li><a href="#">E-books</a></li>
											<li><a href="#">In-depth Courses</a></li>
										</ul>
									</div>
									<div class="column">
										<h3>Legal</h3>
										<ul class="footer-menu">
											<li><a href="#">Anti Money Laundring</a></li>
											<li><a href="#">Privacy policy</a></li>
											<li><a href="#">Risk Disclosure and Risk Disclaimer Policy</a></li>
											<li><a href="#">Deposit And Withdrawal Policy</a></li>
											<li><a href="#">KYC</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</aside>
					<div class="footer-info">
						<div class="container">
							<p>RISK DISCLAIMER: THIS WEBSITE OFFERS HIGHLY SPECULATIVE INVESTMENTS, CARRIES A HIGH LEVEL OF RISK AND MAY NOT BE SUITABLE FOR ALL TRADERS. YOU MAY SUSTAIN </p>
							<p>A LOSS OF SOME OR ALL OF YOUR INVESTED CAPITAL; THEREFORE, DO NOT SPECULATE WITH CAPITAL THAT YOU CANNOT AFFORD TO LOSE.</p>
							<p> <a href="#">WWW.PANDATS.COM  </a>IS OWNED BY CF MARKETING GROUP LIMITED</p>
							<address> COMPANY ADDRESS:TRUST COMPANY COMPLEX, AJELTAKE ROAD, AJELTAKE ISLAND, MAJURO, MARSHALL ISLANDS, MH96960 </address>
							<address> PHYSICAL ADDRESS:  WARWICK STREET 48, LONDON, GREATER LONDON, W1B 5AW, UNITED KINGDOM</address>
						</div>
					</div>
				</footer><!-- footer -->
			</div><!-- page -->
		</div>
	</body>
</html>

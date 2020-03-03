<?php global $Wcms ?>

<!DOCTYPE html>
<html lang="en">
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    	
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="description" content="<?= $Wcms->page('description') ?>">
        <meta name="keywords" content="<?= $Wcms->page('keywords') ?>">
    	<meta http-equiv="imagetoolbar" content="no"/>
    	<meta name="MSSmartTagsPreventParsing" content="false"/>

        <title><?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?></title>
    	<!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        
        <link rel="stylesheet" href="<?= $Wcms->asset('css/style.css') ?>">

        <?= $Wcms->css() ?>

    </head>

    <body>
        <?= $Wcms->settings() ?>
        <?= $Wcms->alerts() ?>
        
        <div class="container">
            <div class="row">
                <div class="col-sm-12 mt-3 mb-3 text-center">
                    <a class="" style="text-decoration: none;" href="<?= $Wcms->url() ?>">
                        <h1 class="text-danger"><?= $Wcms->get('config', 'siteTitle') ?></h1>
                    </a>
                    <br>
                    <?= $Wcms->page('description') ?>
                </div>
            </div>
        </div>
        
        <nav class="navbar navbar-light bg-light">
            <ul class="nav">
                <?= $Wcms->menu() ?>
		    </ul>
        </nav>

    	<div class="container mt-5 mb-5">
			<div class="row" style="padding-top: 10px;">
			    
				<div class="col-xs-12 col-sm-8">
					<div class="card p-3">
                        <?= $Wcms->page('content') ?>
					</div>
				</div><!-- /.col-lg-8 -->
				
				<div class="col-xs-12 col-sm-4">
                    <?= $Wcms->block('subside') ?>
                    
                    <div class="card mb-2">
				        <div class="card-header">
				            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
				        </div>
				        
                        <div class="card-body">
                            <p class="card-text">
                                plop
                            </p>
                        </div>
                    </div>
				</div><!-- /.col-lg-4 -->
				
			</div><!-- /.row -->
    	</div><!-- /.container -->

    	<footer class="bg-light">
    		<div class="text-center p-3">
                <?= $Wcms->footer() ?>

    		</div>
    	</footer>

    	<!-- Bootstrap core JavaScript
    	================================================== -->
    	<!-- Placed at the end of the document so the pages load faster -->
    	<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
        <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <?= $Wcms->js() ?>

    </body>
</html>

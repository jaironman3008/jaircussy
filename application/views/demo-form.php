<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url()?>static/bootstrap3/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=base_url()?>static/bootstrap3/css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?=base_url()?>static/bootstrap3/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<!-- special css for wizard -->
	<link href="<?=base_url()?>static/css/demo-form.css" rel="stylesheet" type="text/css">
	
	<!-- special css for wizard table -->
	<link href="<?=base_url()?>static/css/demo-form-dinamic-table.css" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
        [data-slide="prev"]{
            padding-top: 33px;            
            padding-right: 18px;
            padding-left: 6px;
            width: 30px;
        }
        [data-slide="next"]{
            padding-top: 33px;
            padding-left: 18px;
            padding-right: 6px;
            width: 30px;
        }
        #myCarousel2 img{
            max-width: 100px; max-height: 90px;vertical-align: middle;
        }
        #myCarousel2 a{
            height: 100px;
        }
        #myTools{
           /* height: 140px*/
        }

        #myCarousel{
            height: auto;
        }               
    </style>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
<!--                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>-->
                </button>
                <a class="navbar-brand" href="#">Jair Cussy</a>
            </div>
        </div>
        <!-- /.container -->
    </nav>

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <?php
                for ($i=1;$i<=3;$i++) {
                    $active=$i==1?' active':'';
                ?>
                 <div class="item<?=$active?>">
                    <div>
                        <img style="" class="fill" src="<?=base_url()?>static/images/banner<?=$i?>.jpg"/>
                    </div>
                </div>               
            <?php                
                }            
            ?>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <h2>RESOLUCIÓN # 000017- FORMATO ÚNICO REPORTE GENERAL DE INFORMACIÓN ( FRG )</h2>
        <div class="row">
			<div class="well wizard-demo-form">
				<div class="stepwizard">
				    <div class="stepwizard-row setup-panel">
				        <div class="stepwizard-step">
				            <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
				            <p>Paso 1</p>
				        </div>
				        <div class="stepwizard-step">
				            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
				            <p>Paso 2</p>
				        </div>
				        <div class="stepwizard-step">
				            <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
				            <p>Paso 3</p>
				        </div>
				        <div class="stepwizard-step">
				            <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
				            <p>Paso 4</p>
				        </div>				        
				    </div>
				</div>
				<form role="form">
				    <div class="row setup-content" id="step-1">
						<?php $this->load->view('demo-form-step-1');?>
				    </div>
				    <div class="row setup-content" id="step-2">
						<?php $this->load->view('demo-form-step-2');?>
				    </div>
				    <div class="row setup-content" id="step-3">
				    	<?php $this->load->view('demo-form-step-3');?>
				    </div>
				    <div class="row setup-content" id="step-4">
				    	<?php $this->load->view('demo-form-step-4');?>
				    </div>				    
				</form>
			</div>

        </div>
        <!-- /.row -->

        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">My projects</h2>
            </div>
            <div class="col-md-6">
                <p><b>ERP System developed with the follows tools:</b></p>
                <ul>
                    <li>jQuery</li>
                    <li>Html5</li>
                    <li>Javascript</li>
                    <li>Mysql</li>
                    <li>Ajax</li>
                    <li>Fpdf</li>
                    <li>JpGraph</li>
                    <li>Php OOP</li>
                    <li>Esendex api (Provider SMS)</li>
                </ul>
                <p>
                    The system too has implemented the following features:
                </p>
                <ul>
                    <li>User control</li>
                    <li>Stock control</li>
                    <li>Report income and expenses using Fpdf</li>
                    <li>Statistical graphics (Bars, 3D pie plots)</li>
                    <li>Pay System: cash and payment by installments (monthly)</li>
                    <li>Printing of invoices</li>
                    <li>Printing of receipts</li>
                    <li>Notices system using sms when the payment date is near</li>
                    <li>Notices system using sms when there is new articles</li>
                </ul>
            </div>
            <div class="col-md-6">
                <a href='http://comercialjys.herobo.com/' target="_blank"><img class="img-responsive" src="<?=base_url()?>static/images/comercialJyS.jpg" alt=""></a>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">

         <!-- Features Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header"></h2>
            </div>
            <div class="col-md-6">
            <p><b>Buying and selling articles</b></p>
                <ul>
                    <li>jQuery</li>
                    <li>Html5</li>
                    <li>Javascript</li>
                    <li>Mysql</li>
                    <li>Ajax</li>
                    <li>Fpdf</li>
                    <li>JpGraph</li>
                    <li>Php OOP</li>
                </ul>
                <p>
                    The system too has implemented the following features:
                </p>
                <ul>
                    <li>User control</li>
                    <li>Articles control</li>
                    <li>Statistical graphics (Bars, 3D pie plots)</li>
                    <li>Messages through the site between buyer and seller</li>
                    <li>Notices through the site from admin to users</li>
                    <li>CRUD articles (for users and admin)</li>
                    <li>CRUD users (just for admin)</li>
                </ul>
            </div>
            <div class="col-md-6">
                <a href="http://mercadomundial.com.bo/" target="_blank"><img class="img-responsive" src="<?=base_url()?>static/images/mercadoMundial.jpg" alt=""></a>
            </div>
        </div>
        <!-- /.row -->       
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Some extra examples about my skills</h2>
            </div>
            <div class="alert alert-info" role="alert">
              <strong>INFO!</strong> These and more examples currently are on developing.
            </div>        
          <div class="col-sm-4 col-md-4">
            <div class="thumbnail">
              <img data-src="holder.js/100%x200" alt="100%x200" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTkyIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDE5MiAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iMTkyIiBoZWlnaHQ9IjIwMCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjcxIiB5PSIxMDAiIHN0eWxlPSJmaWxsOiNBQUFBQUE7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MTBwdDtkb21pbmFudC1iYXNlbGluZTpjZW50cmFsIj4xOTJ4MjAwPC90ZXh0PjwvZz48L3N2Zz4=" data-holder-rendered="true" style="height: 200px; width: 100%; display: block;">
              <div class="caption">
                <h3>Fpdf</h3>
                <p>Generate pdf with Fpdf library</p>
                <p><a href="#" class="btn btn-primary" role="button">See Example</a></p>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-md-4">
            <div class="thumbnail">
              <img data-src="holder.js/100%x200" alt="100%x200" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTkyIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDE5MiAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iMTkyIiBoZWlnaHQ9IjIwMCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjcxIiB5PSIxMDAiIHN0eWxlPSJmaWxsOiNBQUFBQUE7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MTBwdDtkb21pbmFudC1iYXNlbGluZTpjZW50cmFsIj4xOTJ4MjAwPC90ZXh0PjwvZz48L3N2Zz4=" data-holder-rendered="true" style="height: 200px; width: 100%; display: block;">
              <div class="caption">
                <h3>Stripe Gateway</h3>
                <p>Just one example of payment method</p>
                <p><a href="#" class="btn btn-primary" role="button">See Example</a></p>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-md-4">
            <div class="thumbnail">
              <img data-src="holder.js/100%x200" alt="100%x200" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTkyIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDE5MiAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iMTkyIiBoZWlnaHQ9IjIwMCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjcxIiB5PSIxMDAiIHN0eWxlPSJmaWxsOiNBQUFBQUE7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MTBwdDtkb21pbmFudC1iYXNlbGluZTpjZW50cmFsIj4xOTJ4MjAwPC90ZXh0PjwvZz48L3N2Zz4=" data-holder-rendered="true" style="height: 200px; width: 100%; display: block;">
              <div class="caption">
                <h3>JpGraph</h3>
                <p>Nice charts usign JpGraph</p>
                <p><a href="#" class="btn btn-primary" role="button">See Example</a></p>
              </div>
            </div>
          </div>
        </div>        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    My tools for develop websites
                </h1>
            </div>           
            <div class="well" id="myTools">
                <div id="myCarousel2" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row">
                                <div class="col-sm-2"><a data-toggle="popover" data-trigger="hover" title="Popover title" data-content="Default popover" href="#x" class="thumbnail"><img src="<?=base_url()?>static/logos/codeigniter-logo.png" alt="Image" class="img-responsive"></a>
                                </div>
                                <div class="col-sm-2"><a href="#x" class="thumbnail"><img src="<?=base_url()?>static/logos/git-logo.png" alt="Image" class="img-responsive"></a>
                                </div>
                                <div class="col-sm-2"><a href="#x" class="thumbnail" style="padding-top:12px"><img src="<?=base_url()?>static/logos/HTML5-logo.jpg" alt="Image" class="img-responsive"></a>
                                </div>
                                <div class="col-sm-2"><a href="#x" class="thumbnail" style="padding-top:17px"><img src="<?=base_url()?>static/logos/jquery-logo.png" alt="Image" class="img-responsive"></a>
                                </div>
                                <div class="col-sm-2"><a href="#x" class="thumbnail"><img src="<?=base_url()?>static/logos/logo-bootstrap3.jpg" alt="Image" class="img-responsive"></a>
                                </div> 
                                <div class="col-sm-2"><a href="#x" class="thumbnail"><img src="<?=base_url()?>static/logos/logo-php.oop_.jpeg" alt="Image" class="img-responsive"></a>
                                </div>                               
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-2"><a href="#x" class="thumbnail" style="padding-top:10px"><img src="<?=base_url()?>static/logos/logo-css.jpg" alt="Image" class="img-responsive"></a>
                                </div>
                                <div class="col-sm-2"><a href="#x" class="thumbnail"><img src="<?=base_url()?>static/logos/mysql-logo.jpg" alt="Image" class="img-responsive"></a>
                                </div>
                                <div class="col-sm-2"><a href="#x" class="thumbnail" style="padding-top:35px"><img src="<?=base_url()?>static/logos/OmniPay_Logo.jpg" alt="Image" class="img-responsive"></a>
                                </div>
                                <div class="col-sm-2"><a href="#x" class="thumbnail" style="padding-top:15px"><img src="<?=base_url()?>static/logos/php-logo.png" alt="Image" class="img-responsive"></a>
                                </div>
                                <div class="col-sm-2"><a href="#x" class="thumbnail"><img src="<?=base_url()?>static/logos/MVC-logo.png" alt="Image" class="img-responsive"></a>
                                </div>     
                                <div class="col-sm-2"><a href="#x" class="thumbnail"><img src="<?=base_url()?>static/logos/logo-javascript.png" alt="Image" class="img-responsive"></a>
                                </div>                                                           
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-2"><a href="#x" class="thumbnail" style="padding-top:11px"><img src="<?=base_url()?>static/logos/logo-fpdf.jpg" alt="Image" class="img-responsive"></a>
                                </div>                      
                                <div class="col-sm-2"><a href="#x" class="thumbnail" style="padding-top:32px"><img src="<?=base_url()?>static/logos/jpgraph_logo.jpg" alt="Image" class="img-responsive"></a>
                                </div>                                    
                            </div>
                        </div>                        
                        <!--/item-->
                    </div>
                    <!--/carousel-inner--> 
                    <a class="left carousel-control" href="#myCarousel2" data-slide="prev">‹</a>
                    <a class="right carousel-control" href="#myCarousel2" data-slide="next">›</a>
                </div>
                <!--/myCarousel-->
            </div>            
        </div>
        <hr>
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Javier Jair Cussy Saucedo</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="<?=base_url()?>static/bootstrap3/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=base_url()?>static/bootstrap3/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>static/js/demo-form.js"></script>
    <script src="<?=base_url()?>static/js/demo-form-dinamic-table.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })

$(document).ready(function() {

    $('#examplepopover').popover({
        placement : 'top'
    });
    $('#myCarousel2').carousel({
    interval: 10000
    })
    
    $('#myCarousel2').on('slid.bs.carousel', function() {
        //alert("slid");
    });

    $('[data-toggle="popover"]').popover({
        placement : 'top'
    });
    
});
    </script>

</body>

</html>

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
        /****************************************************************wizard*/
		.wizard {
		    margin: 20px auto;
		    background: #fff;
		}
		
		    .wizard .nav-tabs {
		        position: relative;
		        margin: 40px auto;
		        margin-bottom: 0;
		        border-bottom-color: #e0e0e0;
		    }
		
		    .wizard > div.wizard-inner {
		        position: relative;
		    }
		
		.connecting-line {
		    height: 2px;
		    background: #e0e0e0;
		    position: absolute;
		    width: 80%;
		    margin: 0 auto;
		    left: 0;
		    right: 0;
		    top: 50%;
		    z-index: 1;
		}
		
		.wizard .nav-tabs > li.active > a, .wizard .nav-tabs > li.active > a:hover, .wizard .nav-tabs > li.active > a:focus {
		    color: #555555;
		    cursor: default;
		    border: 0;
		    border-bottom-color: transparent;
		}
		
		span.round-tab {
		    width: 70px;
		    height: 70px;
		    line-height: 70px;
		    display: inline-block;
		    border-radius: 100px;
		    background: #fff;
		    border: 2px solid #e0e0e0;
		    z-index: 2;
		    position: absolute;
		    left: 0;
		    text-align: center;
		    font-size: 25px;
		}
		span.round-tab i{
		    color:#555555;
		}
		.wizard li.active span.round-tab {
		    background: #fff;
		    border: 2px solid #5bc0de;
		    
		}
		.wizard li.active span.round-tab i{
		    color: #5bc0de;
		}
		
		span.round-tab:hover {
		    color: #333;
		    border: 2px solid #333;
		}
		
		.wizard .nav-tabs > li {
		    width: 25%;
		}
		
		.wizard li:after {
		    content: " ";
		    position: absolute;
		    left: 46%;
		    opacity: 0;
		    margin: 0 auto;
		    bottom: 0px;
		    border: 5px solid transparent;
		    border-bottom-color: #5bc0de;
		    transition: 0.1s ease-in-out;
		}
		
		.wizard li.active:after {
		    content: " ";
		    position: absolute;
		    left: 46%;
		    opacity: 1;
		    margin: 0 auto;
		    bottom: 0px;
		    border: 10px solid transparent;
		    border-bottom-color: #5bc0de;
		}
		
		.wizard .nav-tabs > li a {
		    width: 70px;
		    height: 70px;
		    margin: 20px auto;
		    border-radius: 100%;
		    padding: 0;
		}
		
		    .wizard .nav-tabs > li a:hover {
		        background: transparent;
		    }
		
		.wizard .tab-pane {
		    position: relative;
		    padding-top: 50px;
		}
		
		.wizard h3 {
		    margin-top: 0;
		}
		
		@media( max-width : 585px ) {
		
		    .wizard {
		        width: 90%;
		        height: auto !important;
		    }
		
		    span.round-tab {
		        font-size: 16px;
		        width: 50px;
		        height: 50px;
		        line-height: 50px;
		    }
		
		    .wizard .nav-tabs > li a {
		        width: 50px;
		        height: 50px;
		        line-height: 50px;
		    }
		
		    .wizard li.active:after {
		        content: " ";
		        position: absolute;
		        left: 35%;
		    }
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
                <a class="navbar-brand" href="<?=base_url()?>">Jair Cussy  </a>
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
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    I advise use this way to handle the multiple categories there is on your web site. 
                </h1>
                <p>This is a prototype, but the idea is the next:</p>
                <ol>
                	<li>When choose a hub, using ajax(this improvement the performance) get the next categories and apply.</li>
                	<li>With the above bubbles will be possible back to category previously selected.</li>
                	<li>Each bubble will change his question mark by a icon referred to category selected. The tooltip also will change his text</li>
                	<li>Will not be possible select a bubble if wasn't selected a category previously.</li>
                </ol>
                <p>Try selecting services</p>
            </div>
        </div>
        <!-- /.row -->

        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">Navigating between categories like a wizard</h3>
            </div>
        </div>
		<div class="row">
			<div class="col-md-9">
	        	<div class="wizard">
		            <div class="wizard-inner">
		                <div class="connecting-line"></div>
		                <ul class="nav nav-tabs" role="tablist">
		
		                    <li role="presentation" class="active">
		                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Choose a hub">
		                            <span class="round-tab">
		                                Hub
		                            </span>
		                        </a>
		                    </li>
		
		                    <li role="presentation" class="disabled">
		                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Choose a category">
		                            <span class="round-tab">
		                                <i class="fa fa-question-circle"></i>
		                                <!-- <img data-src="holder.js/100%x200" alt="100%x200" src="<?=base_url()?>static/images/services.png" data-holder-rendered="true" style="height: auto; width: 100%; display: block;"> -->
		                            </span>
		                        </a>
		                    </li>
		                    <li role="presentation" class="disabled">
		                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Choose a category">
		                            <span class="round-tab">
		                                <i class="fa fa-question-circle"></i>
		                            </span>
		                        </a>
		                    </li>
		
		                    <li role="presentation" class="disabled">
		                        <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Choose a category">
		                            <span class="round-tab">
		                                <i class="fa fa-question-circle"></i>
		                            </span>
		                        </a>
		                    </li>
		                </ul>
		            </div>
		            <form role="form">
		                <div class="tab-content well">
		                    <div class="tab-pane active" role="tabpanel" id="step1">
						          <div class="col-sm-4 col-md-4">
						            <div class="thumbnail">
						              <img data-src="holder.js/100%x200" alt="100%x200" src="<?=base_url()?>static/images/goods.png" data-holder-rendered="true" style="height: auto; width: 100%; display: block;">
						              <div class="caption">
						                <h3>Goods</h3>
						              </div>
						            </div>
						          </div>
						          <div class="col-sm-4 col-md-4">
						            <div class="thumbnail">
						              <a class="next-step" href="javascript:void()"><img data-src="holder.js/100%x200" alt="100%x200" src="<?=base_url()?>static/images/services.png" data-holder-rendered="true" style="height: auto; width: 100%; display: block;"></a>
						              <div class="caption">
						                <h3>Services</h3>
						              </div>
						            </div>
						          </div>
						          <div class="col-sm-4 col-md-4">
						            <div class="thumbnail">
						              <img data-src="holder.js/100%x200" alt="100%x200" src="<?=base_url()?>static/images/openbids.png" data-holder-rendered="true" style="height: auto; width: 100%; display: block;">
						              <div class="caption">
						                <h3>Open bids</h3>
						              </div>
						            </div>
						          </div>
						          <br>					          
		                        <!-- <ul class="list-inline pull-right">
		                            <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
		                        </ul> -->
		                    </div>
		                    <div class="tab-pane" role="tabpanel" id="step2">
						          <div class="col-sm-3 col-md-3">
						            <div class="thumbnail">
						              <img data-src="holder.js/100%x200" alt="100%x200" src="<?=base_url()?>static/images/goods.png" data-holder-rendered="true" style="height: auto; width: 100%; display: block;">
						              <div class="caption">
						                <h4>Service 1</h4>
						              </div>
						            </div>
						          </div>
						          <div class="col-sm-3 col-md-3">
						            <div class="thumbnail">
						              <a href="#"><img data-src="holder.js/100%x200" alt="100%x200" src="<?=base_url()?>static/images/services.png" data-holder-rendered="true" style="height: auto; width: 100%; display: block;"></a>
						              <div class="caption">
						                <h4>Service 2</h4>
						              </div>
						            </div>
						          </div>
						          <div class="col-sm-3 col-md-3">
						            <div class="thumbnail">
						              <img data-src="holder.js/100%x200" alt="100%x200" src="<?=base_url()?>static/images/openbids.png" data-holder-rendered="true" style="height: auto; width: 100%; display: block;">
						              <div class="caption">
						                <h4>Service 3</h4>
						              </div>
						            </div>
						          </div>
						          <div class="col-sm-3 col-md-3">
						            <div class="thumbnail">
						              <img data-src="holder.js/100%x200" alt="100%x200" src="<?=base_url()?>static/images/goods.png" data-holder-rendered="true" style="height: auto; width: 100%; display: block;">
						              <div class="caption">
						                <h4>Service 4</h4>
						              </div>
						            </div>
						          </div>
						          <div class="col-sm-3 col-md-3">
						            <div class="thumbnail">
						              <a href="#"><img data-src="holder.js/100%x200" alt="100%x200" src="<?=base_url()?>static/images/services.png" data-holder-rendered="true" style="height: auto; width: 100%; display: block;"></a>
						              <div class="caption">
						                <h4>Service 5</h4>
						              </div>
						            </div>
						          </div>						          
		                        <!-- <ul class="list-inline pull-right">
		                            <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
		                            <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
		                        </ul> -->
		                    </div>
		                    <div class="tab-pane" role="tabpanel" id="step3">
		                        <h3>Step 3</h3>
		                        <p>This is step 3</p>
		                        <ul class="list-inline pull-right">
		                            <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
		                            <li><button type="button" class="btn btn-default next-step">Skip</button></li>
		                            <li><button type="button" class="btn btn-primary btn-info-full next-step">Save and continue</button></li>
		                        </ul>
		                    </div>
		                    <div class="tab-pane" role="tabpanel" id="complete">
		                        <h3>Complete</h3>
		                        <p>You have successfully completed all steps.</p>
		                    </div>
		                    <div class="clearfix"></div>
		                </div>
		            </form>
	        	</div>
	      </div>
	      <div class="col-md-3">
	      	<h4>This space is for your current menu</h4>
	      </div>
	    <!-- </section> -->
	   </div>        
        <!-- /.row -->
        <!-- <div class="row"> -->

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
                <p>
                <a href="#" class="btn btn-primary" role="button">See Example</a></p>
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
/*******************************************************************wizard*/
$(document).ready(function () {
    //Initialize tooltips
    $('.nav-tabs > li a[title]').tooltip();
    
    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);
    
        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        $active.next().removeClass('disabled');
        nextTab($active);

    });
    $(".prev-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        prevTab($active);

    });
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}
    </script>

</body>

</html>

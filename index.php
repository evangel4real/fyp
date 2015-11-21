<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FaithDome | Home</title>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="templatemo_style_fix_menu.css" rel="stylesheet" type="text/css">
  <link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
  <link href="http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet" type="text/css">
  <link href="templatemo_style.css" rel="stylesheet" type="text/css">
  <!-- HTML 5 shim for IE backwards compatibility -->
  <!-- [if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js">
  </script>
  <![endif]-->
</head>
<body>

  <?php include_once("header.php"); ?>
  
  <section class="container" id="carousel_container">
    <div class="row">
      <div class="span12">
        <div id="artCarousel" class="carousel slide">
          <ol class="carousel-indicators">
            <li data-target="#artCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#artCarousel" data-slide-to="1"></li>
            <li data-target="#artCarousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="item active"><img src="images/slide002.jpg" alt="slide002.jpg">
              <div class="carousel-caption">
                <h4>Medical Laboratory</h4>
                <p>We have a team of well trained laboratory scientist and a well equipped laboratory</p>
              </div>
            </div>
            <div class="item"><img src="images/slide001.jpg" alt="slide001.jpg">
            	 <div class="carousel-caption">
                <h4>Surgical Theater</h4>
                <p>Our well trained and highly experienced team of surgeons are always on standby</p>
              </div>
            </div>
            <div class="item"><img src="images/slide003.jpg" alt="slide003.jpg">
            	 <div class="carousel-caption">
                <h4>Diagnostic Laboratory</h4>
                <p>We are well equipped with state of the art diagnostic equipments and a team of well trained medical experts</p>
              </div>
            </div>
          </div>
          <a class="left carousel-control" href="#artCarousel" data-slide="prev">&lsaquo;</a> <a class="right carousel-control" href="#artCarousel" data-slide="next">&rsaquo;</a> 
        </div>
      </div>
    </div>
  </section>
  <section class="container marketing">
    <div class="row">
      <article class="span4">
        <h3>MEDICAL SERVICES</h3>
        <p align="justify"> At FaithDome Medical Center, we provide medical or clinical treatments, advice or support. We have a team of well experienced and trained professionals to provide concierge services and give you with all the medical help you need. The hospital is opened 24 hours daily.  </p>
        <p><a class="btn btn-danger" href="medical.php">View details &raquo;</a></p>
      </article>
      <article class="span4">
        <h3>LABORATORY SERVICES</h3>
        <p align="justify">Lab services have been an integral part of healthcare for decades. Bringing these services back into the practice will not only provide a nice convenience for your patients, but a significant ancillary stream for your practice.</p><br/>
        <p><a class="btn btn-danger" href="laboratory.php">View details &raquo;</a></p>
      </article>
      <article class="span4">
        <h3>PHARMACY</h3>
        <p align="justify">Over 4 billion prescriptions are written annually in the US resulting in more work for physicians but not more compensation. Physicians are spending more time on the phone answering questions from pharmacies, which takes them away from seeing patients..</p>
        <p><a class="btn btn-danger" href="pharmacy.php">View details &raquo;</a></p>
      </article>
    </div></section>
    
 <?php include_once("footer.php"); ?>   
 
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/login.js"></script>
  <script>
    $('#artCarousel').carousel({
      interval: 4000,
      cycle: true
    });
  </script>
  </body>
</html>

<!DOCTYPE html>
<html>
  <head>
    <!-- set viewport to screen size -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Master Stylesheet -->
    <link rel="stylesheet" href="../../css/SASS/BUGSS_Styles.css">

    <!-- CDNs for Bootstrap and jquery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Favicon Settings for Different Devices -->
    <link rel="apple-touch-icon" sizes="57x57" href="../../media/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../../media/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../../media/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../../media/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../../media/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../../media/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../../media/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../../media/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../../media/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="../../media/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../media/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../../media/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../media/favicon/favicon-16x16.png">
    <link rel="manifest" href="../../media/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../../media/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!--font awesome cdn for social Buttons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Zoom effect on organism cards-->
    <style rel="stylesheet">
      .zoom {
        /*padding: 50px;*/
        transition: transform .2s; /* Animation */
        /*width: 200px;
        height: 200px;
        margin: 0 auto; */
        }

      .zoom:hover {
        transform: scale(1.25); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
      }

      .selectableInfo {
          min-height: 55vh;
      }
    </style>

    <title>Barcoding The Harbor</title>

  </head>
  <body>
    <!--TODO: Update Active classes on links if applicable-->
    <!--NAVBAR-->
    <nav class="navbar navbar-light navbar-expand-lg bg-white">
      <a class="navbar-brand" href="../index.html"><img class="logoNav" src="../../media/bugsslogo-square300.png"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="../About/About_Landing_Page.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              About
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="../About/About_Landing_Page.html">About BUGSS</a><a class="dropdown-item" href="../About/Donors_and_Sponsors.html">Donors and Sponsors</a>
              <a class="dropdown-item" href="../About/FAQs.html">FAQ</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Membership/Membership_Landing.html">Membership</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="../Projects/Projects_Landing.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Group Projects
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="../Projects/Projects_Landing.html">Group Projects Home</a>
              <a class="dropdown-item" href="../Projects/Scramble_Synthetic_Yeast.html">Scramble and Synthetic Yeast</a>
              <a class="dropdown-item" href="Barcoding_The_Harbor.php">Barcoding The Harbor</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Scientists/Scientists_Landing.html">For Scientists</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Community/Community_Landing.html">For Community Members</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Kids/Kids_Landing.html">For Kids and Parents</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Support/Support_Us_Landing.html">Support Us</a>
          </li>
        </ul>
        <!--<form class="form-inline" method="get" action="../search.php">
          <input class="form-control mr-sm-2" type="search" name="query" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>-->
      </div>
    </nav>

    <ul class="nav nav-fill nav-pills bg-primary mb-3">
      <li class="nav-item">
        <a class="nav-link text-white active rounded-0" href="Barcoding_The_Harbor.php">Barcoding the Harbor</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="Scramble_Synthetic_Yeast.html">Scramble and Synthetic Yeast</a>
      </li>
    </ul>

<div class="container shadow jumbotron-secondary w-100 mx-auto">
    <div class="row">
      <div class="container">
        <br>
      <p>Barcoding the Harbor is a collaborative, community project between BUGSS, IMET (The Institute of Marine and
        Environmental Technology) and the National Aquarium.</p>
      </div>
    </div>
    <div class="row">
      <div class="col" style="width:25%">
       <img src="../../media/IMETLogo.jpg" class="img-fluid" alt="IMET Business logo">
     </div>
     <div class="col" style="width:25%">
      <img src="../../media/bugsslog.png" class="img-fluid"  alt="BUGSS Organism Logo">
    </div>
    <div class="col" style="width:25%">
     <img src="../../media/NatAquarium.png" class="img-fluid" alt="national aquarium logo">
   </div>
   <div class="col" style="width:25%">
    <img src="../../media/seagrant_logo.png" class="img-fluid" alt="sea grant logo">
  </div>
  </div>
</div>

<br>

<!--This Div tag is for toggleable show of web page elements save for selectable org tiles and chart -->
<div id="ClickAwaySection">

  <div class="container text-center">
    <h5>Click Here To See the Organisms and Data</h5>
    <!-- Button for toggle of elements -->
    <button class="btn btn-primary" onclick="myFunction()">Organisms & Data</button>
  </div>

<!--Script for button to hide/show elements -->
<script type="text/javascript">
    function myFunction() {
        var x = document.getElementById("ClickAwaySection");
        if (x.style.display === "none") {
          x.style.display = "block";
        } else {
          x.style.display = "none";
        }
    }
</script>

<hr>


<div class="container">
  <div class="row">
    <div class="col align-self-center">
      <h3>What are we doing, and why?</h3>
      <p>Let’s face it: the Inner Harbor has seen better days. No one, including mussels, fish, blue crabs, and people,
        likes the sights of the “fragrant” waters.</p>
    </div>
    <div class="col align-self-center">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-interval="7000">
        <div class="carousel-inner">
          <div class="carousel-item active" style="height: 25vh;">
            <img class="d-block w-100 img-fluid img-responsive" src="../../media/Trashy McBoatface.jpg" alt="First slide">
          </div>
          <div class="carousel-item" style="height: 25vh;">
            <img class="d-block w-100 pb-4 mb-2 img-fluid img-responsive" src="../../media/Picking Up Grabage.jpg" alt="Second slide">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<hr>

<div class="container">
  <div class="row">
    <div class="col align-self-center my-auto">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="0">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active" style="height: 40vh;">
              <img src="../../media/BioDisk Pipe.jpg" class="d-block w-100 img-fluid img-responsive" alt="A barnacled biodisk pipe">
                <div class="carousel-caption d-none d-md-block">
                  <p>A Biodisk</p>
                </div>
            </div>
            <div class="carousel-item" style="height: 40vh;">
              <img src="../../media/Taking Samples.jpg" class="d-block w-100 img-fluid img-responsive" alt="Taking samples from the water">
                <div class="carousel-caption d-none d-md-block">
                  <p style="background-color:black;z-index:0;opacity:0.5;">Collecting sample from water</p>
                </div>
            </div>
            <div class="carousel-item" style="height: 40vh;">
              <img src="../../media/TakingSamplesCloser.jpg" class="d-block w-100 img-fluid img-responsive" alt="Taking samples from biodisk">
                <div class="carousel-caption d-none d-md-block">
                  <p style="background-color:black;z-index:0;opacity:0.5;">Collecting samples from the biodisk</p>
                  <br>
                </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
      </div>
    </div>
    <div class="col align-self-center">
      <p class="text-center">Understanding what calls the Inner Harbor home is an important step in making the Harbor a better place for everybody.
        We can get a deeper sense of the Inner Harbor’s health over time by sampling and analyzing it at regular intervals.
        We do this by placing biodisks in the water and sampling what is living on them every month. </p>
    </div>
</div>
</div>

<hr>

<div class="container">
  <div class="jumbotron bg-primary shadow">
    <p class="lead text-light">We then use the microscope and advanced DNA analysis to identify what organisms are present. We can use this data to
      find ways to effect positive changes on the Harbor so we can more fully use this natural resource.</p>
  </div>
</div>
<br>
<div class="container">
  <div class="row">
    <div class="col align-self-center">
      <img class="img-fluid img-responsive" src="../../media/AnalysisOfSamples.jpg" alt="scientist analzing biology samples with microscope and monitor">
    </div>
    <div class="col align-self-center">
      <img class="img-fluid img-responsive" src="../../media/PiperAnalysisOfSamples.jpg" alt="group of scientists piping smaples into test tubes around a table">
    </div>
  </div>
</div>

<hr>

<div class="container">
  <div class="row">
        <p>We want to know if the community of aquatic animals varies in locations with different watersheds and shorelines,
          such as areas of suburban runoff, industrial legacy pollutants, or restoration activities. The project is therefore
          expanding and sampling 6 sites around the Chesapeake Bay.</p>
  </div>
  <div class="row text-center">
      <figure>
        <img class="img-fluid img-responsive" src="../../media/SamplingMap.jpg" alt='map of sampling area for biolofgical components' />
        <figcaption>Sampling sites are denoted by red markers</figcaption>
      </figure>
  </div>
</div>


<hr>

<div class="container">
  <h3 class="text-center">What do we mean by barcoding</h3>
  <div class="row">
    <div class="col align-self-center">
      <p>Simply that when we read the DNA of an organism, we can use that DNA code to identify the organism, similar to the way
        that store scanner can read the
        barcode of an item and use that code to identify the item. </p>
    </div>
    <div class="col align-self-center">
        <img class="img-fluid img-responsive" src="../../media/BarcodingCrabImage.png" alt="">
    </div>
  </div>

</div>


<hr>

<div class="container">
    <h4 class="text-center">Meet The Team</h4>
    <p>Our research team includes media & social artists, nature enthusiasts, civic
    scientists, and students. Our activities involve understanding the history of the Harbor,
    establishing ways to sustain the health of the Harbor, counting & identifying organisms,
    preparation of samples for DNA extraction, analyzing the DNA sequences, and visualizing and
    disseminating our findings to the public. We welcome new members to join the team and new
    extensions for the project that would
    help us to sustain the health of our interconnected ecosystem.</p>
    <div class="row text-center justify-content-center">
      <div class="col">
        <img style="height:100;" class="img-fluid img-responsive" src="../../media/Headshots/MoFavli.jpg" alt="">
      </div>
      <div class="col">
        <img style="height:100;" class="img-fluid img-responsive" src="../../media/Headshots/DrSchefelde.jpg" alt="">
      </div>
      <div class="col">
        <img style="height:100;" class="img-fluid img-responsive" src="../../media/Headshots/StephenB.jpg" alt="">
      </div>
      <div class="col">
        <img style="height:100;" class="img-fluid img-responsive" src="../../media/Headshots/TrevorB.jpg" alt="">
      </div>
      <div class="col">
        <img style="height:100;" class="img-fluid img-responsive" src="../../media/Headshots/EricS.jpg" alt="">
      </div>
      <div class="col">
        <img style="height:100;" class="img-fluid img-responsive" src="../../media/Headshots/AndyJ.jpg" alt="">
      </div>
    </div>
    <br>
    <div class="row text-center justify-content-center">
      <div class="col-2">
        <img style="height:100;" class="img-fluid img-responsive" src="../../media/Headshots/Charmaine.jpg" alt="">
      </div>
      <div class="col-2">
        <img style="height:100;" class="img-fluid img-responsive" src="../../media/Headshots/StevenS.jpg" alt="">
      </div>
      <div class="col-2">
        <img style="height:100;" class="img-fluid img-responsive" src="../../media/Headshots/SairahS.jpg" alt="">
      </div>
      <div class="col-2">
        <img style="height:100;" class="img-fluid img-responsive" src="../../media/Headshots/YongL.jpg" alt="">
      </div>
      <div class="col-2">
        <img style="height:100;" class="img-fluid img-responsive" src="../../media/Headshots/TimB.jpg" alt="">
      </div>
    </div>
    <br>
    <div class="row img-center justify-content-center">
      <div class="col-2">
        <img class="img-fluid img-responsive" src="../../media/Headshots/You.png" alt="">
      </div>
    </div>
</div>

<hr>



</div> <!--This dev is for the toggle of viewable elements  -->



<div class="container-fluid">
  <h4 class=" rounded bg-primary py-3 display-5 text-center shadow text-white">Time To Play With Some of What We Found!</h4>
  <p class="text-center display-5 mt-4 mb-4">Select an organism</p>
  <hr>
    <div class="container-fluid">
      <div class="row mb-5">
        <div class="col card-img zoom align-self-center ml-2">
          <img class="img-fluid" src="https://www.researchgate.net/publication/330852558/figure/fig6/AS:722579690102787@1549287831959/Lumbriculus-mud-worm.ppm" alt="Mud worm image">
          <a class="stretched-link" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"></a>
        </div>
        <div class="col card-img zoom align-self-center mx-2">
          <img class="img-fluid " src="https://media.gettyimages.com/photos/nematodes-sem-picture-id1148109598?s=2048x2048" alt="Round worm image">
          <a class="stretched-link" data-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2"></a>
        </div>
        <div class="col card-img zoom align-self-center mx-2">
          <img class=" img-fluid " src="https://media.gettyimages.com/photos/barnacle-larvae-nauplius-sp-microscopic-two-pair-white-background-cut-picture-id520528808?s=2048x2048" alt="Barnacle larvae image">
          <a class="stretched-link" data-toggle="collapse" href="#multiCollapseExample3" role="button" aria-expanded="false" aria-controls="multiCollapseExample3"></a>
        </div>
        <div class="col card-img zoom align-self-center mx-2 mr-2">
          <img class="img-fluid" src="https://media.gettyimages.com/photos/an-image-of-a-photo-micrograph-of-flatworm-picture-id116938770?s=2048x2048" alt="Flatworm image">
          <a class="stretched-link" data-toggle="collapse" href="#multiCollapseExample4" role="button" aria-expanded="false" aria-controls="multiCollapseExample4"></a>
        </div>
      </div>
      <div class="collapse multi-collapse container mb-5" id="multiCollapseExample1">
        <div class="embed-responsive embed-responsive-16by9 selectableInfo">
            <iframe class="embed-responsive-item selectableInfo" src="https://en.wikipedia.org/wiki/Earthworm" allowfullscreen></iframe>
        </div>
      </div>
      <div class="collapse multi-collapse container mb-5" id="multiCollapseExample2">
        <div class="embed-responsive embed-responsive-16by9 selectableInfo">
            <iframe class="embed-responsive-item selectableInfo" src="https://en.wikipedia.org/wiki/Nematode" allowfullscreen></iframe>
        </div>
      </div>
      <div class="collapse multi-collapse container mb-5" id="multiCollapseExample3">
        <div class="embed-responsive embed-responsive-16by9 selectableInfo">
            <iframe class="embed-responsive-item selectableInfo" src="https://en.wikipedia.org/wiki/Barnacle" allowfullscreen></iframe>
        </div>
      </div>
      <div class="collapse multi-collapse container mb-5" id="multiCollapseExample4">
        <div class="embed-responsive embed-responsive-16by9 selectableInfo">
            <iframe class="embed-responsive-item selectableInfo" src="https://en.wikipedia.org/wiki/Flatworm" allowfullscreen></iframe>
        </div>
      </div>

<!-- Second row of organisms -->
      <div class="row mb-5">
        <div class="col card-img zoom align-self-center ml-2">
          <img class="img-fluid" src="https://media.gettyimages.com/photos/copepod-micrograph-picture-id117333409?s=2048x2048" alt="Copepod image">
          <a class="stretched-link" data-toggle="collapse" href="#multiCollapseExample5" role="button" aria-expanded="false" aria-controls="multiCollapseExample5"></a>
        </div>
        <div class="col card-img zoom align-self-center mx-2">
          <img class="img-fluid " src="https://farm66.staticflickr.com/65535/45691332935_695b169753_b.jpg" alt="Grass shrimp image">
          <a class="stretched-link" data-toggle="collapse" href="#multiCollapseExample6" role="button" aria-expanded="false" aria-controls="multiCollapseExample6"></a>
        </div>
        <div class="col card-img zoom align-self-center mx-2">
          <img class=" img-fluid " src="https://media.gettyimages.com/photos/barnacles-on-hainan-island-picture-id845069720?s=2048x2048" alt="Barnacles image">
          <a class="stretched-link" data-toggle="collapse" href="#multiCollapseExample7" role="button" aria-expanded="false" aria-controls="multiCollapseExample7"></a>
        </div>
        <div class="col card-img zoom align-self-center mx-2">
          <img class="img-fluid" src="http://www.aphotomarine.com/images/marine_bivalves/bivalve_mytilopsis_leucophaeata_26-02-16_1.jpg" alt="False dark mussel image">
          <a class="stretched-link" data-toggle="collapse" href="#multiCollapseExample8" role="button" aria-expanded="false" aria-controls="multiCollapseExample8"></a>
        </div>
      </div>
      <div class="collapse multi-collapse container mb-5" id="multiCollapseExample5">
        <div class="embed-responsive embed-responsive-16by9 selectableInfo">
            <iframe class="embed-responsive-item selectableInfo" src="https://en.wikipedia.org/wiki/Copepod" allowfullscreen></iframe>
        </div>
      </div>
      <div class="collapse multi-collapse container mb-5" id="multiCollapseExample6">
        <div class="embed-responsive embed-responsive-16by9 selectableInfo">
            <iframe class="embed-responsive-item selectableInfo" src="https://en.wikipedia.org/wiki/Palaemonetes" allowfullscreen></iframe>
        </div>
      </div>
      <div class="collapse multi-collapse container mb-5" id="multiCollapseExample7">
        <div class="embed-responsive embed-responsive-16by9 selectableInfo">
            <iframe class="embed-responsive-item selectableInfo" src="https://en.wikipedia.org/wiki/Barnacle" allowfullscreen></iframe>
        </div>
      </div>
      <div class="collapse multi-collapse container mb-5" id="multiCollapseExample8">
        <div class="embed-responsive embed-responsive-16by9 selectableInfo">
            <iframe class="embed-responsive-item selectableInfo" src="https://en.wikipedia.org/wiki/Mytilopsis_leucophaeata" allowfullscreen></iframe>
        </div>
      </div>

<!-- Third Row Of Organisms -->
      <div class="row mb-5">
        <div class="col card-img zoom align-self-center mx-2">
          <img class="img-fluid" src="https://media.gettyimages.com/photos/bristle-worm-picture-id976282458?s=2048x2048" alt="Polycheate worm image">
          <a class="stretched-link" data-toggle="collapse" href="#multiCollapseExample9" role="button" aria-expanded="false" aria-controls="multiCollapseExample9"></a>
        </div>
        <div class="col card-img zoom align-self-center mx-2">
          <img class="img-fluid " src="https://media.gettyimages.com/photos/sea-anemone-in-underwater-picture-id597280371?s=2048x2048" alt="Aenomone image">
          <a class="stretched-link"data-toggle="collapse" href="#multiCollapseExample10" role="button" aria-expanded="false" aria-controls="multiCollapseExample10"></a>
        </div>
        <div class="col card-img zoom align-self-center mx-2">
          <img class=" img-fluid " src="https://alchetron.com/cdn/batrachochytrium-dendrobatidis-e2523ae1-fefc-428e-b3f9-1df3c916074-resize-750.jpeg" alt="Chytrid fungus image">
          <a class="stretched-link" data-toggle="collapse" href="#multiCollapseExample11" role="button" aria-expanded="false" aria-controls="multiCollapseExample11"></a>
        </div>
        <div class="col card-img zoom align-self-center mx-2">
          <img class="img-fluid" src="https://media.gettyimages.com/photos/ciliate-blepharisma-americanum-micrograph-picture-id169940394?s=2048x2048" alt="Ciliates image">
          <a class="stretched-link" data-toggle="collapse" href="#multiCollapseExample12" role="button" aria-expanded="false" aria-controls="multiCollapseExample12"></a>
        </div>
      </div>
      <div class="collapse multi-collapse container" id="multiCollapseExample9">
        <div class="embed-responsive embed-responsive-16by9 selectableInfo">
            <iframe class="embed-responsive-item selectableInfo" src="https://en.wikipedia.org/wiki/Polychaete" allowfullscreen></iframe>
        </div>
      </div>
      <div class="collapse multi-collapse container" id="multiCollapseExample10">
        <div class="embed-responsive embed-responsive-16by9 selectableInfo">
            <iframe class="embed-responsive-item selectableInfo" src="https://en.wikipedia.org/wiki/Sea_anemone" allowfullscreen></iframe>
        </div>
      </div>
      <div class="collapse multi-collapse container" id="multiCollapseExample11">
        <div class="embed-responsive embed-responsive-16by9 selectableInfo">
            <iframe class="embed-responsive-item selectableInfo" src="https://en.wikipedia.org/wiki/Batrachochytrium_dendrobatidis" allowfullscreen></iframe>
        </div>
      </div>
      <div class="collapse multi-collapse container" id="multiCollapseExample12">
        <div class="embed-responsive embed-responsive-16by9 selectableInfo">
            <iframe class="embed-responsive-item selectableInfo" src="https://en.wikipedia.org/wiki/Ciliate" allowfullscreen></iframe>
        </div>
      </div>

    </div>
</div>









<hr>

<div class="container">
  <h3 class="text-center">Interested in joining our motley group of scientists, artists, computational experts, and interested hobbyists?</h3>
  <p>Join us at the Baltimore Underground Science Space to learn new skills, meet new people, and be a part
    of a positive change in Baltimore! </p>
</div>

<div class="container">
  <div class="row">
    <div class="col">
        <img class="img-fluid img-responsive" src="../../media/GroupWork.jpg" alt="Group work testing picture">
    </div>
    <div class="col">
        <img class="img-fluid img-responsive" src="../../media/GroupWork2.jpg" alt="Another group workking on bio samples">
    </div>
    <div class="col">
        <img class="img-fluid img-responsive" src="../../media/GroupWork3.jpg" alt="People of all ages in lab learning">
    </div>
  </div>
  <br>
  <h4 class="text-center">Email Lisa <br>at <u>lscheifele@bugssonline.org</u> <br>for info and to get involved! </h4>
</div>



<hr>

<div class="container text-center">
    <h5>Missed or want to see the <br>background and information on this project?</h5>
    <!-- Button for toggle of elements -->
    <button class="btn btn-secondary" onclick="myFunction()">Click Here</button>
</div>

<hr>

<div class="container shadow jumbotron-secondary">
  <br>
    <div class="row">
      <div class="col align-self-center">
        <h3>Thank You</h3>
        <p>To our funders, the Chesapeake Bay Trust!</p>
      </div>
      <div class="col align-self-center">
        <img class="img-fluid img-responsive" src="../../media/CBTrustPlate.png" alt="Chesapeake licencse plate">
      </div>
    </div>
    <br>
</div>

<br>
    <!--FOOTER Default BG/ACCENT TEXT-->
    <footer class="border-top bg-black">
      <!-- Add font awesome icons -->

      <div class="row justify-content-around text-center mt-3">
        <div class="col text-secondary">
          Address: <br>
          101 North Haven Street,<br>
          Baltimore MD 21224
        </div>
        <div class="col" style="font-size: 3.5rem;">
          <a href="https://www.facebook.com/BUGSS-Baltimore-Under-Ground-Science-Space-275707269195705/" class="fa fa-facebook text-decoration-none"></a>
          <a href="https://twitter.com/bugsslab" class="fa fa-twitter text-decoration-none"></a>
          <a href="https://www.youtube.com/channel/UCr4bqCH50xDCnrWBCUbobBQ" class="fa fa-youtube text-decoration-none"></a>
          <a href="https://www.instagram.com/bugsslab/" class="fa fa-instagram text-decoration-none"></a>
        </div>
        <div class="col text-secondary">
          Email<br> <a class="link-light" href="mailto:info@bugssonline.org">info@bugssonline.org</a>
        </div>
      </div>
    </footer>

    </body>
  </html>

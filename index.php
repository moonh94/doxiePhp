<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="assets/javascript/app.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">

    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="./assets/img/favicon.ico" type="image/x-icon" />
    <title>Doxie-ology</title>
</head>
<body>
    
<nav class="navbar navbar-expand-md">
        <a class="navbar-brand" href="#home">
            <img src="./assets/img/logoFigma.png" alt="logo" class="logoHeader"></a>

        <div id="mySidepanel" class="sidepanel">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#home">Home</a>
            <a href="#aboutUs">About Us</a>
            <a href="#parentInfo">Our Dogs</a>
            <a href="#availPups">Puppies</a>
            <a href="#availPups">Upcoming Litters</a>
            <a href="#contact">Contact Us</a>
        </div>
        <button class="openbtn" onclick="openNav()">&#9776;</button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav ml-auto ">
                <li class="nav-item active">
                    <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#aboutUs">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#parentInfo">Our Dogs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#availPups">Puppies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#upcoming">Upcoming Litters</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>

            </ul>

        </div>
    </nav>

    <div class="body">
        <div class="parallaxBody parallax1">
            <div class="heading" id="home">
                <div class="headingMain">doxie-ology</div>
                <div class="headingSub">dachshund breeders of south carolina</div>
                <!-- <div class="headingSub2">Puppies have found their forever homes. Stay tuned.</div> -->
            </div>
        </div>


        <div class="section" id="aboutDoxies">
            <h3 class="title">About Dachshunds</h3>
            <section class="about">

                The Dachshund, with its unmistakable long-backed body, little legs, and big personality- is truly an
                icon of purebred dogdom.
                <br>
                <br>
                Dachshunds are not built for distance running, leaping, or strenuous swimming, but otherwise these
                tireless hounds are game for anything.
                Smart and vigilant, with a big-dog bark, they make fine watchdogs. Bred to be an independent hunter of
                dangerous prey, they can be brave to the point of rashness and can be a bit stubborn,
                but their endearing nature and unique look has won millions of hearts the world over.
                <br>
                <br>
                Dachshunds and their predecessors can be traced all the way back to the the 15th century in medieval
                Europe where dogs with elongated bodies, short legs, and hound-type
                ears were seen in illustrations hunting badgers. By the 16th century, Dachshunds were brought to Germany
                and were developed through selective breeding
                over a one-hundred year time period.
                <br>
                <br>
                Despite their loving facial expressions and too-cute-for-words appearance, Dachshunds are surprisingly
                bold pups. The AKC actually describes them as
                "brave to the point of rashness." This bravery is a result of their hunting history, as is their
                impressive intelligence, which was important
                for dogs who were often expected to hunt on their own, without their owner's guidance. Once the Germans
                saw the hunting ability of this breed,
                the name was easy. In German, "dachs" means badger and "hund" means dog, creating the name Dachshund or
                Badger Dog. The breed's shortened legs
                allowed them to hunt and follow small rodents down into the ground. Although the original German
                Dachshunds were larger than the dogs we see today, they are still
                just as fearless as they were many centuries ago.
                <br>
                <br>
                <div class="characteristics">
                    <div class="listTitle">Characteristics:</div>
                    <div class="characteristicsList">
                        <ul>
                            <li>Temperament: Friendly, Curious, Spunky</li>
                            <li>AKC Breed Popularity: Ranks 12 of 195</li>
                            <li>Height: 8-9 inches (standard), 5-6 inches (miniature)</li>
                            <li>Weight: 16-32 pounds (standard), 11 pounds and under (miniature)</li>
                            <li>Coat Type: Smooth, Wire haired, or Long haired</li>
                            <li>Life Expectancy: 12-16 years</li>
                            <li>Group: Hound</li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>

        <div class="parallaxBody parallax2"></div>


        <div class="section" id="aboutUs">
            <h3 class="title">our story</h3>
            <div class="row">
                <div class="col-sm-7 col-md-6">
                    <div class="gallery">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>

                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./assets/img/groupBkyd4Carousel.jpg" class="d-block w-100" alt="img">
                                </div>
                                <div class="carousel-item">
                                    <img src="./assets/img/bellaPearlEdit.jpg" class="d-block w-100" alt="img">
                                </div>
                                <div class="carousel-item">
                                    <img src="./assets/img/beauBella.jpg" class="d-block w-100" alt="img">
                                </div>
                                <div class="carousel-item">
                                    <img src="./assets/img/group2Edit.jpg" class="d-block w-100" alt="img">
                                </div>
                                <div class="carousel-item">
                                    <img src="./assets/img/duncanPearlCarousel.jpg" class="d-block w-100" alt="img">
                                </div>
                                <div class="carousel-item">
                                    <img src="./assets/img/honeyBellaEdited.jpg" class="d-block w-100" alt="img">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5 col-md-6">
                    <div class="aboutUs">
                        <p> For the love of Doxies! We are a family oriented, hobby breeder in South Carolina. Our first
                            priority is our puppies and putting them
                            into loving homes. We are not like larger breeders and only breed 2-3 litters per year. Our
                            Dachshunds are our family and share our home
                            as well as our hearts. Doxie-ology specializes in creams and reds, both long haired and
                            short haired.
                            <br>
                            <br>
                            Our litters are planned to ensure that we have the healthiest and most loving puppies for
                            families just like ours. We carefully breed for
                            temperament and health, as well as beauty. All of our dogs are like our children.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="parallaxBody parallax3"></div>

        <div class="section" id="parentInfo">
            <h3 class="title">sires and dams</h3>
            <section class="info">
                <div class="row">
                    <div class="col-sm-1 emptyCol1"></div>

                    <div class="col-sm-3 ">
                        <div class="card">
                            <div class="card__side card__side--front">
                                <div class="card__picture card__picture--1">
                                    &nbsp;
                                </div>
                                <h4 class="card__heading">
                                    <span class="card__heading-span card__heading-span--1">Donte</span>
                                </h4>
                                <div class="card__details">
                                    <ul>
                                        <li class="list1">Male | Red | Long Hair | Miniature</li>
                                        <li class="info">
                                            Kind and gentle, with a huge heart, and an absolute lover.
                                            Likes to play and has earned the nickname "Manny" as he looks after all
                                            of the dogs.
                                            He will steal your heart!
                                        </li>
                                        <li>
                                            <button class="flipBtn" onclick="flipCard()">
                                                Click For More!
                                                <i class="fas fa-angle-double-right"></i>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card__side card__side--back card__side--back-1">

                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 ">
                        <div class="card">
                            <div class="card__side card__side--front front">
                                <div class="card__picture card__picture--2">
                                    &nbsp;
                                </div>
                                <h4 class="card__heading">
                                    <span class="card__heading-span card__heading-span--1">Duncan</span>
                                </h4>
                                <div class="card__details">
                                    <ul>
                                        <li class="list1">Male | EE Cream | Short Hair | Miniature</li>
                                        <li class="info">
                                            This big boy is loving, playful, and gets along with everyone. He is
                                            certainly
                                            the most
                                            curious of all of our dogs. He is truly a momma's boy.
                                        </li>
                                        <li>
                                            <button class="flipBtn" onclick="flipCard()">
                                                Click For More!
                                                <i class="fas fa-angle-double-right"></i>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card__side card__side--back card__side--back-2 back">

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="card">
                            <div class="card__side card__side--front">
                                <div class="card__picture card__picture--3">
                                    &nbsp;
                                </div>
                                <h4 class="card__heading">
                                    <span class="card__heading-span card__heading-span--1">Beau</span>
                                </h4>
                                <div class="card__details">
                                    <ul>
                                        <li class="list1">Male | EE Cream | Long Hair | Minature</li>
                                        <li class="info">
                                            "Bow Tie" Beau is a true southern gentleman. Playful and energetic, he is
                                            proving to be very loving and likes to snuggle.
                                        </li>
                                        <li>
                                            <button class="flipBtn" onclick="flipCard()">
                                                Click For More!
                                                <i class="fas fa-angle-double-right"></i>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card__side card__side--back card__side--back-3">

                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 emptyCol2"></div>

                </div>
                <div class="row">
                    <div class="col-sm-1 emptyCol1"></div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card__side card__side--front">
                                <div class="card__picture card__picture--4">
                                    &nbsp;
                                </div>
                                <h4 class="card__heading">
                                    <span class="card__heading-span card__heading-span--4">Honey</span>
                                </h4>
                                <div class="card__details">
                                    <ul>
                                        <li class="list1">Female | Shaded Red | Long Hair | Miniature</li>
                                        <li class="info">
                                            Honey is gorgeous, friendly, gentle, and loving. She loves to lick, be held,
                                            and make her rounds to love on everyone. She is great with new puppies and
                                            loves
                                            them.
                                            She simply is a wonderful lady and her name "Honey Pot" truly fits her.
                                        </li>
                                        <li>
                                            <button class="flipBtn" onclick="flipCard()">
                                                Click For More!
                                                <i class="fas fa-angle-double-right"></i>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card__side card__side--back card__side--back-4">

                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card">
                            <div class="card__side card__side--front">
                                <div class="card__picture card__picture--5">
                                    &nbsp;
                                </div>
                                <h4 class="card__heading">
                                    <span class="card__heading-span card__heading-span--1">Bella</span>
                                </h4>
                                <div class="card__details">
                                    <ul>
                                        <li class="list1">Female | Red | Long Hair | Miniature</li>
                                        <li class="info">
                                            Daddy's girl, she is a lover and enjoys being held and cuddled. She simply
                                            loves all people
                                            and has a huge heart.
                                        </li>
                                        <li>
                                            <button class="flipBtn" onclick="flipCard()">
                                                Click For More!
                                                <i class="fas fa-angle-double-right"></i>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card__side card__side--back card__side--back-5">

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card__side card__side--front">
                                <div class="card__picture card__picture--6">
                                    &nbsp;
                                </div>
                                <h4 class="card__heading">
                                    <span class="card__heading-span card__heading-span--1">Pearl</span>
                                </h4>
                                <div class="card__details">
                                    <ul>
                                        <li class="list1">Female | EE Cream | Long Hair | Miniature</li>
                                        <li class="info">
                                            Quiet, loving, and gentle. Our Southern Belle. She is very confident and
                                            loves to be by herself.
                                            An absolute dream dog who has earned the nickname "Whirly Girly" for her
                                            carefree spirit.
                                            She is our Lady of the House!
                                        </li>
                                        <li>
                                            <button class="flipBtn" onclick="flipCard()">
                                                Click For More!
                                                <i class="fas fa-angle-double-right"></i>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card__side card__side--back card__side--back-6">

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 emptyCol2"></div>
                    

                </div>
                <div class="row">
                    <div class="col-sm-1 emptyCol1"></div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card__side card__side--front">
                                <div class="card__picture card__picture--7">
                                    &nbsp;
                                </div>
                                <h4 class="card__heading">
                                    <span class="card__heading-span card__heading-span--1">Hope</span>
                                </h4>
                                <div class="card__details">
                                    <ul>
                                        <li class="list1">Female | Shaded Red | Short Hair | Miniature</li>
                                        <li class="info">
                                            She is the younger sister of Honey and is without question our little
                                            firecracker and ball of energy. Energetic, jumpy, and playful, she always
                                            makes sure to love up everyone in the room and let them see she is in
                                            charge.
                                        </li>
                                        <li>
                                            <button class="flipBtn" onclick="flipCard()">
                                                Click For More!
                                                <i class="fas fa-angle-double-right"></i>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card__side card__side--back card__side--back-7"> </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card__side card__side--front">
                                <div class="card__picture card__picture--8">
                                    &nbsp;
                                </div>
                                <h4 class="card__heading">
                                    <span class="card__heading-span card__heading-span--1">Luna</span>
                                </h4>
                                <div class="card__details">
                                    <ul>
                                        <li class="list1">Female | Black and Cream | Long Hair </li>
                                        <li class="info">
                                            
                                        </li>
                                        <li>
                                            <button class="flipBtn" onclick="flipCard()">
                                                Click For More!
                                                <i class="fas fa-angle-double-right"></i>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card__side card__side--back card__side--back-8"> </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card__side card__side--front">
                                <div class="card__picture card__picture--9">
                                    &nbsp;
                                </div>
                                <h4 class="card__heading">
                                    <span class="card__heading-span card__heading-span--1">Shelby</span>
                                </h4>
                                <div class="card__details">
                                    <ul>
                                        <li class="list1">Female | EE Red | Short Hair </li>
                                        <li class="info">
        
                                        </li>
                                        <li>
                                            <button class="flipBtn" onclick="flipCard()">
                                                Click For More!
                                                <i class="fas fa-angle-double-right"></i>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card__side card__side--back card__side--back-9"> </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-md-2 emptyCol2"></div>
                </div>

            </section>
        </div>

        <div class="parallaxBody parallax4"></div>

        <div class="section" id="availPups">
            <h3 class="title">puppies</h3>
            <section class="stayTuned">
                <div class="stayTunedParagraph">
                    <p>We're expecting!
                        <br>Click <a href="#upcoming">here</a> for information.
                    </p>
                </div>
            </section>

            <section class="pups">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card" id="flip-card">
                            <div class="card__side card__side--front flip-card-front">
                                <div class="card__picture card__picture--1"></div>
                                <h4 class="card__heading">
                                    <span class="card__heading-span card__heading-span--1">Future Puppy</span>
                                </h4>
                                <div class="card__details">
                                    <ul>
                                        <li>Color | Gender | Hair Length </li>
                                        <li>Date of birth</li>
                                        <li>Dam and Sire</li>
                                        <li>Short paragraph about their character</li>
                                        <li>
                                            <button class="flipBtn" onclick="flipCard()">
                                                Click For More!
                                                <i class="fas fa-angle-double-right"></i>
                                            </button>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="card__side card__side--back card__side--back-2"></div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card__side card__side--front">
                                <div class="card__picture card__picture--1">
                                    &nbsp;
                                </div>
                                <h4 class="card__heading">
                                    <span class="card__heading-span card__heading-span--1">Future Puppy</span>
                                </h4>
                                <div class="card__details">
                                    <ul>
                                        <li>Color | Gender | Hair Length </li>
                                        <li>Date of birth</li>
                                        <li>Dam and Sire</li>
                                        <li>Short paragraph about their character</li>
                                        <li>
                                            <button class="flipBtn" onclick="flipCard()">
                                                Click For More!
                                                <i class="fas fa-angle-double-right"></i>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card__side card__side--back card__side--back-2"></div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card__side card__side--front">
                                <div class="card__picture card__picture--1">
                                    &nbsp;
                                </div>
                                <h4 class="card__heading">
                                    <span class="card__heading-span card__heading-span--1">Future Puppy</span>
                                </h4>
                                <div class="card__details">
                                    <ul>
                                        <li>Color | Gender | Hair Length </li>
                                        <li>Date of birth</li>
                                        <li>Dam and Sire</li>
                                        <li>Short paragraph about their character</li>
                                        <li>
                                            <button class="flipBtn" onclick="flipCard()">
                                                Click For More!
                                                <i class="fas fa-angle-double-right"></i>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card__side card__side--back card__side--back-2">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card__side card__side--front">
                                <div class="card__picture card__picture--1">
                                    &nbsp;
                                </div>
                                <h4 class="card__heading">
                                    <span class="card__heading-span card__heading-span--1">Future
                                        Puppy</span>
                                </h4>
                                <div class="card__details">
                                    <ul>
                                        <li>Color | Gender | Hair Length </li>
                                        <li>Date of birth</li>
                                        <li>Dam and Sire</li>
                                        <li>Short paragraph about their character</li>
                                        <li>
                                            <button class="flipBtn" onclick="flipCard()">
                                                Click For More!
                                                <i class="fas fa-angle-double-right"></i>
                                            </button>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                            <div class="card__side card__side--back card__side--back-2">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card__side card__side--front">
                                <div class="card__picture card__picture--1">
                                    &nbsp;
                                </div>
                                <h4 class="card__heading">
                                    <span class="card__heading-span card__heading-span--1">Future
                                        Puppy</span>
                                </h4>
                                <div class="card__details">
                                    <ul>
                                        <li>Color | Gender | Hair Length </li>
                                        <li>Date of birth</li>
                                        <li>Dam and Sire</li>
                                        <li>Short paragraph about their character</li>
                                        <li>
                                            <button class="flipBtn" onclick="flipCard()">
                                                Click For More!
                                                <i class="fas fa-angle-double-right"></i>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card__side card__side--back card__side--back-2">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card__side card__side--front">
                                <div class="card__picture card__picture--1">
                                    &nbsp;
                                </div>
                                <h4 class="card__heading">
                                    <span class="card__heading-span card__heading-span--1">Future
                                        Puppy</span>
                                </h4>
                                <div class="card__details">
                                    <ul>
                                        <li>Color | Gender | Hair Length </li>
                                        <li>Date of birth</li>
                                        <li>Dam and Sire</li>
                                        <li>Short paragraph about their character</li>
                                        <li>
                                            <button class="flipBtn" onclick="flipCard()">
                                                Click For More!
                                                <i class="fas fa-angle-double-right"></i>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card__side card__side--back card__side--back-2"></div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card__side card__side--front">
                                <div class="card__picture card__picture--1">
                                    &nbsp;
                                </div>
                                <h4 class="card__heading">
                                    <span class="card__heading-span card__heading-span--1">Future
                                        Puppy</span>
                                </h4>
                                <div class="card__details">
                                    <ul>
                                        <li>Color | Gender | Hair Length </li>
                                        <li>Date of birth</li>
                                        <li>Dam and Sire</li>
                                        <li>Short paragraph about their character</li>
                                        <li>
                                            <button class="flipBtn" onclick="flipCard()">
                                                Click For More!
                                                <i class="fas fa-angle-double-right"></i>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card__side card__side--back card__side--back-2"></div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card__side card__side--front">
                                <div class="card__picture card__picture--1">
                                    &nbsp;
                                </div>
                                <h4 class="card__heading">
                                    <span class="card__heading-span card__heading-span--1">Future
                                        Puppy</span>
                                </h4>
                                <div class="card__details">
                                    <ul>
                                        <li>Color | Gender | Hair Length </li>
                                        <li>Date of birth</li>
                                        <li>Dam and Sire</li>
                                        <li>Short paragraph about their character</li>
                                        <li>
                                            <button class="flipBtn" onclick="flipCard()">
                                                Click For More!
                                                <i class="fas fa-angle-double-right"></i>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card__side card__side--back card__side--back-2"></div>
                        </div>
                    </div>
                </div>
            </section>

        </div>

        <div class="parallaxBody parallax5"></div>

        <div class="section" id="upcoming">
            <h3 class="title">Upcoming Litters</h3>


            <section class="expecting">
                <div class="row">
                    <div class="col-sm-1 col-md-1"></div>
                    <div class="col-sm-5 col-md-5">
                        <div class="expectingContent">
                            <div class="expectingPic">
                                <img src="assets/img/bellaDonte-1.jpg" alt="bellaAndPearl" class="expectingPic1">
                                <br>
                                Donte and Bella are expecting puppies March 2021!
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5 col-md-5">
                        <div class="expectingContent">
                            <div class="expectingPic">
                                <img src="assets/img/duncanPearl.jpg" alt="duncanAndPearl" class="expectingPic2">
                                <br>
                                Duncan and Pearl are expecting puppies March 2021!
                            </div>
                        </div>
                        <div class="col-sm-1 col-sm-1"></div>
                    </div>

            </section>

        </div>

        <div class="parallaxBody parallax6"></div>

        <div class="section" id="contact">
            <h3 class="title">Contact Us</h3>
            <hr class="hrContact1">
            <section class="contact--1">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="contactInfo">
                            <heading class="contactHeading">We would love to hear from you</heading>
                            <br>
                            <br>
                            <div class="contactText">
                                <div class="contactText1">
                                    <div class="contactTextHeading">The McAfees</div>
                                    <div>990 S Cedar Ave</div>
                                    <div>Andrews, SC 29510</div>
                                </div>
                                <br>
                                <div class="contactText2">
                                    Doxieology2019@gmail.com
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <form class="contactForm" action="contactform.php" method="post">

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="name"></label>
                                        <input type="text" name="name" class="form-control" id="formName"
                                            placeholder="Your name" size="50">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name"></label>
                                <input type="text" name="number" class="form-control" id="formNumber"
                                    placeholder="Your phone number" size="15">
                            </div>
                            <div class="form-group">
                                <label for="name"></label>
                                <input type="text" name="email" class="form-control" id="formNumber"
                                    placeholder="Your Email" size="15">
                            </div>

                            <div class="form-group">
                                <label for="message"></label>
                                <textarea name="message" class="form-control" id="formMessage" size="800"
                                    placeholder="Insert message" rows="5"></textarea>
                            </div>
                            <div class="btn">
                                <input class="button" type="submit" value="send">
                                <input class="button" type="reset" value="clear">
                            </div>
                        </form>
                    </div>
                </div>
                <hr class="hrContact1">
            </section>
        </div>


        <footer class="footer">
            <div class="footerLogo">
                <img src="assets/img/logoFigma.png" alt="logo" class="logoFooter">
                <br>
                <p class="cashMethod">Accepting paypal or cash at pickup.</p>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-8">
                    <hr class="hrFooter" />
                    <div class="footerLinks">
                        <ul class="footerList">
                            <li class="footerItem"><a href="#contact" class="footerLink">Contact
                                    Us</a></li>
                            <li class="footerItem"><a href="#aboutUs" class="footerLink">Our
                                    Story</a></li>
                            <li class="footerItem"><a href="#availPups" class="footerLink">Puppies</a></li>
                            <li class="footerItem"><a href="#aboutDoxies" class="footerLink">About
                                    Dachshunds</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <hr class="hrFooter" />
                    <p class="copyright">
                        Copyright &copy; Doxie-ology
                    </p>
                </div>
            </div>

        </footer>
    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="./assets/javascript/app.js"></script>
</body>
</html>
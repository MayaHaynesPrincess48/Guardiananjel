<?php include 'common-header.php'; ?>
<?php include 'header.php'; ?>

<div>
    <div class="video-container">
        <video autoplay muted loop>
            <source src="images/video.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="bnr-content itemCenter">
            <div class="container">
                <div class="bnr-lft">
                    <p class="brn-p1 fa fa-bell"> The Voice of EMS</p>
                    <p class="brn-p3"> Caring For People-First The <span> American Guardian Angel </span> </p>
                    <p class="p2-bnr">
                        American Ambulance Association tools, resources, and advocacy keep EMS rolling. We take care
                        of the organizations that take care of people—first
                    </p>
                    <span>
                        <a href="products.php" class="linkBtn btn-white mt-5">Show All</a>
                    </span>
                </div>
            </div>
        </div>
    </div>

</div>

<!--/*=====SECTION - 5=====*/-->
<div class="section5">
    <div class="container">
        <p class="comn-hdng"> <span> Our Services</span></p>
        <p class="comn-para">At <b> American Guardian Angel Ambulance, </b>We use ambulance planes and ambulance
            helicopters for various purposes. Most often, they are used to transfer patients to hospital or to
            repatriate patients who are accompanied by medical staff. We can organise the transport of a patient who
            requires intensive care across continents back to Europe by ambulance jets or transport a patient on a
            shorter trip within a country by ambulance helicopter. Generally, we are able to supply an appropriate air
            ambulance within a few hours. In the field of medical transport logistics, we use air ambulances for the
            time-sensitive transport of organs, blood specimens and urgently required drugs and medication.
        </p>
        <div class="flexWrap mt-5">
            <?php foreach ($services as $index => $item): ?>
                <div class="card cardStyle" data-toggle="modal" data-target="#serviceModal<?php echo $index ?>">
                    <img class="card-img-top" src="<?php echo $item['img'] ?>" alt="..." style="width: 100%" />
                    <div class="card-body itemCenter">
                        <h4 class="card-title"><?php echo $item['title'] ?></h4>
                    </div>
                </div>
                <div class="modal fade" id="serviceModal<?php echo $index ?>" tabindex="-1" aria-labelledby="aboutUsLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <img class="card-img-top" src="<?php echo $item['img'] ?>" alt="..." style="width: 100%" />
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<div class="section5 experience">
    <div class="container">
        <h1 class="comn-hdng">Experienced in all <span>Fields of Operation</span></h1> <br />
        <h3 class="smallTitle">Helicopter</h3>
        <div class="flexWrap">
            <p>
                <b>HEMS</b> is the ultimate discipline in helicopter services. It‘s not just about a perfectly
                maintained
                helicopter ready for action in a matter of seconds, it’s also about the highly complex approval
                procedures
                required to turn a helicopter into a flying ambulance. The interaction of experienced crew members, an
                expertly maintained helicopter, and the best equipment, combines to save critical seconds in extreme
                situations, ensuring survival of patients.
            </p>
            <p>
                <b>HEMS</b> missions flown, <b style="color: #40E0D0;">AGA</b> has the critical experience necessary to
                safely perform Helicopter
                Emergency
                Medical Services. Even more: <b style="color: #40E0D0;">AGA</b> can cover all three <b>HEMS</b> areas.
                This
                includes the classic
                transport
                of up to two patients, for example from a service platform to a hospital, but also the rescue of injured
                persons by means of a winch, for example from a wind turbine, or the rescue of persons floating in the
                sea.
            </p>
        </div>
        <h3 class="smallTitle">Ambulance</h3>
        <div class="flexWrap">
            <p>
                In most places, <b style="color: #40E0D0;">AGA</b> can be summoned by members of the public (as well as
                medical facilities, other
                emergency services, businesses and authorities) via an emergency telephone number (such as
                <a href="#"><?php echo $config['phone'] ?></a> in the
                United States) which puts them in contact with a dispatching centre, which will then dispatch suitable
                resources for the call. Ambulances are the primary vehicles for delivering <b
                    style="color: #40E0D0;">AGA</b>, though squad cars,
                motorcycles, aircraft, boats, fire apparatus, and others may be used. <b style="color: #40E0D0;">AGA</b>
                agencies may also operate a
                non-emergency patient transport service, and some have rescue squads to provide technical rescue or
                search and rescue services.
            </p>
            <p>
                When <b style="color: #40E0D0;">AGA</b> is dispatched, they will initiate medical care upon arrival on
                scene. If it is deemed necessary
                or a patient requests transport, the unit is then tasked with transferring the patient to the next point
                of care, typically an emergency department of a hospital. Historically, ambulances only transported
                patients to care, and this remains the case in parts of the developing world. The term "emergency
                medical service" was popularised when these services began to emphasise emergency treatment at the
                scene. In some countries, a substantial portion of <b style="color: #40E0D0;">AGA</b> calls do not
                result in a patient being taken to
                hospital.
            </p>
        </div>
        <h3 class="smallTitle my-3">History</h3>
        <p>The first use of the ambulance as a specialized vehicle, in battle came about with the
            <i>ambulances volantes</i> designed by <a href="#">Dominique Jean Larrey</a> (1766–1842),
            <a href="#">Napoleon Bonaparte</a>'s chief surgeon. Larrey was present at the battle of Spires,
            between the <a href="#">French</a> and <a href="#">Prussians</a>, and was distressed by the fact that
            wounded soldiers were not picked up by the numerous ambulances (which Napoleon required to be stationed two
            and half miles back from the scene of battle) until after hostilities had ceased, and set about developing a
            new ambulance system. Having decided against using the Norman system of horse litters, he settled on two- or
            four-wheeled <a href="#">horse</a>-drawn wagons, which were used to transport fallen soldiers from the
            (active) battlefield <i>after</i> they had received early treatment in the field. Larrey's
            projects for 'flying ambulances' were first approved by the <a href="#">Committee of Public Safety</a> in
            1794. Larrey subsequently entered Napoleon's service during the Italian campaigns in 1796, where his
            ambulances were used for the first time at Udine, Padua and Milan, and he adapted his ambulances to the
            conditions, even developing a litter which could be carried by a <a href="#">camel</a> for a campaign in
            <a href="#">Egypt</a>.
        </p>
    </div>
</div>

<!--/*=====SECTION - 6=====*/-->
<div class="section-6">
    <div class="container">
        <p class="comn-hdng"> Discover <span>the New Product</span> </p>
        <p class="comn-para">
            Our Shop is a way to contribute to the realization of our projects,your commitment is
            important.Support us in complete safety. Your support is vital to the success of our projects. By shopping
            with us, you contribute directly to our initiatives. Shop with confidence and help us make a difference
        </p>
        <ul class="s5-list">
            <?php foreach ($config['productSpecs'] as $index => $item): ?>
                <li style="display: <?php echo $index % 6 === 5 ? '' : 'none' ?>">
                    <div class="productImg">
                        <img class="hover-scale" src="<?php echo $item['img']; ?> " data-toggle="modal"
                            data-target="#productModal<?php echo $index ?>" />
                        <div class="modal fade" id="productModal<?php echo $index ?>" tabindex="-1"
                            aria-labelledby="aboutUsLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <img class="card-img-top" src="<?php echo $item['img'] ?>" alt="..." style="width: 100%" />
                            </div>
                        </div>
                    </div>
                    <div class="productInfo">
                        <p class="productName"> Name : <span><?php echo $item['nm']; ?></span></p>
                        <p class="productPrice"> Price : <span>$ <?php echo $item['prc']; ?></span>
                        </p>
                        <p class="productDescription"> Description : </p>
                        <p class="productText"><?php echo $item['desc']; ?></p>
                        <hr class="productLine" />
                        <a href="shop.php?pidx=<?php echo base64_encode($index); ?>">
                            <button class="button-82-pushable" style="float: right" role="button">
                                <span class="button-82-shadow"></span>
                                <span class="button-82-edge"></span>
                                <span class="button-82-front text">
                                    Show Item
                                </span>
                            </button>
                        </a>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>

<div class="section-6">
    <div class="container">
        <div class="boxGradiant">
            <p> Do you want to Call me? So Click <a href="contact.php">here</a></p>
        </div>
    </div>
</div>

<div class="section-6 sec6_bg" style="background: #eee">
    <div class="container">
        <p class="comn-hdng mb-4">Find Our <span>Top Picks</span> </p>
        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2000">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- The slideshow -->
            <div class="carousel-inner py-5">
                <div class="carousel-item active">
                    <div class="s2-prd-box">
                        <div class="s2-prd-div">
                            <div class="imgCover"
                                style="background-image: url(' <?php echo $config['productSpecs'][1]['img']; ?> ')">
                            </div>
                        </div>
                        <div class="s2-prd-txt">
                            <p class="s2-p2"><?php echo $config['productSpecs'][1]['nm']; ?></p>
                        </div>
                        <div class="s2-prd_box">
                            <p class="s2-p3">$<?php echo number_format($config['productSpecs'][1]['prc'], 2); ?></p>
                            <a href="shop.php?pidx=<?php echo base64_encode('1'); ?>">
                                <p class="shop-btn s2btn">Shop Now </p>
                            </a>
                        </div>
                    </div>
                    <div class="s2-prd-box">
                        <div class="s2-prd-div">
                            <div class="imgCover"
                                style="background-image: url(' <?php echo $config['productSpecs'][2]['img']; ?> ')">
                            </div>
                        </div>
                        <div class="s2-prd-txt">
                            <p class="s2-p2"><?php echo $config['productSpecs'][2]['nm']; ?></p>
                        </div>
                        <div class="s2-prd_box">
                            <p class="s2-p3">$<?php echo number_format($config['productSpecs'][2]['prc'], 2); ?></p>
                            <a href="shop.php?pidx=<?php echo base64_encode('2'); ?>">
                                <p class="shop-btn s2btn">Shop Now </p>
                            </a>
                        </div>
                    </div>
                    <div class="s2-prd-box">
                        <div class="s2-prd-div">
                            <div class="imgCover"
                                style="background-image: url(' <?php echo $config['productSpecs'][3]['img']; ?> ')">
                            </div>
                        </div>
                        <div class="s2-prd-txt">
                            <p class="s2-p2"><?php echo $config['productSpecs'][3]['nm']; ?></p>
                        </div>
                        <div class="s2-prd_box">
                            <p class="s2-p3">$<?php echo number_format($config['productSpecs'][3]['prc'], 2); ?></p>
                            <a href="shop.php?pidx=<?php echo base64_encode('3'); ?>">
                                <p class="shop-btn s2btn">Shop Now </p>
                            </a>
                        </div>
                    </div>
                    <div class="s2-prd-box">
                        <div class="s2-prd-div">
                            <div class="imgCover"
                                style="background-image: url(' <?php echo $config['productSpecs'][4]['img']; ?> ')">
                            </div>
                        </div>
                        <div class="s2-prd-txt">
                            <p class="s2-p2"><?php echo $config['productSpecs'][4]['nm']; ?></p>
                        </div>
                        <div class="s2-prd_box">
                            <p class="s2-p3">$<?php echo number_format($config['productSpecs'][4]['prc'], 2); ?></p>
                            <a href="shop.php?pidx=<?php echo base64_encode('4'); ?>">
                                <p class="shop-btn s2btn">Shop Now </p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="s2-prd-box">
                        <div class="s2-prd-div">
                            <div class="imgCover"
                                style="background-image: url(' <?php echo $config['productSpecs'][5]['img']; ?> ')">
                            </div>
                        </div>
                        <div class="s2-prd-txt">
                            <p class="s2-p2"><?php echo $config['productSpecs'][5]['nm']; ?></p>
                        </div>
                        <div class="s2-prd_box">
                            <p class="s2-p3">$<?php echo number_format($config['productSpecs'][5]['prc'], 2); ?></p>
                            <a href="shop.php?pidx=<?php echo base64_encode('5'); ?>">
                                <p class="shop-btn s2btn">Shop Now </p>
                            </a>
                        </div>
                    </div>
                    <div class="s2-prd-box">
                        <div class="s2-prd-div">
                            <div class="imgCover"
                                style="background-image: url(' <?php echo $config['productSpecs'][6]['img']; ?> ')">
                            </div>
                        </div>
                        <div class="s2-prd-txt">
                            <p class="s2-p2"><?php echo $config['productSpecs'][6]['nm']; ?></p>
                        </div>
                        <div class="s2-prd_box">
                            <p class="s2-p3">$<?php echo number_format($config['productSpecs'][6]['prc'], 2); ?></p>
                            <a href="shop.php?pidx=<?php echo base64_encode('6'); ?>">
                                <p class="shop-btn s2btn">Shop Now </p>
                            </a>
                        </div>
                    </div>
                    <div class="s2-prd-box">
                        <div class="s2-prd-div">
                            <div class="imgCover"
                                style="background-image: url(' <?php echo $config['productSpecs'][7]['img']; ?> ')">
                            </div>
                        </div>
                        <div class="s2-prd-txt">
                            <p class="s2-p2"><?php echo $config['productSpecs'][7]['nm']; ?></p>
                        </div>
                        <div class="s2-prd_box">
                            <p class="s2-p3">$<?php echo number_format($config['productSpecs'][7]['prc'], 2); ?></p>
                            <a href="shop.php?pidx=<?php echo base64_encode('7'); ?>">
                                <p class="shop-btn s2btn">Shop Now </p>
                            </a>
                        </div>
                    </div>
                    <div class="s2-prd-box">
                        <div class="s2-prd-div">
                            <div class="imgCover"
                                style="background-image: url(' <?php echo $config['productSpecs'][8]['img']; ?> ')">
                            </div>
                        </div>
                        <div class="s2-prd-txt">
                            <p class="s2-p2"><?php echo $config['productSpecs'][8]['nm']; ?></p>
                        </div>
                        <div class="s2-prd_box">
                            <p class="s2-p3">$<?php echo number_format($config['productSpecs'][8]['prc'], 2); ?></p>
                            <a href="shop.php?pidx=<?php echo base64_encode('8'); ?>">
                                <p class="shop-btn s2btn">Shop Now </p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="s2-prd-box">
                        <div class="s2-prd-div">
                            <div class="imgCover"
                                style="background-image: url(' <?php echo $config['productSpecs'][9]['img']; ?> ')">
                            </div>
                        </div>
                        <div class="s2-prd-txt">
                            <p class="s2-p2"><?php echo $config['productSpecs'][9]['nm']; ?></p>
                        </div>
                        <div class="s2-prd_box">
                            <p class="s2-p3">$<?php echo number_format($config['productSpecs'][9]['prc'], 2); ?></p>
                            <a href="shop.php?pidx=<?php echo base64_encode('9'); ?>">
                                <p class="shop-btn s2btn">Shop Now </p>
                            </a>
                        </div>
                    </div>
                    <div class="s2-prd-box">
                        <div class="s2-prd-div">
                            <div class="imgCover"
                                style="background-image: url(' <?php echo $config['productSpecs'][10]['img']; ?> ')">
                            </div>
                        </div>
                        <div class="s2-prd-txt">
                            <p class="s2-p2"><?php echo $config['productSpecs'][10]['nm']; ?></p>
                        </div>
                        <div class="s2-prd_box">
                            <p class="s2-p3">$<?php echo number_format($config['productSpecs'][10]['prc'], 2); ?></p>
                            <a href="shop.php?pidx=<?php echo base64_encode('10'); ?>">
                                <p class="shop-btn s2btn">Shop Now </p>
                            </a>
                        </div>
                    </div>
                    <div class="s2-prd-box">
                        <div class="s2-prd-div">
                            <div class="imgCover"
                                style="background-image: url(' <?php echo $config['productSpecs'][11]['img']; ?> ')">
                            </div>
                        </div>
                        <div class="s2-prd-txt">
                            <p class="s2-p2"><?php echo $config['productSpecs'][11]['nm']; ?></p>
                        </div>
                        <div class="s2-prd_box">
                            <p class="s2-p3">$<?php echo number_format($config['productSpecs'][11]['prc'], 2); ?></p>
                            <a href="shop.php?pidx=<?php echo base64_encode('11'); ?>">
                                <p class="shop-btn s2btn">Shop Now </p>
                            </a>
                        </div>
                    </div>
                    <div class="s2-prd-box">
                        <div class="s2-prd-div">
                            <div class="imgCover"
                                style="background-image: url(' <?php echo $config['productSpecs'][12]['img']; ?> ')">
                            </div>
                        </div>
                        <div class="s2-prd-txt">
                            <p class="s2-p2"><?php echo $config['productSpecs'][12]['nm']; ?></p>
                        </div>
                        <div class="s2-prd_box">
                            <p class="s2-p3">$<?php echo number_format($config['productSpecs'][12]['prc'], 2); ?></p>
                            <a href="shop.php?pidx=<?php echo base64_encode('12'); ?>">
                                <p class="shop-btn s2btn">Shop Now </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
    <!-- <a class="carousel-control-prev" href="#productCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#productCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a> -->
</div>



<!--/*=====Footer======*/-->

<?php include 'footer.php'; ?>
</div>



<!-- <button class="button-82-pushable" role="button">
    <span class="button-82-shadow"></span>
    <span class="button-82-edge"></span>
    <span class="button-82-front text">
        Button 82
    </span>
</button>
<a href="products.php" class="linkBtn btn-white">Show All</a> -->

</body>

</html>
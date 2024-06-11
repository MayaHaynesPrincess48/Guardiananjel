<?php include 'common-header.php'; ?>

<div class="shifter_page">
    <?php include 'header.php'; ?>

    <div class="innrBreadcrm">
        <div class="container">
            <a href="index.php">Home</a> > <span>Contact Us</span>
        </div>
    </div>

    <!--/*=====SECTION - 2======*/-->
    <div class="cont-sec-1">
        <div class="container">
            <div class="cont-box">
                <div class="cont-lft">
                    <p class="comn-hdng">Contact Us for <span>Emergency Medical Assistance</span> </p>
                    <p class="p2-bnr">When every second counts, you can rely on our ambulance service for swift and
                        professional medical assistance. Whether it's a medical emergency, patient transport, or any
                        other urgent health need, we're just a call away.
                        <a href="mailto:<?php echo $config['phone']; ?>"><?php echo $config['phone']; ?></a>.
                    </p>
                    <p>
                        Stay updated with our latest news, health tips, and more by following us on social media:
                        <a href="mailto:<?php echo $config['company_email']; ?>"><?php echo $config['company_email']; ?>
                        </a>
                    </p>
                    <div class="contWrap">
                        <div class="contItem">
                            <i class="s4-p2 fa fa-map-marker" style="color: #FF1493"></i>
                            <div class="contTitle">Address </div><br />
                            <span class="s4-p1"><?php echo $config['company_name'] ?></span>
                        </div>
                        <div class="contItem">
                            <i class="s4-p2  fa fa-phone" style="color: #4B0082"></i>
                            <div class="contTitle">Phone </div><br />
                            <span class="s4-p1"><?php echo $config['phone']; ?></span>
                        </div>
                        <div class="contItem">
                            <i class="s4-p2 fa fa-envelope" style="color: #228B22"></i>
                            <div class="contTitle"> Email </div>
                            <div class="s4-p1"><?php echo $config['company_email']; ?></div>
                        </div>
                        <div class="contItem">
                            <i class="s4-p2 fa fa-clock-o" style="color: #40E0D0"></i>
                            <div class="contTitle">Hours of Operation </div><br />
                            <span class="s4-p1"><?php echo $config['cs_hours']; ?></span>
                        </div>
                        <div class="contItem">
                            <i class="s4-p2 fa fa-map-marker" style="color: #000080"></i>
                            <div class="contTitle">Return Address </div><br />
                            <span class="s4-p1"><?php echo $config['return_address']; ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>

</div>


</body>

</html>
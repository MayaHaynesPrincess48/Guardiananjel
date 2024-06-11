<?php
$prods1 = '1-2-3-4';
if (!empty($_GET["pidx"])) {
    $prods = explode("-", trim(base64_decode($_GET["pidx"])));
} else {
    $prods = explode("-", trim($prods1));
}
?>
<?php include 'common-header.php'; ?>

<style>
    #pop_overlay-ing {
        background-color: rgba(0, 0, 0, 0.6);
        clear: none;
        display: none;
        height: 100%;
        left: 0;
        margin: 0;
        padding: 0;
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 9999;
    }

    #pop_content-ing {
        width: 100%;
        background-color: white;
        border-radius: 4px;
        margin: 6% auto 0 auto;
        position: relative;
        text-align: center;
        padding: 30px 20px 20px 20px;
        max-width: 900px;
        height: 599px;
        overflow-y: scroll;
    }

    #pop_content-ing .ing-img {
        max-width: 60%;
    }

    .cross {
        position: sticky;
        max-width: 100%;
        background: #ffffff;
        border-radius: 30px;
        padding: 5px;
        float: right;
        filter: drop-shadow(2px 4px 6px black);
        margin-right: -20px;
    }

    @media only screen and (max-width:767px) {
        #pop_content-ing .ing-img {
            max-width: 90%;
        }
    }
</style>

<div class="shifter_page">
    <?php include 'header.php'; ?>

    <div class="innrBreadcrm">
        <div class="container">
            <a href="index.php">Home</a> > <a href="shop.php">Products</a> >
            <span><?php echo $config['productSpecs'][$prods[0]]['nm']; ?></span>
        </div>
    </div>

    <div class="prd-sec-1">
        <div class="container">
            <p class="prd-s1-p1 show-mob"><?php echo $config['productSpecs'][$prods[0]]['nm']; ?></p>
            <p class="prd-s1-p3 show-mob"> </p>
            <div class="prd-s1-lft">
                <div class="clearall"></div>
                <div class="prd-slide-div itemCenter">
                    <img src="<?php echo $config['productSpecs'][$prods[0]]['img']; ?>" class="prd-slide-1">
                </div>

                <p class="brn-p3 text-center"><?php echo $config['productSpecs'][$prods[0]]['nm']; ?> </p>
                <p class="brn-p1"><?php echo $config['productSpecs'][$prods[0]]['desc']; ?>
                </p>

                <ul class="comn-para productText">
                    <p class="brn-p3 text-center"><span>Details</span></p>
                    <?php foreach ($config['productSpecs'][$prods[0]]['details'] as $index => $item): ?>
                        <li style="list-style:  url(images/tick.png);">
                            <?php echo $item; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>

                <div class="text-center">
                    <p class=" prd-s1-p3 price" id="pid_prc"
                        data-id="<?php echo $config['productSpecs'][$prods[0]]['id']; ?>"
                        data-price="<?php echo number_format($config['productSpecs'][$prods[0]]['prc'], 2); ?>">Price:
                        <span>$<?php echo number_format($config['productSpecs'][$prods[0]]['prc'], 2); ?></span>
                    </p>
                    <div class="clearall"></div><br />
                    <span class="prd-strength-p1">Quantity:</span>
                    <div class="wan-spinner2">
                        <a href="javascript:void(0)" class="minus">-</a>
                        <input type="text" class="qtybox" name="qtybox" value="1">
                        <a href="javascript:void(0)" class="plus">+</a>
                    </div>
                    <div class="clearall"></div>
                    <div class="clearall"></div>
                    <div class="itemCenter">
                        <a href="javascript:void(0);" class="add-to-cart shop-btn">Add To Cart</a>
                        <img src="images/cards.png" class="prd-cards">
                    </div>
                </div>
                <div class="clearall"></div>
            </div>

            <div class="prd-s1-lft">

                <p class="comn-hdng">Other Products</p>
                <div class="s2-block">
                    <?php foreach ($config['productSpecs'] as $index => $item): ?>
                        <?php if (!empty($prods[0]) && $prods[0] != 1) { ?>
                            <div class="s2-prd-box">
                                <div class="s2-prd-div">
                                    <div class="imgCover" style="background-image: url(' <?php echo $item['img']; ?> ')">
                                    </div>
                                </div>
                                <div class="s2-prd-txt text-center">
                                    <p class="productPrice">
                                        <span><?php echo $item['nm']; ?></span>
                                        $<?php echo number_format($item['prc'], 2); ?>
                                    </p>
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
                            </div>
                        <?php } ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</div>

<div id="pop_overlay-ing">
    <div id="pop_content-ing">
        <img src="images/icon-cross.png" alt="" class="cross">
        <center><?php echo $config['productSpecs'][$prods[0]]['ingredients']; ?></center>
    </div>
</div>

<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript" src="js/cartv5.js.php"></script>
<script type="text/javascript">
    $(document).ready(function (e) {
        $('#pop_overlay-ing').css('display', 'none');
        $("a.sccode-ing").click(function () {
            window.setTimeout(function () {
                $("#pop_overlay-ing").fadeIn();
            }, 200);
        });
        $(".cross").click(function () {
            $("#pop_overlay-ing").fadeOut();
        });

        var items = document.querySelectorAll(".item"), index, i;
        var min = 0;
        var max = items.length - 1;
        var count = items.length - 3;

        while (count > 0) {
            index = Math.floor(Math.random() * (max - min + 1)) + min;
            if (items[index].style.display != "none") {
                items[index].style.display = "none";
                --count;
            }
        }

        $(".add-to-cart").click(function (e) {
            e.preventDefault();
            var condiv = $(this).closest('.add-cart-blk');
            var pid = condiv.find("#pid_prc").attr("data-id");
            //alert(pid);
            removeRowItem(pid);
            addItem(pid, $('input[name="qtybox"]').val());
            showCart(true);
        });
        var options = {
            maxValue: 10,
            minValue: 1,
            step: 1,
            inputWidth: 50,
            start: 1,
            plusClick: function (element, val) {
                //console.log(val);
            },
            minusClick: function (element, val) {
                //console.log(val);
            },
            exceptionFun: function (val) {
                //console.log("excep: " + val);
            },
            valueChanged: function (element, val) {
                var prd_price = $('#pid_prc').data("price");
                console.log(prd_price + " --price");
                var total_qty = $('.qtybox').val();
                console.log(total_qty + " --qty");
                var totat_price = prd_price * total_qty;
                console.log(totat_price + " --total");
                $('#pid_prc').html("Price: $" + totat_price.toFixed(2));
            }
        }
        $(".wan-spinner2").WanSpinner(options).css("border-color", "#e1e1e1");
    });
</script>

</body>

</html>
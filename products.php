<?php include 'common-header.php'; ?>
<?php include 'header.php'; ?>
<div class="innrBreadcrm">
    <div class="container">
        <a href="index.php">Home</a> &gt; Products
    </div>
</div>
<div class="section-6">
    <div class="container">
        <div class="s2-block my-5 p-5" style="background: #01e8eb">
            <div class="box">
                <h1 style="color:<?php echo $colors[4] ?>;"><span class="fa fa-user"></span> 5087</h1>
                <p>Buyers</p>
            </div>
            <div class="box">
                <h1 style="color:<?php echo $colors[1] ?>;"><span class="fa fa-line-chart"></span> 1.03 %</h1>
                <p>Grow Up</p>
            </div>
            <div class="box">
                <h1 style="color:<?php echo $colors[3] ?>;">$ 7218k</h1>
                <p>Total Gain</p>
            </div>
        </div>
        <p class="comn-hdng mt-5 pt-5">Shopping The <span>Best Pop Product</span> </p>
        <div class="clearall"></div>
        <div class="s2-block">
            <?php foreach ($config['productSpecs'] as $index => $item): ?>
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
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
</body>

</html>
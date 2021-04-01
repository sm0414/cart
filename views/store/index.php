<?php
/* @var $this yii\web\View */

$this->title = '商城';
?>

<h2 align="center" style="padding-top:20px; margin-bottom:22px;">商品列表</h2>

<div class='info'>

    <?php foreach ($products as $product): ?>
    <div class='infoarea col-xs-4 col-sm-6 col-md-4 col-lg-3' style="height:470px;">

        <div style="height:380px; margin: auto; width: 240px; padding:0 20px; border-style: solid; border-width:1px; border-color: #BDB76B;">
            <ul>
                <li class="img">
                    <a href="goodsDetail/<?= $product['id'] ?>">
                        <?php if($product['image'] == 'https://store-by-laravel.s3.us-east-2.amazonaws.com/images/noimage.jpeg'): ?>
                            <img src="https://store-by-laravel.s3.us-east-2.amazonaws.com/images/noimage.jpeg" />
                        <?php else: ?>
                            <img src="<?= $product['image'] ?>" />
                        <?php endif; ?>
                    </a>
                </li>

                <li class="pname" style="margin-bottom:0; height:80px;">
                    <a href="detail/<?= $product['id'] ?>">
                        <p id="goodsName"><?= $product['name'] ?></p>
                    </a>
                </li>

                <li>價格：<?= $product['price'] ?></li>

                <hr style="margin-bottom: 8px; margin-top: 8px;">

                <li class="col3" style="margin-top:3px;">
                    <a href="javascript:void(0)" onclick="addToCart(<?= $product['id'] ?>)">
                        <img src="https://store-by-laravel.s3.us-east-2.amazonaws.com/images/add_to_cart.png" style="width:110px; height:28px;">
                    </a>

                </li>
            </ul>
        </div>

    </div>
    <?php endforeach; ?>

</div>


<script>
function addToCart(id){
$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});

$.ajax({
type: "get",
url: "http://127.0.0.1/shopping-cart/web/store/add-to-cart?id="+id,
}).then(function(e){
alert("商品已加入購物車！！");
})
}
</script>
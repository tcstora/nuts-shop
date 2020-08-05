<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP Sample Programs</title>
        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <nav class="memnunav">
            <a href="index2.php">商品</a>
            <a href="cart-show.php">カート</a>
            <a href="purchase-input.php">購入</a>
            <a href="login-input.php">ログイン</a>
            <a href="customer-input.php">会員登録</a>
        </nav>
        <hr>
        <form action="product.php" method="post">
            商品検索
<input type="text" name="keyword">
            <input type="submit" value="検索">
        </form>
        <hr>
        <div class="products">
            <article class='product'>
                <a href='detail.php?id=1'>
                    <div class='img'>
                        <img src='image/1.jpg'>
                    </div>
                    <div class='detail'>
                        <span>松の実 </span>
                        <br>
                        <span>700円</span>
                    </div>
                </a>
            </article>
            <article class='product'>
                <a href='detail.php?id=2'>
                    <div class='img'>
                        <img src='image/2.jpg'>
                    </div>
                    <div class='detail'>
                        <span>くるみ </span>
                        <br>
                        <span>270円</span>
                    </div>
                </a>
            </article>
            <article class='product'>
                <a href='detail.php?id=3'>
                    <div class='img'>
                        <img src='image/3.jpg'>
                    </div>
                    <div class='detail'>
                        <span>ひまわりの種 </span>
                        <br>
                        <span>210円</span>
                    </div>
                </a>
            </article>
            <article class='product'>
                <a href='detail.php?id=4'>
                    <div class='img'>
                        <img src='image/4.jpg'>
                    </div>
                    <div class='detail'>
                        <span>アーモンド </span>
                        <br>
                        <span>220円</span>
                    </div>
                </a>
            </article>
            <article class='product'>
                <a href='detail.php?id=5'>
                    <div class='img'>
                        <img src='image/5.jpg'>
                    </div>
                    <div class='detail'>
                        <span>カシューナッツ </span>
                        <br>
                        <span>250円</span>
                    </div>
                </a>
            </article>
            <article class='product'>
                <a href='detail.php?id=6'>
                    <div class='img'>
                        <img src='image/6.jpg'>
                    </div>
                    <div class='detail'>
                        <span>ジャイアントコーン </span>
                        <br>
                        <span>180円</span>
                    </div>
                </a>
            </article>
            <article class='product'>
                <a href='detail.php?id=7'>
                    <div class='img'>
                        <img src='image/7.jpg'>
                    </div>
                    <div class='detail'>
                        <span>ピスタチオ </span>
                        <br>
                        <span>310円</span>
                    </div>
                </a>
            </article>
            <article class='product'>
                <a href='detail.php?id=8'>
                    <div class='img'>
                        <img src='image/8.jpg'>
                    </div>
                    <div class='detail'>
                        <span>マカダミアナッツ </span>
                        <br>
                        <span>600円</span>
                    </div>
                </a>
            </article>
            <article class='product'>
                <a href='detail.php?id=9'>
                    <div class='img'>
                        <img src='image/9.jpg'>
                    </div>
                    <div class='detail'>
                        <span>かぼちゃの種 </span>
                        <br>
                        <span>180円</span>
                    </div>
                </a>
            </article>
            <article class='product'>
                <a href='detail.php?id=10'>
                    <div class='img'>
                        <img src='image/10.jpg'>
                    </div>
                    <div class='detail'>
                        <span>ピーナッツ </span>
                        <br>
                        <span>150円</span>
                    </div>
                </a>
            </article>
            <article class='product'>
                <a href='detail.php?id=11'>
                    <div class='img'>
                        <img src='image/11.jpg'>
                    </div>
                    <div class='detail'>
                        <span>クコの実 </span>
                        <br>
                        <span>400円</span>
                    </div>
                </a>
            </article>
            <article class='product'>
                <a href='detail.php?id=12'>
                    <div class='img'>
                        <img src='image/12.jpg'>
                    </div>
                    <div class='detail'>
                        <span>そら豆 </span>
                        <br>
                        <span>1990円</span>
                    </div>
                </a>
            </article>
            <article class='product'>
                <a href='detail.php?id=13'>
                    <div class='img'>
                        <img src='image/13.jpg'>
                    </div>
                    <div class='detail'>
                        <span>えだ豆 </span>
                        <br>
                        <span>500円</span>
                    </div>
                </a>
            </article>
            <article class='product'>
                <a href='detail.php?id=14'>
                    <div class='img'>
                        <img src='image/14.jpg'>
                    </div>
                    <div class='detail'>
                        <span>小豆 </span>
                        <br>
                        <span>1500円</span>
                    </div>
                </a>
            </article>
        </div>
        <!--product-->
    </body>
</html>

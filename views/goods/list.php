
    <!-- ============================================================= HEADER : END ============================================================= -->		<section id="category-grid">
        <div class="container">

            <!-- ========================================= SIDEBAR ========================================= -->
            <div class="col-xs-12 col-sm-3 no-margin sidebar narrow">
                <div class="widget">
                    <h1 class="border">热卖商品</h1>
                    <ul class="product-list">

                        <?php foreach($this->params['hot'] as $k=>$v): ?>
                        <li class="sidebar-product-list-item">
                            <div class="row">
                                <div class="col-xs-4 col-sm-4 no-margin">
                                    <a href="#" class="thumb-holder">
                                        <img alt="" src="<?= 'http://'.$v->goods_img ?>" data-echo="<?= 'http://'.$v->goods_img ?>" />
                                    </a>
                                </div>
                                <div class="col-xs-8 col-sm-8 no-margin">
                                    <a href="#"><?= $v->goods_name ?> </a>
                                    <div class="price">
                                        <div class="price-current">￥<?= $v->goods_price ?></div>
                                    </div>
                                </div>
                            </div>
                        </li><!-- /.sidebar-product-list-item -->
                        <?php endforeach; ?>


                    </ul><!-- /.product-list -->
                </div><!-- /.widget -->
                <!-- ========================================= FEATURED PRODUCTS : END ========================================= -->
            </div>
            <!-- ========================================= SIDEBAR : END ========================================= -->

            <!-- ========================================= CONTENT ========================================= -->

            <div class="col-xs-12 col-sm-9 no-margin wide sidebar">

                <section id="recommended-products" class="carousel-holder hover small">

                    <div class="title-nav">
                        <h2 class="inverse">推荐商品</h2>
                        <div class="nav-holder">
                            <a href="#prev" data-target="#owl-recommended-products" class="slider-prev btn-prev fa fa-angle-left"></a>
                            <a href="#next" data-target="#owl-recommended-products" class="slider-next btn-next fa fa-angle-right"></a>
                        </div>
                    </div><!-- /.title-nav -->

                    <div id="owl-recommended-products" class="owl-carousel product-grid-holder">

                        <?php  foreach($this->params['tui'] as $k=>$v): ?>
                        <div class="no-margin carousel-item product-item-holder hover size-medium">
                            <div class="product-item">
                                <div class="ribbon red"><span>sale</span></div>
                                <div class="image">
                                    <a href="<?= \yii\helpers\Url::to(['goods/details','goods_id'=>$v->id]) ?>">
                                    <img alt="" src="<?= 'http://'.$v->goods_img ?>" data-echo="<?= 'http://'.$v->goods_img ?>" />
                                    </a>
                                </div>
                                <div class="body">
                                    <div class="title">
                                        <a href="<?= \yii\helpers\Url::to(['goods/details','goods_id'=>$v->id]) ?>"><?= $v->goods_name?></a>
                                    </div>
                                </div>
                                <div class="prices">
                                    <div class="price-current text-right">￥<?= $v->goods_price ?></div>
                                </div>
                                <div class="hover-area">
                                    <div class="add-cart-button">
                                        <a href="<?= \yii\helpers\Url::to(['cart/add','gid'=>$v->id]) ?>" class="le-button">加入购物车</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.carousel-item -->
                        <?php endforeach; ?>

                    </div><!-- /#recommended-products-carousel .owl-carousel -->
                </section><!-- /.carousel-holder -->
                <section id="gaming">
                    <div class="grid-list-products">
                        <h2 class="section-title">所有商品</h2>

                        <div class="control-bar">
                            <div id="popularity-sort" class="le-select" >
                                <select data-placeholder="sort by popularity">
                                    <option value="1">1-100 个用户</option>
                                    <option value="2">101-200 个用户</option>
                                    <option value="3">200+ 个用户</option>
                                </select>
                            </div>

                            <div id="item-count" class="le-select">
                                <select>
                                    <option value="1">24个/页</option>
                                    <option value="2">48个/页</option>
                                    <option value="3">32个/页</option>
                                </select>
                            </div>

                            <div class="grid-list-buttons">
                                <ul>
                                    <li class="grid-list-button-item active"><a data-toggle="tab" href="#grid-view"><i class="fa fa-th-large"></i> 图文</a></li>
                                    <li class="grid-list-button-item "><a data-toggle="tab" href="#list-view"><i class="fa fa-th-list"></i> 列表</a></li>
                                </ul>
                            </div>
                        </div><!-- /.control-bar -->

                        <div class="tab-content">
                            <div id="grid-view" class="products-grid fade tab-pane in active">

                                <div class="product-grid-holder">
                                    <div class="row no-margin">

                                        <?php foreach ($goodsInfo as $k=>$v): ?>
                                        <div class="col-xs-12 col-sm-4 no-margin product-item-holder hover">
                                            <div class="product-item">
                                                <div class="ribbon red"><span>sale</span></div>
                                                <div class="image">
                                                    <a href="<?=  \yii\helpers\Url::to(['goods/details','goods_id'=>$v->id]) ?>">
                                                    <img alt="" src="<?= 'http://'.$v->goods_img ?>" data-echo="<?= 'http://'.$v->goods_img ?>" />
                                                </a>
                                                </div>
                                                <div class="body">
                                                    <div class="label-discount green">-50% sale</div>
                                                    <div class="title">
                                                        <a href="single-product.html"><?= $v->goods_name ?></a>
                                                    </div>
                                                    <div class="brand">sony</div>
                                                </div>
                                                <div class="prices">
                                                    <div class="price-current pull-right">￥<?=$v->goods_price ?></div>
                                                </div>
                                                <div class="hover-area">
                                                    <div class="add-cart-button">
                                                        <a href="<?= \yii\helpers\Url::to(['cart/add','gid'=>$v->id]) ?>" class="le-button">加入购物车</a>
                                                    </div>
                                                </div>
                                            </div><!-- /.product-item -->
                                        </div><!-- /.product-item-holder -->
                                        <?php endforeach; ?>


                                    </div><!-- /.row -->
                                </div><!-- /.product-grid-holder -->

                                <div class="pagination-holder">
                                    <div class="row">

                                        <div class="col-xs-12 col-sm-6 text-left">
                                            <ul class="pagination ">
                                                <?php echo yii\widgets\LinkPager::widget([
                                                    'pagination' => $pager,
                                                    'prevPageLabel' => '&#8249;',
                                                    'nextPageLabel' => '&#8250;',
                                                ]); ?>
                                            </ul>
                                        </div>

                                        <div class="col-xs-12 col-sm-6">
                                            <div class="result-counter">
                                                <span><?= $totalCount ?></span> results
                                            </div>
                                        </div>

                                    </div><!-- /.row -->
                                </div><!-- /.pagination-holder -->
                            </div><!-- /.products-grid #grid-view -->

                            <div id="list-view" class="products-grid fade tab-pane ">
                                <div class="products-list">

                                    <div class="product-item product-item-holder">
                                        <div class="ribbon red"><span>sale</span></div>
                                        <div class="ribbon blue"><span>new!</span></div>
                                        <div class="row">
                                            <div class="no-margin col-xs-12 col-sm-4 image-holder">
                                                <div class="image">
                                                    <img alt="" src="/assets/images/blank.gif" data-echo="/home/images/products/product-01.jpg" />
                                                </div>
                                            </div><!-- /.image-holder -->
                                            <div class="no-margin col-xs-12 col-sm-5 body-holder">
                                                <div class="body">
                                                    <div class="label-discount green">-50% sale</div>
                                                    <div class="title">
                                                        <a href="single-product.html">VAIO Fit Laptop - Windows 8 SVF14322CXW</a>
                                                    </div>
                                                    <div class="brand">sony</div>
                                                    <div class="excerpt">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lobortis euismod erat sit amet porta. Etiam venenatis ac diam ac tristique. Morbi accumsan consectetur odio ut tincidunt.</p>
                                                    </div>
                                                </div>
                                            </div><!-- /.body-holder -->
                                            <div class="no-margin col-xs-12 col-sm-3 price-area">
                                                <div class="right-clmn">
                                                    <div class="price-current">￥1199.00</div>
                                                    <div class="price-prev">￥1399.00</div>
                                                    <div class="availability"><label>存货:</label><span class="available">  现货</span></div>
                                                    <a class="le-button" href="#">加入购物车</a>
                                                </div>
                                            </div><!-- /.price-area -->
                                        </div><!-- /.row -->
                                    </div><!-- /.product-item -->


                                    <div class="product-item product-item-holder">
                                        <div class="ribbon green"><span>bestseller</span></div>
                                        <div class="row">
                                            <div class="no-margin col-xs-12 col-sm-4 image-holder">
                                                <div class="image">
                                                    <img alt="" src="/assets/images/blank.gif" data-echo="/home/images/products/product-02.jpg" />
                                                </div>
                                            </div><!-- /.image-holder -->
                                            <div class="no-margin col-xs-12 col-sm-5 body-holder">
                                                <div class="body">
                                                    <div class="label-discount clear"></div>
                                                    <div class="title">
                                                        <a href="single-product.html">VAIO Fit Laptop - Windows 8 SVF14322CXW</a>
                                                    </div>
                                                    <div class="brand">sony</div>
                                                    <div class="excerpt">
                                                        <div class="star-holder">
                                                            <div class="star" data-score="4"></div>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lobortis euismod erat sit amet porta. Etiam venenatis ac diam ac tristique. Morbi accumsan consectetur odio ut tincidunt.</p>
                                                    </div>
                                                </div>
                                            </div><!-- /.body-holder -->
                                            <div class="no-margin col-xs-12 col-sm-3 price-area">
                                                <div class="right-clmn">
                                                    <div class="price-current">￥1199.00</div>
                                                    <div class="price-prev">￥1399.00</div>
                                                    <div class="availability"><label>存货:</label><span class="not-available">无货</span></div>
                                                    <a class="le-button disabled" href="#">加入购物车</a>
                                                </div>
                                            </div><!-- /.price-area -->
                                        </div><!-- /.row -->
                                    </div><!-- /.product-item -->


                                    <div class="product-item product-item-holder">
                                        <div class="ribbon red"><span>sell</span></div>
                                        <div class="row">
                                            <div class="no-margin col-xs-12 col-sm-4 image-holder">
                                                <div class="image">
                                                    <img alt="" src="/assets/images/blank.gif" data-echo="/home/images/products/product-03.jpg" />
                                                </div>
                                            </div><!-- /.image-holder -->
                                            <div class="no-margin col-xs-12 col-sm-5 body-holder">
                                                <div class="body">
                                                    <div class="label-discount clear"></div>
                                                    <div class="title">
                                                        <a href="single-product.html">VAIO Fit Laptop - Windows 8 SVF14322CXW</a>
                                                    </div>
                                                    <div class="brand">sony</div>
                                                    <div class="excerpt">
                                                        <div class="star-holder">
                                                            <div class="star" data-score="2"></div>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lobortis euismod erat sit amet porta. Etiam venenatis ac diam ac tristique. Morbi accumsan consectetur odio ut tincidunt. </p>
                                                    </div>
                                                </div>
                                            </div><!-- /.body-holder -->
                                            <div class="no-margin col-xs-12 col-sm-3 price-area">
                                                <div class="right-clmn">
                                                    <div class="price-current">￥1199.00</div>
                                                    <div class="price-prev">￥1399.00</div>
                                                    <div class="availability"><label>存货:</label><span class="available">现货</span></div>
                                                    <a class="le-button" href="#">加入购物车</a>
                                                </div>
                                            </div><!-- /.price-area -->
                                        </div><!-- /.row -->
                                    </div><!-- /.product-item -->

                                    <div class="product-item product-item-holder">
                                        <div class="row">
                                            <div class="no-margin col-xs-12 col-sm-4 image-holder">
                                                <div class="image">
                                                    <img alt="" src="/assets/images/blank.gif" data-echo="/home/images/products/product-04.jpg" />
                                                </div>
                                            </div><!-- /.image-holder -->
                                            <div class="no-margin col-xs-12 col-sm-5 body-holder">
                                                <div class="body">
                                                    <div class="label-discount green">-50% sale</div>
                                                    <div class="title">
                                                        <a href="single-product.html">VAIO Fit Laptop - Windows 8 SVF14322CXW</a>
                                                    </div>
                                                    <div class="brand">sony</div>
                                                    <div class="excerpt">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lobortis euismod erat sit amet porta. Etiam venenatis ac diam ac tristique. Morbi accumsan consectetur odio ut tincidunt. </p>
                                                    </div>
                                                </div>
                                            </div><!-- /.body-holder -->
                                            <div class="no-margin col-xs-12 col-sm-3 price-area">
                                                <div class="right-clmn">
                                                    <div class="price-current">￥1199.00</div>
                                                    <div class="price-prev">￥1399.00</div>
                                                    <div class="availability"><label>存货:</label><span class="available">  现货</span></div>
                                                    <a class="le-button" href="#">加入购物车</a>
                                                </div>
                                            </div><!-- /.price-area -->
                                        </div><!-- /.row -->
                                    </div><!-- /.product-item -->

                                    <div class="product-item product-item-holder">
                                        <div class="ribbon green"><span>bestseller</span></div>
                                        <div class="row">
                                            <div class="no-margin col-xs-12 col-sm-4 image-holder">
                                                <div class="image">
                                                    <img alt="" src="/assets/images/blank.gif" data-echo="/home/images/products/product-05.jpg" />
                                                </div>
                                            </div><!-- /.image-holder -->
                                            <div class="no-margin col-xs-12 col-sm-5 body-holder">
                                                <div class="body">
                                                    <div class="label-discount clear"></div>
                                                    <div class="title">
                                                        <a href="single-product.html">VAIO Fit Laptop - Windows 8 SVF14322CXW</a>
                                                    </div>
                                                    <div class="brand">sony</div>
                                                    <div class="excerpt">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lobortis euismod erat sit amet porta. Etiam venenatis ac diam ac tristique. Morbi accumsan consectetur odio ut tincidunt.</p>
                                                    </div>
                                                </div>
                                            </div><!-- /.body-holder -->
                                            <div class="no-margin col-xs-12 col-sm-3 price-area">
                                                <div class="right-clmn">
                                                    <div class="price-current">￥1199.00</div>
                                                    <div class="price-prev">￥1399.00</div>
                                                    <div class="availability"><label>存货:</label><span class="available">  现货</span></div>
                                                    <a class="le-button" href="#">加入购物车</a>
                                                </div>
                                            </div><!-- /.price-area -->
                                        </div><!-- /.row -->
                                    </div><!-- /.product-item -->

                                </div><!-- /.products-list -->

                                <div class="pagination-holder">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 text-left">
                                            <ul class="pagination">
                                                <li class="current"><a  href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                                <li><a href="#">next</a></li>
                                            </ul><!-- /.pagination -->
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="result-counter">
                                                Showing <span>1-9</span> of <span>11</span> results
                                            </div><!-- /.result-counter -->
                                        </div>
                                    </div><!-- /.row -->
                                </div><!-- /.pagination-holder -->

                            </div><!-- /.products-grid #list-view -->

                        </div><!-- /.tab-content -->
                    </div><!-- /.grid-list-products -->

                </section><!-- /#gaming -->
            </div><!-- /.col -->
            <!-- ========================================= CONTENT : END ========================================= -->
        </div><!-- /.container -->
    </section><!-- /#category-grid -->		<!-- ============================================================= FOOTER ============================================================= -->

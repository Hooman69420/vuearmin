<?php
get_includes('head');
get_includes('header');
get_includes('nav');
?>
<!--?php if ( is_front_page() ) { get_includes('middle'); }?-->
<!-- Pwede ra i insert si nav ka header  -->

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->

<!DOCTYPE html>
<html>

<body>
    <div class="clearfix">


    <div id="banner">
        <div class="wrapper">
            <video loop muted controls>
                <source src="<?php bloginfo('template_url');?>/video/banner-vid.mp4" type="video/mp4">
                <source src="<?php bloginfo('template_url');?>/video/banner-vid.ogv" type="video/ogv">
                <source src="<?php bloginfo('template_url');?>/video/banner-vid.webm" type="video/webm">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
    
    <!-- v-on directive that reacts to different types of event -->
    <!-- v-if="True | False" directive that has a bolean if it will shown or not -->
    <!-- v-on:click KARAAN or @click BAG O -->

        <!-- <h1> {{ title }} <span>{{ author }}</span><br class="pc-only">{{age}}</h1>
        <button v-on:click="age++">Increase age</button>
        <button v-on:click="age--">Decrease age</button>
        <div @click="changeTitle('Pota')">ASDASDAD</div> -->

    <!-- <div class="cont-example1">
        <div class="wrapper">
            <div id="samples1">
                <h2>Count</h2>
                <button class="pos-btn" @click="count++">+</button>
                <span>{{ count }}</span>
                <button class="neg-btn" @click="count--">-</button>

                <h3></h3>
                <div class="box" @mouseover="handleEvents">mouseover (enter)</div>
                <div class="box" @mouseleave="handleEvents">mouseleave</div>
                <div class="box" @dblclick="handleEvents">double click</div>
                <div class="box" @mousemove="handlemousemove">Position: {{ x }} and {{ y }}</div>
                <a href="examples" class="prod_show">もっと見る</a>
            </div>
        </div>
    </div> -->
    <div id="samples2">
        <div class="wrapper">
            <div v-if="showBooks">
            <ul>
                <li v-for="book in books" v-bind:class="{ fav: book.isFav }">
                    <img :src="book.img" :alt="sample">
                    <h3>{{ book.title }}</h3>
                    <p>{{ book.author }}</p>
                </li>
            </ul>
            <a v-bind:href="url">Sample</a>
            </div>
        </div>
    </div>

    <div class="cont-about">
        <div class="wrapper">
            <div class="cont-holder">
                <figure><img src="<?php bloginfo('template_url');?>/images/vue-logo.png" alt=""></figure>
                <div class="cont-a-text">
                    <p>Vue (pronounced /vjuː/, like view) is a JavaScript framework for building user interfaces. It builds on top of standard HTML, CSS, and JavaScript and provides a declarative and component-based programming model that helps you efficiently develop user interfaces, be they simple or complex.</p>
                    <a href="about-vue">About Vue</a>
                </div>
            </div>
        </div>
    </div>

    <div class="sec01-cont">
        <div class="wrapper">

                <div class="sec01_title">
                    <h3>コード例<span>Examples</span></h3>
                </div>
    
                <div id="prod_boxes">
                    <!-- Product 1 -->
                    <div class="p_product1">
                        <div class="prod_txt_cont">
                            <a href="javascript:;" class="favorite-button"><img src="https://dummyimage.com/330x260/D13853/fff.png"></a>
                            <h3>商品名</h3>
                            <p>サンプルテキスト</p>
                            <div class="prod_info">
                                <span>{{ quantity }}</span> <button class="pos-btn" @click="count++">+</button><button class="neg-btn" @click="count--">-</button> <small>￥0000</small> (税込)
                            </div>
                        </div>
                    </div>
                    <!-- Product 1 -->
    
                    <!-- Product 2 -->
                    <div class="p_product2">
                        <div class="prod_txt_cont">
                            <a href="javascript:;" class="favorite-button"><img src="https://dummyimage.com/330x260/D13853/fff.png"></a>
                            <h3>商品名</h3>
                            <p>サンプルテキスト</p>
                            <div class="prod_info">
                                <span>{{ quantity }}</span> <button class="pos-btn" @click="quantity++">+</button><button class="neg-btn" @click="quantity--">-</button> <small>￥0000</small> (税込)
                            </div>
                        </div>
                    </div>
                    <!-- Product 2 -->
    
                    <!-- Product 3 -->
                    <div class="p_product3">
                        <div class="prod_txt_cont">
                            <a href="javascript:;" class="favorite-button"><img src="https://dummyimage.com/330x260/D13853/fff.png"></a>
                            <h3>商品名</h3>
                            <p>サンプルテキスト</p>
                            <div class="prod_info">
                                <span>{{ quantity }}</span> <button class="pos-btn" @click="quantity++">+</button><button class="neg-btn" @click="quantity--">-</button> <small>￥0000</small> (税込)
                            </div>
                        </div>
                    </div>
                    <!-- Product 3 -->

                </div>
                <a href="examples" class="prod_show">もっと見る</a>
        </div>
            <!-- End of Pickup Cont -->
    </div>
    <!-- End of Pickup product -->

  
    
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>


        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://unpkg.com/vue@next"></script>
        <script src="<?php bloginfo('template_url');?>/js/vue.js"></script>
        <script src="<?php bloginfo('template_url');?>/js/jquery.js"></script>
        <script src="https://kit.fontawesome.com/32174cb221.js" crossorigin="anonymous"></script>

        <script>
        function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
        x.className += " responsive";
        } else {
        x.className = "topnav";
        }
        }
        </script>

    </div> <!--Clearfix-->
    <?php get_includes('footer');?>
    <?php wp_footer(); ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive ecommerce website design tutorial</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->

</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap');

    :root{
        --black:#2c2c54;
        --orange:#ff9f1a;
    }

    *{
        font-family: 'Nunito', sans-serif;
        margin: 0; padding:0;
        box-sizing: border-box;
        outline: none; border:none;
        text-decoration: none;
        text-transform: capitalize;
        transition: all .2s linear;

    }

    html{
        font-size: 62.5%;
        overflow-x: hidden;
        scroll-padding-top:6rem;
        scroll-behavior: smooth;

    }




    .btn{
        display: inline-block;
        margin-top: 1rem;
        border-radius: .5rem;

        font-weight: bolder;
        font-size: 1.7rem;
        color:#fff;
        cursor: pointer;
        background-color:#e7ab3c ;
        padding:.8rem 3rem;
    }





    #menu-bar{
        font-size: 2.5rem;
        padding: .5rem 1.5rem;
        border:.1rem solid var(--black);
        color:var(--black);
        border-radius: .3rem;
        cursor: pointer;
        display: none;
    }

    .home{
        padding:0;
        position:relative;
    }

    .home .slide-container .slide{
        min-height: 100vh;
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        gap:1.5rem;
        padding:0 9%;
        padding-top: 9rem;
    }

    .home .slide-container .slide .content{
        flex:1 1 40rem;
        animation: slideContent .5s linear 1s backwards;
    }

    @keyframes slideContent{
        0%{
            opacity: 0;
            transform: translateX(-10rem);
        }
    }

    .home .slide-container .slide .image{
        flex:1 1 50rem;
        padding-bottom: 15rem;
        position: relative;
        z-index: 0;
    }

    .home .slide-container .slide .image .shoe{
        width:100%;
        transform: rotate(-35deg);
        animation:shoe .3s linear;
    }

    @keyframes shoe{
        0%{
            transform: rotate(0deg) scale(.5);
        }
    }

    .home .slide-container .slide .image .text{
        position: absolute;
        top:0; left:0;
        z-index: -1;
        animation:shoeText .5s linear .5s backwards;
    }

    @keyframes shoeText{
        0%{
            opacity: 0;
            top:-10rem;
        }
    }

    .home .slide-container .slide .content span{
        font-size: 2rem;
        color:var(--orange);
    }

    .home .slide-container .slide .content h3{
        font-size: 5rem;
        color:var(--black);
    }

    .home .slide-container .slide .content p{
        font-size: 1.7rem;
        color:#666;
        padding:.5rem 0;
    }

    .home .slide-container:nth-child(1) .slide{
        background:url(../images/home-bg-1.jpg) no-repeat;
        background-size: cover;
        background-position: center;
    }

    .home .slide-container:nth-child(2) .slide{
        background:url(../images/home-bg-2.jpg) no-repeat;
        background-size: cover;
        background-position: center;
    }

    .home .slide-container:nth-child(3) .slide{
        background:url(../images/home-bg-3.jpg) no-repeat;
        background-size: cover;
        background-position: center;
    }

    .home .slide-container{
        display: none;
    }

    .home .slide-container.active{
        display: block;
    }

    .home #prev,
    .home #next{
        position: absolute;
        top:50%;
        transform:translateY(-50%);
        border-radius: 50%;
        z-index: 100;
        height:5rem;
        width:5rem;
        line-height: 4.5rem;
        font-size: 2rem;
        color:var(--black);
        border:.2rem solid var(--black);
        cursor: pointer;
        text-align: center;
    }

    .home #prev:hover,
    .home #next:hover{
        color:#fff;
        background:var(--orange);
    }

    .home #prev{
        left:3rem;
    }

    .home #next{
        right:3rem;
    }

    .service .box-container{
        display: flex;
        flex-wrap: wrap;
        gap:1.5rem;
        background:#f9f9f9;
        border:.1rem solid rgba(0,0,0,.1);
        border-radius: .5rem;
        padding:2rem;
    }

    .service .box-container .box{
        text-align: center;
        flex:1 1 30rem
    }

    .service .box-container .box i{
        font-size: 4rem;
        color:var(--orange);
    }

    .service .box-container .box h3{
        font-size: 2rem;
        color:var(--black);
        padding-top: 1rem;
    }

    .service .box-container .box p{
        font-size: 1.5rem;
        color:#666;
        padding:1rem 0;
    }


    @media (max-width:991px){

        html{
            font-size: 55%;
        }

        header{
            padding:2rem;
        }

        section{
            padding:2rem;
        }

    }


</style>
<body>

<!-- header section starts  -->


<!-- header section ends -->
<div id="menu-bar" class="fas fa-bars"></div>
<!-- home section starts  -->


<section class="home" id="home">

    <div class="slide-container active">
        <div class="slide">
            <div class="content">
                <span>My shoes</span>
                <h3>Welcome to My Shoes</h3>
                <p>Website for buying and selling shoes. You can buy shoes from approved international brands such as Nike, Adidas and many other international brands</p>
                <a href="{{url('/shop')}}" class="btn">Shop now</a>
            </div>
            <div class="image">
                <img src="img/slide/home-shoe-3.png" class="shoe" alt="">
                <img src="img/slide/home-text-3.png" class="text" alt="">
            </div>
        </div>
    </div>

    <div class="slide-container">
        <div class="slide">
            <div class="content">
                <span>My shoes</span>
                <h3>Special section in used shoes</h3>
                <p>also possible to buy used shoes of all kinds, shapes and colors You can also sell or display your old and new shoes</p>
                <a href="{{url('/used_shoes')}}" class="btn">Shop now</a>
            </div>
            <div class="image">
                <img src="img/slide/home-shoe-2.png" class="shoe" alt="">
                <img src="img/slide/home-text-2.png" class="text" alt="">
            </div>
        </div>
    </div>

    <div class="slide-container">
        <div class="slide">
            <div class="content">
                <span>My shoes</span>
                <h3>What are you waiting for shop now</h3>
                <p></p>
                <a href="{{url('/shop')}}" class="btn">Shop now</a>
            </div>
            <div class="image">
                <img src="img/slide/home-shoe-1.png" class="shoe" alt="">
                <img src="img/slide/home-text-1.png" class="text" alt="">
            </div>

        </div>
    </div>

    <div id="prev" class="fas fa-chevron-left" onclick="prev()"></div>
    <div id="next" class="fas fa-chevron-right" onclick="next()"></div>

</section>

<!-- home section ends -->

<!-- service section starts  -->


<!-- custom js file link  -->
<script>

    let menu = document.querySelector('#menu-bar');
    let navbar = document.querySelector('.navbar');

    menu.onclick = () =>{
        menu.classList.toggle('fa-times');
        navbar.classList.toggle('active');
    }

    window.onscroll = () =>{
        menu.classList.remove('fa-times');
        navbar.classList.remove('active');
    }

    let slides = document.querySelectorAll('.slide-container');
    let index = 0;

    function next(){
        slides[index].classList.remove('active');
        index = (index + 1) % slides.length;
        slides[index].classList.add('active');
    }

    function prev(){
        slides[index].classList.remove('active');
        index = (index - 1 + slides.length) % slides.length;
        slides[index].classList.add('active');
    }

    document.querySelectorAll('.featured-image-1').forEach(image_1 =>{
        image_1.addEventListener('click', () =>{
            var src = image_1.getAttribute('src');
            document.querySelector('.big-image-1').src = src;
        });
    });

    document.querySelectorAll('.featured-image-2').forEach(image_2 =>{
        image_2.addEventListener('click', () =>{
            var src = image_2.getAttribute('src');
            document.querySelector('.big-image-2').src = src;
        });
    });

    document.querySelectorAll('.featured-image-3').forEach(image_3 =>{
        image_3.addEventListener('click', () =>{
            var src = image_3.getAttribute('src');
            document.querySelector('.big-image-3').src = src;
        });
    });
</script>

</body>
</html>

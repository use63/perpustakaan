<?php 
session_start();

if ($_SESSION['role']) {
    header('Location: /Dashboard');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LiteraHub_user</title>

    <!------------ BOXICON ------------>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!---------- CSS --------------->
    <link rel="stylesheet" href="/public/css/home.css">
</head>
<body>
    <!----------- HEADER ------------>
   <header>
    <a href="#" class="logo">Library</a>
    <nav class="navbar">
        <a class="active" href="/" >home</a>
        <a href="#dishes">category</a>
        <a href="#about">bestbook</a>
        <a href="#menu">blog</a>
    </nav>

    <div class="icons">
        <i class='bx bx-menu' id="menu-bars"></i> 
        <i class='bx bx-search' ></i>
        <i class='bx bxs-heart' ></i>
        <i class='bx bx-cart'></i>
    </div>
   </header> 

<!-------------- HOME -------------->
<section class="home" id="home">
    <div class="home-slider">
        <div class="wrapper">
            <div class="slide">
                <div class="content">
                    <h3>Welcome to online library</h3>
                    <p>Discover, borrow and enjoy the latest book collections.</p>
                    <a href="/login" class="btn">Login</a>
                </div>
                <div class="image">
                    <img src="/public/img/Asset 1.png" alt="">
                </div>
            </div>

            <!-- <div class="slide">
                <div class="content">
                    <span>our special diesh</span>
                    <h3>fried chicken</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    <a href="#" class="btn">order now</a>
                </div>
                <div class="image">
                    <img src="/public/img/Asset 1.png" alt="">
                </div>
            </div>

            <div class="slide">
                <div class="content">
                    <span>our special diesh</span>
                    <h3>spicy noodles</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    <a href="#" class="btn">order now</a>
                </div>
                <div class="image">
                    <img src="/public/img/Asset 1.png" alt="">
                </div>
            </div> -->

        </div>Show
    </div>

</section>

<!----------Book List---------->
<section class="book-list" id="book-list" style="display: none;">
    <h1>Recomendation</h1>
    <div class="box-container">
        <div class="box">
            <a href="#" class="bx bxs-heart"></a>
            <a href="#" class="bx bxs-bookmark"></a>
            <img src="/public/img/book1.jpg" alt="" srcset="">
            <h3>Dark side of the earth</h3>
            <div class="stars">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star-half'></i>
            </div>
            <a href="#" class="btn">Read now</a>
        </div>

        <div class="box">
            <a href="#" class="bx bxs-heart"></a>
            <a href="#" class="bx bxs-bookmark"></a>
            <img src="/public/img/book1.jpg" alt="" srcset="">
            <h3>dark side of the earth</h3>
            <div class="stars">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star-half'></i>
            </div>
            <a href="#" class="btn">Read now</a>
        </div>

        <div class="box">
            <a href="#" class="bx bxs-heart"></a>
            <a href="#" class="bx bxs-bookmark"></a>
            <img src="/public/img/book1.jpg" alt="" srcset="">
            <h3>dark side of the earth</h3>
            <div class="stars">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star-half'></i>
            </div>
            <a href="#" class="btn">Read now</a>
        </div>

        <div class="box">
            <a href="#" class="bx bxs-heart"></a>
            <a href="#" class="bx bxs-bookmark"></a>
            <img src="/public/img/book1.jpg" alt="" srcset="">
            <h3>dark side of the earth</h3>
            <div class="stars">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star-half'></i>
            </div>
            <a href="#" class="btn">Read now</a>
        </div>

        <div class="box">
            <a href="#" class="bx bxs-heart"></a>
            <a href="#" class="bx bxs-bookmark"></a>
            <img src="/public/img/book1.jpg" alt="" srcset="">
            <h3>dark side of the earth</h3>
            <div class="stars">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star-half'></i>
            </div>
            <a href="#" class="btn">Read now</a>
        </div>
    
        <div class="box">
            <a href="#" class="bx bxs-heart"></a>
            <a href="#" class="bx bxs-bookmark"></a>
            <img src="/public/img/book1.jpg" alt="" srcset="">
            <h3>dark side of the earth</h3>
            <div class="stars">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star-half'></i>
            </div>
            <a href="#" class="btn">Read now</a>
        </div>

        <div class="box">
            <a href="#" class="bx bxs-heart"></a>
            <a href="#" class="bx bxs-bookmark"></a>
            <img src="/public/img/book1.jpg" alt="" srcset="">
            <h3>dark side of the earth</h3>
            <div class="stars">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star-half'></i>
            </div>
            <a href="#" class="btn">Read now</a>
        </div>

        <div class="box">
            <a href="#" class="bx bxs-heart"></a>
            <a href="#" class="bx bxs-bookmark"></a>
            <img src="/public/img/book1.jpg" alt="" srcset="">
            <h3>dark side of the earth</h3>
            <div class="stars">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star-half'></i>
            </div>
            <a href="#" class="btn">Read now</a>
        </div>

        <div class="box">
            <a href="#" class="bx bxs-heart"></a>
            <a href="#" class="bx bxs-bookmark"></a>
            <img src="/public/img/book1.jpg" alt="" srcset="">
            <h3>Dark side of the earth</h3>
            <div class="stars">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star-half'></i>
            </div>
            <a href="#" class="btn">Read now</a>
        </div>

        <div class="box">
            <a href="#" class="bx bxs-heart"></a>
            <a href="#" class="bx bxs-bookmark"></a>
            <img src="/public/img/book1.jpg" alt="" srcset="">
            <h3>dark side of the earth</h3>
            <div class="stars">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star-half'></i>
            </div>
            <a href="#" class="btn">Read now</a>
        </div>

        <div class="box">
            <a href="#" class="bx bxs-heart"></a>
            <a href="#" class="bx bxs-bookmark"></a>
            <img src="/public/img/book1.jpg" alt="" srcset="">
            <h3>Dark side of the earth</h3>
            <div class="stars">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star-half'></i>
            </div>
            <a href="#" class="btn">Read now</a>
        </div>

        <div class="box">
            <a href="#" class="bx bxs-heart"></a>
            <a href="#" class="bx bxs-bookmark"></a>
            <img src="/public/img/book1.jpg" alt="" srcset="">
            <h3>dark side of the earth</h3>
            <div class="stars">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star-half'></i>
            </div>
            <a href="#" class="btn">Read now</a>
        </div>

        <div class="box">
            <a href="#" class="bx bxs-heart"></a>
            <a href="#" class="bx bxs-bookmark"></a>
            <img src="/public/img/book1.jpg" alt="" srcset="">
            <h3>dark side of the earth</h3>
            <div class="stars">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star-half'></i>
            </div>
            <a href="#" class="btn">Read now</a>
        </div>

        <div class="box">
            <a href="#" class="bx bxs-heart"></a>
            <a href="#" class="bx bxs-bookmark"></a>
            <img src="/public/img/book1.jpg" alt="" srcset="">
            <h3>dark side of the earth</h3>
            <div class="stars">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star-half'></i>
            </div>
            <a href="#" class="btn">Read now</a>
        </div>

        <div class="box">
            <a href="#" class="bx bxs-heart"></a>
            <a href="#" class="bx bxs-bookmark"></a>
            <img src="/public/img/book1.jpg" alt="" srcset="">
            <h3>dark side of the earth</h3>
            <div class="stars">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star-half'></i>
            </div>
            <a href="#" class="btn">Read now</a>
        </div>
    
        <div class="box">
            <a href="#" class="bx bxs-heart"></a>
            <a href="#" class="bx bxs-bookmark"></a>
            <img src="/public/img/book1.jpg" alt="" srcset="">
            <h3>dark side of the earth</h3>
            <div class="stars">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star-half'></i>
            </div>
            <a href="#" class="btn">Read now</a>
        </div>

        <div class="box">
            <a href="#" class="bx bxs-heart"></a>
            <a href="#" class="bx bxs-bookmark"></a>
            <img src="/public/img/book1.jpg" alt="" srcset="">
            <h3>dark side of the earth</h3>
            <div class="stars">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star-half'></i>
            </div>
            <a href="#" class="btn">Read now</a>
        </div>

        <div class="box">
            <a href="#" class="bx bxs-heart"></a>
            <a href="#" class="bx bxs-bookmark"></a>
            <img src="/public/img/book1.jpg" alt="" srcset="">
            <h3>dark side of the earth</h3>
            <div class="stars">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star-half'></i>
            </div>
            <a href="#" class="btn">Read now</a>
        </div>

        <div class="box">
            <a href="#" class="bx bxs-heart"></a>
            <a href="#" class="bx bxs-bookmark"></a>
            <img src="/public/img/book1.jpg" alt="" srcset="">
            <h3>Dark side of the earth</h3>
            <div class="stars">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star-half'></i>
            </div>
            <a href="#" class="btn">Read now</a>
        </div>

        <div class="box">
            <a href="#" class="bx bxs-heart"></a>
            <a href="#" class="bx bxs-bookmark"></a>
            <img src="/public/img/book1.jpg" alt="" srcset="">
            <h3>dark side of the earth</h3>
            <div class="stars">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star-half'></i>
            </div>
            <a href="#" class="btn">Read now</a>
        </div>
    </div>
</section>
<!-----------Footer----------->
<div class="footer" style="margin-top: 1em">
    <p>2024 &copy; Rian Kurniawan | Nabil Rinda Al-Bara</p>
</div>

</body>
</html>
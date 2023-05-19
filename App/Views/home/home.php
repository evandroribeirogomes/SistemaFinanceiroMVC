<?php
require "../layouts/header.php";
?>

<nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
    </label>
    <label class="logo"><img src="../../../public/img/logoBranca3.png" alt=""></label>
    <ul>
        <li><a href="./login.php">Login</a></li>
    </ul>
</nav>
<main class="container align-content-center d-flex justify-content-center p-5">
    <div class="row">
        <aside class="col-xl-6 col-12">
            <h2>Sejam bem-vindos e conheçam NuAzul</h2>
            <p style="margin: 20px 0">NuAzul foi desenvolvido para você, que deseja dar um Up em sua vida financeira, organizando suas contas com um sistema que atende as suas necessidades</p>
        </aside>
        <div class="col-xl-6 col-12">
            <img src="../../../public/img/home.png" alt="">
        </div>
    </div>
</main>
<?php
require "../layouts/footer.php";
?>
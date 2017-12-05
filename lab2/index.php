<?php
session_start();
print_r($_GET);

if(isset($_GET['logout'])) {
    session_unset();
    session_destroy();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>World Times</title>
    <meta charset="UTF-8">
</head>
<body>
<header>
    <h3 align="center">
        <?php
            if (isset($_COOKIE['user_name']) && (isset($_COOKIE["user_surname"]))) {
                $user_name = $_COOKIE['user_name'];
                $user_surname = $_COOKIE["user_surname"];
                echo "Nice to meet you again ".$user_name." ".$user_surname;
            } else {
                echo "It seems to me, we hadn't met before. Don't you want to <a href='register.php'>sign up</a>?";
            }
        ?>
    </h3>
    <h1 align="center">Lorem Ipsum Times</h1>
    <nav>
        <a href="index.php">Main</a>
        <a href="https://www.lipsum.com">Lorem Ipsum Website</a>
        <a href="https://www.facebook.com">Facebook</a>
        <a href="register.php">Register</a>
    </nav>
    <?php
        if (isset($_SESSION['user_name'])) {
            echo "<a href='?logout'>Logout</a>";
        }
    ?>
</header>

<aside>
    <p>This is Lorem Ipsum text, which is used for presentation in typographic.</p>
</aside>

<article>
    <header>
        <h3>Lorem Ipsum?</h3>
    </header>
    <section>
        <h4>What is Lorem Ipsum?</h4>
        <p>
            <mark>Lorem Ipsum</mark> is simply dummy text of the printing and typesetting industry. <mark>Lorem Ipsum</mark> has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing <mark>Lorem Ipsum</mark> passages, and more recently with desktop publishing software like Aldus PageMaker including versions of <mark>Lorem Ipsum</mark>.
        </p>
    </section>
    <section>
        <h4>Why do we use it?</h4>
        <p>
            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
        </p>
    </section>
    <section>
        <h4>Where does it come from?</h4>
        <p>
            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
        </p>
    </section>
    <section>
        <h4>Where can I get some?</h4>
        <p>
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
        </p>
    </section>
</article>

<footer>
    <details>
        <summary>Copyright 45 BC - 2017</summary>
        <p>Yes, I've put here copyright. 'Cause it's LOREM IPSUM</p>
        <p>Everybody loves Lorem Ipsum. Grab some Lorem Ipsum for you.</p>
    </details>
</footer>

</body>
</html>

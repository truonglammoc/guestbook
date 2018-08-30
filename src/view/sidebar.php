<div class="w3-sidebar w3-bar-block">
    <img src="res/img/logo-hae-group.png" />
    <hr>
    <p>Guestbook</p>
    <p>Feel free to leave us a short<br />message to tell us what you<br />think to our services</p>
    <a href="#" id="add-guest-book" data-toggle="modal" data-target="#myModal"><button type="button" class="btn btn-danger btn-lg">Post a Message</button></a>
    <?php
    if (isset($_SESSION["auth"]) && $_SESSION["auth"] === true) {
        echo '<a href="#" class="authenticate" id ="admin-logout">Logout</a>';
    } else {
        echo '<a href="#" class="authenticate" id ="admin-login" data-toggle="modal" data-target="#modalLoginForm">Admin Login</a>';
    }
    ?>
    </div>

<!DOCTYPE html>
<html>
    <?php require_once 'header.php' ?>
    <body>
        <form action="/" method="POST" name="form1" id="form1">
            <!-- Sidebar -->
            <?php require_once 'sidebar.php' ?>
            <!-- Page Content -->
            <div class="page-content">
                <div class="w3-container">
                    <div class="py-5">
                        <div class="container">
                        <?php
                        foreach ($listPosts as $key => $item) {
                            if ($key % 2 == 0) {
                                echo '<div class="row">';
                            }
                            echo '
                            <div class="col-md-6"><div class="card"><div class="card-body">
                                <p class="card-text p-y-1">' . $item['message'] . '</p>
                                <div class="d-inline-block p-2">
                                    <label class="visitor">' . $item['name'] . '</label><br/>
                                    <label class="date-time">' . date('jS F, Y \a\t h:ia', strtotime($item['update_date'])) . '</label>
                                </div>
                                ' . ((isset($_SESSION["auth"]) && $_SESSION["auth"] === true) ?
                                '<div class="d-inline-block p-2">
                                    <a href="#" value="' . $item['id'] . '" class="edit" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i></a>
                                    <a href="#" value="' . $item['id'] . '" class="delete"><i class="fa fa-trash-alt"></i></a>
                                </div>' : '') . '
                            </div></div></div>';
                            if ($key % 2 == 1) {
                                echo '</div>';
                            }
                        }
                        ?>
                        </div>
                    </div>
                </div>
                <!-- Footer -->
                <?php require_once 'footer.php' ?>
            </div>
            <?php require_once 'modal.php' ?>
                <?php require_once 'login.php' ?>
        </form>
    </body>
</html>
<?php require_once 'res/js/posts.js' ?>
<?php require_once 'res/js/login.js' ?>
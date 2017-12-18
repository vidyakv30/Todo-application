<!--Page to define the navigation bar-->

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <img class="navbar-brand" style="padding:5px!important" src="resources/Todo.png" alt="To Do application">
            <p class="navbar-brand" >To-Do Application</p>
        </div>
        <?php
        session_start();
        if (isset($_SESSION['userID'])) {
            ?>
        <div class="collapsed" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

                <li><a href="index.php">My Tasks</a></li>
            </ul>
        </div>

            <div>

                <ul class="nav navbar-nav navbar-right">
                    <li><p><b><?php print_r($_SESSION['userName']) ?></b> <br>
                         <a href="index.php?page=accounts&action=edit"> Edit Profile</a> </p>
                    </li>
                    <li>
                        <button type="button" onclick="location.href='index.php?page=accounts&action=logout';"
                                class="btn btn-default" aria-label="Right Align" title="Logout">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </button>
                    </li>
                </ul>
            </div>
        <?php }
        ?>
    </div>
</nav>



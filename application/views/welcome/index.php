<!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="#">CI++</a>

            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li class="nav-header">Nav header</li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form pull-right">
                    <input class="span2" type="text" placeholder="Email">
                    <input class="span2" type="password" placeholder="Password">
                    <button type="submit" class="btn">Sign in</button>
                </form>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>

<div class="container">

    <!-- Main hero unit for a primary marketing message or call to action -->
    <div class="hero-unit">
        <p>CI++ is an upgraded CodeIgniter skeleton application with added layouting,
            widget and helper capabilities, and with integrated HTML5 Boilerplate and Twitter Bootstrap. It also
            features examples of these implementations but for more information, you should probably read the <a
                    href="http://www.bitfalls.com/2013/01/ci-codeigniter-with-html5-boilerplate.html"
                    title="CI++ - CodeIgniter with layouts, H5BP and Bootstrap">blog post in which it is explained</a>.
        </p>
        <p>A prepared database demo is available, too. See models/test_model, and run createTable() to create the
        test table (see the demo method of the welcome controller), but not before you set your DB up as per
            information in the config/database.php file!</p>
        <p>Read the classes for in-depth documentation, it's all there. Also, after you install the table, you can
        try out the URL demo in which one url fetches one value from the DB, and another fetches a different value,
        and the only difference is one param. The links for this are here (pay attention to the URLs):</p>
        <p>
            <a href="/welcome/urldemo/param/1" title="Getting value 1 from DB table">Get value 1 from db table.</a>
        </p>
        <p>
            <a href="/welcome/urldemo/param/2" title="Getting value 1 from DB table">Get value 2 from db table.</a>
        </p>
    </div>

    <!-- Example row of columns -->
    <div class="row">
        {{lf_leftbox}}
        {{vf_midbox}}
        <div class="span4">
            <h2>Layouts</h2>

            <p>To switch out a layout, simply copy the default one and change what you want. It's hard coded to use
            Twitter Bootstrap and HTML5 Boilerplate, but that's all editable. I might add a dynamic asset manager
            for easier dealing with JS and CSS files soon, but a big emphasis on "might".</p>

            <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
    </div>

    <hr>

    <footer>
        <p>&copy; Company <?php echo date('Y'); ?></p>
    </footer>

</div> <!-- /container -->

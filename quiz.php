<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("head.php") ?>
    <style>
        .video-container {
            position: relative;
            padding-bottom: 56.25%;
            padding-top: 30px;
            height: 0;
            overflow: hidden;
        }

        .video-container iframe,
        .video-container object,
        .video-container embed {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
</head>

<body>

    <!-- ======= Mobile nav toggle button ======= -->
    <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    <!-- ======= Header ======= -->
    <?php include("navbar.php") ?>
    <!-- End Header -->

    <main id="main">
        <!-- ======= Facts Section ======= -->
        <section id="facts" class="facts">
            <div class="container">

                <div class="section-title">
                    <h2>Review Session About Me</h2>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>Quick Test For You</h5>
                            </div>
                            <div class="card-body">
                                <!-- Name -->
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select" class="form-control-label">Name</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" name="name" class="form-control" placeholder="Enter your name">
                                    </div>
                                </div>
                                <!-- Gender -->
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select" class="form-control-label">Gender</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="radio" name="gender" id="male">
                                        <label>Male</label>
                                        <input type="radio" name="gender" id="female">
                                        <label>Female</label>
                                    </div>
                                </div>
                                <!-- Role Model -->
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select" class="form-control-label">Role Model</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="progLang" class=" form-control">
                                            <option value="0">Select My Role Model</option>
                                            <option value="jipyeong">Han Ji Pyeong</option>
                                            <option value="teme">Teme Abdullah</option>
                                            <option value="sultan">Sultan Nazrin Shah</option>
                                            <option value="dosan">Nam Do San</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Programming Language -->
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select" class="form-control-label">Programming Language I Learn</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="cplusplus" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">C++</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="js" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">Javascript</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="java" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">Java</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="laravel" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">Laravel</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="html" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">HTML</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="phyton" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">phyton</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="php" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">PHP</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="vb" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">Visual Basic</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="nodejs" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">NodeJS</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="react" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">React</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- Interest I Like -->
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select" class="form-control-label">Interests</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="progLang" class=" form-control">
                                            <option value="0">Select My Interest</option>
                                            <option value="web">Web Development</option>
                                            <option value="jipyeong">Han Ji Pyeong</option>
                                            <option value="mobile">Mobile Development</option>
                                            <option value="AI">Artificial Intelligence</option>
                                            <option value="network">Security and Networking</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer" style="text-align: center;">
                                <button type="reset" class="btn btn-danger btn-md">
                                    <i class="fa fa-ban"></i> Reset
                                </button>
                                <button type="submit" class="btn btn-success btn-md">
                                    <i class="fa fa-send"></i> Submit
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>#TeamHanJiPyeong</h5>
                            </div>
                            <br>
                            <div class="card-body video-container">
                                <iframe width="100%" height="auto" src="https://www.youtube.com/embed/DNe2Yqxxdwg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="card-footer vide0-container">
                            <iframe width="100%" height="auto" src="https://www.youtube.com/embed/wxVyzTpDnWw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Facts Section -->
    </main>
    <!-- End #main -->

    <!-- Back To Top -->
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <?php include("script.php") ?>

</body>

</html>
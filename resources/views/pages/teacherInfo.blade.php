<!DOCTYPE html>
<html lang="en">


<head>
    <title>Teachers Details</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="EEducation master is one of the best eEducational html template, it's suitable for all eEducation websites like university,college,school,online eEducation,tution center,distance eEducation,computer eEducation">
    <meta name="keyword"
        content="eEducation html template, university template, college template, school template, online eEducation template, tution center template">
    <!-- FAV ICON(BROWSER TAB ICON) -->
    <link rel="shortcut icon" href="images/fav.ico" type="image/x-icon">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700"
        rel="stylesheet">
    <!-- FONTAWESOME ICONS -->
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <!-- ALL CSS FILES -->
    <link href="/css/materialize.css" rel="stylesheet">
    <link href="/css/bootstrap.css" rel="stylesheet" />
    <link href="/css/style.css" rel="stylesheet" />
    <!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
    <link href="/css/style-mob.css" rel="stylesheet" />

<body>
    <!--== MAIN CONTRAINER ==-->
    <div class="container-fluid sb1">
        <div class="row">
            <!--== LOGO ==-->
            <div class="col-md-2 col-sm-3 col-xs-6 sb1-1">
                <a href="#" class="btn-close-menu"><i class="fa fa-times" aria-hidden="true"></i></a>
                <a href="#" class="atab-menu"><i class="fa fa-bars tab-menu" aria-hidden="true"></i></a>
                <a href="/admin-dashboard" class="logo"><img src="images/logo1.png" alt="" />
                </a>
            </div>
            <!--== SEARCH ==-->
            <div class="col-md-6 col-sm-6 mob-hide">
                <form class="app-search">
                    <input type="text" placeholder="Search..." class="form-control">
                    <a href="#"><i class="fa fa-search"></i></a>
                </form>
            </div>
            <!--== NOTIFICATION ==-->
            <div class="col-md-2 tab-hide">
                <div class="top-not-cen">
                    <a class='waves-effect btn-noti' href="admin-all-enquiry.html" title="all enquiry messages"><i
                            class="fa fa-commenting-o" aria-hidden="true"></i><span>5</span></a>
                    <a class='waves-effect btn-noti' href="admin-course-enquiry.html" title="course booking messages"><i
                            class="fa fa-envelope-o" aria-hidden="true"></i><span>5</span></a>
                    <a class='waves-effect btn-noti' href="admin-admission-enquiry.html" title="admission enquiry"><i
                            class="fa fa-tag" aria-hidden="true"></i><span>5</span></a>
                </div>
            </div>
            <!--== MY ACCCOUNT ==-->
            <div class="col-md-2 col-sm-3 col-xs-6">
                <!-- Dropdown Trigger -->
                <a class='waves-effect dropdown-button top-user-pro' href='#' data-activates='top-menu'><img
                        src="images/user/6.png" alt="" />My Account <i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>

                <!-- Dropdown Structure -->
                <ul id='top-menu' class='dropdown-content top-menu-sty'>
                    <li><a href="admin-panel-setting.html" class="waves-effect"><i class="fa fa-cogs"
                                aria-hidden="true"></i>Admin Setting</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="#" class="ho-dr-con-last waves-effect"><i class="fa fa-sign-in" aria-hidden="true"></i>
                            Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--== BODY CONTNAINER ==-->
    <div class="container-fluid sb2">
        <div class="row">
            <div class="sb2-1">
                <!--== LEFT MENU ==-->
                <div class="sb2-13">
                    <ul class="collapsible">
                        <li><a href="/admin-dashboard">
                                <center><i class="fa fa-cogs"></i> <br>Administration</center>
                            </a>
                        </li>
                        <li><a href="/admin-classes">
                                <center><i class="fa fa-folder-o"></i> <br>Classes </center>
                            </a>
                        </li>

                        <!--== Students ==-->
                        <li><a href="javascript:void(0)" class="collapsible-header">
                                <center><i class="fa fa-users"></i><br> El??ves </center>
                            </a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="/eleve">Afficher El??ves</a>
                                    </li>
                                    <li><a href="/admin-createStudent">Ajouter nouveau El??ve</a>
                                    </li>
                                    <li><a href="/parents">Afficher Liste des parents</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="/admin-courses">
                                <center><i class="fa fa-graduation-cap"></i> <br>Mati??res </center>
                            </a>
                        </li>

                        <!--== Teachers ==-->
                        <li><a href="javascript:void(0)" class="collapsible-header">
                                <center><i class="fa fa-user"></i><br> Professeurs </center>
                            </a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="/admin-teachers">Afficher Enseignants</a>
                                    </li>
                                    <li><a href="/admin-createTeacher">Ajouter nouveau Enseignant</a>
                                    </li>
                                </ul>
                            </div>
                        </li>


                        <li><a href="/admin-teachers">
                                <center><i class="fa fa-map-marker"></i><br> Salles </center>
                            </a>
                        </li>
                        <li><a href="/admin-teachers">
                                <center><i class="fa fa-calendar"></i><br>Emplois du temps</center>
                            </a>
                        </li>
                        <li><a href="/admin-teachers">
                                <center><i class="fa fa-list"></i><br> Absences </center>
                            </a>
                        </li>
                        <li><a href="/admin-teachers">
                                <center><i class="fa fa-bars"></i> <br>Examen et Cat??gories </center>
                            </a>
                        </li>
                        <li><a href="/admin-teachers">
                                <center><i class="fa fa-flag-o"></i> <br>Notes </center>
                            </a>
                        </li>
                        <li><a href="/admin-teachers">
                                <center><i class="fa fa-rocket"></i><br> Affectation de Transport </center>
                            </a>
                        </li>
                        <li><a href="/admin-teachers">
                                <center><i class="fa fa-credit-card"></i> <br>Finances </center>
                            </a>
                        </li>
                        <li><a href="/admin-teachers">
                                <center><i class="fa fa-trophy"></i> <br>Activit??s </center>
                            </a>
                        </li>
                        <li><a href="/admin-teachers">
                                <center><i class="fa fa-book"></i><br> Biblioth??que </center>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--== BODY INNER CONTAINER ==-->


            <div class="sb2-2">
                <h1>D??tails Professeur</h1>
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="/admin-dashboard"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="/admin-students"> EleveE</a>
                        </li>
                        <li class="page-back"><a href="#"><i class="fa fa-backward" aria-hidden="true"></i>
                                Back</a>
                        </li>
                    </ul>
                </div>
                <!--== breadcrumbs ==-->
                <div class="col-md-12">
                    <div class="horizontal-tab product-tab">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1" data-toggle="tab">Eleve</a></li>
                            <li><a href="#tab2" data-toggle="tab">Parents</a></li>
                            <li><a href="#tab3" data-toggle="tab">Suivi</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="tab1">
                                <div class="sb2-2-3">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="box-inn-sp admin-form">
                                                <div class="inn-title">
                                                    <h4>Information El??ve</h4>
                                                    <p>Here you can edit your website basic details URL, Phone, Email,
                                                        Address, User and password and more</p>
                                                </div>
                                                <div class="tab-inn">
                                                    <form>
                                                        <div class="row">
                                                            <div class="input-field col s6">
                                                                <input type="text" value="" class="validate" required>
                                                                <label class="">First name</label>
                                                            </div>
                                                            <div class="input-field col s6">
                                                                <input type="text" value="" class="validate" required>
                                                                <label class="">Last name</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s6">
                                                                <input type="number" value="" class="validate" required>
                                                                <label class="">Phone number</label>
                                                            </div>
                                                            <div class="input-field col s6">
                                                                <input type="email" class="validate" value="" required>
                                                                <label class="">Email is</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s6">
                                                                <input type="text" value="" class="validate">
                                                                <label class="">City</label>
                                                            </div>
                                                            <div class="input-field col s6">
                                                                <input type="text" value="" class="validate">
                                                                <label class="">Country</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s6">
                                                                <input type="password" value="" class="validate">
                                                                <label class="">Password</label>
                                                            </div>
                                                            <div class="input-field col s6">
                                                                <input type="password" value="" class="validate">
                                                                <label class="">Confirm Password</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s6">
                                                                <input type="password" value="" class="validate">
                                                                <label class="">Password</label>
                                                            </div>
                                                            <div class="input-field col s6">
                                                                <input type="password" value="" class="validate">
                                                                <label class="">Confirm Password</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s6">
                                                                <input type="password" value="" class="validate">
                                                                <label class="">Password</label>
                                                            </div>
                                                            <div class="input-field col s6">
                                                                <input type="password" value="" class="validate">
                                                                <label class="">Confirm Password</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s6">
                                                                <input type="password" value="" class="validate">
                                                                <label class="">Password</label>
                                                            </div>
                                                            <div class="input-field col s6">
                                                                <input type="password" value="" class="validate">
                                                                <label class="">Confirm Password</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s6">
                                                                <input type="password" value="" class="validate">
                                                                <label class="">Password</label>
                                                            </div>
                                                            <div class="input-field col s6">
                                                                <input type="password" value="" class="validate">
                                                                <label class="">Confirm Password</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s6">
                                                                <input type="password" value="" class="validate">
                                                                <label class="">Password</label>
                                                            </div>
                                                            <div class="input-field col s6">
                                                                <input type="password" value="" class="validate">
                                                                <label class="">Confirm Password</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s6">
                                                                <input type="password" value="" class="validate">
                                                                <label class="">Password</label>
                                                            </div>
                                                            <div class="input-field col s6">
                                                                <input type="password" value="" class="validate">
                                                                <label class="">Confirm Password</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s6">
                                                                <input type="password" value="" class="validate">
                                                                <label class="">Password</label>
                                                            </div>
                                                            <div class="input-field col s6">
                                                                <input type="password" value="" class="validate">
                                                                <label class="">Confirm Password</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s6">
                                                                <input type="password" value="" class="validate">
                                                                <label class="">Password</label>
                                                            </div>
                                                            <div class="input-field col s6">
                                                                <input type="password" value="" class="validate">
                                                                <label class="">Confirm Password</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s6">
                                                                <input type="password" value="" class="validate">
                                                                <label class="">Password</label>
                                                            </div>
                                                            <div class="input-field col s6">
                                                                <input type="password" value="" class="validate">
                                                                <label class="">Confirm Password</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s6">
                                                                <input type="password" value="" class="validate">
                                                                <label class="">Password</label>
                                                            </div>
                                                            <div class="input-field col s6">
                                                                <input type="password" value="" class="validate">
                                                                <label class="">Confirm Password</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <input type="text" value="" class="validate">
                                                                <label>Student id</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="file-field input-field col s12">
                                                                <div class="btn admin-upload-btn">
                                                                    <span>File</span>
                                                                    <input type="file">
                                                                </div>
                                                                <div class="file-path-wrapper">
                                                                    <input class="file-path validate" type="text"
                                                                        placeholder="Profile image">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <i class="waves-effect waves-light btn-large waves-input-wrapper"
                                                                    style=""><input type="submit"
                                                                        class="waves-button-input"></i>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="box-inn-sp admin-form">
                                                <div class="inn-title">
                                                    <h4>Information El??ve</h4>
                                                    <p>Here you can edit your website basic details URL, Phone, Email,
                                                        Address, User and password and more</p>
                                                </div>
                                                <div class="tab-inn">
                                                    <form>
                                                        <div class="row">
                                                            <div class="input-field col s6">
                                                                <input type="text" value="" class="validate" required>
                                                                <label class="">First name</label>
                                                            </div>
                                                            <div class="input-field col s6">
                                                                <input type="text" value="" class="validate" required>
                                                                <label class="">Last name</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s6">
                                                                <input type="number" value="" class="validate" required>
                                                                <label class="">Phone number</label>
                                                            </div>
                                                            <div class="input-field col s6">
                                                                <input type="email" class="validate" value="" required>
                                                                <label class="">Email is</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s6">
                                                                <input type="text" value="" class="validate">
                                                                <label class="">City</label>
                                                            </div>
                                                            <div class="input-field col s6">
                                                                <input type="text" value="" class="validate">
                                                                <label class="">Country</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s6">
                                                                <input type="password" value="" class="validate">
                                                                <label class="">Password</label>
                                                            </div>
                                                            <div class="input-field col s6">
                                                                <input type="password" value="" class="validate">
                                                                <label class="">Confirm Password</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <input type="text" value="" class="validate">
                                                                <label>Student id</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="file-field input-field col s12">
                                                                <div class="btn admin-upload-btn">
                                                                    <span>File</span>
                                                                    <input type="file">
                                                                </div>
                                                                <div class="file-path-wrapper">
                                                                    <input class="file-path validate" type="text"
                                                                        placeholder="Profile image">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <i class="waves-effect waves-light btn-large waves-input-wrapper"
                                                                    style=""><input type="submit"
                                                                        class="waves-button-input"></i>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="box-inn-sp admin-form">
                                                <div class="inn-title">
                                                    <h4>Information El??ve</h4>
                                                    <p>Here you can edit your website basic details URL, Phone, Email,
                                                        Address, User and password and more</p>
                                                </div>
                                                <div class="tab-inn">
                                                    <form>
                                                        <div class="row">
                                                            <div class="input-field col s6">
                                                                <input type="text" value="" class="validate" required>
                                                                <label class="">First name</label>
                                                            </div>
                                                            <div class="input-field col s6">
                                                                <input type="text" value="" class="validate" required>
                                                                <label class="">Last name</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s6">
                                                                <input type="number" value="" class="validate" required>
                                                                <label class="">Phone number</label>
                                                            </div>
                                                            <div class="input-field col s6">
                                                                <input type="email" class="validate" value="" required>
                                                                <label class="">Email is</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s6">
                                                                <input type="text" value="" class="validate">
                                                                <label class="">City</label>
                                                            </div>
                                                            <div class="input-field col s6">
                                                                <input type="text" value="" class="validate">
                                                                <label class="">Country</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s6">
                                                                <input type="password" value="" class="validate">
                                                                <label class="">Password</label>
                                                            </div>
                                                            <div class="input-field col s6">
                                                                <input type="password" value="" class="validate">
                                                                <label class="">Confirm Password</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <input type="text" value="" class="validate">
                                                                <label>Student id</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="file-field input-field col s12">
                                                                <div class="btn admin-upload-btn">
                                                                    <span>File</span>
                                                                    <input type="file">
                                                                </div>
                                                                <div class="file-path-wrapper">
                                                                    <input class="file-path validate" type="text"
                                                                        placeholder="Profile image">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <i class="waves-effect waves-light btn-large waves-input-wrapper"
                                                                    style=""><input type="submit"
                                                                        class="waves-button-input"></i>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab2">
                                <div class="sb2-2-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="box-inn-sp admin-form">
                                                <div class="inn-title">
                                                    <h4>Information Parents</h4>
                                                    <p>Here you can edit your website basic details URL, Phone, Email,
                                                        Address, User and password and more</p>
                                                </div>
                                                <div class="tab-inn">
                                                    <form>
                                                        <div class="row">
                                                            <div class="input-field col s6">
                                                                <input type="text" value="" class="validate" required>
                                                                <label class="">First name</label>
                                                            </div>
                                                            <div class="input-field col s6">
                                                                <input type="text" value="" class="validate" required>
                                                                <label class="">Last name</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s6">
                                                                <input type="number" value="" class="validate" required>
                                                                <label class="">CIN</label>
                                                            </div>
                                                            <div class="input-field col s6">
                                                                <input type="text" class="validate" value="" required>
                                                                <label class="">Profession</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s6">
                                                                <input type="text" value="" class="validate">
                                                                <label class="">Adresse</label>
                                                            </div>
                                                            <div class="input-field col s6">
                                                                <input type="text" value="" class="validate">
                                                                <label class="">Ville</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s6">
                                                                <input type="tel" value="" class="validate">
                                                                <label class="">T??l??phone</label>
                                                            </div>
                                                            <div class="input-field col s6">
                                                                <input type="tel" value="" class="validate">
                                                                <label class="">T??l??phone Domicile</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <input type="email" value="" class="validate">
                                                                <label>Email</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <input type="text" value="" class="validate">
                                                                <label>Type De Relation</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="file-field input-field col s12">
                                                                <div class="btn admin-upload-btn">
                                                                    <span>File</span>
                                                                    <input type="file">
                                                                </div>
                                                                <div class="file-path-wrapper">
                                                                    <input class="file-path validate" type="text"
                                                                        placeholder="Profile image">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <i class="waves-effect waves-light btn-large waves-input-wrapper"
                                                                    style=""><input type="submit"
                                                                        class="waves-button-input"></i>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab3">
                                <h1>hello</h1>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <!--Import jQuery before materialize.js-->
    <script src="/js/main.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/materialize.min.js"></script>
    <script src="/js/custom.js"></script>
</body>


</html>

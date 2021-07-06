<!DOCTYPE html>
<html lang="en">


<head>
    <title>Students</title>
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
                                <center><i class="fa fa-users"></i><br> Elèves </center>
                            </a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="/eleve">Afficher Elèves</a>
                                    </li>
                                    <li><a href="/admin-createStudent">Ajouter nouveau Elève</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="/admin-courses">
                                <center><i class="fa fa-graduation-cap"></i> <br>Matières </center>
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
                                <center><i class="fa fa-bars"></i> <br>Examen et Catégories </center>
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
                                <center><i class="fa fa-trophy"></i> <br>Activités </center>
                            </a>
                        </li>
                        <li><a href="/admin-teachers">
                                <center><i class="fa fa-book"></i><br> Bibliothèque </center>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--== BODY INNER CONTAINER ==-->
            <div class="sb2-2">
                <h4>Liste des Elèves Inscrits</h4>
                <!--== breadcrumbs ==-->
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="index-2.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Users(Students)</a>
                        </li>
                        <li class="page-back"><a href="index-2.html"><i class="fa fa-backward" aria-hidden="true"></i>
                                Retour</a>
                        </li>
                    </ul>
                </div>

                <!--== User Details ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Liste des Elèves Inscrits</h4>
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Identifiant</th>
                                                    <th>Image</th>
                                                    <th>Nom/Prénom</th>
                                                    <th>classe</th>
                                                    <th>Niveau</th>
                                                    <th>email</th>
                                                    <th>Détails</th>
                                                    <th>Supprimer</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if (count($eleves) >= 1)
                                                    @foreach ($eleves as $eleve)
                                                        <tr>
                                                            <td>{{ $eleve->id_eleve }}</td>
                                                            <td><span class="list-img"><img src={{ $eleve->img }}
                                                                        alt=""></span>
                                                            </td>
                                                            <td>{{ $eleve->prenom . ' ' . $eleve->nom }}</a>
                                                            </td>
                                                            <td>{{ $eleve->classe }}</td>
                                                            <td>{{ $eleve->niveau }}</td>
                                                            <td>{{ $eleve->email }}</td>
                                                            <td><a href="/eleve/{{ $eleve->id_eleve }}"
                                                                    class="ad-st-view">View</a>
                                                            </td>
                                                            <td><form method="POST" action="/eleve/{{$eleve->id_eleve}}">
                                                                {{ csrf_field() }}
                                                                {{ method_field('DELETE') }}
                                                        
                                                                <div class="form-group">
                                                                    <input type="submit" class="btn btn-danger delete-user ad-st-view2" value="Supprimer">
                                                                </div>
                                                            </form></button>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @else
                                                    <td>
                                                        <center>
                                                            <h1>Pas d'élèves enregistrés !</h1>
                                                        </center>

                                                    </td>
                                                @endif

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
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
    <script>
        $('.delete-user').click(function(e){
            e.preventDefault() // Don't post the form, unless confirmed
            if (confirm('Are you sure?')) {
                // Post the form
                $(e.target).closest('form').submit() // Post the surrounding form
            }
        });
    </script>
</body>


</html>

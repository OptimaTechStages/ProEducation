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
                                    <li><a href="/parents">Afficher Liste des parents</a>
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
                                    <li><a href="/teacher">Afficher Enseignants</a>
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
                <h1>Détails Elève</h1>
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="/admin-dashboard"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="/admin-students"> Eleve</a>
                        </li>
                        <li class="page-back"><a href="#"><i class="fa fa-backward" aria-hidden="true"></i>
                                Retour</a>
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
                                                    <h4>Information Personnelles</h4>
                                                </div>
                                                <div class="tab-inn">
                                                    <form action="/updatePerso/{{ $params[0]->id_eleve }}"
                                                        method="put">
                                                        <div class="ml-2 col-md-12">
                                                            <div class=" col-md-12" id="avatar2">
                                                                <img src="{{ $params[0]->img }}" id="preview"
                                                                    class="img-thumbnail">
                                                            </div>
                                                            <div class="input-group my-3">
                                                                <div class="input-group-append">
                                                                    <input type="file" name="img" class="file"
                                                                        accept="image/*">
                                                                    <div class="input-group my-3"
                                                                        style="display: flex;">
                                                                        <div class="input-group-append">
                                                                            <button type="button"
                                                                                class="browse btn btn-primary"><i
                                                                                    class="fa fa-fw fa-upload"></i>Mettre
                                                                                à
                                                                                Jour</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <label class="">Prénom</label>
                                                            <div class="input-field col s12">
                                                                <input type="text" class="validate" name="prenom"
                                                                    value="{{ $params[0]->prenom }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <label class="">Nom</label>
                                                            <div class="input-field col s12">
                                                                <input type="text" class="validate" name="nom"
                                                                    value="{{ $params[0]->nom }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <label class="">Sexe</label>
                                                            <div class="input-field col s12">
                                                                <input type="text" class="validate" name="sexe"
                                                                    value="{{ $params[0]->sexe }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <label class="">Date de Naissance</label>
                                                            <div class="input-field col s12">
                                                                <input type="date" class="validate"
                                                                    name="date_naissance"
                                                                    value="{{ $params[0]->date_naissance }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <label class="">Lieu de Naissance</label>
                                                            <div class="input-field col s12">
                                                                <input type="text" class="validate"
                                                                    name="lieu_naissance"
                                                                    value="{{ $params[0]->lieu_naissance }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <label class="">Nationalité</label>
                                                            <div class="input-field col s12">
                                                                <input type="text" class="validate" name="nationalite"
                                                                    value="{{ $params[0]->Nationalite }}" required>
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
                                                    <h4>Contact Elève</h4>
                                                </div>
                                                <div class="tab-inn">
                                                    <form action="/updateContact/{{ $params[0]->id_eleve }}"
                                                        method="put">
                                                        <div class="row">
                                                            <label class="">Email</label>
                                                            <div class="input-field col s12">
                                                                <input type="email" class="validate"
                                                                name="email"
                                                                    value="{{ $params[0]->email }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <label class="">Téléphone1</label>
                                                            <div class="input-field col s12">
                                                                <input type="tel" class="validate"
                                                                name="phone1"
                                                                    value="{{ $params[0]->phone1 }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <label class="">Téléphone2 (Option)</label>
                                                            <div class="input-field col s12">
                                                                <input type="tel" class="validate"
                                                                name="phone2"
                                                                    value="{{ $params[0]->phone2 }}" required>
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

                                        <div class="col-md-6 align-self-start">
                                            <div class="box-inn-sp admin-form">
                                                <div class="inn-title">
                                                    <h4>Formation</h4>
                                                </div>
                                                <div class="tab-inn">
                                                    <form action="/updateFormation/{{ $params[0]->id_eleve }}"
                                                        method="put">
                                                        <div class="row">
                                                            <label class="">Parcours Scolaire</label>
                                                            <div class="input-field col s12">
                                                                <input type="text" class="validate"
                                                                name="parcours_scolaire"
                                                                    value="{{ $params[0]->parcours_scolaire }}"
                                                                    required>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <label class="">Filière</label>
                                                            <div class="input-field col s12">
                                                                <input type="text" class="validate"
                                                                name="filiere"
                                                                    value="{{ $params[0]->filiere }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <label class="">Spécialité</label>
                                                            <div class="input-field col s12">
                                                                <input type="text" class="validate" name="specialite"
                                                                    value="{{ $params[0]->specialite }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <label class="">Niveau</label>
                                                            <div class="input-field col s12">
                                                                <input type="integer" class="validate" name="niveau"
                                                                    value="{{ $params[0]->niveau }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <label class="">Classe</label>
                                                            <div class="input-field col s12">
                                                                <input type="integer" class="validate" name="classe"
                                                                    value="{{ $params[0]->classe }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <label class="">Sous Groupe</label>
                                                            <div class="input-field col s12">
                                                                <input type="integer" class="validate" name="sous_groupe"
                                                                    value="{{ $params[0]->sous_groupe }}" required>
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
                                        <div class="col-md-6  align-self-start">
                                            <div class="box-inn-sp admin-form">
                                                <div class="inn-title">
                                                    <h4>Information Sur l'ancienne Ecole</h4>
                                                </div>
                                                <div class="tab-inn">
                                                    <form action="/updateAncEcole/{{ $params[0]->id_eleve }}"
                                                        method="put">
                                                        <div class="row">
                                                            <label class="">Nom Ecole</label>
                                                            <div class="input-field col s12">
                                                                <input type="text" class="validate" name="ancienne_ecole"
                                                                    value="{{ $params[0]->ancienne_ecole }}"
                                                                    required>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <label class="">Etudes</label>
                                                            <div class="input-field col s12">
                                                                <input type="text" class="validate" name="etudes"
                                                                    value="{{ $params[0]->etudes }}" required>
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
                                            <div class="box-inn-sp">
                                                <div class="inn-title">
                                                    <h4>Liste des Parents Inscrits</h4>
                                                </div>
                                                <div class="tab-inn">
                                                    <div class="table-responsive table-desi">
                                                        <table class="table table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th>Identifiant</th>
                                                                    <th>Nom/Prénom</th>
                                                                    <th>Role</th>
                                                                    <th>Tel</th>
                                                                    <th>Email</th>
                                                                    <th>Profession</th>
                                                                    <th>Détails</th>
                                                                    <th>Supprimer</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                                @if ($params[1] === null && $params[2] === null)
                                                                    <td>
                                                                        <center>
                                                                            <h1>Pas de parents enregistrés !</h1>
                                                                        </center>
                                                                    </td>
                                                                @else
                                                                    @if ($params[1] !== null && $params[2] !== null)
                                                                        <tr>
                                                                            <td>{{ $params[1]->id_parent }}</td>
                                                                            <td>{{ $params[1]->nom_parent }}</a>
                                                                            </td>
                                                                            <td>{{ $params[1]->role }}</td>
                                                                            <td>{{ $params[1]->tel_parent }}</td>
                                                                            <td>{{ $params[1]->email_parent }}</td>
                                                                            <td>{{ $params[1]->prof_parent }}</td>
                                                                            <td>
                                                                                <form method="POST"
                                                                                    action="/parents/parentUpdate">
                                                                                    {{ csrf_field() }}
                                                                                    {{ method_field('PUT') }}

                                                                                    <div class="form-group">
                                                                                        <input type="submit"
                                                                                            class="ad-st-view"
                                                                                            value="Modifier">
                                                                                    </div>
                                                                                </form>
                                                                            <td>
                                                                                <form method="POST"
                                                                                    action="/parents/{{ $params[1]->id_parent }}">
                                                                                    {{ csrf_field() }}
                                                                                    {{ method_field('DELETE') }}

                                                                                    <div class="form-group">
                                                                                        <input type="submit"
                                                                                            class=" delete-user ad-st-view2"
                                                                                            value="Supprimer">
                                                                                    </div>
                                                                                </form>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>{{ $params[2]->id_parent }}</td>
                                                                            <td>{{ $params[2]->nom_parent }}</a>
                                                                            </td>
                                                                            <td>{{ $params[2]->role }}</td>
                                                                            <td>{{ $params[2]->tel_parent }}</td>
                                                                            <td>{{ $params[2]->email_parent }}</td>
                                                                            <td>{{ $params[2]->prof_parent }}</td>
                                                                            <td>
                                                                                <form method="POST"
                                                                                    action="/parents/parentUpdate">
                                                                                    {{ csrf_field() }}
                                                                                    {{ method_field('PUT') }}

                                                                                    <div class="form-group">
                                                                                        <input type="submit"
                                                                                            class="ad-st-view"
                                                                                            value="Modifier">
                                                                                    </div>
                                                                                </form>
                                                                            <td>
                                                                                <form method="POST"
                                                                                    action="/parents/{{ $params[2]->id_parent }}">
                                                                                    {{ csrf_field() }}
                                                                                    {{ method_field('DELETE') }}

                                                                                    <div class="form-group">
                                                                                        <input type="submit"
                                                                                            class=" delete-user ad-st-view2"
                                                                                            value="Supprimer">
                                                                                    </div>
                                                                                </form>
                                                                            </td>
                                                                        </tr>
                                                                    @else
                                                                        @if ($params[1] === null)
                                                                            <tr>
                                                                                <td>{{ $params[2]->id_parent }}</td>
                                                                                <td>{{ $params[2]->nom_parent }}</a>
                                                                                </td>
                                                                                <td>{{ $params[2]->role }}</td>
                                                                                <td>{{ $params[2]->tel_parent }}</td>
                                                                                <td>{{ $params[2]->email_parent }}
                                                                                </td>
                                                                                <td>{{ $params[2]->prof_parent }}
                                                                                </td>
                                                                                <td>
                                                                                    <form method="POST"
                                                                                        action="/parents/parentUpdate">
                                                                                        {{ csrf_field() }}
                                                                                        {{ method_field('PUT') }}

                                                                                        <div class="form-group">
                                                                                            <input type="submit"
                                                                                                class="ad-st-view"
                                                                                                value="Modifier">
                                                                                        </div>
                                                                                    </form>
                                                                                <td>
                                                                                    <form method="POST"
                                                                                        action="/parents/{{ $params[2]->id_parent }}">
                                                                                        {{ csrf_field() }}
                                                                                        {{ method_field('DELETE') }}

                                                                                        <div class="form-group">
                                                                                            <input type="submit"
                                                                                                class=" delete-user ad-st-view2"
                                                                                                value="Supprimer">
                                                                                        </div>
                                                                                    </form>
                                                                                </td>
                                                                            </tr>
                                                                        @else
                                                                            <tr>
                                                                                <td>{{ $params[1]->id_parent }}</td>
                                                                                <td>{{ $params[1]->nom_parent }}</a>
                                                                                </td>
                                                                                <td>{{ $params[1]->role }}</td>
                                                                                <td>{{ $params[1]->tel_parent }}</td>
                                                                                <td>{{ $params[1]->email_parent }}
                                                                                </td>
                                                                                <td>{{ $params[1]->prof_parent }}
                                                                                </td>
                                                                                <td>
                                                                                    <form method="POST"
                                                                                        action="/parents/parentUpdate">
                                                                                        {{ csrf_field() }}
                                                                                        {{ method_field('PUT') }}

                                                                                        <div class="form-group">
                                                                                            <input type="submit"
                                                                                                class="ad-st-view"
                                                                                                value="Modifier">
                                                                                        </div>
                                                                                    </form>
                                                                                <td>
                                                                                    <form method="POST"
                                                                                        action="/parents/{{ $params[1]->id_parent }}">
                                                                                        {{ csrf_field() }}
                                                                                        {{ method_field('DELETE') }}

                                                                                        <div class="form-group">
                                                                                            <input type="submit"
                                                                                                class=" delete-user ad-st-view2"
                                                                                                value="Supprimer">
                                                                                        </div>
                                                                                    </form>
                                                                                </td>
                                                                            </tr>
                                                                        @endif
                                                                    @endif
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
    <script>
        $(document).on("click", ".browse", function() {
            var file = $(this).parents().find(".file");
            file.trigger("click");
        });
        $('input[type="file"]').change(function(e) {
            var fileName = e.target.files[0].name;
            $("#file").val(fileName);

            var reader = new FileReader();
            reader.onload = function(e) {
                // get loaded data and render thumbnail.
                document.getElementById("preview").src = e.target.result;
            };
            // read the image file as a data URL.
            reader.readAsDataURL(this.files[0]);
        });

        Resources
    </script>
</body>


</html>

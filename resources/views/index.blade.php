<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Site d'assurance pour les auto-école, demandez votre devis GRATUITETEMENT et RAPIDEMENT">
    <title>ASSURAE</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/product/">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/tonystar/bootstrap-float-label/v4.0.2/bootstrap-float-label.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/index.css"/>
    <link rel="stylesheet" type="text/css" href="css/index_mobile.css" media="screen and (max-width: 800px)" />
</head>
<body>
<nav class="navbar navbar-expand-lg">
    <div class="container-xl" >
        <a class="navbar-brand" href="#"><b>ASSURAE.FR</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07XL" aria-controls="navbarsExample07XL" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarsExample07XL">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#formules">Les formules<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tarifs">Nos tarifs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#engagement">Notre engagement</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#qui-sommes-nous">Qui sommes-nous ?</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div id="assurance">
    <div class="row">
        <div class="col-6" >
            <div class="container">
                <h1><b>« Simple, personnalisée et <br/>jusqu’à 30% moins chère »</b></h1>
                <h2 id="title-assurance">Une assurance que vous construisez selon vos <br/>besoins, et toujours à vos côtés.</h2>
                <div class="justify-content-center">
                    <button type="button" id="btn-assurrance" class="btn btn-outline justify-content-center" data-toggle="modal" data-target="#form-contact">
                        <b>Je veux un devis gratuit sans engagement</b>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-5">
            <img src="img/assur.png">
        </div>
        <div style="text-align: center" id="assurance-mobile">
            <h2>Une assurance que vous construisez selon vos <br/>besoins, et toujours à vos côtés.</h2>
            <button type="button" class="btn btn-outline justify-content-center" data-toggle="modal" data-target="#form-contact">
                Je veux un devis gratuit sans engagement
            </button>
        </div>
    </div>
        @if(\Illuminate\Support\Facades\Session::get('success'))
        <div class="container" style="margin-top: 3%">
            <div class="alert">
                <div class="alert alert-success" role="alert" style="text-align: center">
                    {{\Illuminate\Support\Facades\Session::get('success')}}
                </div>
            </div>
        </div>
        @endif
        @if(\Illuminate\Support\Facades\Session::get('error'))
            <div class="container" style="margin-top: 3%">
                <div class="alert">
                    <div class="alert alert-danger" role="alert" style="text-align: center">
                        {{\Illuminate\Support\Facades\Session::get('error')}}
                    </div>
                </div>
            </div>
        @endif
</div>

<div style="" id="formules">
    <div class="align-center" >
        <h1 style="">Différentes formules, différents prix</h1>
        <h2 style="">Nos assurances sont créées sur mesure. Trouvez celle qui correspond à vos besoins dès aujourd’hui.</h2>
        <div class="row">
            <hr>
            <div class="col">
                <img src="img/tool.png"  class="list-picture">
                <h4>Assurance au kilomètre</h4>
            </div>
            <hr>
            <div class="col">
                <img src="img/car_fleet.png"  class="list-picture" >
                <h4>Flotte de véhicules</h4>
            </div>
            <hr>
            <div class="col">
                <img src="img/health.png"  class="list-picture">
                <h4>Santé de vos salariés</h4>
            </div>
            <hr>
            <div class="col">
                <img src="img/key.png"  class="list-picture">
                <h4>Votre établissement</h4>
            </div>
            <hr>
        </div>
        <h2 class="demande">Vous trouverez forcément celle qui vous convient, il suffit de nous demander !</h2>
    </div>
</div>

<div style="" id="tarifs">
    <div class="align-center" >
        <h1>Nos offres sont-elles moins chères ?<br><br> <b>Oui, elles le sont !</b></h1>
        <h2>Nos offres sont les moins chères du marché et elles comptent bien le rester.</h2>
        <img src="img/car_security.png" class="car-security">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="img/money.png" class="money">
                </div>
                <div class="col" id="a-partir">
                    <h3>À partir de :</h3>
                    <h2>??????????</h2>
                </div>
                <div class="col">
                    <h3>Jusqu'à :</h3>
                    <h2><b>30% Moins cher</b></h2>
                </div>
            </div>
        </div>
        <div class="justify-content-center">
            <button type="button" class="btn btn-outline justify-content-center " data-toggle="modal" data-target="#form-contact">
                <b>Je veux connaître mon tarif !</b>
            </button>
            <h5>Exemple donné pour un véhicule Citroen C3 de 2019</h5>
        </div>
    </div>
</div>

<div style="" id="engagement">
    <div class="align-center" >
        <h1>Nous vous accompagnons lors de vos démarches</h1>
        <h2>Notre équipe répond à vos questions et vous accompagne au quotidien ! Vous pouvez toujours compter sur nous.</h2>
        <img src="img/help.png">
    </div>
</div>

<div id="devis">
    <div class="align-center" >
        <h1>Demandez un devis !</h1>
        <h2>C’est <b>gratuit, sans engagement,</b> et il faut <b>moins de<br> 2 minutes</b> pour le faire !</h2>
        <div class="justify-content-center" id="container-modal">
            <button id="button-devis" type="button" class="btn btn-outline " data-toggle="modal" data-target="#form-contact" >
                <b>Je veux un devis</b>
            </button>
            <!-- Modal -->
            <div class="modal fade" id="form-contact" tabindex="-1" role="form" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <h5 class="modal-title" id="ModalLabel">
                            <b>MON DEVIS SANS ENGAGEMENT <br>ET GRATUIT !</b>
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="modal-body">
                            <form method="POST" action="/devis">
                                @csrf
                                <div class="form-group">
                                    <label class="form-group has-float-label">
                                        <input type="text" class="form-control" id="ds-name" name="ds_name" aria-describedby="ds-name" required>
                                        <span style="font-size: 15px">Nom de l'auto-école *</span>
                                    </label>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="form-group has-float-label">
                                                <input type="text"  class="form-control" id="firstname" name="firstname" aria-describedby="firstname" required>
                                                <span style="font-size: 15px">Prénom *</span>
                                            </label>

                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="form-group has-float-label">
                                                <input type="text" class="form-control" id="lastname" name="lastname" aria-describedby="lastname" required>
                                                <span style="font-size: 15px">Nom *</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-group has-float-label">
                                        <input type="email" class="form-control" id="email" name="email" aria-describedby="email" required>
                                        <span style="font-size: 15px">Email *</span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="form-group has-float-label">
                                        <input type="tel" class="form-control" id="phone" name="phone" aria-describedby="phone" required>
                                        <span style="font-size: 15px">Numéro de téléphone *</span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="form-group has-float-label">
                                        <input type="number" class="form-control" id="nb-vehicle" name="nb_vehicle" aria-describedby="nb-vehicle" required>
                                        <span style="font-size: 15px">Nombre de véhicules *</span>
                                    </label>
                                </div>
                                <small id="help" class="form-text text-muted">Les champs suivis d’une * sont obligatoires.</small>
                                <div class="row" style="">
                                    <div class="col">
                                        <img class="img-modal" src="img/men_whith_letter.png" >
                                    </div>
                                    <div class="col">
                                        <button id="send-form" type="submit" class="btn btn-outline " >
                                            <b>Valider</b>
                                        </button>
                                    </div>
                                    <div class="col">
                                        <img class="img-modal" src="img/post_box.png" >
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="img/avion.png" id="plane" >
    </div>
</div>

<div style="" id="qui-sommes-nous">
    <div style="text-align: center;"  >
        <h1>Qui sommes-nous ?</h1>
        <h2>
            Nous proposons nos services depuis maintenant plus de 60 ans sur le marché de l’assurance.<br>
            Fidèles à nos valeurs humaines et forts de notre expérience professionnelle,<br>
            nous avons à cœur votre satisfaction.
        </h2>
        <img src="img/adviser.png">
    </div>
</div>

<footer class="container py-2">
    <div class="row">
        <div class="col-12 col-md">
            <a class="text-muted" href="#" style="color: black"><b>ASSURAE.FR</b></a>
            <small class="d-block mb-3 text-muted">&copy; 2020</small>
        </div>
        <div class="col-6 col-sm">
            <a href="#formules">Les formules</a>
        </div>
        <div class="col-6 col-sm">
            <a href="#tarifs">Nos tarifs</a>
        </div>
        <div class="col-6 col-sm">
            <a href="#engagement">Notre engagement</a>
        </div>
        <div class="col-6 col-sm">
            <a href="#qui-sommes-nous">Qui sommes-nous ?</a>
        </div>
    </div>
</footer>
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>

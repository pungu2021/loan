<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styleLoan.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Loan</title>
</head>
<body>
    <main>
        <header>
              <span class="advans">ADVANS CONGO</span>
              <div class="heure">Date : {{date("d-m-Y")}}</div>
        </header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <img src="Images/loa.jpg" alt="" class="images-loan">
                </div>
                <div class="col-lg-4 mt-5">
                    <div class="div-adv">
                       ADVANS CONGO LOAN
                    </div>
                    <div class="seconnecte">Je me connecte avec mon compte</div>
                    <form action="/acceuil" method="POST" class="form-image">
                        @csrf
                        <label for="au">Email advans congo</label>
                        <input type="text" name="gmail" id="" class="form-control">
                        <label for="au">Mot de passe</label>
                        <input type="text" name="password" id="" class="form-control">
                        <input type="checkbox" name="" id=""> j'accept le condition des utilisations <br>
                        <a href="">Mot de passe oublié</a><br>
                        <button class="btn-adv mt-2">Connexion</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <script src="js/time.js"></script>
</body>
</html>
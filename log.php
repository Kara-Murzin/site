<?php   include("path.php");
        include "app/controllers/users.php";
        include("app/include/header.php"); ?>
<div class="container reg_form">
    <form class="row justify-content-center" method="post" action="log.php">
        <h2 class="col-12">Авторизация</h2>
        <div class="mb-3 col-12 col-md-4 err">
            <p><?php if($errMsg == []){
                    echo "";
                }
                else{echo $errMsg;} ?></p>
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <label for="formGroupExampleInput" class="form-label">Сіздің поштаңыз (тіркеу кезінде)</label>
            <input name="mail" value="<?=$email?>" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="поштаңызды енгізіңіз...">
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <label for="exampleInputPassword1" class="form-label">Құпия сөз</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="құпия сөзді енгізіңіз...">
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <button type="submit" name="button-log" class="btn btn-secondary">Кіру</button>
            <a href="reg.php">Тіркелу</a>
        </div>
    </form>
</div>
<?php include("app/include/footer.php"); ?>

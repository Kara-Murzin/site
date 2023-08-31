<?php
    include "path.php";
    include "app/controllers/users.php";
    include("app/include/header.php"); ?>
<div class="container reg_form">
    <form action="reg.php" method="post" class="row justify-content-center">
        <h2>Тіркеу нысаны</h2>
        <div class="mb-3 col-12 col-md-4 err">
            <p><?php if($errMsg == []){
                echo "";
                }
                else{echo $errMsg;} ?></p>
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <label for="formGroupExampleInput" class="form-label">Сіздің логиніңіз</label>
            <input name="login" value="<?=$login?>" type="text" class="form-control" id="formGroupExampleInput" placeholder="логинді енгізіңіз...">
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input name="mail" value="<?=$email?>" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="поштаңызды енгізіңіз...">
            <div id="emailHelp" class="form-text">Сіздің электрондық поштаңыз спам үшін пайдаланылмайды!</div>
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <label for="exampleInputPassword1" class="form-label">Құпия сөз</label>
            <input name="pass-first" type="password" class="form-control" id="exampleInputPassword1" placeholder="құпия сөзді енгізіңіз...">
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <label for="exampleInputPassword2" class="form-label">Құпия сөзді қайталаңыз</label>
            <input name="pass-second" type="password" class="form-control" id="exampleInputPassword2" placeholder="құпия сөзді қайталаңыз...">
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <button type="submit" class="btn btn-secondary" name="button-reg">Тіркелу</button>
            <a href="log.php">Кіру</a>
        </div>
    </form>
</div>

<?php include("app/include/footer.php"); ?>

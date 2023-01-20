<?php
$pdo = new PDO('mysql: host=localhost;port=3307;dbname=Courses', 'root', '');
$query = $pdo->query('SELECT * FROM `Persons`');
session_start();
function login($login, $password): void
{
    global $query;
    $c = 0;
    while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
        if ($login == $row['login'] && $password == $row['password']) {
            echo '<script>
                    setTimeout(\'location.href="../index.php"\', 3000);
                    </script>';
            $_SESSION['login'] = $row['login'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['log'] = "true";
            $c++;
        }
    }
    if ($c != 1) {
        echo '<script> let main=document.querySelector("form");
                      let button=document.querySelector("button.logIn");
                      let h4Error=document.createElement("h4");
                      h4Error.innerHTML="Дані не вірні";
                      h4Error.style.color="white";
                      h4Error.style.marginTop="15px";
                      h4Error.style.marginLeft="32%";
                       setTimeout(function () {main.insertBefore(h4Error,button)} , 3500);
                      
             </script> ';
    }
}

function checkLog(): void
{
    session_start();
    if (isset($_SESSION['log']) && $_SESSION['log'] == true) {
        echo "<script>let btn=document.querySelectorAll('a.CLICKbtn');
                      let main=document.querySelector('div.classynav');
                      for(let bt of btn){
                         bt.style.visibility='hidden';
                      }
                      let exitbth=document.querySelector('button.exit');
                      exitbth.style.visibility='visible';
              </script>";
    }
    if (isset($_POST['exits'])) {
        echo "<script>let btn2=document.querySelectorAll('a.CLICKbtn');
                    for(let bt of btn2){
                        bt.style.visibility='visible';
                    }
                    let exitbth2=document.querySelector('button.exit');
                    exitbth2.style.visibility='hidden';</script>";
        $_SESSION['log'] = false;
    }
}

function updateInfo($login,$password,$username): void
{
    global $query;
    while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
        if ($_SESSION['login'] == $row['login']) {
            $id=$row['id'];
        }
        }
    if(isset($login)&& isset($password)&& isset($username)){
        global $pdo;
        $sql="UPDATE `Persons` SET `Name` = :username, `login` = :login, `password` = :password WHERE `Persons`.`id` = $id";
        $doing=$pdo->prepare($sql);
        $doing->bindValue(":username",$username);
        $doing->bindValue(":password",$password);
        $doing->bindValue(":login",$login);
        $doing->execute();
        $_SESSION['login']=$login;
        $_SESSION['password']=$password;
        $_SESSION['username']=$username;
        echo '<script>
                    setTimeout(\'location.href="../index.php"\', 3000);
                    </script>';
    }
    else{
        echo 'Error';
    }
    if(isset($_POST['delete'])) {
            global $pdo;
            global $query;
            while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                if ($_SESSION['login'] == $row['login']) {
                    $id = $row['id'];
                }
            }
            $sql2 = "DELETE FROM `Persons` WHERE id = $id";
            $doThis = $pdo->exec($sql2);
            session_destroy();
            checkLog();
            echo '<script>
            setTimeout(\'location.href="../index.php"\', 3000);
             </script>';
        }

}

function openAddTrack(): void
{
    if (isset($_SESSION['log']) && $_SESSION['log'] == true) {
        echo "<script>
        let plus=document.querySelector('i.fa-plus');
         plus.style.visibility='visible';
             </script>";
    } else {
        echo "<script>
        let plus=document.querySelector('i.fa-plus');
         plus.style.visibility='hidden';
             </script>";
    }
}


<div class="row"> &nbsp;</div>
<div class="row">&nbsp;</div>
<div class="row">&nbsp;</div>
<body>
    <div class="A" align="center">
        <form name="promenalozinke" action="<?= site_url("BaseController/promenaLoz") ?>" method="post">
        <table>
            <tr>
                <td id="ID2">
                    <b>Promena lozinke</b>
                </td>
            </tr>
            <tr>
                <td>
                    Stara šifra: <br> <input type="password" name="password" value="<?= set_value('password') ?>"><br>
                     <font color='red'>
                       <?php if(!empty($errors['password'])) 
                        echo $errors['password'];
                         if(isset($errors)) echo $errors  ?><br></font>
                    Nova šifra: <br> <input type="password" name="new" value="<?= set_value('new') ?>"><br>
                     <font color='red'>
                       <?php if(!empty($errors['new'])) 
                        echo $errors['new'];
                        ?></font><br>
                    Potvrdi šifru: <br><input type="password" name="new2" value="<?= set_value('new2') ?>">
                     <font color='red'>
                       <?php if(!empty($errors['new2'])) 
                        echo $errors['new2'];
                        ?></font><br>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="promeni" value="Sačuvaj promene">
                </td>
            </tr>
        </table>
        </form>
     </div>   
</body>
</html>
<link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css'); ?>"> 
    <link rel="stylesheet" href="<?= base_url('css/style.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('css/simple-line-icons.css'); ?>"> 
    <link rel="stylesheet" href="<?= base_url('css/themify-icons.css'); ?>"> 
    <link rel="stylesheet" href="<?= base_url('css/font-awesome.min.css'); ?>"> 
    <link rel="stylesheet" href="<?= base_url('css/simple-line-icons.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('css/set1.css'); ?>"> 
    <link rel="stylesheet" href="<?= base_url('css/swiper.min.css.css'); ?>"> 
    <link rel="stylesheet" href="<?= base_url('https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900'); ?>"> 
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
<div class="container">
            <div class="row">
                <div class="col-md-6 responsive-wrap ">
                    <div class="booking-checkbox_wrap mt-4">
                        <h5>Moderatori</h5>
                        <hr>
                        <?php 
                        $moderatorModel=new App\Models\ModeratorModel();
                        $moderatori=$moderatorModel->findAll();
                        foreach($moderatori as $moderator){
                            //var_dump($moderator);
                            echo '
                        <div class="row">
                        <div class="col-md-6"><h6>'.$moderator->Korisnicko_ime.'</h6></div>
                        <div class="col-md-6">
                        <form name="uklanjanjeClana" action="'. site_url("Admin/ukloniModeratora/{$moderator->Korisnicko_ime}").'"method="post">
                            <input type="submit"  value="Ukloni moderatora" class="btn btn-primary py-2 px-4">
                            </form></div>
                          </div>
                        <hr>';
                        }
                        ?>
                       
                    
                    </div>
                </div>
            </div>
        </div>

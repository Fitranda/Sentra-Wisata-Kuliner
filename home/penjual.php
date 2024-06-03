<style>
    .btn-logout{
        /* background: #; */
        border: red 1px solid;
        border-radius: 0;
        color: #4773B8!important;
        padding: 5px 20px;
        transition: .3s;
    }

    .btn-logout:hover{
        background: red;
        /* border: #4773B8 1px solid; */
        border-radius: 0;
        color: white!important;
        padding: 5px 20px;
    }
</style>
<nav class="navbar navbar-expand-sm navbar-dark position-fixed" style="background-color: #EFEFEF; color: #4773B8; z-index: 200; top: 0; left: 0; right: 0; ">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="assets/logo.svg" style="height: 40px;" alt="logo">
            <p class="mb-0 main-text">Sentra Wisata Kuliner</p>
        </a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item active align-self-center">
                    <a class="nav-link main-text" href="<?= getBaseUrl().'?f=home&m=penjual'?>">Menu <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item align-self-center">
                    <a class="nav-link main-text" href="#">Penjualan</a>
                </li>
                <li class="nav-item align-self-center d-flex align-items-center ml-4">
                    <img src="assets/icons/indonesia.svg" style="height: 20px;" alt="" srcset="">
                    <a class="nav-link main-text" href="#">ID</a>
                </li>

                <button class="btn btn-logout ml-4">Logout</button>

            
            </ul>
        
        </div>
    </nav>

<script type="text/javascript">
    $('.btn-logout').on('click', function() {
    window.location.href = '?f=home&m=logout';
    });
</script>
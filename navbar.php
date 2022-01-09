<html>
<header>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container">
            <a class="navbar-brand" href="Index.php">
                <img src="image/navlogo.png"
                     alt="navbar-logo"
                     width="150"
                     height="45" 
                     class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="toggler-icon top-bar"></span>
                <span class="toggler-icon middle-bar"></span>
                <span class="toggler-icon bottom-bar"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item ">
                        <a class="nav-link" aria-current="page" href="Index.php">হোম</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="surah.php">সূরা-সমূহ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="hadith.php">হাদিস </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ট্রাকার</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">নামাজ-শিক্ষা</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">কালিমা</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">দোয়া</a>
                    </li>
                
                
                    <?php if(!isset($_SESSION)):?>
                    
                    <li class=" nav-item mx-2  mb-2" >
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#loginmodal">লগইন</button>
                    <?php include 'loginmodel.php'?>
                    </li>
                    <li class=" nav-item mx-2  mb-2">
                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#regmodal">রেজিস্ট্রেশন</button>
                    <?php include 'regmodal.php' ?>
                    </li>
                    <?php endif?>

                    </li>
                    <?php if(isset($_SESSION)): ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            User
                        </a>
                        <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">প্রোফাইল</a></li>
                            <li><a class="dropdown-item" href="#">কার্যকলাপ</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">লগ-আউট</a></li>
                        </ul>
                    </li>
                    <?php endif?>

                </ul>
            </div>
        </div>
    </nav>
</header>

</html>
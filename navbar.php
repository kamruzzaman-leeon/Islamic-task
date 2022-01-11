<?php include 'session.php';?>
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
                
                
                    
                    <?php if(isset($_SESSION['admin']) && $_SESSION['admin']==true): ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <?php if(isset($_SESSION['useradmin'])) echo $_SESSION['useradmin']; ?>
                        </a>
                        <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">প্রোফাইল</a></li>
                            <li><a class="dropdown-item" href="#">কার্যকলাপ</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="logout.php">লগ-আউট</a></li>
                        </ul>
                    </li>
                    <?php elseif(isset($_SESSION['client']) && $_SESSION['client']==true): ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <?php if(isset($_SESSION['userclient'])) echo $_SESSION['userclient']; ?>
                        </a>
                        <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">প্রোফাইল</a></li>
                            <li><a class="dropdown-item" href="#">কার্যকলাপ</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="logout.php">লগ-আউট</a></li>
                        </ul>
                    </li>
                    
                        <?php else:?>
                    <li class=" nav-item mx-2  mb-2" >
                    <a href="login.php">
                    <button type="button" class="btn btn-outline-success"> লগইন</button>
                    </a>
                    
                    </li>
                    <li class=" nav-item mx-2  mb-2">
                    <a href="registration.php">
                    <button type="button" class="btn btn-outline-info">রেজিস্ট্রেশন</button>
                    </a>
                    
                    </li>
                    <?php endif;?>

                    

                </ul>
            </div>
        </div>
    </nav>
</header>



   
</html>
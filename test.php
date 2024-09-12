<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour List</title>
    <!-- ====== All CSS Links ====== -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
</head>
<body>
    <!-- ====== Navbar Start ====== -->
    <section id="navbar_area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 col-4 order-lg-1 order-2">
                    <!-- ==== logo ==== -->
                    <img src="images/logo.png" alt="logo">
                </div>
                <div class="col-lg-8 col-3 order-lg-2 order-1">
                    <i class="fa fa-bars" aria-hidden="true" id="navButton"></i>
                    <div class="nav_manu text-center">
                        <ul class="d-flex justify-content-center nav_menu_ul">
                            <li><a href="#" class="active">Home</a></li>
                            <li><a href="#">Why</a></li>
                            <li><a href="#">Features</a></li>
                            <li><a href="#">Resources</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 mtnamehobe col-5 order-lg-3 order-3 text-end">
                    <a href="#" class="download_link">Download</a>
                </div>
            </div>
        </div>
    </section>

    <div class="progress_bar_step mt-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="progress-bars-container">
                        <div class="progress-bar-container">
                            <div class="progress-bar step-1"></div>
                        </div>
                        <div class="progress-bar-container">
                            <div class="progress-bar step-2"></div>
                        </div>
                        <div class="progress-bar-container">
                            <div class="progress-bar step-3"></div>
                        </div>
                        <p>3/3</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="list_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-12">
                    <div class="tour_list_start">
                        <h3>Select your tour</h3>
                        <p>Kickstart your community’s journey to better wellbeing. Select a tour for your team.</p>
                        <select id="tour_select" class="form-select tour_select" aria-label="Select start date of your tour">
                            <option selected>Select start date of your tour</option>
                        </select>
                        <div id="tour_list_container" class="list_cover">
                            <?php
                                // API URL
                                $url = 'https://feetapart.net/getMegaEventTourTemplate';

                                // Use file_get_contents to make a GET request to the API
                                $response = @file_get_contents($url);

                                if ($response === FALSE) {
                                    // Error fetching data from API
                                    echo "<p>Failed to load tours. Please try again later.</p>";
                                } else {
                                    // Parse the JSON response into an associative array
                                    $data = json_decode($response, true);

                                    // Check if the 'data' field exists in the response
                                    if (isset($data['data']) && is_array($data['data'])) {
                                        // Loop through the data array and create HTML for each tour
                                        foreach ($data['data'] as $tour) {
                                            echo "
                                                <div class='tour_list_card'>
                                                    <div class='d-flex'>
                                                        <img src='{$tour['image']}' width='100px' height='100px' alt='{$tour['name']}'>
                                                        <div class='tour_info'>
                                                            <span>{$tour['milestoneCount']} milestones</span>
                                                            <h3>{$tour['name']}</h3>
                                                            <h6><img src='images/design/icon/mdi_run.svg' alt='icon'>{$tour['type']} | {$tour['distance']} km</h6>
                                                        </div>
                                                    </div>
                                                    <a href='#'>Join this tour</a>
                                                </div>
                                            ";
                                        }
                                    } else {
                                        echo "<p>No tours available at this time.</p>";
                                    }
                                }
                            ?>
                        </div>
                        <div class="button_overlay">
                            <a href="#" class="getstartedd w-100 d-block">Join & Start inviting colleagues</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-6">
                    <div class="mobile-frame">
                        <div class="scroll-container">
                            <img src="images/design/full_site.png" alt="Scrolling Image" class="scroll-image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ====== All JS Links ====== -->
    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>

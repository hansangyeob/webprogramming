<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment 3(S3821179)</title>

    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="../a4/a4.css">
    <script defer src="../a4/script.js"></script>
    <!--This is where I include "tools.php" -->
    <?php include 'tools.php'?>
</head>

<body>
    <header>
        <div>
            <img class="logo-left" src="../a2/img/cloud (1).png" alt="cinema">
            <h1>Welcome to Cinema <em> Heaven</em>.</h1>
            <img class="logo-right" src="../a2/img/cloud (1).png" alt="cinema">
        </div>
        <div>
            <img class="front-page-image" src="../a2/img/cinema (1).png" alt="">
        </div>
    </header>

    <nav>
        <ul>
            <!--class="nav-main-bar" -->
            <li><a href="#about_us1">About us</a></li>
            <li><a href="#prices">Prices</a></li>
            <li><a href="#now_showing">Now showing</a></li>
            <li><a href="#synopsis">Synopsis</a></li>
            <li><a href="#booking_form1">Booking</a></li>
        </ul>
    </nav>



    <div class="parallax1"></div>

    <!-- This is for the about_us   -->

    <section class="parallax2" id="about_us1">
        <h2>About us</h2>

        <div id="about_us">
            <p><strong> Cinema Heaven</strong> is one of the well-known cinema in Vietnam as well as the top 3
                publisher. Our
                goal is to be a typical company model to contribute to the development. non-stop of Vietnamese film
                industry.
            </p>
            <p>During our renovation for 3 months, <strong>Cinema Heaven</strong> have prepared some upgraded features
                for
                customers who have used Cinema Heaven.</p>
            <p>First of all, audiences not only come to enjoy diverse cinema through advanced technologies such as
                <strong>3D
                    Dolby Vision projection</strong> as well as <strong>Dolby Atmos sound system</strong>.</p>
            <p>Secondly, for the customer who wishes to experience comfortable chairs, <strong>Cinema Heaven</strong>
                have
                improvement seats standard as well as first class seat which is reclinable.</p>
            <p>Cinema Heaven Vietnam will continue the long-term journey to contribute to building an increasingly
                stronger
                Vietnamese film industry with potential customers, filmmakers and prestigious business partners and the
                whole
                society.</p>
            <div class="flex1">
                <img class="chair1" src="../a2/img/new_seats(2).jpg" alt="new first class chair">
                <p class="chair-name1">Standard Chair</p>
                <img class="chair2" src="../a2/img/new_seat.jpg" alt="new standard chair">
                <p class="chair-name2">First Class Chair</p>
            </div>

        </div>
    </section>
    </div>

    </div>



    <div class="parallax1"></div>


    <!-- This is for the prices   -->

    <div class="parallax1"></div>

    <section class="parallax2" id="prices">
        <h2 class="price_heading">Prices</h2>
        <table class="poster1">
            <tr>
                <th>Seat Type</th>
                <th>Seat Code</th>
                <th>ALL day Monday and Wednesday AND 12pm on Weekdays</th>
                <th>All other times</th>
            </tr>
            <tr>
                <td>Standard Adult</td>
                <td>STA</td>
                <td>14.00</td>
                <td>19.80</td>
            </tr>
            <tr>
                <td>Standard Concession</td>
                <td>STP</td>
                <td>12.50</td>
                <td>17.50</td>
            </tr>
            <tr>
                <td>Standard Child</td>
                <td>STC</td>
                <td>11.00</td>
                <td>15.30</td>
            </tr>
            <tr>
                <td>First Class Adult</td>
                <td>FCA</td>
                <td>24.00</td>
                <td>30.00</td>
            </tr>
            <tr>
                <td>First Class Concession</td>
                <td>FCP</td>
                <td>22.50</td>
                <td>27.00</td>
            </tr>
            <tr>
                <td>First Class Child</td>
                <td>FCC</td>
                <td>21.00</td>
                <td>24.00</td>
            </tr>
        </table>



    </section>

    <div class="parallax1"></div>


    <!--This is for now-showing section -->

    <div class="parallax1"></div>

    <section class="parallax2" id="now_showing">

        <h2>Now showing</h2>
        <div class="flex1">

            <div id="now-showing1">
                <p>
                    <a href="#synopsis">
                        <input onclick="booking_joker()" id="booking_joker_button" type="button"
                            value="Click here for detail"> </a>
                </p>
                <div>
                    <img class="poster" src="../a2/img/joker-poster.jpg" alt="joker poster" width="250rem"
                        height="250rem" top="40%">
                </div>
                <div class="movie-timetable">
                    <h3>Joker</h3>
                    <h4>06/May - 6pm</h4>
                    <h4>13/May - 4pm</h4>
                    <h4>25/May - 7pm</h4>
                    <h4>13/June - 2pm</h4>
                </div>
            </div>

            <div id="now-showing2">
                <p>
                    <a href="#synopsis">
                        <input onclick="booking_terminator()" id="booking_joker_button" type="button"
                            value="Click here for detail"> </a>
                </p>
                <img class="poster" src="../a2/img/terminator-poster.jpg" alt="terminator poster" width="250rem"
                    height="250rem">
                <div class="movie-timetable">
                    <h3>Terminator</h3>
                    <h4>06/May - 6pm</h4>
                    <h4>13/May - 4pm</h4>
                    <h4>25/May - 7pm</h4>
                    <h4>13/June - 2pm</h4>
                </div>
            </div>
        </div>

        <div class="flex2">
            <div id="now-showing3">
                <p>
                    <a href="#synopsis">
                        <input onclick="booking_black_panther()" id="booking_joker_button" type="button"
                            value="Click here for detail"> </a>
                </p>
                <img class="poster" src="../a2/img/blackpanther-poster.jpg" alt="black panther poster" width="250rem"
                    height="250rem">
                <div class="movie-timetable">
                    <h3>black panther</h3>
                    <h4>06/May - 6pm</h4>
                    <h4>13/May - 4pm</h4>
                    <h4>25/May - 7pm</h4>
                    <h4>13/June - 2pm</h4>
                </div>
            </div>


            <div id="now-showing4">
                <p>
                    <a href="#synopsis">
                        <input onclick="booking_us()" id="booking_joker_button" type="button"
                            value="Click here for detail"> </a>
                </p>
                <img class="poster" src="../a2/img/usposter.jpg" alt="us-poster" width="250rem" height="250rem">
                <div class="movie-timetable">
                    <h3>Us</h3>
                    <h4>06/May - 6pm</h4>
                    <h4>13/May - 4pm</h4>
                    <h4>25/May - 7pm</h4>
                    <h4>13/June - 2pm</h4>
                </div>
            </div>
        </div>
    </section>

    <div class="parallax1"></div>




    <!-- This is for the synopsis    -->

    <div class="parallax1"></div>

    <section class="parallax2" id="synopsis">
        <h2>Synopsis</h2>

        <div class="synopsis-joker">
            <p id="s-title">Movie title</p>
            <p class="s-Plot_description">Plot description</p>
            <!--
            <iframe class="joker-trailer" width="420" height="315" src="http://www.jokermovie.net/">
            </iframe>            
-->
            <p id="s-plot_description_content">.
                <br>
                <br>
                <br>
                <br>
            </p>
            <p class="s-booking">Make a Booking:</p>
            <p> </p>
            <button onclick="first_booking_button(),error_message()" id="button11">06/May - 6pm</button>
            <button onclick="second_booking_button()" id="button12"><a href="#booking_form1"> 13/May - 4pm</a> </button>
            <button onclick="third_booking_button()" id="button13"><a href="#booking_form1">25/May - 7pm</a> </button>
            <button onclick="forth_booking_button()" id="button14"><a href="#booking_form1"> 13/June - 2pm</a> </button>
        </div>


    </section>

    <div class="parallax1"></div>


    <!-- This is for the booking form    -->

    <div class="parallax1"></div>

    <section class="parallax2" id="booking_form1">
        <div>
            <h2>Booking form</h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" target="_blank">

            <div class="bookinng_form">
                    <h5 id="s-title1">Joker </h5> 
                    <br>
                    <div class="personal_infor">
                        <h6>Customer Information</h6>
                        <p style= "color:gray; font-size:0.9rem;"><span class="error">* required field</span></p>
                        
                        <br>
                        
                        <input type="submit" name="session-reset" value="session-reset">
                        
                        <br>

                        <!-- Name-->
                        Name: <input type="text" id="name" name="cust[name]">
                        <span class="error">* <?php echo $nameErr;?></span>
                        <br><br>

                        <!-- Email-->
                        E-mail: <input type="text" id="email" name="cust[email]">
                        <span class="error">* <?php echo $emailErr;?></span>
                        <br><br>

                        <!-- Mobile-->
                        Mobile: <input type="text" id="mobile" name="cust[mobile]">
                        <span class="error">* <?php echo $mobileErr;?></span>                       
                        <br><br>

                        <!-- Credit Card-->
                        Credit card: <input type="text" id="Credit_Card" name="cust[card]">
                        <span class="error">* <?php echo $credit_card_Err;?></span>   
                        <br><br>

                        <!-- Expiry-->
                        <label for="Expiry">Expiry:</label>
                        <input  type="month"  min="2020-05"  id="expiry" name="cust[expiry]"> *
                        <br><br>

                        <!-- Order-->
                        <input type="submit" id="order" name="order" value="Order">
                    </div>
                    <!-- Movie date-->
                    <p id="movie_date_syn"> Date</p>
                    <select name="select_movie_date" id="select_movie_date">
                        <option value="06/May">06/May</option>
                        <option value="13/May">13/May</option>
                        <option value="25/May">06/May</option>
                        <option value="13/May">06/May</option>
                    </select>
                    
                    <br><br>

                    <!-- Moive ID -->
                    <label for="Moive ID">Moive ID:</label>
                    <input type="hidden" id="movie_id" name="movie[id]" patter="(ANM|ACT)">
                    
                    <br><br>
                    
                    <!-- Moive Day-->
                    <label for="Moive Day">Moive Day:</label>
                    <input type="hidden" id="movie_day" name="movie[day]" pattern="(MON| TUE| WED| THU| FRI| SAT| SUN)">
                    
                    <br><br>

                    <!-- Moive Hour-->
                    <label for="Moive Hour">Moive Hour:</label>
                    <input type="hidden" id="movie_hour" name="movie[hour]" pattern="(T12|T15| T18| T21)">
                    
                    <br><br>



                    <div class="standard">
                        <h6>Standard</h6>

                        <!-- Standard Adult-->
                        <label for="S_adult">Standard Adult:</label>
                        <!--   <input type="select" id="S_adult" name="seats[STA]"> -->
                        <select id="num_adult" id="S_adult" name="seats[STA]">
                            <option value="Please Select">Please Select</option>
                            <option value="1">1 </option>
                            <option value="2">2 </option>
                            <option value="3">3 </option>
                            <option value="4">4 </option>
                            <option value="5">5 </option>
                            <option value="6">6 </option>
                            <option value="7">7 </option>
                            <option value="8">8 </option>
                            <option value="9">9 </option>
                            <option value="10">10 </option>
                        </select>
                        <br><br>

                        <!-- Standard Concession-->
                        <label for="S_concession">Standard Concession:</label>
                        <!--       <input type="select" id="S_concession" name="seats[STP]"> -->
                        <select id="num_concession_adult" name="seats[STP]">
                            <option value="Please Select">Please Select</option>
                            <option value="1">1 </option>
                            <option value="2">2 </option>
                            <option value="3">3 </option>
                            <option value="4">4 </option>
                            <option value="5">5 </option>
                            <option value="6">6 </option>
                            <option value="7">7 </option>
                            <option value="8">8 </option>
                            <option value="9">9 </option>
                            <option value="10">10 </option>
                        </select>
                        <br><br>

                        <!-- Standard Child-->
                        <label for="S_child">Standard Child:</label>
                        <!--   <input type="select" id="S_child" name="seats[STC]"> -->
                        <select id="num_standard_child" name="seats[STC]">
                            <option value="Please Select">Please Select</option>
                            <option value="1">1 </option>
                            <option value="2">2 </option>
                            <option value="3">3 </option>
                            <option value="4">4 </option>
                            <option value="5">5 </option>
                            <option value="6">6 </option>
                            <option value="7">7 </option>
                            <option value="8">8 </option>
                            <option value="9">9 </option>
                            <option value="10">10 </option>
                        </select>
                        <br><br>
                    </div>

                    <div class="first_class">
                        <h6>First Class</h6>
                        <!-- First Class Adult-->
                        <label for="F_class_adult">First Class Adult:</label>
                        <!--     <input type="select" id="F_class_adult" name="seats[FCA]">-->
                        <select id="num_first_child" name="seats[FCA]">
                            <option value="Please Select">Please Select</option>
                            <option value="1">1 </option>
                            <option value="2">2 </option>
                            <option value="3">3 </option>
                            <option value="4">4 </option>
                            <option value="5">5 </option>
                            <option value="6">6 </option>
                            <option value="7">7 </option>
                            <option value="8">8 </option>
                            <option value="9">9 </option>
                            <option value="10">10 </option>
                        </select>
                        <br><br>

                        <!-- First Class Concession-->
                        <label for="F_class_concession">First Class Concession:</label>
                        <!--   <input type="select" id="F_class_concession" name="seats[FCP]">-->
                        <select name="seats[FCP]" id="num_first_child">
                            <option value="Please Select">Please Select</option>
                            <option value="1">1 </option>
                            <option value="2">2 </option>
                            <option value="3">3 </option>
                            <option value="4">4 </option>
                            <option value="5">5 </option>
                            <option value="6">6 </option>
                            <option value="7">7 </option>
                            <option value="8">8 </option>
                            <option value="9">9 </option>
                            <option value="10">10 </option>
                        </select>
                        <br><br>

                        <!-- First Class Child-->
                        <label for="F_class_child">First Class Child:</label>
                        <!--    <input type="select" id="F_class_child" name="seats[FCC]"> -->
                        <select name="seats[FCC]" id="num_first_child">
                            <option value="Please Select">Please Select</option>
                            <option value="1">1 </option>
                            <option value="2">2 </option>
                            <option value="3">3 </option>
                            <option value="4">4 </option>
                            <option value="5">5 </option>
                            <option value="6">6 </option>
                            <option value="7">7 </option>
                            <option value="8">8 </option>
                            <option value="9">9 </option>
                            <option value="10">10 </option>
                        </select>
                        <br><br>
                    </div>

 
                    <div id="totalPrice">
                        Total$<input type="text">
                    </div>
            </form>
        </div>


    </section>


    <!-- footer from here   -->
    
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <hr>
    <footer>
        <div>
            <p>Address: 2nd Floor, Rivera Park Hanoi - Số 5/28 Thành Thái, P.10, Q.114, TPHANOI.</p>
            <p>Hotline: 1911 6112. All RIGHTS RESERVED.</p>
        </div>

        <div>&copy;
            <script>
                document.write(new Date().getFullYear());
            </script> Han sang yeob, S3821179 Last modified
            <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
        <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web
            Programming course at RMIT University in Melbourne, Australia.</div>
        <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
   <br><br>
        <p><strong> This area is footer for debugging</strong></p>
  <br><br>
<?php
 printMyCode(); 
?>
     <p><strong> This area is footer for checking customer input data</strong></p>
        <?php
        echo "<h2>Customer Input:</h2>";
        echo $name;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $mobile;
        echo "<br>";
        echo $credit_card;
        echo "<br>";
        echo $credit_card;
        echo "<br><br>";
        preShow($_POST);
        ?>
   
    </footer>

    <main>
        <article id='Website Under Construction'>
            <!-- Creative Commons image sourced from https://pixabay.com/en/maintenance-under-construction-2422173/ and used for educational purposes only -->
            <img src='https://cdn.pixabay.com/photo/2017/06/20/08/12/maintenance-2422173_1280.png' height="10%"
                width="10%" alt='Website Under Construction' />
        </article>
    </main>

    
</body>

</html>
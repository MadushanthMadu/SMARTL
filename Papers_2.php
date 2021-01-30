<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Papers - SMARTL | For Better Knowladge</title>
        <link rel="shortcut icon" type="image/png" href="img/Logo2.png">
        <link rel="stylesheet" href="Style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <script>
            var grade;
            var medium;

            window.onload = (event) => {
                let url = window.location.href;
                let lastQuestionIndex = url.lastIndexOf("?");
                let parameter = url.substring(lastQuestionIndex);//?11/0/0
                let gradeWithMediumAndCategory = parameter.substring(1);//11/0/0

                this.grade = gradeWithMediumAndCategory.substring(0, 2);
                let mediumId = gradeWithMediumAndCategory.substring(3, 4);
                let category = gradeWithMediumAndCategory.substring(5);

                this.DisplayContent(mediumId);
                this.DispalyCategory(category, mediumId);
                this.DispalyGrade(mediumId, category);
            };

            function DisplayContent(mediumId) {
                let tamil = document.getElementById("Tamil");
                let english = document.getElementById("English");
                let sinhala = document.getElementById("Sinhala");

                //Tamil
                if(mediumId == 0){ 
                    tamil.style.display = "block";
                    english.style.display = "none";
                    sinhala.style.display = "none";
                }
                //English
                else if(mediumId == 1){
                    tamil.style.display = "none";
                    english.style.display = "block";
                    sinhala.style.display = "none";
                }
                //Sinhala
                else if(mediumId == 2){
                    tamil.style.display = "none";
                    english.style.display = "none";
                    sinhala.style.display = "block";
                }
            }

            function DispalyCategory(category, mediumId) {
                let online_examination = document.getElementById("OE" + mediumId);
                let past_paper = document.getElementById("PP" + mediumId);
                let model_paper = document.getElementById("MP" + mediumId);
                let term_paper = document.getElementById("TP" + mediumId);
                let book = document.getElementById("B" + mediumId);

                //Tamil
                if(category == 0){ 
                    online_examination.style.display = "block";
                    past_paper.style.display = "none";
                    model_paper.style.display = "none";
                    term_paper.style.display = "none";
                    book.style.display = "none";
                }
                //English
                else if(category == 1){
                    online_examination.style.display = "none";
                    past_paper.style.display = "block";
                    model_paper.style.display = "none";
                    term_paper.style.display = "none";
                    book.style.display = "none";
                }
                //Sinhala
                else if(category == 2){
                    online_examination.style.display = "none";
                    past_paper.style.display = "none";
                    model_paper.style.display = "block";
                    term_paper.style.display = "none";
                    book.style.display = "none";
                }
                else if(category == 3){
                    online_examination.style.display = "none";
                    past_paper.style.display = "none";
                    model_paper.style.display = "none";
                    term_paper.style.display = "block";
                    book.style.display = "none";
                }
                else if(category == 4){
                    online_examination.style.display = "none";
                    past_paper.style.display = "none";
                    model_paper.style.display = "none";
                    term_paper.style.display = "none";
                    book.style.display = "block";
                }
            }

            function DispalyGrade(mediumId, category) {
                let gr10 = document.getElementById("ten" + mediumId + category);
                let gr11 = document.getElementById("eleven" + mediumId + category);

                if(this.grade == 10){ 
                    gr10.style.display = "block";
                    gr11.style.display = "none";
                }
                else if(this.grade == 11){
                    gr10.style.display = "none";
                    gr11.style.display = "block";
                }
            }
        </script>
    </head>
<body>
    
    <table width="100%" class="header" id="myHeader">
        <tr>
            <td align="center" width="15%" style="padding: 10px;">
                <img src="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Imgs/SMARTL.png" width="75px">
            </td>

            <td align="left" width="85%">
                <font color="#000000" size="+2">
                <button>
                    <a href="index.php" style="text-decoration:none ; font-size:20px">
                    <b>HOME</b>
                    </a>
                </button>&emsp;|&emsp;

                <button>
                    <a href="Conference.php" style="text-decoration:none ; font-size:20px">
                    <b>CONFERENCE</b>
                    </a>
                </button>&emsp;|&emsp;

                <button>
                    <a href="Papers.php" style="text-decoration:none ; font-size:20px">
                    <b>PAPERS</b>
                    </a>
                </button>&emsp;|&emsp;

                <button>
                    <a href="General_Knowladge.php" style="text-decoration:none ; font-size:20px">
                    <b>GENERAL KNOWLADGE</b>
                    </a>
                </button>&emsp;|&emsp;

                <button>
                    <a href="About.php" style="text-decoration:none ; font-size:20px">
                    <b>ABOUT US</b>
                    </a>
                </button>&emsp;|&emsp;

                <button>
                    <a style="text-decoration:none ; font-size:20px" data-toggle="modal" data-target="#Login" >
                    <b>LOGIN</b>
                    </a>
                </button>
                </font>
            </td>
        </tr>
    </table>

    <script>
        window.onscroll = function() {myFunction()};

        var header = document.getElementById("myHeader");
        var sticky = header.offsetTop

        function myFunction() {
        if (window.pageYOffset > sticky)
        {
            header.classList.add("sticky");
        }
        else {
            header.classList.remove("sticky");
        }
        }

        $(function() {
            $(".btn").click(function() {
                $(".form-signin").toggleClass("form-signin-left");
            $(".form-signup").toggleClass("form-signup-left");
            $(".frame").toggleClass("frame-long");
            $(".signup-inactive").toggleClass("signup-active");
            $(".signin-active").toggleClass("signin-inactive");
            $(".forgot").toggleClass("forgot-left");   
            $(this).removeClass("idle").addClass("active");
            });
        });

        function validateForm() {
            var password = document.forms["signup"]["pass"].value;
            var confirmpassword = document.forms["signup"]["confirmpassword"].value;

            if(password != confirmpassword){
                alert("Both the passwords should match");
            }
            else {
                $.ajax({
                    url:'database.php',
                    type:'post',
                    data:$('#signup').serialize(),
                    success:function(){
                        console.log("worked");
                    }
                });

                document.getElementById("fullname").value='';
                document.getElementById("email").value='';
                document.getElementById("pass").value='';
                document.getElementById("confirmpassword").value='';

                $('#Login').modal('hide');
                $('.modal-backdrop').remove();
            }
        }

        function LoginForm() {
            // document.getElementById("username").value='';
            // document.getElementById("password").value='';

            $('#Login').modal('hide');
            $('.modal-backdrop').remove();
        }
    </script>

    <div id="Tamil" style="display: none;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div id="OE0" style="display: none;">
                        <div id="ten00" style="display: none;">
                            <div class="papers" id="OnlineExamination">
                                <h2>1. தமிழ்</h2>
                                <button class="btn">
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSesivml1Uva0EX-VT6X5O38mWmJN_GPRai-DT5ZqUim6tfYhg/viewform" style="text-decoration: none;" target="_blank"><b>தமிழ் எழுத்துக்கள் - கட்டுரை</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSfl0jxB6kzfaLYpgvwsKwEr22hg-2wNZzUOkGmhk9eASo0EKw/viewform" style="text-decoration: none;" target="_blank"><b>இருபதாம் நூற்றாண்டுக் கவிதை - கட்டுரை</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSfrAe_lqdtoUlhYSPRK_bXWcJx1izij1rnJOk9LOsdq7nf_RQ/viewform" style="text-decoration: none;" target="_blank"><b>மச்சாள் - சிறுகதை</b></a>
                                </button>
                            </div>
                            <div class="papers" id="OnlineExamination">
                                <h2>2. கணிதம்</h2>
                                <button class="btn">
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSdU-Uq-YFNJZf-xmecxjXlQfFFSWMGjTEBdOgkTI6GHGe9hpQ/viewform" style="text-decoration: none;" target="_blank"><b>சுற்றளவு</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSe15Liggk14I3TWKftNCOApODLFitdbj3tbCZUCeihZLdOjCg/viewform" style="text-decoration: none;" target="_blank"><b>வர்க்கமூலம்</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSdg6nRr9D0oI3c-dfPXpNiUM48DRC4hDEKaJCynVyUL8bgDQw/viewform" style="text-decoration: none;" target="_blank"><b>பின்னங்கள்</b></a>
                                </button>
                            </div>
                            <div class="papers" id="OnlineExamination">
                                <h2>3. விஞ்ஞானம்</h2>
                                <button class="btn">
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSfonX5HJ9FO7qt2FJ1GRA5MFcM4qa92WluILWXoHPRv3j5YjQ/viewform" style="text-decoration: none;" target="_blank"><b>உயிரின இரசாயன அடிப்படை</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSdSAY4zqLrAE2ek6Yh7qt291WnoNRGSBemU1XdogNXS0wdERg/viewform" style="text-decoration: none;" target="_blank"><b>நேர்கோட்டு இயக்கம்</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLScO-1q8OmH8iHZAGnYdkXAyDAo78yGcjIa4Qy-9z1yOXun0ug/viewform" style="text-decoration: none;" target="_blank"><b>சடப்பொருள்களின் கட்டமைப்பு</b></a>
                                </button>
                            </div>
                        </div>

                        <div id="eleven00" style="display: none;">
                            <div class="papers" id="OnlineExamination">
                                <h2>1. தமிழ்</h2>
                                <button class="btn">
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSc459gHI8kQZEmGXVA9pXUtpUmMl91B9qVznVpOPOvHGuyIVg/viewform" style="text-decoration: none;" target="_blank"><b>சொல்லின் இலக்கணம்</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://forms.office.com/Pages/ResponsePage.aspx?id=DQSIkWdsW0yxEjajBLZtrQAAAAAAAAAAAAYAAIJ61ZpUNlVBQ1c4VzZCMFQ2OE1KT1JIUlI3V01UQy4u&lang=ta" style="text-decoration: none;" target="_blank"><b>தமிழில் சிறுவர் இலக்கியம்</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSdNAA6hQXyV2DhxzcQUvbFDneB3_QJRXoPLSCkW5UhtTeBQwA/viewform" style="text-decoration: none;" target="_blank"><b>ஈழநாட்டுப் புலவர்</b></a>
                                </button>
                            </div>
                            <div class="papers" id="OnlineExamination">
                                <h2>2. கணிதம்</h2>
                                <button class="btn">
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLScEmQdMIw3xQECxuxc8cem5zsaSCg_NkcWM9O8Q_4hxDGL4Mw/viewform" style="text-decoration: none;" target="_blank"><b>மெய்யெண்கள்</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSdMRlTlWiniFXTnr-BbICiE1fVC3Wwz6lCuepUHI1r8ubip6Q/viewform" style="text-decoration: none;" target="_blank"><b>சுட்டிகளும் மடக்கைகளும் I</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLScoG9bc9mGnXgFclEsRPZuFrOBRVNWkkc3F52BUGLJpCaOYow/viewform" style="text-decoration: none;" target="_blank"><b>சுட்டிகளும் மடக்கைகளும் II</b></a>
                                </button>
                            </div>
                            <div class="papers" id="OnlineExamination">
                                <h2>3. விஞ்ஞானம்</h2>
                                <button class="btn">
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSemDY5ml5kjNizD21tb_R0HY3cok_cRMlG32LqMMaFO0L7XIg/viewform" style="text-decoration: none;" target="_blank"><b>தாவர இழையங்களும் விலங்கு இழையங்களும்</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSeJKL4DEqR2ULk1ANYcbjUMtr4LP-NSnUNlnP6XC21TxXQjnQ/viewform" style="text-decoration: none;" target="_blank"><b>ஒளித்தொகுப்பு</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLScePbwl-Q4CECsJNW18UHoh5UyTiGmiWU4VSn4H2R9TR6t6aA/viewform" style="text-decoration: none;" target="_blank"><b>கலவை</b></a>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div id="PP0" style="display: none;">
                        <div id="eleven01">
                            <div class="papers" id="PastPapers">
                                <h2>1. தமிழ்</h2>
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample10.pdf" style="text-decoration: none;" target="_blank"><b>2019 - வினாத்தாள்</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample10.pdf" style="text-decoration: none;" target="_blank"><b>2018 - வினாத்தாள்</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample10.pdf" style="text-decoration: none;" target="_blank"><b>2017 - வினாத்தாள்</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample10.pdf" style="text-decoration: none;" target="_blank"><b>2016 - வினாத்தாள்</b></a>
                                </button>
                            </div>
                            <div class="papers" id="PastPapers">
                                <h2>2. கணிதம்</h2>
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample19.pdf" style="text-decoration: none;" target="_blank"><b>2019 - வினாத்தாள்</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample19.pdf" style="text-decoration: none;" target="_blank"><b>2018 - வினாத்தாள்</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample19.pdf" style="text-decoration: none;" target="_blank"><b>2017 - வினாத்தாள்</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample19.pdf" style="text-decoration: none;" target="_blank"><b>2016 - வினாத்தாள்</b></a>
                                </button>
                            </div>
                            <div class="papers" id="PastPapers">
                                <h2>3. விஞ்ஞானம்</h2>
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample20.pdf" style="text-decoration: none;" target="_blank"><b>2019 - வினாத்தாள்</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample20.pdf" style="text-decoration: none;" target="_blank"><b>2018 - வினாத்தாள்</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample20.pdf" style="text-decoration: none;" target="_blank"><b>2017 - வினாத்தாள்</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample20.pdf" style="text-decoration: none;" target="_blank"><b>2016 - வினாத்தாள்</b></a>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div id="MP0" style="display: none;">
                        <div id="eleven02">
                            <div class="papers" id="ModelPapers">
                                <h2>1. தமிழ்</h2>
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample11.pdf" style="text-decoration: none;" target="_blank"><b>2019 - வினாத்தாள்</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample11.pdf" style="text-decoration: none;" target="_blank"><b>2018 - வினாத்தாள்</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample11.pdf" style="text-decoration: none;" target="_blank"><b>2017 - வினாத்தாள்</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample11.pdf" style="text-decoration: none;" target="_blank"><b>2016 - வினாத்தாள்</b></a>
                                </button>
                            </div>
                            <div class="papers" id="ModelPapers">
                                <h2>2. கணிதம்</h2>
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample2.pdf" style="text-decoration: none;" target="_blank"><b>2019 - வினாத்தாள்</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample2.pdf" style="text-decoration: none;" target="_blank"><b>2018 - வினாத்தாள்</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample2.pdf" style="text-decoration: none;" target="_blank"><b>2017 - வினாத்தாள்</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample2.pdf" style="text-decoration: none;" target="_blank"><b>2016 - வினாத்தாள்</b></a>
                                </button>
                            </div>
                            <div class="papers" id="ModelPapers">
                                <h2>3. விஞ்ஞானம்</h2>
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample26.pdf" style="text-decoration: none;" target="_blank"><b>2019 - வினாத்தாள்</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample26.pdf" style="text-decoration: none;" target="_blank"><b>2018 - வினாத்தாள்</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample26.pdf" style="text-decoration: none;" target="_blank"><b>2017 - வினாத்தாள்</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample26.pdf" style="text-decoration: none;" target="_blank"><b>2016 - வினாத்தாள்</b></a>
                                </button>
                            </div> 
                        </div>
                    </div>

                    <div id="TP0" style="display: none;">
                        <div id="ten03">
                            <div class="papers" id="TermPapers">
                                <h2>1. தமிழ்</h2>
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample12.pdf" style="text-decoration: none;" target="_blank"><b>1ம்  தவணை - 2019</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample12.pdf" style="text-decoration: none;" target="_blank"><b>2ம்  தவணை - 2019</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample12.pdf" style="text-decoration: none;" target="_blank"><b>3ம்  தவணை - 2019</b></a>
                                </button>
                            </div>
                            <div class="papers" id="TermPapers">
                                <h2>2. கணிதம்</h2>
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample25.pdf" style="text-decoration: none;" target="_blank"><b>1ம்  தவணை - 2019</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample25.pdf" style="text-decoration: none;" target="_blank"><b>2ம்  தவணை - 2019</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample25.pdf" style="text-decoration: none;" target="_blank"><b>3ம்  தவணை - 2019</b></a>
                                </button>
                            </div>
                            <div class="papers" id="TermPapers">
                                <h2>3. விஞ்ஞானம்</h2>
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample24.pdf" style="text-decoration: none;" target="_blank"><b>1ம்  தவணை - 2019</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample24.pdf" style="text-decoration: none;" target="_blank"><b>2ம்  தவணை - 2019</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample24.pdf" style="text-decoration: none;" target="_blank"><b>3ம்  தவணை - 2019</b></a>
                                </button>
                            </div>
                        </div>

                        <div id="eleven03">
                            <div class="papers" id="TermPapers">
                                <h2>1. தமிழ்</h2>
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample13.pdf" style="text-decoration: none;" target="_blank"><b>1ம்  தவணை - 2019</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample13.pdf" style="text-decoration: none;" target="_blank"><b>2ம்  தவணை - 2019</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample13.pdf" style="text-decoration: none;" target="_blank"><b>3ம்  தவணை - 2019</b></a>
                                </button>
                            </div>
                            <div class="papers" id="TermPapers">
                                <h2>2. கணிதம்</h2>
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample23.pdf" style="text-decoration: none;" target="_blank"><b>1ம்  தவணை - 2019</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample23.pdf" style="text-decoration: none;" target="_blank"><b>2ம்  தவணை - 2019</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample23.pdf" style="text-decoration: none;" target="_blank"><b>3ம்  தவணை - 2019</b></a>
                                </button>
                            </div>
                            <div class="papers" id="TermPapers">
                                <h2>3. விஞ்ஞானம்</h2>
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample22.pdf" style="text-decoration: none;" target="_blank"><b>1ம்  தவணை - 2019</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample22.pdf" style="text-decoration: none;" target="_blank"><b>2ம்  தவணை - 2019</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample22.pdf" style="text-decoration: none;" target="_blank"><b>3ம்  தவணை - 2019</b></a>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div id="B0" style="display: none;">
                        <div id="ten04">
                            <div class="papers" id="TextBooks">
                                <h2>1. தமிழ்</h2>
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample14.pdf" style="text-decoration: none;" target="_blank"><b>தமிழ் எழுத்துக்கள் - கட்டுரை</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample14.pdf" style="text-decoration: none;" target="_blank"><b>இருபதாம் நூற்றாண்டுக் கவிதை - கட்டுரை</a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample14.pdf" style="text-decoration: none;" target="_blank"><b>மச்சாள் - சிறுகதை</b></a>
                                </button>
                            </div>
                            <div class="papers" id="TextBooks">
                                <h2>2. கணிதம்</h2>
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample21.pdf" style="text-decoration: none;" target="_blank"><b>சுற்றளவு</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample21.pdf" style="text-decoration: none;" target="_blank"><b>வர்க்கமூலம்</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample21.pdf" style="text-decoration: none;" target="_blank"><b>பின்னங்கள்</b></a>
                                </button>
                            </div>
                            <div class="papers" id="TextBooks">
                                <h2>3. விஞ்ஞானம்</h2>
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample32.pdf" style="text-decoration: none;" target="_blank"><b>உயிரின இரசாயன அடிப்படை</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample32.pdf" style="text-decoration: none;" target="_blank"><b>நேர்கோட்டு இயக்கம்</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample32.pdf" style="text-decoration: none;" target="_blank"><b>சடப்பொருள்களின் கட்டமைப்பு</b></a>
                                </button>
                            </div>
                        </div>

                        <div id="eleven04">
                            <div class="papers" id="TextBooks">
                                <h2>1. தமிழ்</h2>
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample15.pdf" style="text-decoration: none;" target="_blank"><b>சொல்லின் இலக்கணம்</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample15.pdf" style="text-decoration: none;" target="_blank"><b>தமிழில் சிறுவர் இலக்கியம்</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample15.pdf" style="text-decoration: none;" target="_blank"><b>ஈழநாட்டுப் புலவர்</b></a>
                                </button>
                            </div>
                            <div class="papers" id="TextBooks">
                                <h2>2. கணிதம்</h2>
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample31.pdf" style="text-decoration: none;" target="_blank"><b>மெய்யெண்கள்</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample31.pdf" style="text-decoration: none;" target="_blank"><b>சுட்டிகளும் மடக்கைகளும் I</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample31.pdf" style="text-decoration: none;" target="_blank"><b>சுட்டிகளும் மடக்கைகளும் II</b></a>
                                </button>
                            </div>
                            <div class="papers" id="TextBooks">
                                <h2>3. விஞ்ஞானம்</h2>
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample30.pdf" style="text-decoration: none;" target="_blank"><b>தாவர இழையங்களும் விலங்கு இழையங்களும்</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample30.pdf" style="text-decoration: none;" target="_blank"><b>ஒளித்தொகுப்பு</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample30.pdf" style="text-decoration: none;" target="_blank"><b>கலவை</b></a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="English" style="display: none;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div id="OE1" style="display: none;">
                        <div id="ten10" style="display: none;">
                            <div class="papers" id="OnlineExamination">
                                <h2>1. English</h2>
                                <button class="btn">
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLScePbwl-Q4CECsJNW18UHoh5UyTiGmiWU4VSn4H2R9TR6t6aA/viewform" style="text-decoration: none;" target="_blank"><b>Tamil Words</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSfue_QbmqF5HvZP0JXgmwTGy9vNbmEyk43p-wMGiubGTWi4TQ/viewform" style="text-decoration: none;" target="_blank"><b>20<sup>th</sup> Century Poems</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://docs.google.com/forms/d/1158fn0dngy6FpASiUi9PkcgEh6ltybWyNu8R98rZSLA/viewform?edit_requested=true" style="text-decoration: none;" target="_blank"><b>Machal</b></a>
                                </button>
                            </div>
                            <div class="papers" id="OnlineExamination">
                                <h2>2. Mathematics</h2>
                                <button class="btn">
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLScMEL1cTr_jGZTBb6zwap1TMbYpekq_Z6dwoUVbygdDtehWZQ/viewform?vc=0&c=0&w=1" style="text-decoration: none;" target="_blank"><b>Perimeter</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSfBt5ajAtNnEx_vJV_-5Y8Fr8wtLXV9utnhV54Pi6VljG6zpg/viewform?hr_submission=ChgI1vnlsO8BEg8I1ajfzvkBEgYI45y842UQAQ" style="text-decoration: none;" target="_blank"><b>Square Root</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLScAUIPG6l_Vrkar_14dHofaEKTdNAeNuxpcfHNhhk7sbGbuqA/viewform" style="text-decoration: none;" target="_blank"><b>Fraction</b></a>
                                </button>
                            </div>
                            <div class="papers" id="OnlineExamination">
                                <h2>3. Science</h2>
                                <button class="btn">
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLScWF3222WzkezTnxcE0wKUg-xWWTqP8uqa5807-hv4pBoI1FA/viewform" style="text-decoration: none;" target="_blank"><b>Chemical Basis Of Life</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSe_Pi86_kJt9EB848mLF72ylT3XoRD0IMxLZGiAwOWuwm698Q/viewform" style="text-decoration: none;" target="_blank"><b>Motion In A Straight</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSc7Thj8WVGkE8AqBHJg0ryUWjejsldHYWgQCbfE7cpF7lvWlw/viewform" style="text-decoration: none;" target="_blank"><b>Structure Of Matter</b></a>
                                </button>
                            </div>
                        </div>

                        <div id="eleven10" style="display: none;">
                            <div class="papers" id="OnlineExamination">
                                <h2>1. English</h2>
                                <button class="btn">
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSfuoLDusWnwXbQLm_kElNHgBmgnzTv3ZF_hByRr0q7K2nvf6A/viewform?fbzx=1541498569286125244" style="text-decoration: none;" target="_blank"><b>The Grammar Of The Word</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLScZdlIsJ8scC1pT2zrMyaXaTLpYtSnUMcNymGjJovpFJe9k5g/viewform" style="text-decoration: none;" target="_blank"><b>Children's literature in Tamil</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLScDz0o4xNfoX2Jj4f9zjpTREk4vDxyMB8oWulN0vkffJ2xcBg" style="text-decoration: none;" target="_blank"><b>Eelam poet</b></a>
                                </button>
                            </div>
                            <div class="papers" id="OnlineExamination">
                                <h2>2. Mathematics</h2>
                                <button class="btn">
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSfuoLDusWnwXbQLm_kElNHgBmgnzTv3ZF_hByRr0q7K2nvf6A/viewform?fbzx=1541498569286125244" style="text-decoration: none;" target="_blank"><b>Real Numbers</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSfuoLDusWnwXbQLm_kElNHgBmgnzTv3ZF_hByRr0q7K2nvf6A/viewform?fbzx=1541498569286125244" style="text-decoration: none;" target="_blank"><b>Indices And Logarithms I</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSfuoLDusWnwXbQLm_kElNHgBmgnzTv3ZF_hByRr0q7K2nvf6A/viewform?fbzx=1541498569286125244" style="text-decoration: none;" target="_blank"><b>Indices And Logarithms II</b></a>
                                </button>
                            </div>
                            <div class="papers" id="OnlineExamination">
                                <h2>3. Science</h2>
                                <button class="btn">
                                    <a href="https://docs.google.com/forms/d/1K5uxFH8cUlduU655RslGe7esreS-nBs0EGeU1fNJuYg/viewform?edit_requested=true" style="text-decoration: none;" target="_blank"><b>Living Tissues</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://docs.google.com/forms/d/1K5uxFH8cUlduU655RslGe7esreS-nBs0EGeU1fNJuYg/viewform?edit_requested=true" style="text-decoration: none;" target="_blank"><b>Photosynthesis</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://docs.google.com/forms/d/1K5uxFH8cUlduU655RslGe7esreS-nBs0EGeU1fNJuYg/viewform?edit_requested=true" style="text-decoration: none;" target="_blank"><b>Mixtures</b></a>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div id="PP1" style="display: none;">
                        <div id="eleven11">
                            <div class="papers" id="PastPapers">
                                <h2>1. English</h2>
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample17.pdf" style="text-decoration: none;" target="_blank"><b>G.C.E. O/L 2019</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample17.pdf" style="text-decoration: none;" target="_blank"><b>G.C.E. O/L 2018</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample17.pdf" style="text-decoration: none;" target="_blank"><b>G.C.E. O/L 2017</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample17.pdf" style="text-decoration: none;" target="_blank"><b>G.C.E. O/L 2016</b></a>
                                </button>
                            </div>
                            <div class="papers" id="PastPapers">
                                <h2>2. Mathematics</h2>
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample3.pdf" style="text-decoration: none;" target="_blank"><b>G.C.E. O/L 2019</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample3.pdf" style="text-decoration: none;" target="_blank"><b>G.C.E. O/L 2018</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample3.pdf" style="text-decoration: none;" target="_blank"><b>G.C.E. O/L 2017</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample3.pdf" style="text-decoration: none;" target="_blank"><b>G.C.E. O/L 2016</b></a>
                                </button>
                            </div>
                            <div class="papers" id="PastPapers">
                                <h2>3. Science</h2>
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample29.PDF" style="text-decoration: none;" target="_blank"><b>G.C.E. O/L 2019</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample29.PDF" style="text-decoration: none;" target="_blank"><b>G.C.E. O/L 2018</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample29.PDF" style="text-decoration: none;" target="_blank"><b>G.C.E. O/L 2017</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample29.PDF" style="text-decoration: none;" target="_blank"><b>G.C.E. O/L 2016</b></a>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div id="MP1" style="display: none;">
                        <div id="eleven12">
                            <div class="papers" id="ModelPapers">
                                <h2>1. English</h2>
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample18.pdf" style="text-decoration: none;" target="_blank"><b>Model Paper - 2019</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample18.pdf" style="text-decoration: none;" target="_blank"><b>Model Paper - 2018</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample18.pdf" style="text-decoration: none;" target="_blank"><b>Model Paper - 2017</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample18.pdf" style="text-decoration: none;" target="_blank"><b>Model Paper - 2016</b></a>
                                </button>
                            </div>
                            <div class="papers" id="ModelPapers">
                                <h2>2. Mathematics</h2>
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample28.pdf" style="text-decoration: none;" target="_blank"><b>Model Paper - 2019</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample28.pdf" style="text-decoration: none;" target="_blank"><b>Model Paper - 2018</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample28.pdf" style="text-decoration: none;" target="_blank"><b>Model Paper - 2017</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample28.pdf" style="text-decoration: none;" target="_blank"><b>Model Paper - 2016</b></a>
                                </button>
                            </div>
                            <div class="papers" id="ModelPapers">
                                <h2>3. Science</h2>
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample27.pdf" style="text-decoration: none;" target="_blank"><b>Model Paper - 2019</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample27.pdf" style="text-decoration: none;" target="_blank"><b>Model Paper - 2018</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample27.pdf" style="text-decoration: none;" target="_blank"><b>Model Paper - 2017</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample27.pdf" style="text-decoration: none;" target="_blank"><b>Model Paper - 2016</b></a>
                                </button>
                            </div> 
                        </div>
                    </div>

                    <div id="TP1" style="display: none;">
                        <div id="ten13">
                            <div class="papers" id="TermPapers">
                                <h2>1. English</h2>
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample33.pdf" style="text-decoration: none;" target="_blank"><b>First Term - 2019</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample33.pdf" style="text-decoration: none;" target="_blank"><b>Second Term - 2019</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample33.pdf" style="text-decoration: none;" target="_blank"><b>Third Term - 2019</b></a>
                                </button>
                            </div>
                            <div class="papers" id="TermPapers">
                                <h2>2. Mathematics</h2>
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample34.pdf" style="text-decoration: none;" target="_blank"><b>First Term - 2019</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample34.pdf" style="text-decoration: none;" target="_blank"><b>Second Term - 2019</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample34.pdf" style="text-decoration: none;" target="_blank"><b>Third Term - 2019</b></a>
                                </button>
                            </div>
                            <div class="papers" id="TermPapers">
                                <h2>3. Science</h2>
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample35.pdf" style="text-decoration: none;" target="_blank"><b>First Term - 2019</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample35.pdf" style="text-decoration: none;" target="_blank"><b>Second Term - 2019</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample35.pdf" style="text-decoration: none;" target="_blank"><b>Third Term - 2019</b></a>
                                </button>
                            </div>
                        </div>

                        <div id="eleven13">
                            <div class="papers" id="TermPapers">
                                <h2>1. English</h2>
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample36.pdf" style="text-decoration: none;" target="_blank"><b>First Term - 2019</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample36.pdf" style="text-decoration: none;" target="_blank"><b>Second Term - 2019</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample36.pdf" style="text-decoration: none;" target="_blank"><b>Third Term - 2019</b></a>
                                </button>
                            </div>
                            <div class="papers" id="TermPapers">
                                <h2>2. Mathematics</h2>
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample37.pdf" style="text-decoration: none;" target="_blank"><b>First Term - 2019</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample37.pdf" style="text-decoration: none;" target="_blank"><b>Second Term - 2019</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample37.pdf" style="text-decoration: none;" target="_blank"><b>Third Term - 2019</b></a>
                                </button>
                            </div>
                            <div class="papers" id="TermPapers">
                                <h2>3. Science</h2>
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample38.pdf" style="text-decoration: none;" target="_blank"><b>First Term - 2019</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample38.pdf" style="text-decoration: none;" target="_blank"><b>Second Term - 2019</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample38.pdf" style="text-decoration: none;" target="_blank"><b>Third Term - 2019</b></a>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div id="B1" style="display: none;">
                        <div id="ten14">
                            <div class="papers" id="TextBooks">
                                <h2>1. English</h2>
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample39.pdf" style="text-decoration: none;" target="_blank"><b>Tamil Words</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample39.pdf" style="text-decoration: none;" target="_blank"><b>20<sup>th</sup> Century Poems</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample39.pdf" style="text-decoration: none;" target="_blank"><b>Machal</b></a>
                                </button>
                            </div>
                            <div class="papers" id="TextBooks">
                                <h2>2. Mathematics</h2>
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample4.pdf" style="text-decoration: none;" target="_blank"><b>Perimeter</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample4.pdf" style="text-decoration: none;" target="_blank"><b>Square Root</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample4.pdf" style="text-decoration: none;" target="_blank"><b>Fraction</b></a>
                                </button>
                            </div>
                            <div class="papers" id="TextBooks">
                                <h2>3. Science</h2>
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample40.pdf" style="text-decoration: none;" target="_blank"><b>Chemical Basis Of Life</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample40.pdf" style="text-decoration: none;" target="_blank"><b>Motion In A Straight</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample40.pdf" style="text-decoration: none;" target="_blank"><b>Structure Of Matter</b></a>
                                </button>
                            </div>
                        </div>

                        <div id="eleven14">
                            <div class="papers" id="TextBooks">
                                <h2>1. English</h2>
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample41.pdf" style="text-decoration: none;" target="_blank"><b>The Grammar Of The Word</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample41.pdf" style="text-decoration: none;" target="_blank"><b>Children's literature in Tamil</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample41.pdf" style="text-decoration: none;" target="_blank"><b>Eelam poet</b></a>
                                </button>
                            </div>
                            <div class="papers" id="TextBooks">
                                <h2>2. Mathematics</h2>
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample42.pdf" style="text-decoration: none;" target="_blank"><b>Real Numbers</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample42.pdf" style="text-decoration: none;" target="_blank"><b>Indices And Logarithms I</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample42.pdf" style="text-decoration: none;" target="_blank"><b>Indices And Logarithms II</b></a>
                                </button>
                            </div>
                            <div class="papers" id="TextBooks">
                                <h2>3. Science</h2>
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample43.pdf" style="text-decoration: none;" target="_blank"><b>Living Tissues</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample43.pdf" style="text-decoration: none;" target="_blank"><b>Photosynthesis</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample43.pdf" style="text-decoration: none;" target="_blank"><b>Mixtures</b></a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="Sinhala" style="display: none;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div id="OE2" style="display: none;">
                        <div id="ten20" style="display: none;">
                            <div class="papers" id="OnlineExamination">
                                <h2>1. Sinhala</h2>
                                <button class="btn">
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSeFkBzf315IhIGcVETpAIrXPIExkFQ4iTvJPTm5IEJzQAlLKA/viewform" style="text-decoration: none;" target="_blank"><b>Tamil Words</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSeFkBzf315IhIGcVETpAIrXPIExkFQ4iTvJPTm5IEJzQAlLKA/viewform" style="text-decoration: none;" target="_blank"><b>20<sup>th</sup> Century Poems</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSeFkBzf315IhIGcVETpAIrXPIExkFQ4iTvJPTm5IEJzQAlLKA/viewform" style="text-decoration: none;" target="_blank"><b>Machal</b></a>
                                </button>
                            </div>
                            <div class="papers" id="OnlineExamination">
                                <h2>2. Mathematics</h2>
                                <button class="btn">
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSfewUYdHggTufpxFJJ3j-DW04S0O8bb30SqX3COEXq4QHwCrg/viewform" style="text-decoration: none;" target="_blank"><b>Perimeter</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSfewUYdHggTufpxFJJ3j-DW04S0O8bb30SqX3COEXq4QHwCrg/viewform" style="text-decoration: none;" target="_blank"><b>Square Root</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSfewUYdHggTufpxFJJ3j-DW04S0O8bb30SqX3COEXq4QHwCrg/viewform" style="text-decoration: none;" target="_blank"><b>Fraction</b></a>
                                </button>
                            </div>
                            <div class="papers" id="OnlineExamination">
                                <h2>3. Science</h2>
                                <button class="btn">
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSfaAcYdC3s0nsLTmZxIuMu81HzSbEzf-xvs-Vc69o0A1BDS8A/viewform" style="text-decoration: none;" target="_blank"><b>Chemical Basis Of Life</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSfaAcYdC3s0nsLTmZxIuMu81HzSbEzf-xvs-Vc69o0A1BDS8A/viewform" style="text-decoration: none;" target="_blank"><b>Motion In A Straight</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSfaAcYdC3s0nsLTmZxIuMu81HzSbEzf-xvs-Vc69o0A1BDS8A/viewform" style="text-decoration: none;" target="_blank"><b>Structure Of Matter</b></a>
                                </button>
                            </div>
                        </div>

                        <div id="eleven20" style="display: none;">
                            <div class="papers" id="OnlineExamination">
                                <h2>1. Sinhala</h2>
                                <button class="btn">
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSc463VMxGcwoi-5jqvnIR86shlsbsAeBlxSDc0kU9bPm7qr-g/viewform" style="text-decoration: none;" target="_blank"><b>The Grammar Of The Word</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSc463VMxGcwoi-5jqvnIR86shlsbsAeBlxSDc0kU9bPm7qr-g/viewform" style="text-decoration: none;" target="_blank"><b>Children's literature in Tamil</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSc463VMxGcwoi-5jqvnIR86shlsbsAeBlxSDc0kU9bPm7qr-g/viewform" style="text-decoration: none;" target="_blank"><b>Eelam poet</b></a>
                                </button>
                            </div>
                            <div class="papers" id="OnlineExamination">
                                <h2>2. Mathematics</h2>
                                <button class="btn">
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSeYr6LjVaKefHeFp8AWIVkmF4K8ukx3FtbpT9AQ973csxiQUg/viewform" style="text-decoration: none;" target="_blank"><b>Real Numbers</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSeYr6LjVaKefHeFp8AWIVkmF4K8ukx3FtbpT9AQ973csxiQUg/viewform" style="text-decoration: none;" target="_blank"><b>Indices And Logarithms I</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSeYr6LjVaKefHeFp8AWIVkmF4K8ukx3FtbpT9AQ973csxiQUg/viewform" style="text-decoration: none;" target="_blank"><b>Indices And Logarithms II</b></a>
                                </button>
                            </div>
                            <div class="papers" id="OnlineExamination">
                                <h2>3. Science</h2>
                                <button class="btn">
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSfm3PPhEoi-0hMFyf4f9Mp-JMyDCWnRh3NkdOetrDDY4Pdimw/viewform" style="text-decoration: none;" target="_blank"><b>Living Tissues</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSfm3PPhEoi-0hMFyf4f9Mp-JMyDCWnRh3NkdOetrDDY4Pdimw/viewform" style="text-decoration: none;" target="_blank"><b>Photosynthesis</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSfm3PPhEoi-0hMFyf4f9Mp-JMyDCWnRh3NkdOetrDDY4Pdimw/viewform" style="text-decoration: none;" target="_blank"><b>Mixtures</b></a>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div id="PP2" style="display: none;">
                        <div id="eleven21">
                            <div class="papers" id="PastPapers">
                                <h2>1. Sinhala</h2>
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample5.pdf" style="text-decoration: none;" target="_blank"><b>G.C.E. O/L 2019</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample5.pdf" style="text-decoration: none;" target="_blank"><b>G.C.E. O/L 2018</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample5.pdf" style="text-decoration: none;" target="_blank"><b>G.C.E. O/L 2017</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample5.pdf" style="text-decoration: none;" target="_blank"><b>G.C.E. O/L 2016</b></a>
                                </button>
                            </div>
                            <div class="papers" id="PastPapers">
                                <h2>2. Mathematics</h2>
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample6.pdf" style="text-decoration: none;" target="_blank"><b>G.C.E. O/L 2019</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample6.pdf" style="text-decoration: none;" target="_blank"><b>G.C.E. O/L 2018</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample6.pdf" style="text-decoration: none;" target="_blank"><b>G.C.E. O/L 2017</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample6.pdf" style="text-decoration: none;" target="_blank"><b>G.C.E. O/L 2016</b></a>
                                </button>
                            </div>
                            <div class="papers" id="PastPapers">
                                <h2>3. Science</h2>
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample7.pdf" style="text-decoration: none;" target="_blank"><b>G.C.E. O/L 2019</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample7.pdf" style="text-decoration: none;" target="_blank"><b>G.C.E. O/L 2018</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample7.pdf" style="text-decoration: none;" target="_blank"><b>G.C.E. O/L 2017</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample7.pdf" style="text-decoration: none;" target="_blank"><b>G.C.E. O/L 2016</b></a>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div id="MP2" style="display: none;">
                        <div id="eleven22">
                            <div class="papers" id="ModelPapers">
                                <h2>1. Sinhala</h2>
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample8.pdf" style="text-decoration: none;" target="_blank"><b>Model Paper - 2019</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample8.pdf" style="text-decoration: none;" target="_blank"><b>Model Paper - 2018</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample8.pdf" style="text-decoration: none;" target="_blank"><b>Model Paper - 2017</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample8.pdf" style="text-decoration: none;" target="_blank"><b>Model Paper - 2016</b></a>
                                </button>
                            </div>
                            <div class="papers" id="ModelPapers">
                                <h2>2. Mathematics</h2>
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample9.pdf" style="text-decoration: none;" target="_blank"><b>Model Paper - 2019</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample9.pdf" style="text-decoration: none;" target="_blank"><b>Model Paper - 2018</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample9.pdf" style="text-decoration: none;" target="_blank"><b>Model Paper - 2017</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Sample9.pdf" style="text-decoration: none;" target="_blank"><b>Model Paper - 2016</b></a>
                                </button>
                            </div>
                            <div class="papers" id="ModelPapers">
                                <h2>3. Science</h2>
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/english_grd_11_2020_i.pdf" style="text-decoration: none;" target="_blank"><b>Model Paper - 2019</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/english_grd_11_2020_i.pdf" style="text-decoration: none;" target="_blank"><b>Model Paper - 2018</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/english_grd_11_2020_i.pdf" style="text-decoration: none;" target="_blank"><b>Model Paper - 2017</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/english_grd_11_2020_i.pdf" style="text-decoration: none;" target="_blank"><b>Model Paper - 2016</b></a>
                                </button>
                            </div> 
                        </div>
                    </div>

                    <div id="TP2" style="display: none;">
                        <div id="ten23">
                            <div class="papers" id="TermPapers">
                                <h2>1. Sinhala</h2>
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/ex+13+art+11.pdf" style="text-decoration: none;" target="_blank"><b>First Term - 2019</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/ex+13+art+11.pdf" style="text-decoration: none;" target="_blank"><b>Second Term - 2019</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/ex+13+art+11.pdf" style="text-decoration: none;" target="_blank"><b>Third Term - 2019</b></a>
                                </button>
                            </div>
                            <div class="papers" id="TermPapers">
                                <h2>2. Mathematics</h2>
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/ex+3+11+art.pdf" style="text-decoration: none;" target="_blank"><b>First Term - 2019</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/ex+3+11+art.pdf" style="text-decoration: none;" target="_blank"><b>Second Term - 2019</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/ex+3+11+art.pdf" style="text-decoration: none;" target="_blank"><b>Third Term - 2019</b></a>
                                </button>
                            </div>
                            <div class="papers" id="TermPapers">
                                <h2>3. Science</h2>
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/ex+7+art+11.pdf" style="text-decoration: none;" target="_blank"><b>First Term - 2019</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/ex+7+art+11.pdf" style="text-decoration: none;" target="_blank"><b>Second Term - 2019</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/ex+7+art+11.pdf" style="text-decoration: none;" target="_blank"><b>Third Term - 2019</b></a>
                                </button>
                            </div>
                        </div>

                        <div id="eleven23">
                            <div class="papers" id="TermPapers"> 
                                <h2>1. Sinhala</h2>
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/fraction.pdf" style="text-decoration: none;" target="_blank"><b>First Term - 2019</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/fraction.pdf" style="text-decoration: none;" target="_blank"><b>Second Term - 2019</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/fraction.pdf" style="text-decoration: none;" target="_blank"><b>Third Term - 2019</b></a>
                                </button>
                            </div>
                            <div class="papers" id="TermPapers">
                                <h2>2. Mathematics</h2>
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/history+class+grade+11.pdf" style="text-decoration: none;" target="_blank"><b>First Term - 2019</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/history+class+grade+11.pdf" style="text-decoration: none;" target="_blank"><b>Second Term - 2019</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/history+class+grade+11.pdf" style="text-decoration: none;" target="_blank"><b>Third Term - 2019</b></a>
                                </button>
                            </div>
                            <div class="papers" id="TermPapers">
                                <h2>3. Science</h2>
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/model+paper+maths+IIA+11-merged-edited.pdf" style="text-decoration: none;" target="_blank"><b>First Term - 2019</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/model+paper+maths+IIA+11-merged-edited.pdf" style="text-decoration: none;" target="_blank"><b>Second Term - 2019</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/model+paper+maths+IIA+11-merged-edited.pdf" style="text-decoration: none;" target="_blank"><b>Third Term - 2019</b></a>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div id="B2" style="display: none;">
                        <div id="ten24">
                            <div class="papers" id="TextBooks">
                                <h2>1. Sinhala</h2>
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Ol+English+Model+Essays.pdf" style="text-decoration: none;" target="_blank"><b>Tamil Words</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Ol+English+Model+Essays.pdf" style="text-decoration: none;" target="_blank"><b>20<sup>th</sup> Century Poems</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Ol+English+Model+Essays.pdf" style="text-decoration: none;" target="_blank"><b>Machal</b></a>
                                </button>
                            </div>
                            <div class="papers" id="TextBooks">
                                <h2>2. Mathematics</h2>
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/P-2_TM.pdf" style="text-decoration: none;" target="_blank"><b>Perimeter</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/P-2_TM.pdf" style="text-decoration: none;" target="_blank"><b>Square Root</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/P-2_TM.pdf" style="text-decoration: none;" target="_blank"><b>Fraction</b></a>
                                </button>
                            </div>
                            <div class="papers" id="TextBooks">
                                <h2>3. Science</h2>
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/English+.pdf" style="text-decoration: none;" target="_blank"><b>Chemical Basis Of Life</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/English+.pdf" style="text-decoration: none;" target="_blank"><b>Motion In A Straight</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/English+.pdf" style="text-decoration: none;" target="_blank"><b>Structure Of Matter</b></a>
                                </button>
                            </div>
                        </div>

                        <div id="eleven24">
                            <div class="papers" id="TextBooks">
                                <h2>1. Sinhala</h2>
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/FB_IMG_1588520858819.pdf" style="text-decoration: none;" target="_blank"><b>The Grammar Of The Word</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/FB_IMG_1588520858819.pdf" style="text-decoration: none;" target="_blank"><b>Children's literature in Tamil</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/FB_IMG_1588520858819.pdf" style="text-decoration: none;" target="_blank"><b>Eelam poet</b></a>
                                </button>
                            </div>
                            <div class="papers" id="TextBooks">
                                <h2>2. Mathematics</h2>
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Eng+Worksheet+04.pdf" style="text-decoration: none;" target="_blank"><b>Real Numbers</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Eng+Worksheet+04.pdf" style="text-decoration: none;" target="_blank"><b>Indices And Logarithms I</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/Eng+Worksheet+04.pdf" style="text-decoration: none;" target="_blank"><b>Indices And Logarithms II</b></a>
                                </button>
                            </div>
                            <div class="papers" id="TextBooks">
                                <h2>3. Science</h2>
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/First+Term.pdf" style="text-decoration: none;" target="_blank"><b>Living Tissues</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/First+Term.pdf" style="text-decoration: none;" target="_blank"><b>Photosynthesis</b></a>
                                </button>&emsp;
                                <button class="btn">
                                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/First+Term.pdf" style="text-decoration: none;" target="_blank"><b>Mixtures</b></a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="Login" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" id="m_content">
                <div class="modal-body" id="m_body">
                    <div class="frame" id="m_frame">
                        <div class="nav">
                            <ul class="links">
                                <li class="signin-active"><a class="btn">Login</a></li>
                                <li class="signup-inactive"><a class="btn">Sign up</a></li>
                            </ul>
                        </div>
                        <div ng-app ng-init="checked = false">
                            <form class="form-signin" action="login.php" target="_blank" onsubmit="LoginForm()" name="signin" id="signin" enctype="multipart/form-data">
                                <label for="username">Username</label>
                                <input class="form-styling" type="text" name="username" id="username" required>
                                <label for="password">Password</label>
                                <input class="form-styling" type="password" name="password" id="password" required>
                                <input type="submit" class="btn-animate btn-signin" value="Login">
                            </form>
                        
                            <form class="form-signup" onsubmit="validateForm()" name="signup" id="signup" enctype="multipart/form-data">  
                                <label for="fullname">Full name</label>
                                <input class="form-styling" type="text" name="fullname" id="fullname" required>
                                <label for="email">Email</label>
                                <input class="form-styling" type="email" name="email" id="email" required>
                                <label for="role">Role</label><br>
                                &emsp;<span class="form-styling2" name="role">
                                <input type="radio" name="role" id="role" value="Teacher"><label>Teacher</label>
                                </span>&emsp;
                                <span class="form-styling2" name="role">
                                <input type="radio" name="role" id="role" value="Student"><label>Student</label>
                                </span>
                                <br><label for="pass">Password</label>
                                <input class="form-styling" type="password" name="pass" id="pass" required minLength=8>
                                <label for="confirmpassword">Confirm password</label>
                                <input class="form-styling" type="password" name="confirmpassword" id="confirmpassword" required>
                                <input ng-click="checked = !checked" type="submit" class="btn-signup" value="SIGN UP">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
    <table width="100%">
        <tr style="background-color:rgb(0, 35, 78)">
            <td width="30%" align="center">
                <br>
                <img src="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Imgs/SMARTL2.png" width="200px">
            </td>
        
            <td width="15%">
                <p style="font-size:15px">
                    <font color="#ffffff">MENU</font>
                </p>

                <p style="font-size: 0px">
                    <button>
                        <a href="index.php" style="text-decoration:none">
                            <font color="#ffffff" size="-2">HOME</font>
                        </a>
                    </button>

                    <br>
                    <button>
                        <a href="Conference.php" style="text-decoration:none">
                            <font color="#ffffff" size="-2">CONFERENCE</font>
                        </a>
                    </button>
                    
                    <br>
                    <button>
                        <a href="Papers.php" style="text-decoration:none">
                            <font color="#ffffff" size="-2">PAPERS</font>
                        </a>
                    </button>
                    
                    <br>
                    <button>
                        <a href="General_Knowladge.php" style="text-decoration:none">
                            <font color="#ffffff" size="-2">G.KNOWLADGE</font>
                        </a>
                    </button>
                    
                    <br>
                    <button>
                        <a href="About.php" style="text-decoration:none">
                            <font color="#ffffff" size="-2">ABOUT US</font>
                        </a>
                    </button>
                </p>
            </td>

            <td width="15%">
                <p style="font-size:15px">
                    <font color="#ffffff">PAPERS</font>
                </p>

                <p style="font-size:0px">
                        <button>
                            <a href="Papers.php#OnlineExamination" style="text-decoration:none">
                                <font color="#ffffff" size="-2">ONLINE EXAMINATIONS</font>
                            </a>
                        </button>

                        <br>
                        <button>
                            <a href="Papers.php#PastPapers" style="text-decoration:none">
                                <font color="#ffffff" size="-2">PAST PAPERS</font>
                            </a>
                        </button>
                        
                        <br>
                        <button>
                            <a href="Papers.php#ModelPapers" style="text-decoration:none">
                                <font color="#ffffff" size="-2">MODEL PAPERS</font>
                            </a>
                        </button>
                        
                        <br>
                        <button>
                            <a href="Papers.php#TermPapers" style="text-decoration:none">
                                <font color="#ffffff" size="-2">TERM PAPERS</font>
                            </a>
                        </button>
                        
                        <br>
                        <button>
                            <a href="Papers.php#TextBooks" style="text-decoration:none">
                                <font color="#ffffff" size="-2">TEXT BOOKS</font>
                            </a>
                        </button>
                    </p>
            </td>

            <td width="15%">
                <p style="font-size:15px">
                    <font color="#ffffff">G.KNOWLADGE</font>
                </p>

                <p style="font-size:0px">
                    <button>
                        <a href="General_Knowladge.php#Novels" style="text-decoration:none">
                            <font color="#ffffff" size="-2">NOVELS</font>
                        </a>
                    </button>

                    <br>
                    <button>
                        <a href="General_Knowladge.php#StoryBooks" style="text-decoration:none">
                            <font color="#ffffff" size="-2">STORY BOOKS</font>
                        </a>
                    </button>
                    
                    <br>
                    <button>
                        <a href="General_Knowladge.php#DIYideas" style="text-decoration:none">
                            <font color="#ffffff" size="-2">DIY IDEAS</font>
                        </a>
                    </button>
                    
                    <br>
                    <button>
                        <a href="General_Knowladge.php#Puzzles" style="text-decoration:none">
                            <font color="#ffffff" size="-2">PUZZLES</font>
                        </a>
                    </button>
                    
                    <br>
                    <button>
                        <a href="General_Knowladge.php#Codings" style="text-decoration:none">
                            <font color="#ffffff" size="-2">CODINGS</font>
                        </a>
                    </button>
                </p>
            </td>

            <td width="15%">
                <p style="font-size:15px">
                    <font color="#ffffff">ABOUT US</font>
                </p>

                <p style="font-size:0px">
                    <button>
                        <a href="About.php" style="text-decoration:none">
                            <font color="#ffffff" size="-2">ABOUT SMARTL</font>
                        </a>
                    </button>

                    <br>
                    <button>
                        <a href="About.php#Why" style="text-decoration:none">
                            <font color="#ffffff" size="-2">WHY SMARTL</font>
                        </a>
                    </button>

                    <br>
                    <button>
                        <a href="About.php#How" style="text-decoration:none">
                            <font color="#ffffff" size="-2">HOW SMARTL WAS BUILD</font>
                        </a>
                    </button>
                </p>
            </td>

            <td width="10%"></td>
        </tr>
    </table>
</body>
</html>
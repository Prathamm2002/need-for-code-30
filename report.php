<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />


    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>upStat</title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&amp;display=swap" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
</head>

<style>
input{
            width: 80%;
            height: 35px;
            margin-bottom: 20px;
            border: 1px solid black;
            border-radius: 4px;
            outline: none;
            background: white;
            padding-left: 10px;
            padding-right: 10px;
            font-family: 'Ubuntu',sans-serif;
            }
          textarea{
         
              width: 80%;
              height: 90px;
              margin-bottom: 20px;
              border: 1px solid black;
              border-radius: 4px;
              outline: none;
              background: white;
              padding-left: 10px;
              padding-right: 10px;
              font-family: 'Ubuntu',sans-serif;
              vertical-align:middle;
            }
            .parent{
              position: relative;
              height: none;
              
            }
            
            form{
              width:70%;
              position:absolute;
              top: 50%;
              left: 15%;
              transform:none;
              -webkit-transform:none;
              display:none;
              padding:20px;
              background-color:#19D9FF;
              border-radius:25px;
      
            }
              
         .open-form{
          position:relative;
          padding: 8px 15px;
          background:#ffffff;
          text-decoration:none;
          border:1px solid var(--black2);;
          color:black;
          border-radius:10px;
          }
          
          select, option {
            width:80%;
            height: 35px;
              margin-bottom: 20px;
              border: 1px solid black;
              border-radius: 4px;
              outline: none;
              background: white;
              padding-left: 10px;
              padding-right: 10px;
              font-family: 'Ubuntu',sans-serif;
          }
          
          option {
            overflow: hidden;
            white-space: no-wrap;
            text-overflow: ellipsis;
          }
          #imag{
                  padding-left:2px!important;
                
                }
                #btn_1{
                  padding-left:37px!important;
                }
                @media (max-width:1024px) 
              {
              input{
                  width:100%;
                  height:20px;
                }
                textarea{
                  width:100%;
                  height:60px;
                }
             
               select{
              width:100%;
              height:25px;
               } 
                
              }
              @media (max-width:280px) 
              { #btn_1{
                padding-left:0px!important;
              }
              .form img{
                width:80px;
                height:30px;
              }
            }
</style>


<body>
    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        <nav class="navbar navbar-expand-lg custom_nav-container ">
                            <a class="navbar-brand" href="index.html">
                                <span>
                                upStat
                                </span>
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <div class="d-flex  flex-column flex-lg-row align-items-center">
                                    <ul class="navbar-nav  ">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="report.php">Report </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="perform.php">Performance </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="test.php">Take a test </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="login.php"> Login</a>
                                        </li>
                                    </ul>



            
            </div>
        </header>
        <div>
        <h2>Activities</h2>
        <button class="open-form" >Add New</button>
            <div class="details" id="details">
                <div class="recentOrder">
                  <div class="container"id="continer-height">

                  
                                <div class="parent" id="scrollnone">
                                    <form class="form" action="report.php" method="post"> 
                                        <div><span style="padding-right:53px;"><label for="NFTID">NFT ID:</label></span><span><input type="text" name="NFTID" id="NFTID" required></span></div>
                                        <div><span style="padding-right:26px;"><label for="NFTname">NFT Name:</label></span><span><input type="text" name="NFTName" id="NFTName"></span></div>
                                        <div><span style="padding-right:66px;"><label for="price">Price:</label></span><span><input type="number" name="NFTCost" id="NFTCost"></span></div>
                                        <div><span style="padding-right:25px;"><label for="Blockchain">Blockchain:</label></span><span><select name="Blockchain" id="Blockchain">
                                        <option></option>
                                        <option></option>
                                        <option></option>
                                        </select></span></div>
                                        <div><span style="padding-right:39px;"><label for="currency">Currency:</label></span><span><input type="text" name="Currency" id="Currency"></span></div>
                                        <div><span style="padding-right:40px;"><label for="nftinfo">NFT Info:</label></span><span><textarea name="NFTInfo" ></textarea></span></div>
                                        <div><span style="padding-right:40px;"><label for="GasFees">Gas Fees:</label></span><span><select name="GasFees" id="GasFees">
                                        <option></option>
                                        <option></option>
                                        <option></option>
                                        </select></span></div>
                                        <div><span style="padding-right:55px;"><label for="NFTOwner">Owner:</label></span><span><input type="text"  name="NFTOwner" id="NFTOwner"></span></div>
                                        <div><span style="padding-right:41px;"><label for="liveurl">Live URL:</label></span><span><input type="text"  name="LiveURL" id="LiveURL"></span></div>
                                        <div><span style="padding-right:0px;"><label for="metadataurl">Metadata URL:</label></span><span><input type="email" name="LiveInfoURL" id="LiveInfoURL" tabindex="10"></span></div>
                                        <div style="padding-left:110px;" class="text-left mb-3">
                                        <button type="submit" class="btns">Continue</button>
                                        </div>
                                    </form>                         
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
                </div>
        <!-- end header section -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script> 
        //menu toggle//
        let toggle = document.querySelector('.toggle')
        let navigation = document.querySelector('.navigation');
        let main = document.querySelector('.main')
        let list = document.querySelectorAll('.navigation li');
        toggle.onclick=function(){
          navigation.classList.toggle('active');
          main.classList.toggle('active') 
        }

        function activelink(){
            list.forEach((item) =>
            item.classList.remove('hovered'));
            this.classList.add('hovered');

        }
        list.forEach((item) =>
        item.addEventListener('mouseover',activelink));
        $('.open-form').click(function(){
          if (!$(this).hasClass('open')){
            $('.form').css('display','block')
            $(this).addClass('open');
            $(this).text('Cancel');
          }
          else{
            $('.form').css('display','none')
            $(this).removeClass('open');
            $(this).text('New Input');
          }
        });
    </script>
    </body>

</html>
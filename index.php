<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<!-- add bootstrap link  -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <!-- add css file internally  -->
    <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>

    
    </head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="card">
              <div class="card-header">
                    </div>
                <div class="card-body">
                 <form>
                    <div class="form-group">
                    <!-- create dropdown country -->
                        <label for="country">Country</label>
                        <select class="form-control" id="country-dropdown">
                            <option value="">Select Country</option>   
                        </select>
                    </div>
                    <!-- create dropdown State -->
                    <div class="form-group">
                        <label for="state">State</label>
                        <select class="form-control" id="state-dropdown">
                        </select>    
                        </div>                        
                        
                    <!-- create dropdown City -->
                    <div class="form-group">
                      <label for="city">City</label>
                      <select class="form-control" id="city-dropdown"> 
                      </select>
                    </div>
                </div>
              </div>
            </div>
        </div> 
    </div>

</body>
</html>
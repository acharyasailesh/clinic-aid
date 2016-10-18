<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato', sans-serif;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>
            </div>

            <form class="w3-container" action="sendemail" method="POST"
                  role="email">
                {{ csrf_field() }}
                <p>
                    <label>Enter Some Text</label>
                    <textarea class="w3-input" type="text" name="message"></textarea>
                </p>
                <p>
                    <label>Email</label> <input class="w3-input" type="email"> <input
                            type="submit" name="toEmail" class="w3-btn w3-orange" value="Send">
                </p>
            </form>




            <form class="w3-container" action="sendemail" method="POST"
                  role="email">
                {{ csrf_field() }}
                <p>
                    <label>Email</label> <input class="w3-input" name="toEmail"
                                                type="email">
                </p>
                <p>



        </div>
    </body>
</html>

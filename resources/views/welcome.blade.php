<!DOCTYPE html>
<html>
    <head>
        <title>Devops Assesment Application</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Baloo+Paaji|Raleway|Ubuntu:500" rel="stylesheet">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
                font-family: 'Lato';
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
                font-size: 80px;
            }
            .para {
                font-style: italic;
                font-size: 55px;
                color: #666666
            }
            p {
                font-size: 20px;
                color: #ffffff ;
                font-family: 'Ubuntu', sans-serif;

            }
            #connection_message {
                margin-top: 10px;
                font-size: 20px;
                color: red;
                text-transform: uppercase;
                font-family: 'Raleway', sans-serif;
            }

        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Hello Telenor Health</div>
                <button type="button" id="dbconnect" class="btn btn-info"><p>Database Connection Check</p></button>
                <div id="connection_message"></div>
            </div>
        </div>
    </body>
</html>



<script type="text/javascript">

    $(function(){
        $('#dbconnect').click(function() {
            $.ajax({
                url: 'ajax/',
                type: 'GET',
                success: function(response)
                {
                    $('#connection_message').html(response);
                }
            });
        });
    });
</script>

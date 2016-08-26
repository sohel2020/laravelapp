<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
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
                font-size: 23px;
                color: #ededed ;

                
            }

        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Hello world</div>
                <button type="button" id="dbconnect" class="btn btn-danger"><p>Database Connection Check</p></button>
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

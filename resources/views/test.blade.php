<!doctype html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ URL::asset('/css/semantic/dist/semantic.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ URL::asset('/css/custom.css') }}" type="text/css">
        <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
        <script src="{{ URL::asset('/css/semantic/dist/semantic.js') }}"></script>
        <style>
        </style>
    </head>
    <body>
        <div class="container">
            <div class="pager">
                <button class="ui primary button">Save</button>
                <div class="ui divider"></div>
                <div class="ui button" data-tooltip="Add users to your feed" data-position="top left">Top Left </div>
                <div class="ui button" data-tooltip="Add users to your feed" data-position="top center">Top Center </div>
                <div class="ui button" data-tooltip="Add users to your feed" data-position="top right">Top Right </div>
                <div class="ui divider"></div>
                <div class="ui star rating" data-rating="3"></div>
                <table class="ui celled table">
                    <thead>
                    <tr><th>标题</th>
                        <th>标题</th>
                        <th>标题</th>
                    </tr></thead>
                    <tbody>
                    <tr>
                        <td>
                            <div class="ui ribbon label">First</div>
                        </td>
                        <td>Cell</td>
                        <td>Cell</td>
                    </tr>
                    <tr>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                    </tr>
                    <tr>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr><th colspan="3">
                            <div class="ui right floated pagination menu">
                                <a class="icon item">
                                    <i class="left chevron icon"></i>
                                </a>
                                <a class="item">1</a>
                                <a class="item">2</a>
                                <a class="item">3</a>
                                <a class="item">4</a>
                                <a class="icon item">
                                    <i class="right chevron icon"></i>
                                </a>
                            </div>
                        </th>
                    </tr></tfoot>
                </table>
            </div>
        </div>
        <div class="footer">
            <h3>footer</h3>
        </div>
    </body>
</html>
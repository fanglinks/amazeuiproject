<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <!-- <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css"> -->

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
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                @foreach($articles as  $article)
               
                <div class="title">Title:{{$article->title}}</div>
                 <div>Content :{{$article->content}}</div>
                <div>Author :{{$article->author}}</div>
                <div>Created_at :{{$article->created_at}}</div>
                <div>Updated_at :{{$article->updated_at}}</div>
             
                @endforeach
                @foreach($artic as  $articles)
               
                <div class="title">Title:{{$articles->title}}</div>
                 <div>Content :{{$articles->content}}</div>
                <div>Author :{{$articles->author}}</div>
                <div>Created_at :{{$articles->created_at}}</div>
                <div>Updated_at :{{$articles->updated_at}}</div>
              
                @endforeach
            </div>
            <button>Button</button>
            <p id="title">Hello world</p>
        </div>
    <script src="../assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/js/jquerytest.js"></script>
    </body>
</html>

<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <header>
            <div style="background:skyblue; width:1000x;height: 350px;;" class="jumbotron bg-dark">
                <img src="MakanTerus.png" style="float:center;width:120px;height:100px;">
                <h2 class="text-align:left;" style="font-style:default;">MakanTerus</h2><br>

                <div class="container">
                    <div class="row">
                        <div class="col-xs-8 col-xs-offset-2">
                            <div class="input-group">
                                <div class="input-group-btn search-panel">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                        <span id="search_concept">Kategori</span> <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="books.php?genre=1">chinese Food</a></li>
                                        <li><a href="books.php?genre=4">Sayuran</a></li>
                                        <li><a href="books.php?genre=2">Makanan Cepat Saji</a></li>

                                        </li>
                                    </ul>
                                </div>
                                <input type="hidden" name="search_param" value="all" id="search_param">
                                <input type="text" class="form-control" name="x" placeholder="Search">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div><br>

                <nav class="navbar navbar-primary">
                    <ul class="nav navbar-nav">
                        <li role="presentation" class="active">
                            <a href="index.php" style="background-color:white; font-style:unset; margin: 5px; padding: 9px 12px; border-radius: 50px;">Home</a>
                        </li>
                        <?php if (!isset($_SESSION['type'])) {
                        } else if ($_SESSION['type'] == 1) {
                            echo
                            '<li role="presentation">
                                <a href="edit_books.php" style="background-color:white; font-style:unset; margin: 5px; padding: 9px 12px; border-radius: 50px;">Produk</a>
                            </li>
                            <li role="presentation">
                                <a href="edit_book.php" style="background-color:white; font-style:unset; margin: 5px; padding: 9px 12px; border-radius: 50px;">Upload Produk</a>
                            </li>
                            <li role="presentation">
                                <a href="logout.php" style="background-color:white; font-style:unset; margin: 5px; padding: 9px 12px; border-radius: 50px;">Log out</a>
                            </li>';
                        } ?>

            </div>
    </div>
    <br>
    </div>
    </ul>
    </nav>
    </header>
    <main>
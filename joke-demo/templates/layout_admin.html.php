<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, Helvetica, Sans-serif;
        }

        header {
            display: block;
            background-color: #218406;
            padding: 20px;
            border-bottom: 5px solid #757575;
        }

        h1 {
            font-weight: normal;
            padding: 1.5em;
            color: yellow;
            text-shadow: 1px 1px 0px #444;
            width: 1000px;
            margin: auto;
        }

        nav {
            background-color: red;
        }

        nav a {
            color: white;
            text-decoration: none;
        }

        nav a:hover {
            color: #ddd;
        }

        nav ul {
            display: table;
            width: 1000px;
            margin: auto;
        }

        nav li {
            display: table-cell;
            text-align: center;
            padding: 1em;
        }

        main {
            overflow: auto;
            min-height: 30vh;
            background-color: #f7f7f7;
            width: 1000px;
            margin: auto;
            box-shadow: -1000px 0 0 #f7f7f7, 1000px 0 0 #f7f7f7;
            padding-top: 20px;
        }

        footer {
            padding: 1em;
            background-color: #ffc9a7;
            font-size: 0.8em;
        }

        p {
            margin-bottom: 1em;
        }

        body {
            font-size: 1.2em;
            font-family: arial, helvetica, sans-serif;
        }

        input,
        label,
        select,
        textarea {
            float: left;
            width: 15em;
            margin-bottom: 1em;
            padding: 0.5em;
        }

        label {
            clear: left;
            padding: 0;
            margin: 0;
        }

        input[type="submit"] {
            margin-left: 15em;
            width: auto;
            padding: 0.5em 1em;
            clear: both;
            font-size: 1em;
        }

        form {
            overflow: auto;
            clear: both;
            display: block;
        }

        blockquote {
            display: table;
            margin-bottom: 1em;
            border-bottom: 1px solid #ccc;
            padding: 0.5em;
        }

        blockquote p {
            display: table-cell;
            width: 70%;
            vertical-align: top;
        }

        blockquote form {
            display: table-cell;
            width: 10%;
        }

        .errors {
            padding: 1em;
            border: 1px solid red;
            background-color: lightyellow;
            color: red;
            margin-bottom: 1em;
            overflow: auto;
        }

        .errors ul {
            margin-left: 1em;
        }

        form p {
            clear: both;
        }

        input[type="checkbox"] {
            float: left;
            clear: left;
            width: auto;
            margin-right: 10px;
        }

        input[type="checkbox"]+label {
            clear: right;
        }

        .jokelist {
            display: table;
        }

        .categories {
            display: table-cell;
            width: 20%;
            background-color: #333;
            padding: 1em;
            list-style-type: none;
        }

        .categories a {
            color: white;
            text-decoration: none;
        }

        .categories li {
            margin-bottom: 1em;
        }

        .jokelist .jokes {
            display: table-cell;
            padding: 1em;
        }

        .currentpage:before {
            content: "[";
        }

        .currentpage:after {
            content: "]";
        }
    </style>
    <title><?= $title ?></title>
</head>

<body>
    <header>
        <h1>Internet Joke Database - ADMIN SITE</h1>
    </header>
    <nav>
        <ul>
            <li><a href="../index.php">Public Area</a></li>
            <li><a href="jokes.php">Jokes List</a></li>
            <li><a href="addjoke.php">Add Joke</a></li>
            <li><a href="addauthor.php">Add Author</a></li>
        </ul>
    </nav>
    <main>
        <?= $output ?>
    </main>
    <footer>&copy; IJDB 2024</footer>
</body>

</html>
<!DOCTYPE html>
<html lang="lt">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>


        <section>
            <form action="save-article.php" method="GET">
                <label>Straipsnio antraštė</label><br/>
                <input type="text" name="article-title" maxlength = "30" value=""/><br/>
                <label>Straipsnio turinys</label><br/>
                <textarea rows="15" cols="100" type="text" name="article-content" value=""></textarea> <br/>
                <button type="submit">Išsaugoti</button><br/>
            </form>
        </section>
    
    </body>
</html>
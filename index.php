<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <script type="text/javascript">
        function ajax(){
            var req = new XMLHttpRequest();
            req.onreadystatechange = function(){
                if(req.readyState == 4 && req.status ==200){
                    document.getElementById('chat').innerHTML = req.responseText;
                }
            }
            req.open('GET', 'chat.php', true);
            req.send();
        }
        setInterval(function(){ajax();}, 1000);
    </script>

</head>
<body>
        <div id="chat">

        </div>
        <form method="post" action="index.php">
            <input type="text" name="Nome" placeholder="Nome">
            <input type="text" name="Mensagem" placeholder="Mensagem">
            <input type="submit" value="Enviar">
        </form>

        
</body>
</html>
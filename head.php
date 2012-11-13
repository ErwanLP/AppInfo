<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="index.css" />
    <link rel="shortcut icon" type="image/x-icon" href="img/icone.png" />
    <title>AppInfo</title>
    <?php $char = "e" ?>
    <SCRIPT LANGUAGE="JavaScript">
        function switchParticipant(){
            $_SESSION['role'] = $char;
        }
        function switchOrganisateur(){
            $_SESSION['role'] = "organisateur";
                
        }
    </SCRIPT>
</head>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>

    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap.css');?>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    
    <script src="<?php echo base_url('assets/bootstrap.js');?>"></script>
    <script src="<?php echo base_url('assets/jquery.js');?>"></script>

    <script>
        let url = "http://localhost/main/Codeigniter/Crud2/user/"        
    </script>

    <style>
        body
        {
            background-color:#222;
            
            font-family: "Roboto", sans-serif;
            color:white;
        }

        tr:hover{
          background:#222;
        }

        .updateModelContainer{ 
            padding:20px;
            width:fit-content;          
            background-color: #222;
            /* color:black; */
            border-radius:15px;

            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);

            display:none;
            
        }

        ::-webkit-scrollbar {
            display: none;
        }

        .userdatacontainer{
            margin:0px 20px;
            padding:0px 20px;
            border-radius: 5px;
            background: #333;
            height:80vh;
            overflow:auto;
        }
       
    </style>

</head>
<body>

<!-- <header>Header</header> -->
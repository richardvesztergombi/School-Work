<?php
$diakok=[
    [
        "nev"=>"Gyula",
        "szak"=>"Szoftverfejlesztő",
        "szev"=>2002
    ], 
    [
        "nev"=>"Peti",
        "szak"=>"Művészetek",
        "szev"=>2001
    ],
    [
        "nev"=>"Anna",
        "szak"=>"Nőiszabó",
        "szev"=>2003
    ]
];
    $strTbl="";
    foreach($diakok as $diak){
        //print_r($diak);
        //echo $diak['nev'];
        $strTbl.="<tr><td></td></tr>"
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,tr,td,th{
            
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Név</th>
                <th>Szak</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</body>
</html>
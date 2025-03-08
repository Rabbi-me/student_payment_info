<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY Student Table</title>
    <style>

        body {
            font-family: Arial, sans-serif;
            /* background-color: #f4f4f4; */
            margin: 0;
            padding: 20px;
            font-size: 93%;
        }
        h1 {
            text-transform: capitalize;
            text-align: center;
            color: #333;
            font-weight: 900;
        }
        table {
            
            border: 2px black solid;
            width: 100%;
            margin: 20px auto;
            border-collapse: separate;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            text-transform: capitalize;
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
            border: 1px solid #ddd;
            font-weight: bold;
        }
        th {
            background-color: #4CAF50;
            color: white;
            font-weight: 600;
        }
        tr{
            transition: 0.50s;
        }
        tr:hover {
            background-color:rgb(82, 223, 86);
            color: red;
        }
        /* tr:nth-child(even) {
            background-color: #f9f9f9;
        } */
    </style>
</head>
<body>

    <h1>student payment info</h1>

    <?php
                        // ALL MONTH VALUE

                        //asiya                sabbir               sabia                 rafia               samia               yasin 
                        $asiya1= null;      $sabbir1= 400;       $sabia1= 300;       $rafia1= 400;       $samia1= 400;       $yasin1= 300;
                        $asiya2= null;      $sabbir2= 400;       $sabia2= 300;       $rafia2= null;      $samia2= 400;       $yasin2= 300;
                        $asiya3= null;      $sabbir3= null;      $sabia3= null;      $rafia3= null;      $samia3= null;      $yasin3= null;
                        $asiya4= null;      $sabbir4= null;      $sabia4= null;      $rafia4= null;      $samia4= null;      $yasin4= null;
                        $asiya5= null;      $sabbir5= null;      $sabia5= null;      $rafia5= null;      $samia5= null;      $yasin5= null;
                        $asiya6= null;      $sabbir6= null;      $sabia6= null;      $rafia6= null;      $samia6= null;      $yasin6= null;
                        $asiya7= null;      $sabbir7= null;      $sabia7= null;      $rafia7= null;      $samia7= null;      $yasin7= null;
                        $asiya8= null;      $sabbir8= null;      $sabia8= null;      $rafia8= null;      $samia8= null;      $yasin8= null;
                        $asiya9= null;      $sabbir9= null;      $sabia9= null;      $rafia9= null;      $samia9= null;      $yasin9= null;
                        $asiya10= null;     $sabbir10= null;     $sabia10= null;     $rafia10= null;     $samia10= null;     $yasin10= null;
                        $asiya11= null;     $sabbir11= null;     $sabia11= null;     $rafia11= null;     $samia11= null;     $yasin11= null;
                        $asiya12= null;     $sabbir12= null;     $sabia12= null;     $rafia12= null;     $samia12= null;     $yasin12= null;


                        //mahim                moriom                jishan              medha               rimpa
                        $mahim1= 300;       $moriom1= 200;       $jishan1= null;     /* $medha1= null;       $rimpa1= null; */        
                        $mahim2= 300;       $moriom2= 200;       $jishan2= 400;      /* $medha2= null;       $rimpa2= null; */        
                        $mahim3= null;      $moriom3= null;      $jishan3= null;     /* $medha3= null;       $rimpa3= null; */        
                        $mahim4= null;      $moriom4= null;      $jishan4= null;     /* $medha4= null;       $rimpa4= null; */        
                        $mahim5= null;      $moriom5= null;      $jishan5= null;     /* $medha5= null;       $rimpa5= null; */        
                        $mahim6= null;      $moriom6= null;      $jishan6= null;     /* $medha6= null;       $rimpa6= null; */        
                        $mahim7= null;      $moriom7= null;      $jishan7= null;     /* $medha7= null;       $rimpa7= null; */        
                        $mahim8= null;      $moriom8= null;      $jishan8= null;     /* $medha8= null;       $rimpa8= null; */        
                        $mahim9= null;      $moriom9= null;      $jishan9= null;     /* $medha9= null;       $rimpa9= null; */        
                        $mahim10= null;     $moriom10= null;     $jishan10= null;    /* $medha10= null;      $rimpa10= null;*/        
                        $mahim11= null;     $moriom11= null;     $jishan11= null;    /* $medha11= null;      $rimpa11= null;*/        
                        $mahim12= null;     $moriom12= null;     $jishan12= null;    /* $medha12= null;      $rimpa12= null;*/  
                        

                        $total1= $asiya1 + $sabbir1 + $rafia1 + $samia1 + $sabia1 + $mahim1 + $yasin1 + $jishan1 + $moriom1 /*+ $medha1 + $rimpa1*/;
                        $total2= $asiya2 + $sabbir2 + $rafia2 + $samia2 + $sabia2 + $mahim2 + $yasin2 + $jishan2 + $moriom2 /*+ $medha2 + $rimpa2*/;
                        $total3= $asiya3 + $sabbir3 + $rafia3 + $samia3 + $sabia3 + $mahim3 + $yasin3 + $jishan3 + $moriom3 /*+ $medha3 + $rimpa3*/;
                        $total4= $asiya4 + $sabbir4 + $rafia4 + $samia4 + $sabia4 + $mahim4 + $yasin4 + $jishan4 + $moriom4 /*+ $medha4 + $rimpa4*/;
                        $total5= $asiya5 + $sabbir5 + $rafia5 + $samia5 + $sabia5 + $mahim5 + $yasin5 + $jishan5 + $moriom5 /*+ $medha5 + $rimpa5*/;
                        $total6= $asiya6 + $sabbir6 + $rafia6 + $samia6 + $sabia6 + $mahim6 + $yasin6 + $jishan6 + $moriom6 /*+ $medha6 + $rimpa6*/;
                        $total7= $asiya7 + $sabbir7 + $rafia7 + $samia7 + $sabia7 + $mahim7 + $yasin7 + $jishan7 + $moriom7 /*+ $medha7 + $rimpa7*/;
                        $total8= $asiya8 + $sabbir8 + $rafia8 + $samia8 + $sabia8 + $mahim8 + $yasin8 + $jishan8 + $moriom8 /*+ $medha8 + $rimpa8*/;
                        $total9= $asiya9 + $sabbir9 + $rafia9 + $samia9 + $sabia9 + $mahim9 + $yasin9 + $jishan9 + $moriom9 /*+ $medha9 + $rimpa9*/;
                        $total10= $asiya10 + $sabbir10 + $rafia10 + $samia10 + $sabia10 + $mahim10 + $yasin10 + $jishan10 + $moriom10 /*+ $medha10 + $rimpa10*/;
                        $total11= $asiya11 + $sabbir11 + $rafia11 + $samia11 + $sabia11 + $mahim11 + $yasin11 + $jishan11 + $moriom11 /*+ $medha11 + $rimpa11*/;
                        $total12= $asiya12 + $sabbir12 + $rafia12 + $samia12 + $sabia12 + $mahim12 + $yasin12 + $jishan12 + $moriom12 /*+ $medha12 + $rimpa12*/;
                        
        // ডেটা অ্যারে
        $users = [
            ["id" => 1, "name" => "asiya  [400]",   "january" => $asiya1,   "february" =>$asiya2 ,   "march"=> $asiya3,   "april"=> $asiya4,   "may"=> $asiya4,   "june"=> $asiya6,   "july"=>$asiya7,   "august"=> $asiya8,   "september"=> $asiya9,    "october"=>$asiya10,   "november"=>$asiya11,   "december"=> $asiya12,    "total"=>$asiya1+$asiya2+$asiya3+$asiya4+$asiya5+$asiya6+$asiya7+$asiya8+$asiya9+$asiya10+$asiya11+$asiya12],
            ["id" => 2, "name" => "sabbir  [400]",  "january" => $sabbir1,  "february" =>$sabbir2 ,  "march"=> $sabbir3,  "april"=> $sabbir4,  "may"=> $sabbir5,  "june"=> $sabbir6,  "july"=>$sabbir7,  "august"=> $sabbir8,  "september"=> $sabbir9,   "october"=>$sabbir10,  "november"=>$sabbir11,  "december"=> $sabbir12,   "total"=>$sabbir1+$sabbir2+$sabbir3+$sabbir4+$sabbir5+$sabbir6+$sabbir7+$sabbir8+$sabbir9+$sabbir10+$sabbir11+$sabbir12],
            ["id" => 3, "name" => "jishan  [400]",  "january" => $jishan1,  "february" =>$jishan2 ,  "march"=> $jishan3,  "april"=> $jishan4,  "may"=> $jishan5,  "june"=> $jishan6,  "july"=>$jishan7,  "august"=> $jishan8,  "september"=> $jishan9,   "october"=>$jishan10,  "november"=>$jishan11,  "december"=> $jishan12,   "total"=>$jishan1+$jishan2+$jishan3+$jishan4+$jishan5+$jishan6+$jishan7+$jishan8+$jishan9+$jishan10+$jishan11+$jishan12],
            ["id" => 4, "name" => "rafia  [400]",   "january" => $rafia1,   "february" =>$rafia2 ,   "march"=> $rafia3,   "april"=> $rafia4,   "may"=> $rafia5,   "june"=> $rafia6,   "july"=>$rafia7,   "august"=> $rafia8,   "september"=> $rafia9,    "october"=>$rafia10,   "november"=>$rafia11,   "december"=> $rafia12,    "total"=>$rafia1+$rafia2+$rafia3+$rafia4+$rafia5+$rafia6+$rafia7+$rafia8+$rafia9+$rafia10+$rafia11+$rafia12],
            ["id" => 5, "name" => "samia  [400]",   "january" => $samia1,   "february" =>$samia2 ,   "march"=> $samia3,   "april"=> $samia4,   "may"=> $samia5,   "june"=> $samia6,   "july"=>$samia7,   "august"=> $samia8,   "september"=> $samia9,    "october"=>$samia10,   "november"=>$samia11,   "december"=> $samia12,    "total"=>$samia1+$samia2+$samia3+$samia4+$samia5+$samia6+$samia7+$samia8+$samia9+$samia10+$samia11+$samia12],
            ["id" => 6, "name" => "yasin  [300]",   "january" => $yasin1,   "february" =>$yasin2 ,   "march"=> $yasin3,   "april"=> $yasin4,   "may"=> $yasin5,   "june"=> $yasin6,   "july"=>$yasin7,   "august"=> $yasin8,   "september"=> $yasin9,    "october"=>$yasin10,   "november"=>$yasin11,   "december"=> $yasin12,    "total"=>$yasin1+$yasin2+$yasin3+$yasin4+$yasin5+$yasin6+$yasin7+$yasin8+$yasin9+$yasin10+$yasin11+$yasin12],
            ["id" => 7, "name" => "mahim  [300]",   "january" => $mahim1,   "february" =>$mahim2 ,   "march"=> $mahim3,   "april"=> $mahim4,   "may"=> $mahim5,   "june"=> $mahim6,   "july"=>$mahim7,   "august"=> $mahim8,   "september"=> $mahim9,    "october"=>$mahim10,   "november"=>$mahim11,   "december"=> $mahim12,    "total"=>$mahim1+$mahim2+$mahim3+$mahim4+$mahim5+$mahim6+$mahim7+$mahim8+$mahim9+$mahim10+$mahim11+$mahim12],
            ["id" => 8, "name" => "sabia  [300]",   "january" => $sabia1,   "february" =>$sabia2 ,   "march"=> $sabia3,   "april"=> $sabia4,   "may"=> $sabia5,   "june"=> $sabia6,   "july"=>$sabia7,   "august"=> $sabia8,   "september"=> $sabia9,    "october"=>$sabia10,   "november"=>$sabia11,   "december"=> $sabia12,    "total"=>$sabia1+$sabia2+$sabia3+$sabia4+$sabia5+$sabia6+$sabia7+$sabia8+$sabia9+$sabia10+$sabia11+$sabia12],
            ["id" => 9, "name" => "moriom  [200]",  "january" => $moriom1,  "february" =>$moriom2 ,  "march"=> $moriom3,  "april"=> $moriom4,  "may"=> $moriom5 , "june"=> $moriom6,  "july"=>$moriom7,  "august"=> $moriom8,  "september"=> $moriom9,   "october"=>$moriom10,  "november"=>$moriom11,  "december"=> $moriom12,   "total"=>$moriom1+$moriom2+$moriom3+$moriom4+$moriom5+$moriom6+$moriom7+$moriom8+$moriom9+$moriom10+$moriom11+$moriom12],
    //      ["id" => 10, "name" => "medha  [400]",  "january" => $medha1,   "february" =>$medha2 ,   "march"=> $medha3,   "april"=> $medha4,   "may"=> $medha5,   "june"=> $medha6,   "july"=>$medha7,   "august"=> $medha8,   "september"=> $medha9,    "october"=>$medha10,   "november"=>$medha11,   "december"=> $medha12,    "total"=>$medha1+$medha2+$medha3+$medha4+$medha5+$medha6+$medha7+$medha8+$medha9+$medha10+$medha11+$medha12],
    //      ["id" => 11, "name" => "rimpa  [400]",  "january" => $rimpa1,    "february" =>$rimpa2 ,  "march"=> $rimpa3,   "april"=> $rimpa4,   "may"=> $rimpa5,   "june"=> $rimpa6,   "july"=>$rimpa7,   "august"=> $rimpa8,   "september"=> $rimpa9,    "october"=>$rimpa10,   "november"=>$rimpa11,   "december"=> $rimpa12,    "total"=>+$rimpa1+$rimpa2+$rimpa3+$rimpa4+$rimpa5+$rimpa6+$rimpa7+$rimpa8+$rimpa9+$rimpa10+$rimpa12],
            ["id" => '/-', "name" => "total in a month__[3100]", "january" => $total1,   "february" =>$total2 ,   "march"=> $total3,   "april"=> $total4,   "may"=> $total5,   "june"=> $total6,   "july"=>$total7,   "august"=> $total8,   "september"=> $total9,    "october"=>$total10,   "november"=>$total11,   "december"=> $total12,    "total"=>$total1+$total2+$total3+$total4+$total5+$total6+$total7+$total8+$total9+$total10+$total11+$total12]
        ];

        // টেবিল শুরু
        echo "<table>";
        echo "<tr>
                <th>ID</th>
                <th>Name / Year</th>
                <th>january</th>
                <th>february</th>
                <th>march</th>
                <th>april</th>
                <th>may</th>
                <th>june</th>
                <th>july</th>
                <th>august</th>
                <th>september</th>
                <th>october</th>
                <th>november</th>
                <th>december</th>
                <th>in total</th>
                </tr>";
            // echo "<tr>";
            // echo "<td></td>";
            // echo "<td>total--></td>";
            // echo "<td></td>";
            // echo "<td></td>";
            // echo "<td></td>";
            // echo "<td></td>";
            // echo "<td></td>";
            // echo "<td></td>";
            // echo "<td></td>";
            // echo "<td></td>";
            // echo "<td></td>";
            // echo "<td></td>";
            // echo "<td></td>";
            // echo "<td></td>";

            echo "</tr>";

        // টেবিলের রো জেনারেট করা
        foreach ($users as $user) {
            echo "<tr>";
            echo "<td>{$user['id']}</td>";
            echo "<td>{$user['name']}</td>";
            echo "<td>{$user['january']}</td>";
            echo "<td>{$user['february']}</td>";
            echo "<td>{$user['march']}</td>";
            echo "<td>{$user['april']}</td>";
            echo "<td>{$user['may']}</td>";
            echo "<td>{$user['june']}</td>";
            echo "<td>{$user['july']}</td>";
            echo "<td>{$user['august']}</td>";
            echo "<td>{$user['september']}</td>";
            echo "<td>{$user['october']}</td>";
            echo "<td>{$user['november']}</td>";
            echo "<td>{$user['december']}</td>";
            echo "<td>{$user['total']}</td>";
            
            echo "</tr>";


        }
        // টেবিল শেষ
        echo "</table>";
    ?>
</body>
</html>
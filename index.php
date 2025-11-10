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

    <h1>Tuition Fee Analysis - 2025</h1>

    <?php
                        // ALL MONTH VALUE

                                //asiya                sabbir                     sabia                           rafia                      samia                    yasin 
                      /*JAN */  $asiya1= null;    /*JAN */ $sabbir1= 400;     /*JAN */  $sabia1= 300;      /*JAN */ $rafia1= 400;     /*JAN */  $samia1= 400;    /*JAN */  $yasin1= 300;
                      /*FAB */  $asiya2= null;    /*FAB */ $sabbir2= 400;     /*FAB */  $sabia2= 300;      /*FAB */ $rafia2= 400;     /*FAB */  $samia2= 400;    /*FAB */  $yasin2= 300;
                      /*MAR */  $asiya3= 400;     /*MAR */ $sabbir3= 400;     /*MAR */  $sabia3= 300;      /*MAR */ $rafia3= 400;     /*MAR */  $samia3= 400;    /*MAR */  $yasin3= 300;
                      /*APR */  $asiya4= 400;     /*APR */ $sabbir4= 400;     /*APR */  $sabia4= 300;      /*APR */ $rafia4= null;    /*APR */  $samia4= 400;    /*APR */  $yasin4= 300;
                      /*MAY */  $asiya5= 400;     /*MAY */ $sabbir5= 400;     /*MAY */  $sabia5= 300;      /*MAY */ $rafia5= 800;     /*MAY */  $samia5= null;   /*MAY */  $yasin5= 300;
                      /*JUN */  $asiya6= 400;     /*JUN */ $sabbir6= 400;     /*JUN */  $sabia6= 300;      /*JUN */ $rafia6= 400;     /*JUN */  $samia6= 400;    /*JUN */  $yasin6= 300;
                      /*JUL */  $asiya7= 400;     /*JUL */ $sabbir7= 400;     /*JUL */  $sabia7= 300;      /*JUL */ $rafia7= 400;     /*JUL */  $samia7= 400;    /*JUL */  $yasin7= 300;
                      /*AUG */  $asiya8= 400;     /*AUG */ $sabbir8= 400;     /*AUG */  $sabia8= 300;      /*AUG */ $rafia8= 400;     /*AUG */  $samia8= 400;    /*AUG */  $yasin8= 300;
                      /*SEP */  $asiya9= 400;     /*SEP */ $sabbir9= 400;     /*SEP */  $sabia9= 300;      /*SEP */ $rafia9= 400;     /*SEP */  $samia9= 400;    /*SEP */  $yasin9= 300;
                      /*OCT */  $asiya10=400;     /*OCT */ $sabbir10= null;   /*OCT */  $sabia10= null;    /*OCT */ $rafia10= null;   /*OCT */  $samia10= 400;   /*OCT */  $yasin10= 300;
                      /*NOV */  $asiya11= null;   /*NOV */ $sabbir11= null;   /*NOV */  $sabia11= null;    /*NOV */ $rafia11= null;   /*NOV */  $samia11= null;  /*NOV */  $yasin11= null;
                      /*DEC */  $asiya12= null;   /*DEC */ $sabbir12= null;   /*DEC */  $sabia12= null;    /*DEC */ $rafia12= null;   /*DEC */  $samia12= null;  /*DEC */  $yasin12= null;


                                 //mahim                  moriom                      jishan                        lamiya                         sumaiya
                       /*JAN */ $mahim1= 300;    /*JAN */   $moriom1= 200;      /*JAN */ $jishan1= null;     /*JAN */ $lamiya1= null;       /*JAN */  $sumaiya1= null;        
                       /*FAB */ $mahim2= 300;    /*FAB */   $moriom2= 200;      /*FAB */ $jishan2= 400;      /*FAB */ $lamiya2= null;       /*FAB */  $sumaiya2= null;        
                       /*MAR */ $mahim3= 300;    /*MAR */   $moriom3= 200;      /*MAR */ $jishan3= 400;      /*MAR */ $lamiya3= null;       /*MAR */  $sumaiya3= null;        
                       /*APR */ $mahim4= null;   /*APR */   $moriom4= 200;      /*APR */ $jishan4= null;     /*APR */ $lamiya4= 1500;       /*APR */  $sumaiya4= null;        
                       /*MAY */ $mahim5= 500;    /*MAY */   $moriom5= 200;      /*MAY */ $jishan5= 800;      /*MAY */ $lamiya5= 1500;       /*MAY */  $sumaiya5= null;        
                       /*JUN */ $mahim6= 400;    /*JUN */   $moriom6= 200;      /*JUN */ $jishan6= 400;      /*JUN */ $lamiya6= 1500;       /*JUN */  $sumaiya6= null;        
                       /*JUL */ $mahim7= 300;    /*JUL */   $moriom7= 200;      /*JUL */ $jishan7= 400;      /*JUL */ $lamiya7= 1300;       /*JUL */  $sumaiya7= 300;        
                       /*AUG */ $mahim8= 300;    /*AUG */   $moriom8= 200;      /*AUG */ $jishan8= 400;      /*AUG */ $lamiya8= 1500;       /*AUG */  $sumaiya8= 300;        
                       /*SEP */ $mahim9= null;   /*SEP */   $moriom9= 200;      /*SEP */ $jishan9= 400;      /*SEP */ $lamiya9= null;       /*SEP */  $sumaiya9= 600;        
                       /*OCT */ $mahim10= 600;   /*OCT */   $moriom10= 200;     /*OCT */ $jishan10= 200;     /*OCT */ $lamiya10= 2500;      /*OCT */  $sumaiya10= null;   
                       /*NOV */ $mahim11= null;  /*NOV */   $moriom11= null;    /*NOV */ $jishan11= null;    /*NOV */ $lamiya11= null;      /*NOV */  $sumaiya11= null;        
                       /*DEC */ $mahim12= null;  /*DEC */   $moriom12= null;    /*DEC */ $jishan12= null;    /*DEC */ $lamiya12= null;      /*DEC */  $sumaiya12= null; 
                        

                        $total1= $asiya1 + $sabbir1 + $rafia1 + $samia1 + $sabia1 + $mahim1 + $yasin1 + $jishan1 + $moriom1 + $lamiya1 + $sumaiya1;
                        $total2= $asiya2 + $sabbir2 + $rafia2 + $samia2 + $sabia2 + $mahim2 + $yasin2 + $jishan2 + $moriom2 + $lamiya2 + $sumaiya2;
                        $total3= $asiya3 + $sabbir3 + $rafia3 + $samia3 + $sabia3 + $mahim3 + $yasin3 + $jishan3 + $moriom3 + $lamiya3 + $sumaiya3;
                        $total4= $asiya4 + $sabbir4 + $rafia4 + $samia4 + $sabia4 + $mahim4 + $yasin4 + $jishan4 + $moriom4 + $lamiya4 + $sumaiya4;
                        $total5= $asiya5 + $sabbir5 + $rafia5 + $samia5 + $sabia5 + $mahim5 + $yasin5 + $jishan5 + $moriom5 + $lamiya5 + $sumaiya5;
                        $total6= $asiya6 + $sabbir6 + $rafia6 + $samia6 + $sabia6 + $mahim6 + $yasin6 + $jishan6 + $moriom6 + $lamiya6 + $sumaiya6;
                        $total7= $asiya7 + $sabbir7 + $rafia7 + $samia7 + $sabia7 + $mahim7 + $yasin7 + $jishan7 + $moriom7 + $lamiya7 + $sumaiya7;
                        $total8= $asiya8 + $sabbir8 + $rafia8 + $samia8 + $sabia8 + $mahim8 + $yasin8 + $jishan8 + $moriom8 + $lamiya8 + $sumaiya8;
                        $total9= $asiya9 + $sabbir9 + $rafia9 + $samia9 + $sabia9 + $mahim9 + $yasin9 + $jishan9 + $moriom9 + $lamiya9 + $sumaiya9;
                        $total10= $asiya10 + $sabbir10 + $rafia10 + $samia10 + $sabia10 + $mahim10 + $yasin10 + $jishan10 + $moriom10 + $lamiya10 + $sumaiya10;
                        $total11= $asiya11 + $sabbir11 + $rafia11 + $samia11 + $sabia11 + $mahim11 + $yasin11 + $jishan11 + $moriom11 + $lamiya11 + $sumaiya11;
                        $total12= $asiya12 + $sabbir12 + $rafia12 + $samia12 + $sabia12 + $mahim12 + $yasin12 + $jishan12 + $moriom12 + $lamiya12 + $sumaiya12;
                        
        // ডেটা অ্যারে
        $users = [
            ["id" => 1, "name" => "asiya   [400]",   "january" => $asiya1,   "february" =>$asiya2 ,   "march"=> $asiya3,   "april"=> $asiya4,   "may"=> $asiya5,   "june"=> $asiya6,   "july"=>$asiya7,   "august"=> $asiya8,   "september"=> $asiya9,    "october"=>$asiya10,   "november"=>$asiya11,   "december"=> $asiya12,    "total"=>$asiya1+$asiya2+$asiya3+$asiya4+$asiya5+$asiya6+$asiya7+$asiya8+$asiya9+$asiya10+$asiya11+$asiya12],
            ["id" => 2, "name" => "sabbir   [400]",  "january" => $sabbir1,  "february" =>$sabbir2 ,  "march"=> $sabbir3,  "april"=> $sabbir4,  "may"=> $sabbir5,  "june"=> $sabbir6,  "july"=>$sabbir7,  "august"=> $sabbir8,  "september"=> $sabbir9,   "october"=>$sabbir10,  "november"=>$sabbir11,  "december"=> $sabbir12,   "total"=>$sabbir1+$sabbir2+$sabbir3+$sabbir4+$sabbir5+$sabbir6+$sabbir7+$sabbir8+$sabbir9+$sabbir10+$sabbir11+$sabbir12],
            ["id" => 3, "name" => "jishan   [400]",  "january" => $jishan1,  "february" =>$jishan2 ,  "march"=> $jishan3,  "april"=> $jishan4,  "may"=> $jishan5,  "june"=> $jishan6,  "july"=>$jishan7,  "august"=> $jishan8,  "september"=> $jishan9,   "october"=>$jishan10,  "november"=>$jishan11,  "december"=> $jishan12,   "total"=>$jishan1+$jishan2+$jishan3+$jishan4+$jishan5+$jishan6+$jishan7+$jishan8+$jishan9+$jishan10+$jishan11+$jishan12],
            ["id" => 4, "name" => "rafia   [400]",   "january" => $rafia1,   "february" =>$rafia2 ,   "march"=> $rafia3,   "april"=> $rafia4,   "may"=> $rafia5,   "june"=> $rafia6,   "july"=>$rafia7,   "august"=> $rafia8,   "september"=> $rafia9,    "october"=>$rafia10,   "november"=>$rafia11,   "december"=> $rafia12,    "total"=>$rafia1+$rafia2+$rafia3+$rafia4+$rafia5+$rafia6+$rafia7+$rafia8+$rafia9+$rafia10+$rafia11+$rafia12],
            ["id" => 5, "name" => "samia   [400]",   "january" => $samia1,   "february" =>$samia2 ,   "march"=> $samia3,   "april"=> $samia4,   "may"=> $samia5,   "june"=> $samia6,   "july"=>$samia7,   "august"=> $samia8,   "september"=> $samia9,    "october"=>$samia10,   "november"=>$samia11,   "december"=> $samia12,    "total"=>$samia1+$samia2+$samia3+$samia4+$samia5+$samia6+$samia7+$samia8+$samia9+$samia10+$samia11+$samia12],
            ["id" => 6, "name" => "yasin   [300]",   "january" => $yasin1,   "february" =>$yasin2 ,   "march"=> $yasin3,   "april"=> $yasin4,   "may"=> $yasin5,   "june"=> $yasin6,   "july"=>$yasin7,   "august"=> $yasin8,   "september"=> $yasin9,    "october"=>$yasin10,   "november"=>$yasin11,   "december"=> $yasin12,    "total"=>$yasin1+$yasin2+$yasin3+$yasin4+$yasin5+$yasin6+$yasin7+$yasin8+$yasin9+$yasin10+$yasin11+$yasin12],
            ["id" => 7, "name" => "mahim   [300]",   "january" => $mahim1,   "february" =>$mahim2 ,   "march"=> $mahim3,   "april"=> $mahim4,   "may"=> $mahim5,   "june"=> $mahim6,   "july"=>$mahim7,   "august"=> $mahim8,   "september"=> $mahim9,    "october"=>$mahim10,   "november"=>$mahim11,   "december"=> $mahim12,    "total"=>$mahim1+$mahim2+$mahim3+$mahim4+$mahim5+$mahim6+$mahim7+$mahim8+$mahim9+$mahim10+$mahim11+$mahim12],
            ["id" => 8, "name" => "sabia   [300]",   "january" => $sabia1,   "february" =>$sabia2 ,   "march"=> $sabia3,   "april"=> $sabia4,   "may"=> $sabia5,   "june"=> $sabia6,   "july"=>$sabia7,   "august"=> $sabia8,   "september"=> $sabia9,    "october"=>$sabia10,   "november"=>$sabia11,   "december"=> $sabia12,    "total"=>$sabia1+$sabia2+$sabia3+$sabia4+$sabia5+$sabia6+$sabia7+$sabia8+$sabia9+$sabia10+$sabia11+$sabia12],
            ["id" => 9, "name" => "moriom  [200]",  "january" => $moriom1,  "february" =>$moriom2 ,  "march"=> $moriom3,  "april"=> $moriom4,  "may"=> $moriom5 , "june"=> $moriom6,  "july"=>$moriom7,  "august"=> $moriom8,  "september"=> $moriom9,   "october"=>$moriom10,  "november"=>$moriom11,  "december"=> $moriom12,   "total"=>$moriom1+$moriom2+$moriom3+$moriom4+$moriom5+$moriom6+$moriom7+$moriom8+$moriom9+$moriom10+$moriom11+$moriom12],
            ["id" => 10, "name" => "lamiya  [1500]",  "january" => $lamiya1,   "february" =>$lamiya2 ,   "march"=> $lamiya3,   "april"=> $lamiya4,   "may"=> $lamiya5,   "june"=> $lamiya6,   "july"=>$lamiya7,   "august"=> $lamiya8,   "september"=> $lamiya9,    "october"=>$lamiya10,   "november"=>$lamiya11,   "december"=> $lamiya12,    "total"=>$lamiya1+$lamiya2+$lamiya3+$lamiya4+$lamiya5+$lamiya6+$lamiya7+$lamiya8+$lamiya9+$lamiya10+$lamiya11+$lamiya12],
            ["id" => 11, "name" => "sumaiya  [300]",  "january" => $sumaiya1,    "february" =>$sumaiya2 ,  "march"=> $sumaiya3,   "april"=> $sumaiya4,   "may"=> $sumaiya5,   "june"=> $sumaiya6,   "july"=>$sumaiya7,   "august"=> $sumaiya8,   "september"=> $sumaiya9,    "october"=>$sumaiya10,   "november"=>$sumaiya11,   "december"=> $sumaiya12,    "total"=>+$sumaiya1+$sumaiya2+$sumaiya3+$sumaiya4+$sumaiya5+$sumaiya6+$sumaiya7+$sumaiya8+$sumaiya9+$sumaiya10+$sumaiya12],
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
                <th>june</th>*
                <th>july</th>
                <th>august</th>
                <th>september</th>
                <th>october</th>
                <th>november</th>
                <th>december</th>
                <th>in total</th>
                </tr>";

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
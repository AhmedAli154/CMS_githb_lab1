 <?php

include 'students.php';
?> 
 <html>
    <head>
        <style>
            th, td {
        padding: 10px;}
                table {
                 background-color:baf8ff;  
                }
        </style>
    </head>
    <body>
            <table>
            <h2>Application name: PHP class registration </h2>

                <thead>
                    <tr>
                    <th > Name </th>
                    <th> Email  </th>
                    <th> Track  </th>   
                    </tr>
                    
                </thead>    

                <tbody>
                        <?php foreach ($students as $student):?>

                    <tr <?php if ($student['track'] === 'CMS'): ?> style="color: red;" <?php endif; ?>>
                <td><?php echo $student['name'];?> </td> 
                <td><?php echo $student['email'];?> </td> 
                <td><?php echo $student['track'];?> </td> 

            </tr>
            <?php endforeach; ?>

                </tbody>
            
            </table>

    </body>
</html> 










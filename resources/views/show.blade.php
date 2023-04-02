<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css
">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body >
    <div class="bg-light">
        <h1 style="text-align:center;">Sheet Data</h1><hr>
</div>
<div style="margin-top:80px;">
<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Company</th>
                <th>Contact Person</th>
                <th>Client Name</th>
                <th>Country</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($sheet as $data)
            <tr>
                <td>{{$data[0]}}</td>
                <td>{{$data[1]}}</td>
                <td>{{$data[2]}}</td>
                <td>{{$data[3]}}</td>
                <td>{{$data[4]}}</td>
            </tr>
            @endforeach
        </tbody>
      
    </table>
</div>
    </body>

</html>

<script>

    $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'csvHtml5',
        ]
    } );
} );
    </script>
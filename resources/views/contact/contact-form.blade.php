<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Customer Details</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" media="screen" href="main.css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
</head>
  <body>
   <table class="table table-bordered">
        <th>
            <tr>
                <td>Name</td>
                <td>Email</td>
                <td>Phone</td>
                <td>Message</td>
            </tr>
        </th>
        <tr>
            <td>{{$contact_form_data['name']}}</td>
            <td>{{$contact_form_data['email']}}</td>
            <td>{{$contact_form_data['phone']}}</td>
            <td>{{$contact_form_data['message']}}</td>
        </tr>
    </table>

 </body> 
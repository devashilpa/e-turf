<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 5px 35px;
  cursor: pointer;
  font-size: 20px;
}
.btn:hover {
  background-color: RoyalBlue;
}

td{
    padding:9px;
}
</style>

</head>
<body>
    

<br><br><br>
<br><br><br>
<div class="container">
        <div class="row-sm-6" style="border: 1px solid black;padding: 50px;" id="tblCustomers">
        <h2 style="color: black; text-align:center;font-family:serif;">Reciept</h2>
            @foreach($result as $value)
            <div class="bill-form">
            <center>
          
     
            <table style="border-spacing:20px">
        <tr>
            <td>User id:</td>
            <td>{{$value->uid}}</td>
        </tr>
         <tr> 
                 <td>Turf Name</td>
                 <td>:</td>
                 <td>{{$value->turf_name}}</td>
           </tr>
            <tr>  
                  <td>Turf Type:</td>
                  <td>:</td>
                  <td>{{$value->turf_type}}</td>
            </tr>
            <tr> 
                   <td>location:</td>
                   <td>:</td>
                   <td>{{$value->location}}</td>
            </tr> 
            <tr> 
                 <td>rate:</td>
                 <td>:</td>
                 <td>{{$value->rate}}</td>
            </tr> 
             <tr> 
                <td>date:</td>
                <td>:</td>
                <td>{{$value->date}}</td> 
             </tr> 
            <tr>  
                 <td>time:</td>
                 <td>:</td>
                 <td>{{$value->time}}</td>
           </tr>
    </table>
    <br>
                @endforeach
            </center>
            </div>
        </div>
        <br>
       <div> 
           <div class="row">
               <div class="col-sm-3"></div>
               <div class="col-sm-6"><input type="button" id="btnExport" value="Download" class="btn btn-info"></div>
           </div>
       </div>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script type="text/javascript">
        $("body").on("click", "#btnExport", function () {
            html2canvas($('#tblCustomers')[0], {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 250
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("receipt.pdf");
                }
            });
        });
    </script>
        </div>

</body>
</html>
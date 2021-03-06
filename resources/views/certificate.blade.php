<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Certificate</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

   <style>
      @page { margin: 0in; }
      td {
         border: none !important;
      }
   </style>
</head>

<body>
   <img src="{{ url('img/sertifikat 1.png') }}" alt="cert" width="100%" id="background" style="position: absolute; z-index: -1">
   <div class="background mt-5">
      <div class="my-5 p-auto" style="margin: 2%; padding: 0px; text-align:center; ">
         <table align="center" class="table text-center m-0 p-0">
            <tr>
               <td>
                  <div class=" mt-3">
                     <img width="100" src="https://api.pondokprogrammer.com/img/icon.png" alt="">
                  </div>
               </td>
               <td colspan="2" style="text-align: center !important">
                  <h1 class="font-weight-bold">Certificate of Completion</h1>
               </td>
               <td >
                  <img width="100" src="https://chart.googleapis.com/chart?cht=qr&chs=113x113&chl=https://api.pondokprogrammer.com/certificate/1&choe=UTF-8" alt="qr">
               </td>
            </tr>
         </table>
         <span style="font-size:25px"><i>This is to certify that</i></span>
         <br>
         <span style="font-size:40px"><b>{{ isset($user->name) ? $user->name : "Syofyan Zuhad" }}</b></span><br/>
         <span style="font-size:25px"><i>has completed the study at</i> <span class="text-info">Pondok Programmer</span><i> in </i>:</span> <br/><br/>
         <span style="font-size:30px" class="text-info">Laravel Backend Development</span> <br/>
         <span style="font-size:20px">with score of <span class="text-info font-weight-bold display-4">A+</span></span> 
         <br/><br/>
         <table align="center" class="table text-center" style="border: none !important;">
            <tr>
               <td>
                  <span style="font-size:20px"><i>Syofyan Zuhad - <small class="text-muted">Mentor Backend</small></i></span><br/><br/><br/><br/>
               </td>
               <td>
                  <span style="font-size:20px"><i>Hafif Albusyro - <small class="text-muted">Mentor lead</small></i></span><br/><br/><br/><br/>
               </td>
            </tr>
            <tr>
               <td>
                  {{ date('l, ') }}
                  <span style="font-size:20px">{{ date('d F Y') }}</span>
               </td>
               <td>
                  {{ date('l, ') }}
                  <span style="font-size:20px">{{ date('d F Y') }}</span>
               </td>
            </tr>
         </table>
      </div>
   </div>
</body>
</html>
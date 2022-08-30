<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CSD PROJECTS</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}  
.logo {
                   
        width: 100%;
        padding-left:25px;
        padding-right: 5px;
        padding-top: 2px;
        padding-bottom: 2px;
        }
tr {
    width: 100%;
    display: table;
    table-layout: fixed;
}
table {
  padding-top: 20px !important;
  padding-bottom: 20px !important;
  padding-left: 15px !important;
  padding-right: 5px !important;
}
.table-condensed{
  font-size: 10px;
}
.dataTables_paginate {
    padding: 20px !important;
}
.dataTables_length{
    padding: 20px !important;
}
.dataTables_info{
    padding: 20px !important;
}
#dtBasicExample_filter {
    padding: 20px !important;
}
.btn{
    padding: 4px 11px !important;
    font-size: 8px !important;
}
            body {
                font-family: 'Nunito', sans-serif;
                border: 0px !important;
            }
        </style>
    </head>
    <body class="content">
       
        <section style="background-color: #f3f5f9;">
        <div class="container-fluid logo">
                <img src="{{ asset('image/logo.png') }}" alt="logo"class="img-fluid" style="width:100px; height:50px;"></img>              
                <h2 class="pull-right">Corporate Services Division / Enterprise Solutions Section Projects </h2>
            </div> 

        </section>     
    <div class="row" > 
    
    <?php
    $data_results = DB::select("SELECT * FROM 2022_application_development_and_support_exam_data order by Project_Ref  ASC");
 
    ?> 
  
    <table id="dtBasicExample" class="table table-bordered table-condensed table-sm" style="border-collapse:separate !important;">
  <thead class="bg-primary" style ="color:white;">
    <tr>
      <th scope="col">Project Ref </th>
      <th scope="col">Country</th>
      <th scope="col">Implementing Office</th>
      <th scope="col">Project Title</th>
      <th scope="col">Grant amount USD</th>
      <th scope="col">Dates from GCF</th>
      <th scope="col">Start   Date</th>
      <th scope="col">Duration months</th>
      <th scope="col">End Date</th>
      <th scope="col">Readiness or NAP</th>
      <th scope="col">Type of readiness</th>
      <th scope="col">First disbursement amount</th>
      <th scope="col">Status</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data_results as $data)
    <tr>
        <td>{{ $data->Project_Ref }} </td>  
        <td> {{ $data->Country }}</td>     
        <td> {{ $data->Implementing_Office }}</td>     
        <td> {{ $data->Project_Title }}</td>     
        <td> {{ $data->Grant_amount_USD }}</td>     
        <td> {{ $data->Dates_from_GCF }}</td>     
        <td> {{ $data->Start_Date }}</td>     
        <td> {{ $data->Duration_months }}</td>     
        <td> {{ $data->End_Date }}</td>     
        <td> {{ $data->Readiness_or_NAP }}</td>     
        <td> {{ $data->Type_of_readiness }}</td>     
        <td> {{ $data->First_disbursement_amount }}</td>     
        <td> {{ $data->Status }}</td> 
        <td>
        <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button><br />
        <button type="button" class="btn btn-info  edit"><i class="fa fa-plus"></i> Edit</button><br />
        <button type="button" class="btn btn-info  delete"><i class="fa fa-plus"></i> Delete</button>
        <!-- <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
        <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a> -->
        </td>       
    </tr>
    @endforeach 
  </tbody>
</table> 
       
 </div>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>
<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
<script>
$(document).ready(function(){
    $('#dtBasicExample').dataTable();
});

$(document).ready(function(){
$('[data-toggle="tooltip"]').tooltip();
var actions = $("table td:last-child").html();
// Append table with add row form on add new button click
$(".add-new").click(function(){
$(this).attr("disabled", "disabled");
var index = $("table tbody tr:last-child").index();
var row = '<tr>' +
'<td><input type="text" class="form-control" name="Project_Ref" id="Project_Ref"></td>' +
'<td><input type="text" class="form-control" name="Country" id="Country"></td>' +
'<td><input type="text" class="form-control" name="Implementing_Office" id="Implementing_Office"></td>' +
'<td><input type="text" class="form-control" name="Project_Title" id="Project_Title"></td>' +
'<td><input type="text" class="form-control" name="Grant_amount_USD" id="Grant_amount_USD"></td>' +
'<td><input type="text" class="form-control" name="Dates_from_GCF" id="Dates_from_GCF"></td>' +
'<td><input type="text" class="form-control" name="Start_Date" id="Start_Date"></td>' +
'<td><input type="text" class="form-control" name="Duration_months" id="Duration_months"></td>' +
'<td><input type="text" class="form-control" name="End_Date" id="End_Date"></td>' +
'<td><input type="text" class="form-control" name="Readiness_or_NAP" id="Readiness_or_NAP"></td>' +
'<td><input type="text" class="form-control" name="Type_of_readiness" id="Type_of_readiness"></td>' +
'<td><input type="text" class="form-control" name="First_disbursement_amount" id="First_disbursement_amount"></td>' +
'<td><input type="text" class="form-control" name="First_disbursement_amount" id="First_disbursement_amount"></td>' +
'<td>' + actions + '</td>' +
'</tr>';
$("table").append(row);
$("table tbody tr").eq(index + 1).find(".add, .edit").toggle();
$('[data-toggle="tooltip"]').tooltip();
});
// Add row on add button click
$(document).on("click", ".add", function(){
var empty = false;
var input = $(this).parents("tr").find('input[type="text"]');
input.each(function(){
if(!$(this).val()){
$(this).addClass("error");
empty = true;
} else{
$(this).removeClass("error");
}
});
$(this).parents("tr").find(".error").first().focus();
if(!empty){
input.each(function(){
$(this).parent("td").html($(this).val());
});
$(this).parents("tr").find(".add, .edit").toggle();
$(".add-new").removeAttr("disabled");
}
});
// Edit row on edit button click
$(document).on("click", ".edit", function(){
$(this).parents("tr").find("td:not(:last-child)").each(function(){
$(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
});
$(this).parents("tr").find(".add, .edit").toggle();
$(".add-new").attr("disabled", "disabled");
});
// Delete row on delete button click
$(document).on("click", ".delete", function(){
$(this).parents("tr").remove();
$(".add-new").removeAttr("disabled");
});
});
</script>       
    </body>
</html>

<!DOCTYPE html>
<html>
    <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FJL Employee</title>
    <!--<link href="<?php //echo base_url();?>cssfiles/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">-->
    <link href="<?php echo base_url('assets/assets/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/assets/datatables/css/dataTables.bootstrap.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/assets/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')?>" rel="stylesheet">
    <link rel="icon" type="text/css" href="<?php echo base_url();?>assets/img/fjllogo.jpg">
    <!-- cdn start -->
<!--<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>-->
<script type="text/javascript" src="<?php echo base_url('assets/js/sheetjs/dist/xlsx.full.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/FileSaver/dist/FileSaver.min.js');?>"></script>

<!-- cdn end -->
    <!--<link href="<?php //echo base_url();?>cssfiles/css/sb-admin-2.min.css" rel="stylesheet">-->
    
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head> 
    <style type="text/css"> 

        .checkbox-menu li label {
        display: block;
        padding: 3px 10px;
        clear: both;
        font-weight: normal;
        line-height: 1.42857143;
        color: #333;
        white-space: nowrap;
        margin:0;
        transition: background-color .4s ease;
        cursor: pointer;
        }
        .checkbox-menu li input {
            margin: 0px 5px;
            top: 2px;
            position: relative;
        }
        .checkbox-menu li.active label {
            background-color: #cbcbff;
            font-weight:bold;
        }
        .checkbox-menu li label:hover,
        .checkbox-menu li label:focus {
            background-color: #f5f5f5;
        }
        .checkbox-menu li.active label:hover,
        .checkbox-menu li.active label:focus {
            background-color: #b8b8ff;
        }</style>

<body id="page-top">
    <div style="margin-left: 20px">
        <h1 style="font-size:20pt">FJL Employee System</h1>
 
        <h3>Employee Data</h3>
        <br />
        <button class="btn btn-success" onclick="add_person()"><i class="glyphicon glyphicon-plus"></i> Add</button>
        <button class="btn btn-default" onclick="reload_table()"><i class="glyphicon glyphicon-refresh"></i> Reload</button>
        <!--<a id="button-a" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>-->
        <button class="btn btn-success" id="button-a">Export Data</button>
        <br />
        <br/>       
        <!--<div class="dropdown mb-10">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span class="pr-5">Choose Columns</span> 
                    <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu checkbox-menu allow-focus" aria-labelledby="dropdownMenu1">
                                        
                        <li ><label> <input class="toggle-vis" data-column="1" type="checkbox"> ID</label></li>
                        <li ><label> <input class="toggle-vis" data-column="2" type="checkbox"> PO Received</label></li>
                        <li ><label> <input class="toggle-vis" data-column="3" type="checkbox"> PO Number</label></li>
                        <li ><label> <input class="toggle-vis" data-column="4" type="checkbox" type="checkbox"> Type of Project</label></li>
                        <li ><label> <input class="toggle-vis" data-column="5" type="checkbox" type="checkbox"> Site Name</label></li>
                        <li ><label> <input class="toggle-vis" data-column="6" type="checkbox" type="checkbox"> Description</label></li>
                        <li ><label> <input class="toggle-vis" data-column="7" type="checkbox" type="checkbox"> PO Amount</label></li>
                        <li ><label> <input class="toggle-vis" data-column="8" type="checkbox" type="checkbox"> Project Status</label></li>
                        <li ><label> <input class="toggle-vis" data-column="9" type="checkbox" type="checkbox"> Account Receivables</label></li>
                        <li ><label> <input class="toggle-vis" data-column="10" type="checkbox" type="checkbox"> % DP Billed Date</label></li>
                        <li ><label> <input class="toggle-vis" data-column="11" type="checkbox" type="checkbox"> %DP Billed Amount</label></li>
                        <li ><label> <input class="toggle-vis" data-column="12" type="checkbox" type="checkbox"> Amount Received</label></li>
                        <li ><label> <input class="toggle-vis" data-column="13" type="checkbox" type="checkbox"> % Progress Billing Date</label></li>
                        <li ><label> <input class="toggle-vis" data-column="14" type="checkbox" type="checkbox"> % Progress Billing Amount</label></li>
                        <li ><label> <input class="toggle-vis" data-column="15" type="checkbox" type="checkbox"> Final Progress Date</label></li>
                        <li ><label> <input class="toggle-vis" data-column="16" type="checkbox" type="checkbox"> Final Progress Amount</label></li>
                        <li ><label> <input class="toggle-vis" data-column="17" type="checkbox" type="checkbox"> Retention Date</label></li>
                        <li ><label> <input class="toggle-vis" data-column="18" type="checkbox" type="checkbox"> Retention Amount</label></li>
                        <li ><label> <input class="toggle-vis" data-column="19" type="checkbox" type="checkbox"> Region Area</label></li>
                        <li ><label> <input class="toggle-vis" data-column="20" type="checkbox" type="checkbox"> Project Manager</label></li>
                    </ul>
                </div> -->
                <br />
        <table id="user_table" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th width="100%">Action</th>
                    <th>#</th>
                    <th>Employee Code</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Team</th>
                    <th>Phone Number</th>
                    <th>Date of Birth</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>SSS Number</th>
                    <th>HDMF Number</th>
                    <th>Phil. Health Card Number</th>
                    <th>TIN No.</th>
                    <th>Date Hired</th>
                    <th>In case of Emergency: Name:</th>
                    <th>Contact</th>
                    <th>Address</th>
                    <th>Employment</th>
                    <th>Employment Status</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
 
            <tfoot>
            <tr>
              
                <th>Action</th>
                    <th>#</th>
                    <th>Employee Code</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Team</th>
                    <th>Phone Number</th>
                    <th>Date of Birth</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>SSS Number</th>
                    <th>HDMF Number</th>
                    <th>Phil. Health Card Number</th>
                    <th>TIN No.</th>
                    <th>Date Hired</th>
                    <th>In case of Emergency: Name:</th>
                    <th>Contact</th>
                    <th>Address</th>
                    <th>Employment</th>
                    <th>Employment Status</th>
            </tr>
            </tfoot>
        </table>
    </div>
 
 
<script src="<?php echo base_url('assets/assets/jquery/jquery-2.1.4.min.js')?>"></script>
<script src="<?php echo base_url('assets/assets/bootstrap/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/assets/datatables/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/assets/datatables/js/dataTables.bootstrap.js')?>"></script>
<script src="<?php echo base_url('assets/assets/bootstrap-datepicker/js/bootstrap-datepicker.min.js')?>"></script>
 
 
<script type="text/javascript">
 
var save_method; //for save method string
var table;
 
$(document).ready(function() {
 
    //datatables
    table = $('#user_table').DataTable({ 
 
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.
 
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('print_main/ajax_list')?>",
            "type": "POST"
        },
 
        //Set column definition initialisation properties.
        "columnDefs": [
        { 
            "targets": [0], //last column
            "orderable": false, //set not orderable
        },
        ],
 
    });
    $(document).on('click', '.allow-focus', function (e) {
        e.stopPropagation();
    });
    // chechbox menu start
    $(".checkbox-menu").on("change", "input[type='checkbox']", function() {
        console.log('nice')
        $(this).closest("li").toggleClass("active", this.checked);
    });
    // chechbox menu end
    //datepicker
    $('.datepicker').datepicker({
        autoclose: true,
        format: "yyyy-mm-dd",
        todayHighlight: true,
        orientation: "top auto",
        todayBtn: true,
        todayHighlight: true,  
    });
 
    //set input/textarea/select event when change value, remove class error and remove text help block 
    $("input").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });
    $("textarea").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });
    $("select").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });
    // toggle columns start
    //$('.toggle-vis').on( 'click', function (e) {
        //e.preventDefault();
    //    var column = table.column( $(this).attr('data-column') );
    //    column.visible( ! column.visible() );
    //} );
    // toggle columns end


 
});
 
 
 
function add_person()
{
    save_method = 'add';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#modal_form').modal('show'); // show bootstrap modal
    $('.modal-title').text('Add Data'); // Set Title to Bootstrap modal title
}
 
function edit_person(id)
{
    save_method = 'update';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
 
    //Ajax Load data from ajax
    $.ajax({
        url : "<?php echo site_url('print_main/ajax_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            $('[name="id"]').val(data.id);
            $('[name="employee_code"]').val(data.employee_code);
            $('[name="employee_name"]').val(data.employee_name);
            $('[name="employee_designation"]').val(data.employee_designation);
            $('[name="employee_team"]').val(data.employee_team);
            $('[name="employee_contact"]').val(data.employee_contact);
            $('[name="employee_dob"]').datepicker('update',data.employee_dob);
            $('[name="employee_address"]').val(data.employee_address);
            $('[name="employee_email"]').val(data.employee_email);
            $('[name="employee_sss"]').val(data.employee_sss);
            $('[name="employee_hdmf"]').val(data.employee_hdmf);
            $('[name="employee_phic"]').val(data.employee_phic);
            $('[name="employee_tin"]').val(data.employee_tin);            
            $('[name="employee_hired"]').datepicker('update',data.employee_hired);
            $('[name="emergency_name"]').val(data.emergency_name);
            $('[name="emergency_number"]').val(data.emergency_number);
            $('[name="emergency_address"]').val(data.emergency_address);
            $('[name="employee_status"]').val(data.employee_status);
            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Data'); // Set title to Bootstrap modal title            
          

         },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}
//##########################################################################################################################
//Employee Status

/*
function calcDP()
{
  var a = document.getElementById("po_amount").value;
  var b = document.getElementById("account_receivable").value;
  var c = document.getElementById("percent").value;
  var d = document.getElementById("total_amount_received").value;
  var e = document.getElementById("percent1").value; //pg_billing_amount
  var h = document.getElementById("percent2").value; //f_progress_amount
  var i = document.getElementById("percent3").value; //retention


  if (c != "") 
  {
    
    $("#dp_billed_amount").val(parseFloat(a)*c);
    var f = document.getElementById("dp_billed_amount").value;
    var acc = parseFloat(a)-parseFloat(f);
    $("#account_receivable").val(acc);


    //d = f;

    //$("#total_amount_received").val(d);


  }
  if (e != "") 
  {
    
    $("#pg_billing_amount").val(parseFloat(a)*e);
    var g = document.getElementById("pg_billing_amount").value; 
    var pg = parseFloat(b)-parseFloat(g);
    $("#account_receivable").val(pg);

    //$("#total_amount_received").val(parseFloat(d)+parseFloat(g));
  }
  if (h != "") 
  {
    
    $("#f_progress_amount").val(parseFloat(a)*h);
    var j = document.getElementById("f_progress_amount").value; 
    var fp = parseFloat(b)-parseFloat(j);
    $("#account_receivable").val(fp);

    //$("#total_amount_received").val(parseFloat(d)+parseFloat(j));
  }
  if (i != "") 
  {
    $("#retention_amount").val(parseFloat(a)*i);
    var k = document.getElementById("retention_amount").value;    
    var ra = parseFloat(b)-parseFloat(k);
    $("#account_receivable").val(ra);

    //$("#total_amount_received").val(parseFloat(d)+parseFloat(k));
  }

}
*/
        
//$ DP Calculation End  
//##########################################################################################################################


function reload_table()
{
    table.ajax.reload(null,false); //reload datatable ajax 
}
 
function save()
{
    $('#btnSave').text('saving...'); //change button text
    $('#btnSave').attr('disabled',true); //set button disable 
    var url;
 
    if(save_method == 'add') {
        url = "<?php echo site_url('print_main/ajax_add')?>";
    } else {
        url = "<?php echo site_url('print_main/ajax_update')?>";
    }
 
    // ajax adding data to database
    $.ajax({
        url : url,
        type: "POST",
        data: $('#form').serialize(),
        dataType: "JSON",
        success: function(data)
        {
 
            if(data.status) //if success close modal and reload ajax table
            {
                $('#modal_form').modal('hide');
                reload_table();
            }
            else
            {
                for (var i = 0; i < data.inputerror.length; i++) 
                {
                    $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
                    $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
                }
            }
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 
 
 
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 
 
        }
    });
}
 
function delete_person(id)
{
    if(confirm('Are you sure to delete this data?'))
    {
        // ajax delete data to database
        $.ajax({
            url : "<?php echo site_url('print_main/ajax_delete')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
                //if success reload ajax table
                $('#modal_form').modal('hide');
                reload_table();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });
 
    }
}
 

</script>
 
<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Data Form</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id"/> 
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Employee Code</label>
                            <div class="col-md-9">
                                <input name="employee_code" id="employee_code" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Employee Full Name</label>
                            <div class="col-md-9">
                                <input name="employee_name" id="employee_name" placeholder="Lastname,Firstname M.i., Ext.,(Sr.,Jr.,I,II,III,nth)" class="form-control" type="text" required>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Designation / Position</label>
                            <div class="col-md-9">
                                <input class="form-control" name="employee_designation" id="employee_designation" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Team</label>
                            <div class="col-md-9">
                                <input class="form-control" name="employee_team" id="employee_team" type="text" ">
                                </select>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Employee Contact Number</label>
                            <div class="col-md-9">
                                <input name="employee_contact" id="employee_contact" class="form-control" type="number" required></input>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Employee Date of Birth</label>
                            <div class="col-md-9">
                                <input name="employee_dob" id="employee_dob" placeholder="yyyy-mm-dd" class="form-control datepicker" type="tex" required></input>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Employee Address</label>
                            <div class="col-md-9">
                                <textarea name="employee_address" id="employee_address" class="form-control" type="text"></textarea>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Employee Email</label>
                            <div class="col-md-9">
                                <input type="text" name="employee_email" id="employee_email" class="form-control"></input>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Employee SSS No.</label>
                            <div class="col-md-9">
                                <input name="employee_sss" id="employee_sss" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Employee HDMF No.</label>
                            <div class="col-md-9">
                                <input name="employee_hdmf" id="employee_hdmf" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Employee PHIC No.</label>
                            <div class="col-md-9">
                                <input name="employee_phic" id="employee_phic" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Employee TIN No.</label>
                            <div class="col-md-9">
                                <input name="employee_tin" id="employee_tin" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Employee Date Hired</label>
                            <div class="col-md-9">
                                <input name="employee_hired" id="employee_hired" placeholder="yyyy-mm-dd" class="form-control datepicker" type="text" required>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Emergency Contact Person</label>
                            <div class="col-md-9">
                                <input name="emergency_name" id="emergency_name" class="form-control" type="text" required>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Emergency Contact Number</label>
                            <div class="col-md-9">
                                <input name="emergency_number" id="emergency_number" class="form-control" type="number" required>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Emergency Address</label>
                            <div class="col-md-9">
                                <textarea name="emergency_address" id="emergency_address" class="form-control" type="text" required></textarea>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Employee Status</label>
                            <div class="col-md-9">
                                <select class="form-control" name="employee_status" id="employee_status" type="text">
                                    <option>Active</option>
                                    <option>Inactive</option>
                                </select>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Employment</label>
                            <div class="col-md-9">
                                <select class="form-control" name="employment" id="employment" type="text">
                                    <option>FJL</option>
                                    <option>DIECC</option>
                                </select>
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->
<script type="text/javascript">
    
    var wb = XLSX.utils.book_new();
    wb.Props = {
                Title: "FJL Employee",
                Subject: "Test",
                Author: "Leah Lopez",
                CreatedDate: new Date(2017,12,19)
        };
        wb.SheetNames.push("Test Sheet");
        var ws_data = [['hello' , 'world']];  //a row with 2 columns
        var ws = XLSX.utils.aoa_to_sheet(ws_data);
        wb.Sheets["Test Sheet"] = ws;
        var wbout = XLSX.write(wb, {bookType:'xlsx',  type: 'binary'});
        function s2ab(s) { 
                var buf = new ArrayBuffer(s.length); //convert s to arrayBuffer
                var view = new Uint8Array(buf);  //create uint8array as viewer
                for (var i=0; i<s.length; i++) view[i] = s.charCodeAt(i) & 0xFF; //convert to octet
                return buf;    
}
$("#button-a").click(function(){
       saveAs(new Blob([s2ab(wbout)],{type:"application/octet-stream"}), 'test.xlsx');
});
</script>

    <script type="text/javascript">
        var table = document.getElementById('user_table')
        var list = []

        table.addEventListener('click', function(event) {
            var target = event.target
            var tableRow = target.closest('tr')
            var array = []

            // get each column data
            var column2 = tableRow.children[1].textContent
            var column3 = tableRow.children[2].textContent
            var column4 = tableRow.children[3].textContent
            var column5 = tableRow.children[4].textContent
            var column6 = tableRow.children[5].textContent
            var column7 = tableRow.children[6].textContent
            var column8 = tableRow.children[7].textContent
            var column9 = tableRow.children[8].textContent
            var column10 = tableRow.children[9].textContent
            var column11 = tableRow.children[10].textContent
            var column12 = tableRow.children[11].textContent
            var column13 = tableRow.children[12].textContent
            var column14 = tableRow.children[13].textContent
            var column15 = tableRow.children[14].textContent
            var column16 = tableRow.children[15].textContent
            var column17 = tableRow.children[16].textContent
            var column18 = tableRow.children[17].textContent
            var column19 = tableRow.children[18].textContent
            var column20 = tableRow.children[19].textContent

            
            // check if row already exist in list
            if(list.length > 0) {
                var duplicate = list.findIndex((value) => {
                    var id = value[1]
                    if(id == column2) {
                        return true
                    } 
                })

                // if found duplicate
                if(duplicate > -1) {
                    list.splice(duplicate, 1)
                }else {
                    array.push(column2, column3, column4, column5, column6, column7, column8, column9, column10, column11, column12, column13, column14, column15, column16, column17, column18, column19, column20)
                    list.push(array)
                }

            }else {
                array.push(column2, column3, column4, column5, column6, column7, column8, column9, column10, column11, column12, column13, column14, column15, column16, column17, column18, column19, column20)
                list.push(array)
            }


            console.log(list)
        })
    </script>
</body>
</html>

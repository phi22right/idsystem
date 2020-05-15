<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Print_main extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('print_model','prints');
    }
 
    public function index()
    {
        $this->load->helper('url');
        $this->load->view('print_view');
    }
 
    public function ajax_list()
    {
        $list = $this->prints->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $rows) {
            $no++;
            //add html for action
            
            $row = array();
$row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" id="update" onclick="edit_person('."'".$rows->id."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a><br/><br/>
<a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_person('."'".$rows->id."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
            $row[] = $rows->id;
            $row[] = $rows->employee_code;
            $row[] = $rows->employee_name;
            $row[] = $rows->employee_designation;
            $row[] = $rows->employee_team;
            $row[] = $rows->employee_contact;
            $row[] = $rows->employee_dob;
            $row[] = $rows->employee_address;
            $row[] = $rows->employee_email;
            $row[] = $rows->employee_sss;
            $row[] = $rows->employee_hdmf;
            $row[] = $rows->employee_phic;
            $row[] = $rows->employee_tin;
            $row[] = $rows->employee_hired;
            $row[] = $rows->emergency_name;
            $row[] = $rows->emergency_number;
            $row[] = $rows->emergency_address;
            $row[] = $rows->employment;
            $row[] = $rows->employee_status;
 
            //add html for action
//$row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" id="update" onclick="edit_person('."'".$rows->id."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>';
//<a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_person('."'".$rows->id."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
         
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->prints->count_all(),
                        "recordsFiltered" => $this->prints->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }
 
    public function ajax_edit($id)
    {
        $data = $this->prints->get_by_id($id);
        $data->employee_dob = ($data->employee_dob == '0000-00-00') ? '' : $data->employee_dob; // if 0000-00-00 set tu empty for datepicker compatibility
        echo json_encode($data);
    }
 
    public function ajax_add()
    {
        $this->_validate();
        $data = array(
                'employee_code' => $this->input->post('employee_code'),
                'employee_name' => $this->input->post('employee_name'),
                'employee_designation' => $this->input->post('employee_designation'),
                'employee_team' => $this->input->post('employee_team'),
                'employee_contact' => $this->input->post('employee_contact'),
                'employee_dob' => $this->input->post('employee_dob'),
                'employee_address' => $this->input->post('employee_address'),
                'employee_email' => $this->input->post('employee_email'),
                'employee_sss' => $this->input->post('employee_sss'),
                'employee_hdmf' => $this->input->post('employee_hdmf'),
                'employee_phic' => $this->input->post('employee_phic'),
                'employee_tin' => $this->input->post('employee_tin'),
                'employee_hired' => $this->input->post('employee_hired'),
                'emergency_name' => $this->input->post('emergency_name'),
                'emergency_number' => $this->input->post('emergency_number'),
                'emergency_address' => $this->input->post('emergency_address'),
                'employment' => $this->input->post('employment'),
                'employee_status' => $this->input->post('employee_status')
            );
        $insert = $this->prints->save($data);
        echo json_encode(array("status" => TRUE));
    }
 
    public function ajax_update()
    {
        $this->_validate();
        $data = array(
                'employee_code' => $this->input->post('employee_code'),
                'employee_name' => $this->input->post('employee_name'),
                'employee_designation' => $this->input->post('employee_designation'),
                'employee_team' => $this->input->post('employee_team'),
                'employee_contact' => $this->input->post('employee_contact'),
                'employee_dob' => $this->input->post('employee_dob'),
                'employee_address' => $this->input->post('employee_address'),
                'employee_email' => $this->input->post('employee_email'),
                'employee_sss' => $this->input->post('employee_sss'),
                'employee_hdmf' => $this->input->post('employee_hdmf'),
                'employee_phic' => $this->input->post('employee_phic'),
                'employee_tin' => $this->input->post('employee_tin'),
                'employee_hired' => $this->input->post('employee_hired'),
                'emergency_name' => $this->input->post('emergency_name'),
                'emergency_number' => $this->input->post('emergency_number'),
                'emergency_address' => $this->input->post('emergency_address'),
                'employment' => $this->input->post('employment'),
                'employee_status' => $this->input->post('employee_status')
            );
        $this->prints->update(array('id' => $this->input->post('id')), $data);
        echo json_encode(array("status" => TRUE));
    }
 
    public function ajax_delete($id)
    {
        $this->prints->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }
 
 
    private function _validate()
    {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;
 
        if($this->input->post('employee_code') == '')
        {
            $data['inputerror'][] = 'employee_code';
            $data['error_string'][] = 'Employee Code Number is required';
            $data['status'] = FALSE;
        }
 
        if($data['status'] === FALSE)
        {
            echo json_encode($data);
            exit();
        }
    }
}
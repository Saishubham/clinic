<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajaxsearch extends CI_Controller {

	function index()
	{
		$this->load->view('ajaxsearch');
	}

	function fetch()
	{
		$output = '';
		$query = '';
		$this->load->model('ajaxsearch_model');
		if($this->input->post('query'))
		{
			$query = $this->input->post('query');
		}
		$data = $this->ajaxsearch_model->fetch_data($query);
		$output .= '
		<div class="table-responsive">
					<table class="table table-bordered table-striped">
						<tr>
							<th>ID</th>
							<th>Customer Name</th>
							<th>Address</th>
							<th>City</th>
							<th>Contact</th>
							<th>date</th>
						</tr>
		';
		if($data->num_rows() > 0)
		{
			foreach($data->result() as $row)
			{
				$output .= '
						<tr>
						     <td>'.$row->id.'</td>				
							<td>'.$row->first.'</td>
							<td>'.$row->address.'</td>
							<td>'.$row->city.'</td>
							<td>'.$row->contact.'</td>
							<td>'.$row->date.'</td>
						</tr>
				';
			}
		}
		else
		{
			$output .= '<tr>
							<td colspan="5">No Data Found</td>
						</tr>';
		}
		$output .= '</table>';
		echo $output;
	}
	
}

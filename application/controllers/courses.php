<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Courses extends CI_Controller {

	public function index()
	{
		
		$this->load->model("Course");
		$this->output->enable_profiler(TRUE);
		$course_name['name'] = $this->Course->get_all_courses();
		$this->load->view('bootcamp', $course_name);
	}

	public function add()
	{
	    $this->load->model("Course");
	    $course_details = array(
	        "title" => $this->input->post('name'),
	        "description" => $this->input->post('description'),
	        "created_at" => date("Y-m-d, H:i:s")
	    ); 

	    if(!$this->input->post('name'))
	    {
	    	echo "ERROR post name is necessary";
	    }
	    elseif (strlen($this->input->post('name')) < 15)
	    {
	    	echo "ERROR the title is not long enough";
	    }
	    else{
	    $add_course = $this->Course->add_course($course_details);
	    if($add_course === TRUE)
	        echo "Course is added!";
		}
	    
	}

	public function destroy($number)
	{
		$this->load->model("Course");
		$remove_course = $this->Course->destroy_course($number);
		if($remove_course == TRUE)
		{
			echo "Course is removed!";
		}
	}

}
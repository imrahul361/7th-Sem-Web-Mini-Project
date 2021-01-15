<?php
defined('BASEPATH') or exit('No direct script access allowed');
class PHome extends CI_Controller
{

    public function index()
    {
        $this->load->view('stu_parent/index');
    }
    public function about_us()
    {
        $this->load->view('stu_parent/about_us');
    }
    public function add_streaming()
    {
        $this->load->view('stu_parent/add_streaming');
    }
    public function all_instructor()
    {
        $this->load->view('stu_parent/all_instructor');
    }
    public function apply_job()
    {
        $this->load->view('stu_parent/apply_job');
    }
    public function blog_single_view()
    {
        $this->load->view('stu_parent/blog_single_view');
    }
    public function career()
    {
        $this->load->view('stu_parent/career');
    }
    public function categories()
    {
        $this->load->view('stu_parent/categories');
    }
    public function certification_center()
    {
        $this->load->view('stu_parent/certification_center');
    }
    public function certification_start_form()
    {
        $this->load->view('stu_parent/certification_start_form');
    }
    public function certification_test__result()
    {
        $this->load->view('stu_parent/certification_test__result');
    }
    public function certification_test_view()
    {
        $this->load->view('stu_parent/certification_test_view');
    }
    public function checkout_membership()
    {
        $this->load->view('stu_parent/checkout_membership');
    }
    public function coming_soon()
    {
        $this->load->view('stu_parent/coming_soon');
    }

    public function company_details()
    {
        $this->load->view('stu_parent/company_details');
    }
    public function contact_us()
    {
        $this->load->view('stu_parent/contact_us');
    }
    public function course_detail_view()
    {
        $this->load->view('stu_parent/course_detail_view');
    }
    public function create_new_course()
    {
        $this->load->view('stu_parent/create_new_course');
    }
    public function error_404()
    {
        $this->load->view('stu_parent/error_404');
    }
    public function explore()
    {
        $this->load->view('stu_parent/explore');
    }
    public function feedback()
    {
        $this->load->view('stu_parent/feedback');
    }
    public function forgot_password()
    {
        $this->load->view('stu_parent/forgot_password');
    }
    public function help()
    {
        $this->load->view('stu_parent/help');
    }
    public function index2()
    {
        $this->load->view('stu_parent/index-2');
    }
    public function instructor_all_reviews()
    {
        $this->load->view('stu_parent/instructor_all_reviews');
    }
    public function instructor_analyics()
    {
        $this->load->view('stu_parent/instructor_analyics');
    }
    public function instructor_courses()
    {
        $this->load->view('stu_parent/instructor_courses');
    }
    public function instructor_dashboard()
    {
        $this->load->view('stu_parent/instructor_dashboard');
    }
    public function instructor_earning()
    {
        $this->load->view('stu_parent/instructor_earning');
    }
    public function instructor_messages()
    {
        $this->load->view('stu_parent/instructor_messages');
    }
    public function instructor_my_certificates()
    {
        $this->load->view('stu_parent/instructor_my_certificates');
    }
    public function instructor_notifications()
    {
        $this->load->view('stu_parent/instructor_notifications');
    }
    public function instructor_payout()
    {
        $this->load->view('stu_parent/instructor_payout');
    }
    public function instructor_profile_view()
    {
        $this->load->view('stu_parent/instructor_profile_view');
    }
    public function instructor_statements()
    {
        $this->load->view('stu_parent/instructor_statements');
    }
    public function instructor_verification()
    {
        $this->load->view('stu_parent/instructor_verification');
    }
    public function invoice()
    {
        $this->load->view('stu_parent/invoice');
    }
    public function live_output()
    {
        $this->load->view('stu_parent/live_output');
    }
    public function live_streams()
    {
        $this->load->view('stu_parent/live_streams');
    }
    public function membership()
    {
        $this->load->view('stu_parent/membership');
    }
    public function my_instructor_profile_view()
    {
        $this->load->view('stu_parent/my_instructor_profile_view');
    }
    public function our_blog()
    {
        $this->load->view('stu_parent/our_blog');
    }
    public function press()
    {
        $this->load->view('stu_parent/press');
    }
    public function report_history()
    {
        $this->load->view('stu_parent/report_history');
    }
    public function saved_courses()
    {
        $this->load->view('stu_parent/saved_courses');
    }
    public function search_result()
    {
        $this->load->view('stu_parent/search_result');
    }
    public function setting()
    {
        $this->load->view('stu_parent/setting');
    }
    public function sign_in()
    {
        redirect('Login/index');
    }
    public function sign_up_steps()
    {
        $this->load->view('stu_parent/sign_up_steps');
    }
    public function sign_up()
    {
        $this->load->view('stu_parent/sign_up');
    }
    public function terms_of_use()
    {
        $this->load->view('stu_parent/terms_of_use');
    }
    public function thank_you()
    {
        $this->load->view('stu_parent/thank_you');
    }
}

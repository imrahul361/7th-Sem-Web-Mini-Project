<?php
defined('BASEPATH') or exit('No direct script access allowed');
class SHome extends CI_Controller
{

    public function index()
    {
        $this->load->view('student/index');
    }
    public function about_us()
    {
        $this->load->view('student/about_us');
    }
    public function add_streaming()
    {
        $this->load->view('student/add_streaming');
    }
    public function all_instructor()
    {
        $this->load->view('student/all_instructor');
    }
    public function apply_job()
    {
        $this->load->view('student/apply_job');
    }
    public function blog_single_view()
    {
        $this->load->view('student/blog_single_view');
    }
    public function career()
    {
        $this->load->view('student/career');
    }
    public function categories()
    {
        $this->load->view('student/categories');
    }
    public function certification_center()
    {
        $this->load->view('student/certification_center');
    }
    public function certification_start_form()
    {
        $this->load->view('student/certification_start_form');
    }
    public function certification_test__result()
    {
        $this->load->view('student/certification_test__result');
    }
    public function certification_test_view()
    {
        $this->load->view('student/certification_test_view');
    }
    public function checkout_membership()
    {
        $this->load->view('student/checkout_membership');
    }
    public function coming_soon()
    {
        $this->load->view('student/coming_soon');
    }

    public function company_details()
    {
        $this->load->view('student/company_details');
    }
    public function contact_us()
    {
        $this->load->view('student/contact_us');
    }
    public function course_detail_view()
    {
        $this->load->view('student/course_detail_view');
    }
    public function create_new_course()
    {
        $this->load->view('student/create_new_course');
    }
    public function error_404()
    {
        $this->load->view('student/error_404');
    }
    public function explore()
    {
        $this->load->view('student/explore');
    }
    public function feedback()
    {
        $this->load->view('student/feedback');
    }
    public function forgot_password()
    {
        $this->load->view('student/forgot_password');
    }
    public function help()
    {
        $this->load->view('student/help');
    }
    public function index2()
    {
        $this->load->view('student/index-2');
    }
    public function instructor_all_reviews()
    {
        $this->load->view('student/instructor_all_reviews');
    }
    public function instructor_analyics()
    {
        $this->load->view('student/instructor_analyics');
    }
    public function instructor_courses()
    {
        $this->load->view('student/instructor_courses');
    }
    public function instructor_dashboard()
    {
        $this->load->view('student/instructor_dashboard');
    }
    public function instructor_earning()
    {
        $this->load->view('student/instructor_earning');
    }
    public function instructor_messages()
    {
        $this->load->view('student/instructor_messages');
    }
    public function instructor_my_certificates()
    {
        $this->load->view('student/instructor_my_certificates');
    }
    public function instructor_notifications()
    {
        $this->load->view('student/instructor_notifications');
    }
    public function instructor_payout()
    {
        $this->load->view('student/instructor_payout');
    }
    public function instructor_profile_view()
    {
        $this->load->view('student/instructor_profile_view');
    }
    public function instructor_statements()
    {
        $this->load->view('student/instructor_statements');
    }
    public function instructor_verification()
    {
        $this->load->view('student/instructor_verification');
    }
    public function invoice()
    {
        $this->load->view('student/invoice');
    }
    public function live_output()
    {
        $this->load->view('student/live_output');
    }
    public function live_streams()
    {
        $this->load->view('student/live_streams');
    }
    public function membership()
    {
        $this->load->view('student/membership');
    }
    public function my_instructor_profile_view()
    {
        $this->load->view('student/my_instructor_profile_view');
    }
    public function our_blog()
    {
        $this->load->view('student/our_blog');
    }
    public function press()
    {
        $this->load->view('student/press');
    }
    public function report_history()
    {
        $this->load->view('student/report_history');
    }
    public function saved_courses()
    {
        $this->load->view('student/saved_courses');
    }
    public function search_result()
    {
        $this->load->view('student/search_result');
    }
    public function setting()
    {
        $this->load->view('student/setting');
    }
    public function sign_in()
    {
        redirect('Login/index');
    }
    public function sign_up_steps()
    {
        $this->load->view('student/sign_up_steps');
    }
    public function sign_up()
    {
        $this->load->view('student/sign_up');
    }
    public function terms_of_use()
    {
        $this->load->view('student/terms_of_use');
    }
    public function thank_you()
    {
        $this->load->view('student/thank_you');
    }
}

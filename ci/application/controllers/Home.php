<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Home extends CI_Controller
{

    public function db()
    {
        $this->load->view('db/dbconnect');
        sleep(3);
        redirect('Home/index');
    }
    public function index()
    {
        $this->load->view('index');
    }
    public function about_us()
    {
        $this->load->view('about_us');
    }
    public function add_streaming()
    {
        $this->load->view('add_streaming');
    }
    public function all_instructor()
    {
        $this->load->view('all_instructor');
    }
    public function apply_job()
    {
        $this->load->view('apply_job');
    }
    public function blog_single_view()
    {
        $this->load->view('blog_single_view');
    }
    public function career()
    {
        $this->load->view('career');
    }
    public function categories()
    {
        $this->load->view('categories');
    }
    public function certification_center()
    {
        $this->load->view('certification_center');
    }
    public function certification_start_form()
    {
        $this->load->view('certification_start_form');
    }
    public function certification_test__result()
    {
        $this->load->view('certification_test__result');
    }
    public function certification_test_view()
    {
        $this->load->view('certification_test_view');
    }
    public function checkout_membership()
    {
        $this->load->view('checkout_membership');
    }
    public function coming_soon()
    {
        $this->load->view('coming_soon');
    }

    public function company_details()
    {
        $this->load->view('company_details');
    }
    public function contact_us()
    {
        $this->load->view('contact_us');
    }
    public function course_detail_view()
    {
        $this->load->view('course_detail_view');
    }
    public function create_new_course()
    {
        $this->load->view('create_new_course');
    }
    public function error_404()
    {
        $this->load->view('error_404');
    }
    public function explore()
    {
        $this->load->view('explore');
    }
    public function feedback()
    {
        $this->load->view('feedback');
    }
    public function forgot_password()
    {
        $this->load->view('forgot_password');
    }
    public function help()
    {
        $this->load->view('help');
    }
    public function index2()
    {
        $this->load->view('index-2');
    }
    public function instructor_all_reviews()
    {
        $this->load->view('instructor_all_reviews');
    }
    public function instructor_analyics()
    {
        $this->load->view('instructor_analyics');
    }
    public function instructor_courses()
    {
        $this->load->view('instructor_courses');
    }
    public function instructor_dashboard()
    {
        $this->load->view('instructor_dashboard');
    }
    public function instructor_earning()
    {
        $this->load->view('instructor_earning');
    }
    public function instructor_messages()
    {
        $this->load->view('instructor_messages');
    }
    public function instructor_my_certificates()
    {
        $this->load->view('instructor_my_certificates');
    }
    public function instructor_notifications()
    {
        $this->load->view('instructor_notifications');
    }
    public function instructor_payout()
    {
        $this->load->view('instructor_payout');
    }
    public function instructor_profile_view()
    {
        $this->load->view('instructor_profile_view');
    }
    public function instructor_statements()
    {
        $this->load->view('instructor_statements');
    }
    public function instructor_verification()
    {
        $this->load->view('instructor_verification');
    }
    public function invoice()
    {
        $this->load->view('invoice');
    }
    public function live_output()
    {
        $this->load->view('live_output');
    }
    public function live_streams()
    {
        $this->load->view('live_streams');
    }
    public function membership()
    {
        $this->load->view('membership');
    }
    public function my_instructor_profile_view()
    {
        $this->load->view('my_instructor_profile_view');
    }
    public function our_blog()
    {
        $this->load->view('our_blog');
    }
    public function press()
    {
        $this->load->view('press');
    }
    public function report_history()
    {
        $this->load->view('report_history');
    }
    public function saved_courses()
    {
        $this->load->view('saved_courses');
    }
    public function search_result()
    {
        $this->load->view('search_result');
    }
    public function setting()
    {
        $this->load->view('setting');
    }
    public function sign_in()
    {
        redirect('Login/index');
    }
    public function sign_up_steps()
    {
        $this->load->view('sign_up_steps');
    }
    public function sign_up()
    {
        $this->load->view('sign_up');
    }
    public function terms_of_use()
    {
        $this->load->view('terms_of_use');
    }
    public function thank_you()
    {
        $this->load->view('thank_you');
    }
}

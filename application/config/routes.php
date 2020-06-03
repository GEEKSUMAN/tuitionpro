<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

if ($this->uri->segment(1) === 'admin')
{
$this->set_directory( "admin" );
}
else
{
$this->set_directory( "frontend" );
}

$route['default_controller'] = 'home/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['register'] = 'register/index';
$route['contact-us'] = 'home/contact_us';
$route['about-us'] = 'home/about_us';
$route['subscribe-us'] = 'home/subscribe_us';
$route['frequently-asked-questions'] = 'home/faq';
$route['user/register'] = 'register/user_register';
$route['login'] = 'login/index';
$route['login/login_chk'] = 'login/login_chk';
$route['logout'] = 'dashboard/logout';
$route['dashboard/teacher/edit'] = 'dashboard/edit_teacher';
$route['dashboard/student/edit'] = 'dashboard/edit_student';
$route['dashboard/enroll-students'] = 'dashboard/teacher_enroll_students';
$route['dashboard/tution-enquiries'] = 'dashboard/teacher_enquery';
$route['dashboard/my-tutorials'] = 'tutorials/index';
$route['dashboard/access-keys'] = 'tutorials/access_code';
$route['dashboard/my-bank-details'] = 'dashboard/teacher_bank_details';
$route['dashboard/manage-credentials'] = 'dashboard/manage_credentials';
$route['teacher/add_bank_details'] = 'dashboard/add_teacher_bank_details';
$route['add-chapter-or-topic'] = 'tutorials/add_chapter_or_topic';
$route['edit-chapter-or-topic'] = 'tutorials/edit_chapter_or_topic';
$route['add-my-tutorials'] = 'tutorials/add_tutorials';
$route['add-tutorial-section'] = 'tutorials/add_section';
$route['get-my-sections'] = 'tutorials/get_sections';
$route['add-tutorials-lesson'] = 'tutorials/add_lesson';
$route['get-tutorials'] = 'tutorials/get_tutorials';
$route['tutorial/(:any)'] = 'view_tutorials/index/$1';
$route['my-tutorials/view/(:any)'] = 'tutorials/view_tutorial/$1';
$route['my-tutorials/delete/(:any)'] = 'tutorials/delete_tutorial/$1';
$route['delete-tutorials-section/(:any)'] = 'tutorials/delete_section/$1';
$route['delete-tutorials-lesson/(:any)'] = 'tutorials/delete_lesson/$1';
$route['delete-chapter-or-topic/(:any)'] = 'tutorials/delete_chapter_or_topic/$1';
$route['search_tutorials_autocomplete'] = 'find/search_tutorials/';
$route['find/tutors/apply-filters'] = 'find/filter_by_tutor/';
$route['find/tutors/apply-filters/(:any)'] = 'find/filter_by_tutor/$1';
$route['contact_tutor'] = 'contact_tutors/contact/';
$route['tutor_review_submit'] = 'contact_tutors/add_review_tutor/';
$route['view/teacher/profile/(:num)'] = 'teacher_profile/index/$1';
$route['login_check_ajax'] = 'contact_tutors/login_chk_student';
$route['find/tutorials/apply-filters'] = 'find/filter_by_tutorials/';
$route['find/tutorials/apply-filters/(:any)'] = 'find/filter_by_tutorials/$1';
$route['enroll_tutorial'] = 'enroll_tutorials/enroll/';
$route['enroll_tutorial_with_access_key'] = 'enroll_tutorials/enroll_key/';



/***admin routes**/
$route['admin/login'] = 'admin/index/';
$route['admin/logout'] = 'dashboard/logout/';
$route['admin/dashboard'] = 'dashboard/index/';
$route['admin/subjects'] = 'subjects/index/';
$route['admin/subjects/add'] = 'subjects/add/';
$route['admin/subjects/edit'] = 'subjects/edit/';
$route['admin/subjects/delete/(:any)'] = 'subjects/delete/$1';
$route['admin/classes'] = 'classes/index/';
$route['admin/classes/add'] = 'classes/add/';
$route['admin/classes/edit'] = 'classes/edit/';
$route['admin/classes/delete/(:any)'] = 'classes/delete/$1';
$route['admin/boards'] = 'boards/index/';
$route['admin/boards/add'] = 'boards/add/';
$route['admin/boards/edit'] = 'boards/edit/';
$route['admin/boards/delete/(:any)'] = 'boards/delete/$1';
$route['admin/categories'] = 'category/index/';
$route['admin/category/add'] = 'category/add/';
$route['admin/category/edit'] = 'category/edit/';
$route['admin/category/delete/(:any)'] = 'category/delete/$1';
$route['admin/tutorials'] = 'tutorials/index/';
$route['admin/tutorials/status'] = 'tutorials/status/';
$route['admin/users/all'] = 'users/index/';
$route['admin/users/status'] = 'users/status/';
$route['admin/users/students'] = 'users/students/';
$route['admin/users/teachers'] = 'users/teachers/';
$route['admin/manage-pages/about-us'] = 'manage_pages/about_us/';
$route['admin/about-us/add'] = 'manage_pages/about_us_add/';
$route['admin/about-us/edit'] = 'manage_pages/about_us_edit/';
$route['admin/about-us/delete/(:any)'] = 'manage_pages/about_us_delete/$1';
$route['admin/manage-pages/terms-and-conditions'] = 'manage_pages/terms_and_conditions/';
$route['admin/terms-and-conditions/add'] = 'manage_pages/terms_and_conditions_add/';
$route['admin/terms-and-conditions/edit'] = 'manage_pages/terms_and_conditions_edit/';
$route['admin/terms-and-conditions/delete/(:any)'] = 'manage_pages/terms_and_conditions_delete/$1';
$route['admin/manage-pages/frequently-asked-questions'] = 'manage_pages/faq/';
$route['admin/frequently-asked-questions/add'] = 'manage_pages/faq_add/';
$route['admin/frequently-asked-questions/edit'] = 'manage_pages/faq_edit/';
$route['admin/frequently-asked-questions/delete/(:any)'] = 'manage_pages/faq_delete/$1';
$route['admin/manage/logo'] = 'dashboard/manage_logo/';
$route['admin/manage/credentials'] = 'dashboard/manage_credentials/';
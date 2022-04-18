<?php
function cek_login()
{
    $ci =& get_instance();
    $user_session = $ci->session->userdata('id_user');
    if($user_session)
    {
        redirect('home');
    }
}

function cek_not_login()
{
    $ci =& get_instance();
    $user_session = $ci->session->userdata('id_user');
    if(!$user_session)
    {
        redirect('auth/login');
    }
}

function cek_admin()
{
    $ci =& get_instance();
    $ci->load->library('fungsi');
    if($ci->fungsi->user_login()->bagian != 1)
    {
        redirect('home/not_found');
    }
}
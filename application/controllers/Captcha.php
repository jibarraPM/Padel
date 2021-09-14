<?php defined('BASEPATH') or exit('No direct script access allowed');

/* ----------------------------------------------------------------------------
 * Proyecto Mapache - Open Source Web Scheduler
 *
 * @package     EasyAppointments
 * @author      A.Tselegidis <alextselegidis@gmail.com>
 * @copyright   Copyright (c) 2013 - 2020,JIbarra
 * @license     https://opensource.org/licenses/GPL-3.0 - GPLv3
 * @link        https://proyectomapache.cl
 * @since       v1.0.0
 * ---------------------------------------------------------------------------- */

/**
 * Captcha Controller
 *
 * @package Controllers
 */
class Captcha extends EA_Controller {
    /**
     * Make a request to this method to get a captcha image.
     */
    public function index()
    {
        header('Content-type: image/jpeg');
        $builder = new Gregwar\Captcha\CaptchaBuilder;
        $builder->build();
        $this->session->set_userdata('captcha_phrase', $builder->getPhrase());
        $builder->output();
    }
}

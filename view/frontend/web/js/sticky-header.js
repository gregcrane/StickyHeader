/**
 * @package     LeviathanStudios\StickyHeader
 * @version     1.0.0
 * @author      Greg Crane <gmc31886@gmail.com>
 */

define(['jquery'], function ($) {
    'use strict';

    return function (config, element) {
        // set some base classes up for the sticky element
        if (config.enabled) {
            $(element).addClass('sticky-base');
        }

        if (config.transparent) {
            $(element).addClass('sticky-transparent');
        }

        if (config.mobile) {
            $(element).addClass('sticky-mobile');
        }

        $(window).scroll(function() {
            if (window.pageYOffset >=  $('.sticky-base').offset().top) {
                $(element).addClass('sticky-active');
            }

            if ($(window).scrollTop() === 0) {
                $(element).removeClass('sticky-active');
            }
        });
    }
});

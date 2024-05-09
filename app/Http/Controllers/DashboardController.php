<?php

namespace App\Http\Controllers;

class DashboardController extends Controller {
    function login() {
        return view( 'admin.auth.login' );
    }

    function dashboard() {
        return view( 'admin.dashboard' );
    }

    function users() {
        return view( 'admin.user.index' );
    }
    function usersBlocked() {
        return view( 'admin.user.blocked' );
    }

    function ptc() {
        return view( 'admin.ptc' );
    }

    function shortlinks() {
        return view( 'admin.shortlinks' );
    }

    function offerwall() {
        return view( 'admin.offerwall' );
    }

    function faucet() {
        return view( 'admin.faucet' );
    }

    function coupon() {
        return view( 'admin.coupon' );
    }

    function leaderboard() {
        return view( 'admin.leaderboard' );
    }

    function deposit() {
        return view( 'admin.deposit' );
    }
    function withdrawal() {
        return view( 'admin.withdrawal' );
    }
    function profile() {
        return view( 'admin.profile' );
    }
    function paymentSettings() {
        return view( 'admin.paymentSettings' );
    }
    function settings() {
        return view( 'admin.settings' );
    }

    function pages() {
        return view( 'admin.pages' );
    }

}

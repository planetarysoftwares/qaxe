<?php

namespace App\Http\Controllers;

class LegalController extends Controller //LU custom class
{
    /**
     * Show Terms & Conditions
     */

    public function termsAndConditions()
    {
        return view('Public.Custom.Legal.TermsAndConditions');
    }

    /**
         * Show Privacy Policy
         */
    public function privacyPolicy()
    {
        return view('Public.Custom.Legal.PrivacyPolicy');
    }

}

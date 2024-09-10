<?php

use App\Models\Company;

// get company id by domain
if (! function_exists('getCompanyIdByDomain')) {
    function getCompanyIdByDomain()
    {
    	$parseUrl = parse_url(trim(url()->current()));
    	$host = trim($parseUrl['host'] ? $parseUrl['host'] : array_shift(explode('/', $parseUrl['path'], 2))); 
    	$company = Company::where('sub_domain', $host)->first();
    	if($company){
    		return $company->id;
    	}
        return false;
    }
}
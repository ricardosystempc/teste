<?php

namespace App\Requests;

class CategoryRequest extends MyBaseRequest
{

    public function validateBeforeSave(string $ruleGroup, bool $respondwithRedirect = false)
    {
        $this->validate($ruleGroup, $respondwithRedirect);
    }
}
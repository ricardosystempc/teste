<?php

namespace App\Requests;

class PlanRequest extends MyBaseRequest
{

    public function validateBeforeSave(string $ruleGroup, bool $respondwithRedirect = false)
    {
        $this->validate($ruleGroup, $respondwithRedirect);
    }
}
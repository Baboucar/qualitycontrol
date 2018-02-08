<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController  {
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getCounts($inputArray) {
        
    	$strongly_agree = $agree = $neutral = $disagree = $strongly_disagree = $not_applicable = 0;
        foreach ($inputArray as $key) {
            # code...
            foreach ($key as $value) {
               /* echo $value . '<br>';*/
                switch ($value) {
                    case 1:
                        $strongly_agree += 1;
                        break;
                    case 2:
                        $agree += 1;
                        break;
                    case 3:
                        $neutral += 1;
                        break;
                    case 4:
                        $disagree += 1;
                        break;
                    case 5:
                        $strongly_disagree += 1;
                        break;
                    case 0:
                        $not_applicable += 1;
                        break;
                }
                $count_array = array($strongly_agree, $agree, $neutral, $disagree, $strongly_disagree, $not_applicable);
            }
        }

        return $count_array;
    }

    public function getEffectivenessCount($inputArray) {
        $excellent = $good = $satisfactory = $weak = $ineffective = 0;

        foreach ($inputArray as $key) {
            foreach ($key as $value) {
                switch ($value) {
                    case 'excellent':
                        $excellent += 1;
                        break;
                    case 'good':
                        $good += 1;
                        break;
                    case 'satisfactory':
                        $satisfactory += 1;
                        break;
                    case 'weak':
                        $weak += 1;
                        break;
                    case 'ineffective':
                        $ineffective += 1;
                        break;
                }

                $count = array($excellent, $good, $satisfactory, $weak, $ineffective);
            }   
        }
        return $count;
    }

    public function getGradeCount($inputArray) {
        $a = $b_plus = $b = $c_plus = $c = $d = $f = 0;

        foreach ($inputArray as $key ) {
            foreach ($key as $value) {
                switch ($value) {
                    case 'a':
                        $a += 1;
                        break;
                    case 'b+':
                        $b_plus += 1;
                        break;
                    case 'b':
                        $b += 1;
                        break;
                    case 'c+':
                        $c_plus += 1;
                        break;
                    case 'c':
                        $c += 1;
                        break;
                    case 'd':
                        $d += 1;
                        break;
                    case 'f':
                        $f += 1;
                        break;
                }
                $count = array($a, $b_plus, $b, $c_plus, $c, $d, $f);
            }
        }
        return $count;
    }

    public function getAttendanceCount($inputArray) {

        $some = $most = $all = 0;

        foreach ($inputArray as $key ) {
            foreach ($key as $value) {
                switch ($value) {
                    case 'some':
                        $some += 1;
                        break;
                    case 'most':
                        $most += 1;
                        break;
                    case 'all':
                        $all += 1;
                        break;
                    
                }
                $count = array($some, $most, $all);
            }
        }

        return $count;
    }

    public function getDegreeRequirementCount($inputArray) {

        $compulsory = $elective = $not_sure = 0;

        foreach ($inputArray as $key ) {
            foreach ($key as $value) {
                switch ($value) {
                    case 'compulsory':
                        $compulsory += 1;
                        break;
                    case 'elective':
                        $elective += 1;
                        break;
                    case 'notsure':
                        $not_sure += 1;
                        break;
                    
                }
                $count = array($compulsory, $elective, $not_sure);
            }
        }

        return $count;
    }
}

